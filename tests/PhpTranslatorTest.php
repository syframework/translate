<?php

use PHPUnit\Framework\TestCase;
use Sy\Translate\PhpTranslator;

class PhpTranslatorTest extends TestCase {

	/**
	 * @var Sy\Translate\ITranslator
	 */
	protected $translator;

	protected function setUp() : void {
		$this->translator = new PhpTranslator();
		$this->translator->setTranslationLang('fr');
		$this->translator->setTranslationDir(__DIR__ . '/files/php');
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