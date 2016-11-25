<?php

namespace NicolaMoretto\TheTVDB\Model;

/**
 *
 * @author Nicola Moretto <n.moretto@nicolamoretto.eu>
 */
interface ModelInterface {
	
	/**
	 * Map a TheTVDB entity into a class instance
	 *
	 * @param array $tvdbData
	 *        	Associative array containing all information about a TheTVDB entity
	 * @return ModelInterface Return an instance of the class representing the given TheTVDB entity
	 */
	public static function createFrom($tvdbData);
}