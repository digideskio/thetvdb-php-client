<?php

namespace NicolaMoretto\TheTVDB\Model;

/**
 *
 * @author Nicola Moretto <n.moretto@nicolamoretto.eu>
 */
class Language implements ModelInterface {
	
	/** @var int */
	private $id;
	/** @var string */
	private $abbreviation;
	/** @var string */
	private $name;
	/** @var string */
	private $englishName;
	
	/**
	 * Return a class instance initialized with given argument
	 *
	 * @param array $tvdbLanguage
	 *        	TheTVDB language object
	 * @return Language
	 */
	public static function createFrom($tvdbLanguage): Language {
		$lang = new Language ();
		$lang->setId ( isset ( $tvdbLanguage ['id'] ) ? $tvdbLanguage ['id'] : null );
		$lang->setAbbreviation ( isset ( $tvdbLanguage ['abbreviation'] ) ? $tvdbLanguage ['abbreviation'] : null );
		$lang->setName ( isset ( $tvdbLanguage ['name'] ) ? $tvdbLanguage ['name'] : null );
		$lang->setEnglishName ( isset ( $tvdbLanguage ['englishName'] ) ? $tvdbLanguage ['englishName'] : null );
		return $lang;
	}
	
	/**
	 * Return ID
	 *
	 * @return int ID
	 */
	public function getId(): int {
		return $this->id;
	}
	
	/**
	 * Set ID
	 *
	 * @param int $id
	 *        	ID
	 * @return \NicolaMoretto\TheTVDB\Model\Language
	 */
	public function setId(int $id): Language {
		$this->id = $id;
		return $this;
	}
	
	/**
	 * Return abbreviation
	 *
	 * @return string Abbreviation
	 */
	public function getAbbreviation(): string {
		return $this->abbreviation;
	}
	
	/**
	 * Set abbreviation
	 *
	 * @param string $abbreviation
	 *        	Abbreviation
	 * @return \NicolaMoretto\TheTVDB\Model\Language
	 */
	public function setAbbreviation(string $abbreviation): Language {
		$this->abbreviation = $abbreviation;
		return $this;
	}
	
	/**
	 * Return localized name
	 *
	 * @return string Localized name
	 */
	public function getName(): string {
		return $this->name;
	}
	
	/**
	 * Set localized name
	 *
	 * @param string $name
	 *        	Localized name
	 * @return \NicolaMoretto\TheTVDB\Model\Language
	 */
	public function setName(string $name): Language {
		$this->name = $name;
		return $this;
	}
	
	/**
	 * Return English name
	 *
	 * @return string English name
	 */
	public function getEnglishName(): string {
		return $this->englishName;
	}
	
	/**
	 * Set English name
	 *
	 * @param string $englishName
	 *        	English name
	 * @return Language
	 */
	public function setEnglishName(string $englishName): Language {
		$this->englishName = $englishName;
		return $this;
	}
}