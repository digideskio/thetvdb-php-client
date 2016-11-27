<?php

namespace NicolaMoretto\TheTVDB\Exception;

use NicolaMoretto\TheTVDB\Configuration;

/**
 * TheTVDB API configuration exception
 *
 * @author Nicola Moretto <n.moretto@nicolamoretto.eu>
 */
class ConfigurationException extends \RuntimeException {
	
	/** @var Configuration */
	private $configuration;
	
	/**
	 * Create an exception associated to the given configuration
	 * 
	 * @param Configuration $configuration
	 *        	Client configuration
	 */
	public function __construct(Configuration $configuration) {
		parent::__construct ( 'Invalid configuration' );
	}
	
	/**
	 *
	 * @return the Configuration
	 */
	public function getConfiguration() {
		return $this->configuration;
	}
	
	/**
	 *
	 * @param Configuration $configuration        	
	 */
	public function setConfiguration(Configuration $configuration) {
		$this->configuration = $configuration;
		return $this;
	}
}