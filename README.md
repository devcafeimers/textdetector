# PHP Text Detection

## Requirements
- PHP 5.6 or ^7.1
- Tesseract

## Installation

	$ composer require cafeimers/textdetector

:bangbang: **This library depends on [Tesseract OCR][], version _3.03_ or later.**

<br/>

### Note for Windows users

There are [many ways][tesseract_installation_on_windows] to install
[Tesseract OCR][] on your system, but if you just want something quick to
get up and running, I recommend installing the [Capture2Text][] package with
[Chocolatey][].

    choco install capture2text --version 3.9

:warning: Recent versions of [Capture2Text][] stopped shipping the `tesseract` binary.

<br/>

### Note for macOS users

With [MacPorts][] you can install support for individual languages, like so:

    $ sudo port install tesseract-<langcode>

But that is not possible with [Homebrew][]. It comes only with **English** support
by default, so if you intend to use it for other language, the quickest solution
is to install them all:

    $ brew install tesseract --with-all-languages

<br/>

## Usage

Example 1

```php
<?php

use Cafeimers\Detector\DetectTextFromImage;

require_once 'path/to/vendor/autoload.php';

dump( DetectTextFromImage::Detection('buktitransferbri.jpg', [
	'34530102751333',
	'030301015869506',
	'1370010500300'
]) );

// return true or false
```

Example 2

```php
<?php

use Cafeimers\Detector\DetectTextFromImage;

require_once 'path/to/vendor/autoload.php';

$collections = ['34530102751333','030301015869506','1370010500300'];
dump( DetectTextFromImage::Detection('buktitransferbri.jpg', $collections) );

// return true or false
```
