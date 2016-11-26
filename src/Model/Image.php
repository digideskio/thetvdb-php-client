<?php

namespace NicolaMoretto\TheTVDB\Model;

/**
 *
 * @author Nicola Moretto <n.moretto@nicolamoretto.eu>
 */
class Image implements ModelInterface {
	
	/** @var int */
	private $id;
	/** @var string */
	private $keyType;
	/** @var string */
	private $subKey;
	/** @var string */
	private $fileName;
	/** @var int */
	private $languageId;
	/** @var string */
	private $resolution;
	/** @var int */
	private $ratingsCount;
	/** @var float */
	private $ratingsAverage;
	/** @var string */
	private $thumbnail;
	
	/**
	 *
	 * @param array $tvdbImage        	
	 * @return Image
	 */
	public static function createFrom(array $tvdbImage): Image {
		$image = new Image ();
		$image->setId ( isset ( $tvdbImage ['id'] ) ? $tvdbImage ['id'] : null );
		$image->setKeyType ( isset ( $tvdbImage ['keyType'] ) ? $tvdbImage ['keyType'] : null );
		$image->setSubKey ( isset ( $tvdbImage ['subKey'] ) ? $tvdbImage ['subKey'] : null );
		$image->setFileName ( isset ( $tvdbImage ['fileName'] ) ? $tvdbImage ['fileName'] : null );
		$image->setLanguageId ( isset ( $tvdbImage ['languageId'] ) ? $tvdbImage ['languageId'] : null );
		$image->setResolution ( isset ( $tvdbImage ['resolution'] ) ? $tvdbImage ['resolution'] : null );
		if (isset ( $tvdbImage ['ratingsInfo'] )) {
			$image->setRatingsAverage ( isset ( $tvdbImage ['ratingsInfo'] ['average'] ) ? $tvdbImage ['ratingsInfo'] ['average'] : null );
			$image->setRatingsCount ( isset ( $tvdbImage ['ratingsInfo'] ['count'] ) ? $tvdbImage ['ratingsInfo'] ['count'] : null );
		}
		$image->setThumbnail ( isset ( $tvdbImage ['thumbnail'] ) ? $tvdbImage ['thumbnail'] : null );
		return $image;
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
	public function getKeyType() {
		return $this->keyType;
	}
	
	/**
	 *
	 * @param
	 *        	$keyType
	 */
	public function setKeyType($keyType) {
		$this->keyType = $keyType;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getSubKey() {
		return $this->subKey;
	}
	
	/**
	 *
	 * @param
	 *        	$subKey
	 */
	public function setSubKey($subKey) {
		$this->subKey = $subKey;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getFileName() {
		return $this->fileName;
	}
	
	/**
	 *
	 * @param
	 *        	$fileName
	 */
	public function setFileName($fileName) {
		$this->fileName = $fileName;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getLanguageId() {
		return $this->languageId;
	}
	
	/**
	 *
	 * @param
	 *        	$languageId
	 */
	public function setLanguageId($languageId) {
		$this->languageId = $languageId;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getResolution() {
		return $this->resolution;
	}
	
	/**
	 *
	 * @param
	 *        	$resolution
	 */
	public function setResolution($resolution) {
		$this->resolution = $resolution;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getRatingsCount() {
		return $this->ratingsCount;
	}
	
	/**
	 *
	 * @param
	 *        	$ratingsCount
	 */
	public function setRatingsCount($ratingsCount) {
		$this->ratingsCount = $ratingsCount;
		return $this;
	}
	
	/**
	 *
	 * @return the float
	 */
	public function getRatingsAverage() {
		return $this->ratingsAverage;
	}
	
	/**
	 *
	 * @param
	 *        	$ratingsAverage
	 */
	public function setRatingsAverage($ratingsAverage) {
		$this->ratingsAverage = $ratingsAverage;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getThumbnail() {
		return $this->thumbnail;
	}
	
	/**
	 *
	 * @param
	 *        	$thumbnail
	 */
	public function setThumbnail($thumbnail) {
		$this->thumbnail = $thumbnail;
		return $this;
	}
}