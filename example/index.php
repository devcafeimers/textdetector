<?php 

use Cafeimers\Detector\DetectTextFromImage;

require_once dirname(__DIR__) . '/vendor/autoload.php';

dump( DetectTextFromImage::Detection('buktitransferbri.jpg', [
	'34530102751333',
	'030301015869506',
	'1370010500300'
]) );