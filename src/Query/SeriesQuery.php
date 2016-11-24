<?php

namespace NicolaMoretto\TheTVDB\Query;

/**
 * 
 * @author Nicola Moretto<n.moretto@nicolamoretto.eu>
 */
class SeriesQuery implements QueryInterface {
	
	/** @var string */
	private $name;
	/** @var string */
	private $imdbId;
	/** @var string */
	private $zap2itId;
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \NicolaMoretto\TheTVDB\Query\QueryInterface::toArray()
	 */
	public function toArray(): array {
		$params = [];
		if (!is_null($this->name) && mb_strlen($this->name) > 0) {
			$params['name'] = trim($this->name);
		}
		if (!is_null($this->imdbId) && mb_strlen($this->imdbId) > 0) {
			$params['imdbId'] = trim($this->imdbId);
		}
		if (!is_null($this->zap2itId) && mb_strlen($this->zap2itId) > 0) {
			$params['zap2itId'] = trim($this->zap2itId);
		}
		return $params;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 *
	 * @param
	 *        	$name
	 */
	public function setName($name) {
		$this->name = $name;
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
	
}