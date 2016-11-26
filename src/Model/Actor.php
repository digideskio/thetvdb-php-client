<?php

namespace NicolaMoretto\TheTVDB\Model;

/**
 *
 * @author Nicola Moretto <n.moretto@nicolamoretto.eu>
 */
class Actor implements ModelInterface {
	
	/** @var int */
	private $id;
	/** @var int */
	private $seriesId;
	/** @var string */
	private $name;
	/** @var string */
	private $role;
	/** @var int */
	private $sortOrder;
	/** @var string */
	private $image;
	/** @var int */
	private $imageAuthor;
	/** @var string */
	private $imageAdded;
	/** @var string */
	private $lastUpdated;
	
	/**
	 * Return a class instance initialized with given argument
	 *
	 * @param array $tvdbAuthor
	 *        	TheTVDB actor information
	 * @return Actor
	 */
	public static function createFrom(array $tvdbAuthor): Actor {
		$actor = new Actor ();
		$actor->setId ( isset ( $tvdbAuthor ['id'] ) ? $tvdbAuthor ['id'] : null );
		$actor->setSeriesId ( isset ( $tvdbAuthor ['seriesId'] ) ? $tvdbAuthor ['seriesId'] : null );
		$actor->setName ( isset ( $tvdbAuthor ['name'] ) ? $tvdbAuthor ['name'] : null );
		$actor->setRole ( isset ( $tvdbAuthor ['role'] ) ? $tvdbAuthor ['role'] : null );
		$actor->setSortOrder ( isset ( $tvdbAuthor ['sortOrder'] ) ? $tvdbAuthor ['sortOrder'] : null );
		$actor->setImage ( isset ( $tvdbAuthor ['image'] ) ? $tvdbAuthor ['image'] : null );
		$actor->setImageAuthor ( isset ( $tvdbAuthor ['imageAuthor'] ) ? $tvdbAuthor ['imageAuthor'] : null );
		$actor->setImageAdded ( isset ( $tvdbAuthor ['imageAdded'] ) ? $tvdbAuthor ['imageAdded'] : null );
		$actor->setLastUpdated ( isset ( $tvdbAuthor ['lastUpdated'] ) ? $tvdbAuthor ['lastUpdated'] : null );
		return $actor;
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
	public function getRole() {
		return $this->role;
	}
	
	/**
	 *
	 * @param
	 *        	$role
	 */
	public function setRole($role) {
		$this->role = $role;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getSortOrder() {
		return $this->sortOrder;
	}
	
	/**
	 *
	 * @param
	 *        	$sortOrder
	 */
	public function setSortOrder($sortOrder) {
		$this->sortOrder = $sortOrder;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getImage() {
		return $this->image;
	}
	
	/**
	 *
	 * @param
	 *        	$image
	 */
	public function setImage($image) {
		$this->image = $image;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getImageAuthor() {
		return $this->imageAuthor;
	}
	
	/**
	 *
	 * @param
	 *        	$imageAuthor
	 */
	public function setImageAuthor($imageAuthor) {
		$this->imageAuthor = $imageAuthor;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getImageAdded() {
		return $this->imageAdded;
	}
	
	/**
	 *
	 * @param
	 *        	$imageAdded
	 */
	public function setImageAdded($imageAdded) {
		$this->imageAdded = $imageAdded;
		return $this;
	}
	
	/**
	 *
	 * @return the string
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
}