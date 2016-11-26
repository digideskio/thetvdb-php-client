<?php

namespace NicolaMoretto\TheTVDB\Model;

/**
 *
 * @author Nicola Moretto <n.moretto@nicolamoretto.eu>
 */
class Episode implements ModelInterface {
	
	/** @var int */
	private $absoluteNumber;
	/** @var int */
	private $airedEpisodeNumber;
	/** @var int */
	private $airedSeason;
	/** @var int */
	private $airedSeasonId;
	/** @var int */
	private $airsAfterSeason;
	/** @var int */
	private $airsBeforeEpisode;
	/** @var int */
	private $airsBeforeSeason;
	/** @var string */
	private $director;
	/** @var string[] */
	private $directors = [ ];
	/** @var float */
	private $dvdChapter;
	/** @var string */
	private $dvdDiscId;
	/** @var float */
	private $dvdEpisodeNumber;
	/** @var int */
	private $dvdSeason;
	/** @var string */
	private $episodeName;
	/** @var string */
	private $episodeNameLanguage;
	/** @var string */
	private $filename;
	/** @var string */
	private $firstAired;
	/** @var string[] */
	private $guestStars = [ ];
	/** @var int */
	private $id;
	/** @var string */
	private $imdbId;
	/** @var int */
	private $lastUpdated;
	/** @var string */
	private $lastUpdatedBy;
	/** @var string */
	private $overview;
	/** @var string */
	private $overviewLanguage;
	/** @var string */
	private $productionCode;
	/** @var string */
	private $seriesId;
	/** @var string */
	private $showUrl;
	/** @var float */
	private $siteRating;
	/** @var int */
	private $siteRatingCount;
	/** @var string */
	private $thumbAdded;
	/** @var int */
	private $thumbAuthor;
	/** @var string */
	private $thumbHeight;
	/** @var string */
	private $thumbWidth;
	/** @var string[] */
	private $writers = [ ];
	
