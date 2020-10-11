# sy/translate

Translation library

## Installation

Install the latest version with

```bash
$ composer require sy/translate
```

## Basic Usage

### PHP translator

Translation data are stored in a PHP file, for example in *fr.php*:

```php
<?php

return [
	'Hello world' => 'Bonjour monde', 
	...
]
```

```php
<?php

use Sy\Translate\PhpTranslator;

// Create a translator
$translator = new PhpTranslator();

// Set translation files directory
$translator->setTranslationDir(__DIR__ . '/path/to/directory');

// Set translation file
$translator->setTranslationLang('fr');

// Return 'Bonjour monde'
$translator->translate('Hello world'),
```

### Gettext translator

Translation data are stored in a .mo file, for example in *fr.mo*

```php
<?php

use Sy\Translate\GettextTranslator;

// Create a translator
$translator = new GettextTranslator();

// Set translation files directory
$translator->setTranslationDir(__DIR__ . '/path/to/directory');

// Set translation file
$translator->setTranslationLang('fr');

// Return 'Bonjour monde'
$translator->translate('Hello world'),
```