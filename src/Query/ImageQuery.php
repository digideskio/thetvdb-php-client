<?php

namespace NicolaMoretto\TheTVDB\Query;

use NicolaMoretto\TheTVDB\Model\Image;

/**
 *
 * @author Nicola Moretto<n.moretto@nicolamoretto.eu>
 */
class ImageQuery implements QueryInterface {
	
	/** @var string */
	private $keyType;
	/** @var string */
	private $resolution;
	/** @var string */
	private $subKey;
	
	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \NicolaMoretto\TheTVDB\Query\QueryInterface::toArray()
	 */
	public function toArray(): array {
		$params = [ ];
		if (! is_null ( $this->keyType ) && mb_strlen ( $this->keyType ) > 0) {
			$params ['keyType'] = trim ( $this->keyType );
		}
		if (! is_null ( $this->resolution ) && mb_strlen ( $this->resolution ) > 0) {
			$params ['resolution'] = trim ( $this->resolution );
		}
		if (! is_null ( $this->subKey ) && mb_strlen ( $this->subKey ) > 0) {
			$params ['subKey'] = trim ( $this->subKey );
		}
		return $params;
	}
	
	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \NicolaMoretto\TheTVDB\Query\QueryInterface::createFrom()
	 */
	public static function createFrom($entity): ImageQuery {
		if (is_null ( $entity ) || ! ($entity instanceof Image)) {
			throw new \InvalidArgumentException ();
		}
		$query = new ImageQuery ();
		$query->setKeyType ( $entity->getKeyType () );
		$query->setResolution ( $entity->getResolution () );
		$query->setSubKey ( $entity->getSubKey () );
		return $query;
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
}