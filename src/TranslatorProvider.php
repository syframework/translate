<?php
namespace Sy\Translate;

class TranslatorProvider {

	private static $instances;

	/**
	 * Return a new ITranslator object
	 *
	 * @param string $directory
	 * @param string $type
	 * @return ITranslator
	 */
	public static function createTranslator($directory, $type = 'php', $lang = '') {
		$type = ucfirst(strtolower($type));
		$class = __NAMESPACE__ . '\\' . $type . 'Translator';
		if (!class_exists($class)) $class = __NAMESPACE__ . '\\PhpTranslator';
		$lang = empty($lang) ? LangDetector::getInstance()->getLang() : $lang;

		if (!isset(self::$instances[$class][$directory][$type][$lang])) {
			$translator = new $class();
			$translator->setTranslationLang($lang);
			$translator->setTranslationDir($directory);
			self::$instances[$class][$directory][$type][$lang] = $translator;
		}
		return self::$instances[$class][$directory][$type][$lang];
	}

}