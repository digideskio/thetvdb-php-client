<?php

namespace NicolaMoretto\TheTVDB\Exception;

/**
 * TheTVDB unavailable resource exception
 *
 * @author Nicola Moretto <n.moretto@nicolamoretto.eu>
 */
class ResourceNotFoundException extends ApiException {
	
	/** @var array */
	private $query;
	
	/**
	 * Create a TheTVDB unavailable resource exception
	 *
	 * @param string $uri
	 *        	TheTVDB API request URI
	 * @param array $query
	 *        	Array of parameters (e.g. ["id" => 1])
	 * @param string $message
	 *        	Exception message
	 */
	public function __construct(string $uri, array $query = [], string $message = "Resource Not Found") {
		parent::__construct ( $uri, 404, trim ( $message ) );
		$this->query = $query;
	}
	
	/**
	 *
	 * @return array Request parameters
	 */
	public function getQuery(): array {
		return $this->query;
	}
}