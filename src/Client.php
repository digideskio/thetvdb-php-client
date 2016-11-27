<?php

namespace NicolaMoretto\TheTVDB;

use NicolaMoretto\TheTVDB\Exception\ConfigurationException;
use NicolaMoretto\TheTVDB\Model\Language;
use NicolaMoretto\TheTVDB\Model\Series;
use NicolaMoretto\TheTVDB\Model\Episode;
use NicolaMoretto\TheTVDB\Exception\ApiException;
use NicolaMoretto\TheTVDB\Exception\NotAuthorizedException;
use NicolaMoretto\TheTVDB\Exception\ResourceNotFoundException;
use GuzzleHttp\Client as HttpClient;
use NicolaMoretto\TheTVDB\Model\Actor;
use NicolaMoretto\TheTVDB\Model\SeriesImages;
use NicolaMoretto\TheTVDB\Query\SeriesQuery;
use NicolaMoretto\TheTVDB\Query\EpisodeQuery;
use NicolaMoretto\TheTVDB\Model\SeriesSummary;
use NicolaMoretto\TheTVDB\Query\ImageQuery;
use NicolaMoretto\TheTVDB\Model\Image;

/**
 * TheTVDB API v2 client
 *
 * @author Nicola Moretto <n.moretto@nicolamoretto.eu>
 */
class Client {
	
	/** @var string TheTVDB base URI */
	const THETVDB_API_BASE_URI = "https://api.thetvdb.com/";
	/** @var string TheTVDB API version (as x.y.z) */
	const THETVDB_API_VERSION = "2.1.1";
	
	/** @var Configuration */
	private $config;
	/** @var HttpClient */
	private $restClient;
	/** @var string Authorization token */
	private $token;
	/** @var int Token expiration date (as Unix timestamp) */
	private $tokenExpirationDate;
	
	/**
	 *
	 * @param Configuration $configuration
	 *        	Client configuration
	 * @throws ConfigurationException If the configuration is not valid
	 */
	public function __construct(Configuration $configuration) {
		if (is_null ( $configuration ) || ! $configuration->isValid ()) {
			throw new ConfigurationException ( $configuration );
		}
		$this->config = $configuration;
		$this->restClient = new \GuzzleHttp\Client ( [ 
			'base_uri' => Client::THETVDB_API_BASE_URI,
			'http_errors' => false 
		] );
	}
	
	/**
	 *
	 * @param int $id
	 *        	Episode ID
	 * @throws NotAuthorizedException
	 * @throws ResourceNotFoundException If an episode with given ID doesn't exist
	 * @throws ApiException
	 * @return Episode|NULL
	 */
	public function getEpisode(int $id): Episode {
		$body = $this->get ( sprintf ( "/episodes/%u", $id ) );
		if (isset ( $body ['data'] )) {
			return Episode::createFrom ( $body ['data'] );
		}
		return null;
	}
	
	/**
	 * Return a list of available languages
	 *
	 * @throws ApiException
	 * @throws NotAuthorizedException
	 * @return Language[] List of available languages
	 */
	public function getLanguages(): array {
		$body = $this->get ( '/languages' );
		$languages = [ ];
		if (isset ( $body ['data'] )) {
			foreach ( $body ['data'] as $lang ) {
				$languages [] = Language::createFrom ( $lang );
			}
		}
		return $languages;
	}
	
	/**
	 * Return the language with given ID
	 *
	 * @param int $id
	 *        	Language ID
	 * @throws \InvalidArgumentException If the ID is not an integer
	 * @throws ApiException
	 * @throws NotAuthorizedException
	 * @throws ResourceNotFoundException If a language with given ID doesn't exist
	 * @return Language
	 */
	public function getLanguage(int $id): Language {
		if (is_null ( $id ) || ! is_int ( $id )) {
			throw new \InvalidArgumentException ();
		}
		$body = $this->get ( sprintf ( "/languages/%u", $id ) );
		if (isset ( $body ['data'] )) {
			return Language::createFrom ( $body ['data'] );
		}
		return null;
	}
	
