<?php

namespace NicolaMoretto\TheTVDB\Query;

/**
 *
 * @author Nicola Moretto<n.moretto@nicolamoretto.eu>
 */
interface QueryInterface {
	
	/**
	 * Return an associative array containing the query parameters
	 * 
	 * @return array An associative array containing the query parameters
	 */
	public function toArray(): array;
}