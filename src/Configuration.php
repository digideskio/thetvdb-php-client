<?php

namespace NicolaMoretto\TheTVDB;

use NicolaMoretto\TheTVDB\Exception\ConfigurationException;

/**
 * TheTVDB API v2 client configuration
 *
 * @author Nicola Moretto <n.moretto@nicolamoretto.eu>
 */
class Configuration {
	
	/** @var string */
	private $language;
	/** @var string */
	private $apiKey;
	/** @var string */
	private $username;
	/** @var string */
	private $userKey;
	/** @var int */
	private $tokenRefresh;
	
	/**
	 * Create a new client configuration
	 *
	 * @param string $apiKey
	 *        	TheTVDB API key of the user
	 * @param string $username
	 *        	TheTVDB username
	 * @param string $userKey
	 *        	TheTVDB Account Identifier of the user
	 * @param string $language
	 *        	Language code (as ISO 639-1 two-letter code)
	 * @param int $tokenResfresh
	 *        	Token expiration (in seconds, 0 means never expire)
	 * @throws ConfigurationException If the configuration is not valid
	 */
	public function __construct($username, $userKey, $apiKey, $language = 'en', $tokenResfresh = 0) {
		$this->language = $language;
		$this->apiKey = $apiKey;
		$this->username = $username;
		$this->userKey = $userKey;
		$this->tokenRefresh = max ( [ 
			$tokenResfresh,
			0 
		] );
		if (! $this->isValid ()) {
			throw new ConfigurationException ();
		}
	}
	
	/**
	 * Return if the configuration is valid
	 *
	 * @return bool If the configuration is valid
	 */
	public function isValid(): bool {
		return mb_strlen ( $this->language ) > 0 && mb_strlen ( $this->apiKey ) > 0 && mb_strlen ( $this->username ) > 0 && mb_strlen ( $this->userKey ) > 0 && $this->tokenRefresh >= 0;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getLanguage() {
		return $this->language;
	}
	
	/**
	 *
	 * @param
	 *        	$language
	 */
	public function setLanguage($language) {
		$this->language = $language;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getApiKey() {
		return $this->apiKey;
	}
	
	/**
	 *
	 * @param
	 *        	$apiKey
	 */
	public function setApiKey($apiKey) {
		$this->apiKey = $apiKey;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getUsername() {
		return $this->username;
	}
	
	/**
	 *
	 * @param
	 *        	$username
	 */
	public function setUsername($username) {
		$this->username = $username;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getUserKey() {
		return $this->userKey;
	}
	
	/**
	 *
	 * @param
	 *        	$userKey
	 */
	public function setUserKey($userKey) {
		$this->userKey = $userKey;
		return $this;
	}
	
	/**
	 *
	 * @return the int
	 */
	public function getTokenRefresh() {
		return $this->tokenRefresh;
	}
	
	/**
	 *
	 * @param
	 *        	$tokenRefresh
	 */
	public function setTokenRefresh($tokenRefresh) {
		$this->tokenRefresh = $tokenRefresh;
		return $this;
	}
}