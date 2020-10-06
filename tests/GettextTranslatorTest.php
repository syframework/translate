<?php

use PHPUnit\Framework\TestCase;
use Sy\Translate\GettextTranslator;

class GettextTranslatorTest extends TestCase {

	/**
	 * @var Sy\Translate\ITranslator
	 */
	protected $translator;

	protected function setUp() : void {
		$this->translator = new GettextTranslator();
		$this->translator->setTranslationLang('fr_FR');
		$this->translator->setTranslationDir(__DIR__ . '/files/gettext');
	}

	public function testTranslate() {
		$this->assertEquals(
			$this->translator->translate('Hello world'),
			'Bonjour monde'
		);
		$this->assertEquals(
			$this->translator->translate('Good bye'),
			'Au revoir'
		);
		$this->assertEquals(
			$this->translator->translate('Nothing'),
			''
		);
	}

}