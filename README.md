# PHP Text Detection

## Requirements
- PHP 5.6 or ^7.1
- Tesseract

## Installation

	$ composer require cafeimers/textdetector

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