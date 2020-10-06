<?php
namespace Sy\Translate;

abstract class Translator implements ITranslator {

	private $translationData;

	private $translationLang;

	private $translationDir;

	public function getTranslationData() {
		if (is_null($this->translationData)) {
			$this->loadTranslationData();
		}
		return $this->translationData;
	}

	public function getTranslationLang() {
		return $this->translationLang;
	}

	public function getTranslationDir() {
		return $this->translationDir;
	}

	public function setTranslationData(array $data) {
		$this->translationData = $data;
	}

	public function setTranslationLang($lang) {
		$this->translationLang = $lang;
		$this->translationData = null;
	}

	public function setTranslationDir($directory) {
		$this->translationDir = $directory;
	}

	public function translate($message) {
		$translationData = $this->getTranslationData();
		return isset($translationData[$message]) ? $translationData[$message] : '';
	}

	public abstract function loadTranslationData();

}