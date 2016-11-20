<?php

namespace NicolaMoretto\TheTVDB\Model;

/**
 *
 * @author Nicola Moretto <n.moretto@nicolamoretto.eu>
 */
class Series {
	
	/** @var int */
	private $id;
	/** @var string */
	private $seriesName;
	/** @var string[] */
	private $aliases;
	/** @var string */
	private $banner;
	/** @var int */
	private $seriesId;
	/** @var string */
	private $status;
	/** @var string */
	private $firstAired;
	/** @var string */
	private $network;
	/** @var string */
	private $networkId;
	/** @var string */
	private $runtime;
	/** @var string[] */
	private $genre;
	/** @var string */
	private $overview;
	/** @var int */
	private $lastUpdated;
	/** @var string */
	private $airsDayOfWeek;
	/** @var string */
	private $airsTime;
	/** @var string */
	private $rating;
	/** @var string */
	private $imdbId;
	/** @var string */
	private $zap2itId;
	/** @var string */
	private $added;
	/** @var int */
	private $addedBy;
	/** @var float */
	private $siteRating;
	/** @var int */
	private $siteRatingCount;
	
	/**
	 * Return a class instance initialized with given argument
	 *
	 * @param object $tvdbSeries
	 *        	TheTVDB series information
	 * @return Series
	 */
	public static function createFrom($tvdbSeries): Series {
		$series = new Series ();
		if (property_exists ( $tvdbSeries, 'id' )) {
			$series->setId ( $tvdbSeries->id );
		}
		if (property_exists ( $tvdbSeries, 'seriesName' )) {
			$series->setSeriesName ( $tvdbSeries->seriesName );
		}
		if (property_exists ( $tvdbSeries, 'aliases' )) {
			$series->setAliases ( $tvdbSeries->aliases );
		}
		if (property_exists ( $tvdbSeries, 'banner' )) {
			$series->setBanner ( $tvdbSeries->banner );
		}
		if (property_exists ( $tvdbSeries, 'seriesId' )) {
			$series->setSeriesId ( $tvdbSeries->seriesId );
		}
		if (property_exists ( $tvdbSeries, 'status' )) {
			$series->setStatus ( $tvdbSeries->status );
		}
		if (property_exists ( $tvdbSeries, 'firstAired' )) {
			$series->setFirstAired ( $tvdbSeries->firstAired );
		}
		if (property_exists ( $tvdbSeries, 'network' )) {
			$series->setNetwork ( $tvdbSeries->network );
		}
		if (property_exists ( $tvdbSeries, 'networkId' )) {
			$series->setNetworkId ( $tvdbSeries->networkId );
		}
		if (property_exists ( $tvdbSeries, 'runtime' )) {
			$series->setRuntime ( $tvdbSeries->runtime );
		}
		if (property_exists ( $tvdbSeries, 'genre' )) {
			$series->setGenre ( $tvdbSeries->genre );
		}
		if (property_exists ( $tvdbSeries, 'overview' )) {
			$series->setOverview ( $tvdbSeries->overview );
		}
		if (property_exists ( $tvdbSeries, 'lastUpdated' )) {
			$series->setLastUpdated ( $tvdbSeries->lastUpdated );
		}
		if (property_exists ( $tvdbSeries, 'airsDayOfWeek' )) {
			$series->setAirsDayOfWeek ( $tvdbSeries->airsDayOfWeek );
		}
		if (property_exists ( $tvdbSeries, 'airsTime' )) {
			$series->setAirsTime ( $tvdbSeries->airsTime );
		}
		if (property_exists ( $tvdbSeries, 'rating' )) {
			$series->setRating ( $tvdbSeries->rating );
		}
		if (property_exists ( $tvdbSeries, 'imdbId' )) {
			$series->setImdbId ( $tvdbSeries->imdbId );
		}
		if (property_exists ( $tvdbSeries, 'zap2itId' )) {
			$series->setZap2itId ( $tvdbSeries->zap2itId );
		}
		if (property_exists ( $tvdbSeries, 'added' )) {
			$series->setAdded ( $tvdbSeries->added );
		}
		if (property_exists ( $tvdbSeries, 'addedBy' )) {
			$series->setAddedBy ( $tvdbSeries->addedBy );
		}
		if (property_exists ( $tvdbSeries, 'siteRating' )) {
			$series->setSiteRating ( $tvdbSeries->siteRating );
		}
		if (property_exists ( $tvdbSeries, 'siteRatingCount' )) {
			$series->setSiteRatingCount ( $tvdbSeries->siteRatingCount );
		}
		return $series;
	}
	
	/**
	 * Return a list of aliases
	 *
	 * @return string[] List of aliases
	 */
	public function getAliases(): array {
		return $this->aliases;
	}
	
	/**
	 * Set the aliases
	 *
	 * @param string[] $aliases
	 *        	Aliases
	 * @return Series
	 */
	public function setAliases(array $aliases): Series {
		$this->aliases = $aliases;
		return $this;
	}
	
	/**
	 * Return the banner name
	 *
	 * @return string Banner name
	 */
	public function getBanner() {
		return $this->banner;
	}
	
	/**
	 * Set the banner name
	 *
	 * @param string $banner
	 *        	Banner name
	 * @return Series
	 */
	public function setBanner(string $banner): Series {
		$this->banner = $banner;
		return $this;
	}
	
