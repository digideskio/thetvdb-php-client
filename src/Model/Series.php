<?php

namespace NicolaMoretto\TheTVDB\Model;

/**
 *
 * @author Nicola Moretto <n.moretto@nicolamoretto.eu>
 */
class Series implements ModelInterface {
	
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
	 * @param array $tvdbSeries
	 *        	TheTVDB series information
	 * @return Series
	 */
	public static function createFrom($tvdbSeries): Series {
		$series = new Series ();
		$series->setId ( isset ( $tvdbSeries ['id'] ) ? $tvdbSeries ['id'] : null );
		$series->setSeriesName ( isset ( $tvdbSeries ['seriesName'] ) ? $tvdbSeries ['seriesName'] : null );
		$series->setAliases ( isset ( $tvdbSeries ['aliases'] ) ? $tvdbSeries ['aliases'] : null );
		$series->setBanner ( isset ( $tvdbSeries ['banner'] ) ? $tvdbSeries ['banner'] : null );
		$series->setSeriesId ( isset ( $tvdbSeries ['seriesId'] ) ? $tvdbSeries ['seriesId'] : null );
		$series->setStatus ( isset ( $tvdbSeries ['status'] ) ? $tvdbSeries ['status'] : null );
		$series->setFirstAired ( isset ( $tvdbSeries ['firstAired'] ) ? $tvdbSeries ['firstAired'] : null );
		$series->setNetwork ( isset ( $tvdbSeries ['network'] ) ? $tvdbSeries ['network'] : null );
		$series->setNetworkId ( isset ( $tvdbSeries ['networkId'] ) ? $tvdbSeries ['networkId'] : null );
		$series->setRuntime ( isset ( $tvdbSeries ['runtime'] ) ? $tvdbSeries ['runtime'] : null );
		$series->setGenre ( isset ( $tvdbSeries ['genre'] ) ? $tvdbSeries ['genre'] : null );
		$series->setOverview ( isset ( $tvdbSeries ['overview'] ) ? $tvdbSeries ['overview'] : null );
		$series->setLastUpdated ( isset ( $tvdbSeries ['lastUpdated'] ) ? $tvdbSeries ['lastUpdated'] : null );
		$series->setAirsDayOfWeek ( isset ( $tvdbSeries ['airsDayOfWeek'] ) ? $tvdbSeries ['airsDayOfWeek'] : null );
		$series->setAirsTime ( isset ( $tvdbSeries ['airsTime'] ) ? $tvdbSeries ['airsTime'] : null );
		$series->setRating ( isset ( $tvdbSeries ['rating'] ) ? $tvdbSeries ['rating'] : null );
		$series->setImdbId ( isset ( $tvdbSeries ['imdbId'] ) ? $tvdbSeries ['imdbId'] : null );
		$series->setZap2itId ( isset ( $tvdbSeries ['zap2itId'] ) ? $tvdbSeries ['zap2itId'] : null );
		$series->setAdded ( isset ( $tvdbSeries ['added'] ) ? $tvdbSeries ['added'] : null );
		$series->setAddedBy ( isset ( $tvdbSeries ['addedBy'] ) ? $tvdbSeries ['addedBy'] : null );
		$series->setSiteRating ( isset ( $tvdbSeries ['siteRating'] ) ? $tvdbSeries ['siteRating'] : null );
		$series->setSiteRatingCount ( isset ( $tvdbSeries ['siteRatingCount'] ) ? $tvdbSeries ['siteRatingCount'] : null );
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