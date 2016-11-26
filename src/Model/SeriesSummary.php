<?php

namespace NicolaMoretto\TheTVDB\Model;

use NicolaMoretto\TheTVDB\Model\ModelInterface;

/**
 *
 * @author Nicola Moretto <n.moretto@nicolamoretto.eu>
 */
class SeriesSummary implements ModelInterface {
	
	/** @var string[] */
	private $airedSeasons;
	/** @var string */
	private $airedEpisodes;
	/** @var string[] */
	private $dvdSeasons;
	/** @var string */
	private $dvdEpisodes;
	
	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \NicolaMoretto\TheTVDB\Model\ModelInterface::createFrom()
	 */
	public static function createFrom(array $tvdbData): SeriesSummary {
		$summary = new SeriesSummary ();
		$summary->setAiredSeasons ( isset ( $tvdbData ['airedSeasons'] ) ? $tvdbData ['airedSeasons'] : [ ] );
		$summary->setAiredEpisodes ( isset ( $tvdbData ['airedEpisodes'] ) ? $tvdbData ['airedEpisodes'] : [ ] );
		$summary->setDvdSeasons ( isset ( $tvdbData ['dvdSeasons'] ) ? $tvdbData ['dvdSeasons'] : [ ] );
		$summary->setDvdEpisodes ( isset ( $tvdbData ['dvdEpisodes'] ) ? $tvdbData ['dvdEpisodes'] : [ ] );
		return $summary;
	}
	
	/**
	 *
	 * @return the string[]
	 */
	public function getAiredSeasons() {
		return $this->airedSeasons;
	}
	
	/**
	 *
	 * @param
	 *        	$airedSeasons
	 */
	public function setAiredSeasons($airedSeasons) {
		$this->airedSeasons = $airedSeasons;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getAiredEpisodes() {
		return $this->airedEpisodes;
	}
	
	/**
	 *
	 * @param
	 *        	$airedEpisodes
	 */
	public function setAiredEpisodes($airedEpisodes) {
		$this->airedEpisodes = $airedEpisodes;
		return $this;
	}
	
	/**
	 *
	 * @return the string[]
	 */
	public function getDvdSeasons() {
		return $this->dvdSeasons;
	}
	
	/**
	 *
	 * @param
	 *        	$dvdSeasons
	 */
	public function setDvdSeasons($dvdSeasons) {
		$this->dvdSeasons = $dvdSeasons;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getDvdEpisodes() {
		return $this->dvdEpisodes;
	}
	
	/**
	 *
	 * @param
	 *        	$dvdEpisodes
	 */
	public function setDvdEpisodes($dvdEpisodes) {
		$this->dvdEpisodes = $dvdEpisodes;
		return $this;
	}
}