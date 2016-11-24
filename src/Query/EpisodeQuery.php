<?php

namespace NicolaMoretto\TheTVDB\Query;

use NicolaMoretto\TheTVDB\Query\QueryInterface;
use NicolaMoretto\TheTVDB\Model\Episode;

/**
 *
 * @author Nicola Moretto<n.moretto@nicolamoretto.eu>
 */
class EpisodeQuery implements QueryInterface {
	
	/** @var int */
	private $absoluteNumber;
	/** @var int */
	private $airedSeason;
	/** @var int */
	private $airedEpisode;
	/** @var int */
	private $dvdSeason;
	/** @var float */
	private $dvdEpisode;
	/** @var string */
	private $imdbId;
	
	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \NicolaMoretto\TheTVDB\Query\QueryInterface::toArray()
	 */
	public function toArray(): array {
		$params = [ ];
		if (! is_null ( $this->absoluteNumber ) && mb_strlen ( $this->absoluteNumber ) > 0) {
			$params ['absoluteNumber'] = trim ( $this->absoluteNumber );
		}
		if (! is_null ( $this->airedSeason ) && mb_strlen ( $this->airedSeason ) > 0) {
			$params ['airedSeason'] = trim ( $this->airedSeason );
		}
		if (! is_null ( $this->airedEpisode ) && mb_strlen ( $this->airedEpisode ) > 0) {
			$params ['airedEpisode'] = trim ( $this->airedEpisode );
		}
		if (! is_null ( $this->dvdSeason ) && mb_strlen ( $this->dvdSeason ) > 0) {
			$params ['dvdSeason'] = trim ( $this->dvdSeason );
		}
		if (! is_null ( $this->dvdEpisode ) && mb_strlen ( $this->dvdEpisode ) > 0) {
			$params ['dvdEpisode'] = trim ( $this->dvdEpisode );
		}
		if (! is_null ( $this->imdbId ) && mb_strlen ( $this->imdbId ) > 0) {
			$params ['imdbId'] = trim ( $this->imdbId );
		}
		return $params;
	}
	
	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \NicolaMoretto\TheTVDB\Query\QueryInterface::from()
	 */
	public function from(Episode $entity): EpisodeQuery {
		if (is_null ( $entity ) || ! ($entity instanceof Episode)) {
			throw new \InvalidArgumentException ();
		}
		$query = new EpisodeQuery ();
		$query->setAbsoluteNumber ( $entity->getAbsoluteNumber () );
		$query->setAiredSeason ( $entity->getAiredSeason () );
		$query->setAiredEpisode ( $entity->getAiredEpisodeNumber () );
		$query->setDvdSeason ( $entity->getDvdSeason () );
		$query->setDvdEpisode ( $entity->getDvdEpisodeNumber () );
		$query->setImdbId ( $entity->getImdbId () );
		return $query;
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
	public function getAiredEpisode() {
		return $this->airedEpisode;
	}
	
	/**
	 *
	 * @param
	 *        	$airedEpisode
	 */
	public function setAiredEpisode($airedEpisode) {
		$this->airedEpisode = $airedEpisode;
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
	 * @return the float
	 */
	public function getDvdEpisode() {
		return $this->dvdEpisode;
	}
	
	/**
	 *
	 * @param
	 *        	$dvdEpisode
	 */
	public function setDvdEpisode($dvdEpisode) {
		$this->dvdEpisode = $dvdEpisode;
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
}