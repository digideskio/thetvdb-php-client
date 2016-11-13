<?php

namespace NicolaMoretto\TheTVDB\Model;

/**
 *
 * @author Nicola Moretto <n.moretto@nicolamoretto.eu>
 */
class Series {
	
	/** @var string[] */
	private $aliases;
	/** @var string */
	private $banner;
	/** @var string */
	private $firstAired;
	/** @var int */
	private $id;
	/** @var string */
	private $network;
	/** @var string */
	private $overview;
	/** @var string */
	private $seriesName;
	/** @var string */
	private $status;
	
	/**
	 * Return a class instance initialized with given argument
	 *
	 * @param object $tvdbSeries
	 *        	TheTVDB series information
	 * @return Series
	 */
	public static function createFrom($tvdbSeries): Series {
		$series = new Series ();
		$series->setAliases ( $tvdbSeries->aliases );
		$series->setBanner ( $tvdbSeries->banner );
		$series->setFirstAired ( $tvdbSeries->firstAired );
		$series->setId ( $tvdbSeries->id );
		$series->setNetwork ( $tvdbSeries->network );
		$series->setOverview ( $tvdbSeries->overview );
		$series->setSeriesName ( $tvdbSeries->seriesName );
		$series->setStatus ( $tvdbSeries->status );
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
}