	/**
	 * Return a class instance initialized with given argument
	 *
	 * @param array $tvdbEpisode
	 *        	TheTVDB episode information
	 * @return Episode
	 */
	public static function createFrom(array $tvdbEpisode): Episode {
		$episode = new Episode ();
		$episode->setId ( isset ( $tvdbEpisode ['id'] ) ? $tvdbEpisode ['id'] : null );
		$episode->setAiredSeason ( isset ( $tvdbEpisode ['airedSeason'] ) ? $tvdbEpisode ['airedSeason'] : null );
		$episode->setAiredSeasonId ( isset ( $tvdbEpisode ['airedSeasonID'] ) ? $tvdbEpisode ['airedSeasonID'] : null );
		$episode->setAiredEpisodeNumber ( isset ( $tvdbEpisode ['airedEpisodeNumber'] ) ? $tvdbEpisode ['airedEpisodeNumber'] : null );
		$episode->setEpisodeName ( isset ( $tvdbEpisode ['episodeName'] ) ? $tvdbEpisode ['episodeName'] : null );
		$episode->setFirstAired ( isset ( $tvdbEpisode ['firstAired'] ) ? $tvdbEpisode ['firstAired'] : null );
		$episode->setGuestStars ( isset ( $tvdbEpisode ['guestStars'] ) ? $tvdbEpisode ['guestStars'] : null );
		$episode->setDirector ( isset ( $tvdbEpisode ['director'] ) ? $tvdbEpisode ['director'] : null );
		$episode->setDirectors ( isset ( $tvdbEpisode ['directors'] ) ? $tvdbEpisode ['directors'] : null );
		$episode->setWriters ( isset ( $tvdbEpisode ['writers'] ) ? $tvdbEpisode ['writers'] : null );
		$episode->setOverview ( isset ( $tvdbEpisode ['overview'] ) ? $tvdbEpisode ['overview'] : null );
		if (isset ( $tvdbEpisode ['language'] )) {
			$episode->setOverviewLanguage ( isset ( $tvdbEpisode ['language'] ['overview'] ) ? $tvdbEpisode ['language'] ['overview'] : null );
			$episode->setEpisodeNameLanguage ( isset ( $tvdbEpisode ['language'] ['episodeName'] ) ? $tvdbEpisode ['language'] ['episodeName'] : null );
		}
		$episode->setProductionCode ( isset ( $tvdbEpisode ['productionCode'] ) ? $tvdbEpisode ['productionCode'] : null );
		$episode->setShowUrl ( isset ( $tvdbEpisode ['showUrl'] ) ? $tvdbEpisode ['showUrl'] : null );
		$episode->setLastUpdated ( isset ( $tvdbEpisode ['lastUpdated'] ) ? $tvdbEpisode ['lastUpdated'] : null );
		$episode->setDvdDiscId ( isset ( $tvdbEpisode ['dvdDiscid'] ) ? $tvdbEpisode ['dvdDiscid'] : null );
		$episode->setDvdSeason ( isset ( $tvdbEpisode ['dvdSeason'] ) ? $tvdbEpisode ['dvdSeason'] : null );
		$episode->setDvdEpisodeNumber ( isset ( $tvdbEpisode ['dvdEpisodeNumber'] ) ? $tvdbEpisode ['dvdEpisodeNumber'] : null );
		$episode->setDvdChapter ( isset ( $tvdbEpisode ['dvdChapter'] ) ? $tvdbEpisode ['dvdChapter'] : null );
		$episode->setAbsoluteNumber ( isset ( $tvdbEpisode ['absoluteNumber'] ) ? $tvdbEpisode ['absoluteNumber'] : null );
		$episode->setFilename ( isset ( $tvdbEpisode ['filename'] ) ? $tvdbEpisode ['filename'] : null );
		$episode->setSeriesId ( isset ( $tvdbEpisode ['seriesId'] ) ? $tvdbEpisode ['seriesId'] : null );
		$episode->setLastUpdatedBy ( isset ( $tvdbEpisode ['lastUpdatedBy'] ) ? $tvdbEpisode ['lastUpdatedBy'] : null );
		$episode->setAirsAfterSeason ( isset ( $tvdbEpisode ['airsAfterSeason'] ) ? $tvdbEpisode ['airsAfterSeason'] : null );
		$episode->setAirsBeforeSeason ( isset ( $tvdbEpisode ['airsBeforeSeason'] ) ? $tvdbEpisode ['airsBeforeSeason'] : null );
		$episode->setAirsBeforeEpisode ( isset ( $tvdbEpisode ['airsBeforeEpisode'] ) ? $tvdbEpisode ['airsBeforeEpisode'] : null );
		$episode->setThumbAuthor ( isset ( $tvdbEpisode ['thumbAuthor'] ) ? $tvdbEpisode ['thumbAuthor'] : null );
		$episode->setThumbAdded ( isset ( $tvdbEpisode ['thumbAdded'] ) ? $tvdbEpisode ['thumbAdded'] : null );
		$episode->setThumbWidth ( isset ( $tvdbEpisode ['thumbWidth'] ) ? $tvdbEpisode ['thumbWidth'] : null );
		$episode->setThumbHeight ( isset ( $tvdbEpisode ['thumbHeight'] ) ? $tvdbEpisode ['thumbHeight'] : null );
		$episode->setImdbId ( isset ( $tvdbEpisode ['imdbId'] ) ? $tvdbEpisode ['imdbId'] : null );
		$episode->setSiteRating ( isset ( $tvdbEpisode ['siteRating'] ) ? $tvdbEpisode ['siteRating'] : null );
		$episode->setSiteRatingCount ( isset ( $tvdbEpisode ['siteRatingCount'] ) ? $tvdbEpisode ['siteRatingCount'] : null );
		return $episode;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getAbsoluteNumber() {
		return $this->absoluteNumber;
	}
	
	/**
	 *
	 * @param
	 *        	$absoluteNumber
	 */
	public function setAbsoluteNumber($absoluteNumber) {
		$this->absoluteNumber = $absoluteNumber;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getAiredEpisodeNumber() {
		return $this->airedEpisodeNumber;
	}
	
	/**
	 *
	 * @param
	 *        	$airedEpisodeNumber
	 */
	public function setAiredEpisodeNumber($airedEpisodeNumber) {
		$this->airedEpisodeNumber = $airedEpisodeNumber;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getAiredSeason() {
		return $this->airedSeason;
	}
	
	/**
	 *
	 * @param
	 *        	$airedSeason
	 */
	public function setAiredSeason($airedSeason) {
		$this->airedSeason = $airedSeason;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getAiredSeasonId() {
		return $this->airedSeasonId;
	}
	
	/**
	 *
	 * @param
	 *        	$airedSeasonId
	 */
	public function setAiredSeasonId($airedSeasonId) {
		$this->airedSeasonId = $airedSeasonId;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getAirsAfterSeason() {
		return $this->airsAfterSeason;
	}
	
	/**
	 *
	 * @param
	 *        	$airsAfterSeason
	 */
	public function setAirsAfterSeason($airsAfterSeason) {
		$this->airsAfterSeason = $airsAfterSeason;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getAirsBeforeEpisode() {
		return $this->airsBeforeEpisode;
	}
	
	/**
	 *
	 * @param
	 *        	$airsBeforeEpisode
	 */
	public function setAirsBeforeEpisode($airsBeforeEpisode) {
		$this->airsBeforeEpisode = $airsBeforeEpisode;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getAirsBeforeSeason() {
		return $this->airsBeforeSeason;
	}
	
	/**
	 *
	 * @param
	 *        	$airsBeforeSeason
	 */
	public function setAirsBeforeSeason($airsBeforeSeason) {
		$this->airsBeforeSeason = $airsBeforeSeason;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getDirector() {
		return $this->director;
	}
	
	/**
	 *
	 * @param
	 *        	$director
	 */
	public function setDirector($director) {
		$this->director = $director;
		return $this;
	}
	
	/**
	 *
	 * @return the string[]
	 */
	public function getDirectors() {
		return $this->directors;
	}
	
	/**
	 *
	 * @param
	 *        	$directors
	 */
	public function setDirectors($directors) {
		$this->directors = $directors;
		return $this;
	}
	
	/**
	 *
	 * @return the float
	 */
	public function getDvdChapter() {
		return $this->dvdChapter;
	}
	
	/**
	 *
	 * @param
	 *        	$dvdChapter
	 */
	public function setDvdChapter($dvdChapter) {
		$this->dvdChapter = $dvdChapter;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getDvdDiscId() {
		return $this->dvdDiscId;
	}
	
	/**
	 *
	 * @param
	 *        	$dvdDiscId
	 */
	public function setDvdDiscId($dvdDiscId) {
		$this->dvdDiscId = $dvdDiscId;
		return $this;
	}
	
	/**
	 *
	 * @return the float
	 */
	public function getDvdEpisodeNumber() {
		return $this->dvdEpisodeNumber;
	}
	
	/**
	 *
	 * @param
	 *        	$dvdEpisodeNumber
	 */
	public function setDvdEpisodeNumber($dvdEpisodeNumber) {
		$this->dvdEpisodeNumber = $dvdEpisodeNumber;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getDvdSeason() {
		return $this->dvdSeason;
	}
	
	/**
	 *
	 * @param
	 *        	$dvdSeason
	 */
	public function setDvdSeason($dvdSeason) {
		$this->dvdSeason = $dvdSeason;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getEpisodeName() {
		return $this->episodeName;
	}
	
	/**
	 *
	 * @param
	 *        	$episodeName
	 */
	public function setEpisodeName($episodeName) {
		$this->episodeName = $episodeName;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getEpisodeNameLanguage() {
		return $this->episodeNameLanguage;
	}
	
	/**
	 *
	 * @param
	 *        	$episodeNameLanguage
	 */
	public function setEpisodeNameLanguage($episodeNameLanguage) {
		$this->episodeNameLanguage = $episodeNameLanguage;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getFilename() {
		return $this->filename;
	}
	
	/**
	 *
	 * @param
	 *        	$filename
	 */
	public function setFilename($filename) {
		$this->filename = $filename;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getFirstAired() {
		return $this->firstAired;
	}
	
	/**
	 *
	 * @param
	 *        	$firstAired
	 */
	public function setFirstAired($firstAired) {
		$this->firstAired = $firstAired;
		return $this;
	}
	
	/**
	 *
	 * @return the string[]
	 */
	public function getGuestStars() {
		return $this->guestStars;
	}
	
	/**
	 *
	 * @param
	 *        	$guestStars
	 */
	public function setGuestStars($guestStars) {
		$this->guestStars = $guestStars;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 *
	 * @param
	 *        	$id
	 */
	public function setId($id) {
		$this->id = $id;
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
	public function getLastUpdatedBy() {
		return $this->lastUpdatedBy;
	}
	
	/**
	 *
	 * @param
	 *        	$lastUpdatedBy
	 */
	public function setLastUpdatedBy($lastUpdatedBy) {
		$this->lastUpdatedBy = $lastUpdatedBy;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getOverview() {
		return $this->overview;
	}
	
	/**
	 *
	 * @param
	 *        	$overview
	 */
	public function setOverview($overview) {
		$this->overview = $overview;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getOverviewLanguage() {
		return $this->overviewLanguage;
	}
	
	/**
	 *
	 * @param
	 *        	$overviewLanguage
	 */
	public function setOverviewLanguage($overviewLanguage) {
		$this->overviewLanguage = $overviewLanguage;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getProductionCode() {
		return $this->productionCode;
	}
	
	/**
	 *
	 * @param
	 *        	$productionCode
	 */
	public function setProductionCode($productionCode) {
		$this->productionCode = $productionCode;
		return $this;
	}
	
	/**
	 *
	 * @return the string
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
	public function getShowUrl() {
		return $this->showUrl;
	}
	
	/**
	 *
	 * @param
	 *        	$showUrl
	 */
	public function setShowUrl($showUrl) {
		$this->showUrl = $showUrl;
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
	
	/**
	 *
	 * @return the string
	 */
	public function getThumbAdded() {
		return $this->thumbAdded;
	}
	
	/**
	 *
	 * @param
	 *        	$thumbAdded
	 */
	public function setThumbAdded($thumbAdded) {
		$this->thumbAdded = $thumbAdded;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getThumbAuthor() {
		return $this->thumbAuthor;
	}
	
	/**
	 *
	 * @param
	 *        	$thumbAuthor
	 */
	public function setThumbAuthor($thumbAuthor) {
		$this->thumbAuthor = $thumbAuthor;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getThumbHeight() {
		return $this->thumbHeight;
	}
	
	/**
	 *
	 * @param
	 *        	$thumbHeight
	 */
	public function setThumbHeight($thumbHeight) {
		$this->thumbHeight = $thumbHeight;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getThumbWidth() {
		return $this->thumbWidth;
	}
	
	/**
	 *
	 * @param
	 *        	$thumbWidth
	 */
	public function setThumbWidth($thumbWidth) {
		$this->thumbWidth = $thumbWidth;
		return $this;
	}
	
	/**
	 *
	 * @return the string[]
	 */
	public function getWriters() {
		return $this->writers;
	}
	
	/**
	 *
	 * @param
	 *        	$writers
	 */
	public function setWriters($writers) {
		$this->writers = $writers;
		return $this;
	}
}