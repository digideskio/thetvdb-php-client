<?php

namespace NicolaMoretto\TheTVDB\Exception;

/**
 * TheTVDB authentication exception
 *
 * @author Nicola Moretto <n.moretto@nicolamoretto.eu>
 */
class NotAuthorizedException extends ApiException {
	
	/** @var string */
	private $token;
	
	/**
	 * Create a TheTVDB authentication exception
	 *
	 * @param string $uri
	 *        	TheTVDB API request URI
	 * @param string $token
	 *        	Security token
	 * @param string $message
	 *        	Exception message
	 */
	public function __construct(string $uri, string $token, string $message = "Not Authorized") {
		parent::__construct ( $uri, 401, trim ( $message ) );
		$this->token = $token;
	}
	
	/**
	 * Return the authorization token of the TheTVDB API request
	 *
	 * @return string Authorization token of the TheTVDB API request
	 */
	public function getToken() {
		return $this->token;
	}
}