<?php
namespace mehul\Crypto;

/**
 * The CryptHelper class.
 * 
 */
class CryptoHelper
{
	/**
	 * repeatToLength
	 *
	 * @param string  $string
	 * @param integer $length
	 * @param bool    $cut
	 *
	 * @return  string
	 */
	public static function repeatToLength($string, $length, $cut = false)
	{
		if (strlen($string) >= $length)
		{
			return $string;
		}

		$string = str_repeat($string, ceil($length / strlen($string)));

		if ($cut)
		{
			$string = substr($string, 0, $length);
		}

		return $string;
	}
}