	/**
	 * Return the series with given ID
	 *
	 * @param string $id
	 *        	Series ID
	 * @throws NotAuthorizedException
	 * @throws ResourceNotFoundException
	 * @throws ApiException
	 * @return Series
	 */
	public function getSeries(string $id): Series {
		$body = $this->get ( sprintf ( "/series/%u", $id ) );
		if (isset ( $body ['data'] )) {
			return Series::createFrom ( $body ['data'] );
		}
		return null;
	}
	
	/**
	 * Return the actors of a given series
	 *
	 * @param int|Series $series        	
	 * @throws \InvalidArgumentException
	 * @throws NotAuthorizedException
	 * @throws ResourceNotFoundException
	 * @throws ApiException
	 * @return \NicolaMoretto\TheTVDB\Model\Series|NULL
	 */
	public function getSeriesActors($series) {
		if (! (is_int ( $series ) || $series instanceof Series)) {
			throw new \InvalidArgumentException ();
		}
		$id = is_int ( $series ) ? $series : $series->getId ();
		$body = $this->get ( sprintf ( "/series/%u/actors", $id ) );
		$actors = [ ];
		if (isset ( $body ['data'] )) {
			foreach ( $body ['data'] as $actor ) {
				$actors [] = Actor::createFrom ( $actor );
			}
		}
		return $actors;
	}
	
	/**
	 *
	 * @param int|Series $series        	
	 * @param EpisodeQuery $query        	
	 * @param number $page        	
	 * @throws \InvalidArgumentException
	 * @return \NicolaMoretto\TheTVDB\Model\Episode[] TODO Add pagination (see $body['data']['links']
	 */
	public function getSeriesEpisodes($series, EpisodeQuery $query = NULL, $page = 1) {
		if (! (is_int ( $series ) || $series instanceof Series)) {
			throw new \InvalidArgumentException ();
		}
		$id = is_int ( $series ) ? $series : $series->getId ();
		$body = [ ];
		if (! is_null ( $query ) && $query instanceof EpisodeQuery) {
			$queryParams = $query->toArray ();
			$queryParams ['page'] = $page;
			$body = $this->get ( sprintf ( "/series/%u/episodes/query", $id ), [ ], $queryParams );
		} else {
			$body = $this->get ( sprintf ( "/series/%u/episodes", $id ), [ ], [ 
				'page' => $page 
			] );
		}
		$episodes = [ ];
		if (isset ( $body ['data'] )) {
			foreach ( $body ['data'] as $episode ) {
				$episodes [] = Episode::createFrom ( $episode );
			}
		}
		return $episodes;
	}
	
	/**
	 * Return a list of series images matching the given query
	 *
	 * @param int|Series $series
	 *        	Series ({@link Series} or its id)
	 * @param ImageQuery $query
	 *        	Images query filter
	 * @throws \InvalidArgumentException
	 * @return Image[] List of series images matching the given query
	 */
	public function getSeriesImages($series, ImageQuery $query): array {
		if (! (is_int ( $series ) || $series instanceof Series)) {
			throw new \InvalidArgumentException ();
		}
		$id = is_int ( $series ) ? $series : $series->getId ();
		$queryParams = [ ];
		if (! is_null ( $query ) && $query instanceof ImageQuery) {
			$queryParams = $query->toArray ();
		}
		$body = $this->get ( sprintf ( "/series/%u/images/query", $id ), [ ], $queryParams );
		$images = [ ];
		if (isset ( $body ['data'] )) {
			foreach ( $body ['data'] as $image ) {
				$images [] = Image::createFrom ( $image );
			}
		}
		return $images;
	}
	
	/**
	 *
	 * @param int|Series $series        	
	 * @throws \InvalidArgumentException
	 * @return SeriesImages|NULL
	 */
	public function getSeriesImagesSummary($series): SeriesImages {
		if (! (is_int ( $series ) || $series instanceof Series)) {
			throw new \InvalidArgumentException ();
		}
		$id = is_int ( $series ) ? $series : $series->getId ();
		$body = $this->get ( sprintf ( "/series/%u/images", $id ) );
		if (isset ( $body ['data'] )) {
			return SeriesImages::createFrom ( $body ['data'] );
		}
		return null;
	}
	
