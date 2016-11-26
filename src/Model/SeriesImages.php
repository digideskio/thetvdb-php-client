<?php

namespace NicolaMoretto\TheTVDB\Model;

/**
 *
 * @author Nicola Moretto <n.moretto@nicolamoretto.eu>
 */
class SeriesImages {
	
	/** @var int */
	private $fanart;
	/** @var int */
	private $poster;
	/** @var int */
	private $season;
	/** @var int */
	private $seasonwide;
	/** @var int */
	private $series;
	
	/**
	 *
	 * @param object $tvdbSeriesImages
	 *        	TheTVDB series images summary
	 * @return \NicolaMoretto\TheTVDB\Model\SeriesImages
	 */
	public static function createFrom(array $tvdbSeriesImages): SeriesImages {
		$seriesImages = new SeriesImages ();
		$seriesImages->setFanart ( isset ( $tvdbSeriesImages ['fanart'] ) ? $tvdbSeriesImages ['fanart'] : null );
		$seriesImages->setPoster ( isset ( $tvdbSeriesImages ['poster'] ) ? $tvdbSeriesImages ['poster'] : null );
		$seriesImages->setSeason ( isset ( $tvdbSeriesImages ['season'] ) ? $tvdbSeriesImages ['season'] : null );
		$seriesImages->setSeasonwide ( isset ( $tvdbSeriesImages ['seasonwide'] ) ? $tvdbSeriesImages ['seasonwide'] : null );
		$seriesImages->setSeries ( isset ( $tvdbSeriesImages ['series'] ) ? $tvdbSeriesImages ['series'] : null );
		return $seriesImages;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getFanart() {
		return $this->fanart;
	}
	
	/**
	 *
	 * @param
	 *        	$fanart
	 */
	public function setFanart($fanart) {
		$this->fanart = $fanart;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getPoster() {
		return $this->poster;
	}
	
	/**
	 *
	 * @param
	 *        	$poster
	 */
	public function setPoster($poster) {
		$this->poster = $poster;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getSeason() {
		return $this->season;
	}
	
	/**
	 *
	 * @param
	 *        	$season
	 */
	public function setSeason($season) {
		$this->season = $season;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getSeasonwide() {
		return $this->seasonwide;
	}
	
	/**
	 *
	 * @param
	 *        	$seasonwide
	 */
	public function setSeasonwide($seasonwide) {
		$this->seasonwide = $seasonwide;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getSeries() {
		return $this->series;
	}
	
	/**
	 *
	 * @param
	 *        	$series
	 */
	public function setSeries($series) {
		$this->series = $series;
		return $this;
	}
}