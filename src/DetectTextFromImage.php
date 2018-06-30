<?php 

namespace Cafeimers\Detector;

use thiagoalessio\TesseractOCR\TesseractOCR;

/**
* @author Imam Ali Mustofa <imamalimustofa@cafeimers.com>
* @package PHP Detector
*/
class DetectTextFromImage
{
	/**
	 * Detection
	 * @param string $path        Path of image
	 * @param array  $collections array of text will matching with image
	 * 
	 * @return boolean
	 */
	public static function Detection(string $path, array $collections)
	{
		$output 	= (new TesseractOCR($path))->run();
		$items   	= preg_split('/[^a-zA-Z0-9]+/', $output);

		return self::Matches($items, $collections);
	}

	/**
	 * Matches
	 * @param array  $items       Result of Image Detection
	 * @param array  $collections array of text will matching with image
	 *
	 * @return boolean
	 */
	public static function Matches(array $items, array $collections)
	{
		$result 		= false;

		foreach ($items as $string) {

			if ( in_array($string, $collections) ) {
				$result = true;
			} else {
				continue;
			}

		}

		return $result;
	}

}