<?php

namespace NicolaMoretto\TheTVDB\Model;

/**
 *
 * @author Nicola Moretto <n.moretto@nicolamoretto.eu>
 */
class Actor {
	
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
	 * @param object $tvdbAuthor
	 *        	TheTVDB actor information
	 * @return Actor
	 */
	public static function createFrom($tvdbAuthor): Actor {
		$actor = new Actor ();
		if (property_exists ( $tvdbAuthor, 'id' )) {
			$actor->setId ( $tvdbAuthor->id );
		}
		if (property_exists ( $tvdbAuthor, 'seriesId' )) {
			$actor->setSeriesId ( $tvdbAuthor->seriesId );
		}
		if (property_exists ( $tvdbAuthor, 'name' )) {
			$actor->setName ( $tvdbAuthor->name );
		}
		if (property_exists ( $tvdbAuthor, 'role' )) {
			$actor->setRole ( $tvdbAuthor->role );
		}
		if (property_exists ( $tvdbAuthor, 'sortOrder' )) {
			$actor->setSortOrder ( $tvdbAuthor->sortOrder );
		}
		if (property_exists ( $tvdbAuthor, 'image' )) {
			$actor->setImage ( $tvdbAuthor->image );
		}
		if (property_exists ( $tvdbAuthor, 'imageAuthor' )) {
			$actor->setImageAuthor ( $tvdbAuthor->imageAuthor );
		}
		if (property_exists ( $tvdbAuthor, 'imageAdded' )) {
			$actor->setImageAdded ( $tvdbAuthor->imageAdded );
		}
		if (property_exists ( $tvdbAuthor, 'lastUpdated' )) {
			$actor->setLastUpdated ( $tvdbAuthor->lastUpdated );
		}
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