	/**
	 *
	 * @param int|Series $series        	
	 * @throws \InvalidArgumentException
	 * @return \NicolaMoretto\TheTVDB\Model\ModelInterface|NULL
	 */
	public function getSeriesSummary($series) {
		if (! (is_int ( $series ) || $series instanceof Series)) {
			throw new \InvalidArgumentException ();
		}
		$id = is_int ( $series ) ? $series : $series->getId ();
		$body = $this->get ( sprintf ( "/series/%u/episodes/summary", $id ) );
		if (isset ( $body ['data'] )) {
			return SeriesSummary::createFrom ( $body ['data'] );
		}
		return null;
	}
	
	/**
	 * Return a list of series matching the given criteria
	 *
	 * @param array $params
	 *        	Parameters to search series for
	 * @throws NotAuthorizedException
	 * @throws ResourceNotFoundException
	 * @throws ApiException
	 * @return Series[]
	 */
	public function searchSeries(SeriesQuery $params): array {
		$query = is_null ( $params ) || ! ($params instanceof SeriesQuery) ? [ ] : $params->toArray ();
		$body = $this->get ( '/search/series', [ ], $query );
		$series = [ ];
		foreach ( $body ['data'] as $s ) {
			$series [] = Series::createFrom ( $s );
		}
		return $series;
	}
	
	/**
	 * Send a GET request to TheTVDB API v2
	 *
	 * @param string $uri
	 *        	URI of GET request
	 * @param array $headers
	 *        	HTTP headers
	 * @param array $query
	 *        	HTTP query parameters
	 * @throws NotAuthorizedException
	 * @throws ResourceNotFoundException
	 * @throws ApiException
	 * @return array Associative array containing response body
	 */
	private function get($uri = '', $headers = [], $query = []) {
		$headers ['Accept'] = sprintf ( 'application/json, application/vnd.thetvdb.v%s', Client::THETVDB_API_VERSION );
		$headers ['Accept-Language'] = $this->config->getLanguage ();
		$headers ['Authorization'] = "Bearer " . $this->getToken ();
		$response = $this->restClient->request ( 'GET', $uri, [ 
			'headers' => $headers,
			'query' => $query 
		] );
		switch ($response->getStatusCode ()) {
			case 200 :
				return json_decode ( ( string ) $response->getBody (), true );
			case 401 :
				throw new NotAuthorizedException ( $uri, $this->token );
			case 404 :
				throw new ResourceNotFoundException ( $uri, $query );
			default :
				throw new ApiException ( $uri, $response->getStatusCode () );
		}
	}
	
	/**
	 * Return authentication token
	 *
	 * @throws ApiException
	 * @return string Authentication token
	 */
	private function getToken(): string {
		if (mb_strlen ( $this->token ) == 0) {
			// Login and retrieve session token
			$uri = '/login';
			$response = $this->restClient->post ( $uri, [ 
				'headers' => [ 
					'Accept' => 'application/json' 
				],
				'json' => [ 
					'apikey' => $this->config->getApiKey (),
					'username' => $this->config->getUsername (),
					'userkey' => $this->config->getUserKey () 
				] 
			] );
			if ($response->getStatusCode () != 200) {
				throw new ApiException ( $uri, $response->getStatusCode (), 'Not Authorized (login failed)' );
			}
			$body = json_decode ( ( string ) $response->getBody () );
			$this->token = $body->token;
			if ($this->config->getTokenRefresh () > 0) {
				$this->tokenExpirationDate = time () + $this->config->getTokenRefresh ();
			}
		} elseif ($this->tokenExpirationDate > 0 && time () > $this->tokenExpirationDate) {
			// Refresh expired session token
			$uri = '/refresh_token';
			$response = $this->restClient->get ( $uri, [ 
				'headers' => [ 
					'Accept' => 'application/json',
					'Authorization' => sprintf ( "Bearer %s", $this->token ) 
				] 
			] );
			if ($response->getStatusCode () != 200) {
				throw new ApiException ( $uri, $response->getStatusCode (), 'Not Authorized (token refresh failed)' );
			}
			$body = json_decode ( ( string ) $response->getBody () );
			$this->token = $body->token;
			if ($this->config->getTokenRefresh () > 0) {
				$this->tokenExpirationDate = time () + $this->config->getTokenRefresh ();
			}
		}
		return $this->token;
	}
}