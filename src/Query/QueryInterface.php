<?php

namespace NicolaMoretto\TheTVDB\Query;

use NicolaMoretto\TheTVDB\Model\ModelInterface;

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
	
	/**
	 * Create a query based on the fields of an instance
	 *
	 * @param ModelInterface $entity
	 *        	Instance of a model
	 * @return \QueryInterface Query based on the fields of an instance
	 */
	public static function createFrom($entity);
}