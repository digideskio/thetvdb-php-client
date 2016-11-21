<?php

namespace NicolaMoretto\TheTVDB\Exception;

/**
 * TheTVDB API exception
 *
 * @author Nicola Moretto <n.moretto@nicolamoretto.eu>
 */
class ApiException extends \RuntimeException {
	
	/** @var string */
	private $uri;
	/** @var int */
	private $statusCode;
	
	/**
	 * Create a TheTVDB API exception
	 *
	 * @param string $uri
	 *        	TheTVDB API request
	 * @param int $statusCode
	 *        	HTTP status code
	 * @param string $message
	 *        	Exception message
	 */
	public function __construct(string $uri, int $statusCode, string $message = NULL) {
		parent::__construct ( $message, $statusCode );
		$this->uri = $uri;
		$this->statusCode = $statusCode;
	}
	
	/**
	 * Return the URI of the TheTVDB API request
	 *
	 * @return string TheTVDB API request URI
	 */
	public function getUri() {
		return $this->uri;
	}
	
	/**
	 * Return the HTTP status code of TheTVDB API response
	 *
	 * @return int HTTP status code of TheTVDB API response
	 */
	public function getStatusCode() {
		return $this->statusCode;
	}
}