	/**
	 * Get first air date (as string with format 'Y-m-d')
	 *
	 * @return string First air date (as string with format 'Y-m-d')
	 */
	public function getFirstAired(): string {
		return $this->firstAired;
	}
	
	/**
	 * Set first air date (as string with format 'Y-m-d')
	 *
	 * @param string $firstAired
	 *        	First air date (as string with format 'Y-m-d')
	 * @return Series
	 */
	public function setFirstAired(string $firstAired): Series {
		$this->firstAired = $firstAired;
		return $this;
	}
	
	/**
	 * Set series ID
	 *
	 * @return int Series ID
	 */
	public function getId(): int {
		return $this->id;
	}
	
	/**
	 * Set series ID
	 *
	 * @param int $id
	 *        	Series ID
	 * @return Series
	 */
	public function setId(int $id): Series {
		$this->id = $id;
		return $this;
	}
	
	/**
	 * Return network name
	 *
	 * @return string Network name
	 */
	public function getNetwork(): string {
		return $this->network;
	}
	
	/**
	 * Set network name
	 *
	 * @param string $network
	 *        	Network name
	 */
	public function setNetwork(string $network): Series {
		$this->network = $network;
		return $this;
	}
	
	/**
	 * Return a brief summary of the series
	 *
	 * @return string Brief summary of the series
	 */
	public function getOverview(): string {
		return $this->overview;
	}
	
	/**
	 * Set brief summary of the series
	 *
	 * @param string $overview
	 *        	Brief summary of the series
	 * @return Series
	 */
	public function setOverview(string $overview): Series {
		$this->overview = $overview;
		return $this;
	}
	
	/**
	 * Return series name
	 *
	 * @return string Series name
	 */
	public function getSeriesName(): string {
		return $this->seriesName;
	}
	
	/**
	 * Set series name
	 *
	 * @param string $seriesName
	 *        	Series name
	 * @return Series
	 */
	public function setSeriesName(string $seriesName): Series {
		$this->seriesName = $seriesName;
		return $this;
	}
	
	/**
	 * Return status
	 *
	 * @return string Status
	 */
	public function getStatus(): string {
		return $this->status;
	}
	
	/**
	 * Set status
	 *
	 * @param string $status
	 *        	Status
	 */
	public function setStatus(string $status): Series {
		$this->status = $status;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getSeriesId() {
		return $this->seriesId;
	}
	
	/**
	 *
	 * @param
	 *        	$seriesId
	 */
	public function setSeriesId($seriesId) {
		$this->seriesId = $seriesId;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getNetworkId() {
		return $this->networkId;
	}
	
	/**
	 *
	 * @param
	 *        	$networkId
	 */
	public function setNetworkId($networkId) {
		$this->networkId = $networkId;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getRuntime() {
		return $this->runtime;
	}
	
	/**
	 *
	 * @param
	 *        	$runtime
	 */
	public function setRuntime($runtime) {
		$this->runtime = $runtime;
		return $this;
	}
	
	/**
	 *
	 * @return the string[]
	 */
	public function getGenre() {
		return $this->genre;
	}
	
	/**
	 *
	 * @param
	 *        	$genre
	 */
	public function setGenre($genre) {
		$this->genre = $genre;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getLastUpdated() {
		return $this->lastUpdated;
	}
	
	/**
	 *
	 * @param
	 *        	$lastUpdated
	 */
	public function setLastUpdated($lastUpdated) {
		$this->lastUpdated = $lastUpdated;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getAirsDayOfWeek() {
		return $this->airsDayOfWeek;
	}
	
	/**
	 *
	 * @param
	 *        	$airsDayOfWeek
	 */
	public function setAirsDayOfWeek($airsDayOfWeek) {
		$this->airsDayOfWeek = $airsDayOfWeek;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getAirsTime() {
		return $this->airsTime;
	}
	
	/**
	 *
	 * @param
	 *        	$airsTime
	 */
	public function setAirsTime($airsTime) {
		$this->airsTime = $airsTime;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getRating() {
		return $this->rating;
	}
	
	/**
	 *
	 * @param
	 *        	$rating
	 */
	public function setRating($rating) {
		$this->rating = $rating;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getImdbId() {
		return $this->imdbId;
	}
	
	/**
	 *
	 * @param
	 *        	$imdbId
	 */
	public function setImdbId($imdbId) {
		$this->imdbId = $imdbId;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getZap2itId() {
		return $this->zap2itId;
	}
	
	/**
	 *
	 * @param
	 *        	$zap2itId
	 */
	public function setZap2itId($zap2itId) {
		$this->zap2itId = $zap2itId;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getAdded() {
		return $this->added;
	}
	
	/**
	 *
	 * @param
	 *        	$added
	 */
	public function setAdded($added) {
		$this->added = $added;
		return $this;
	}
	
	/**
	 *
	 * @return the float
	 */
	public function getSiteRating() {
		return $this->siteRating;
	}
	
	/**
	 *
	 * @param
	 *        	$siteRating
	 */
	public function setSiteRating($siteRating) {
		$this->siteRating = $siteRating;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getSiteRatingCount() {
		return $this->siteRatingCount;
	}
	
	/**
	 *
	 * @param
	 *        	$siteRatingCount
	 */
	public function setSiteRatingCount($siteRatingCount) {
		$this->siteRatingCount = $siteRatingCount;
		return $this;
	}
	public function getAddedBy() {
		return $this->addedBy;
	}
	public function setAddedBy($addedBy) {
		$this->addedBy = $addedBy;
		return $this;
	}
}