<?php

namespace mehul\Crypto\Mcrypt\Algorithms;

use mehul\Crypto\Mcrypt\AbstractMcryptCipher;

/**
 * The AES256 class.
 */
class AES256 extends AbstractMcryptCipher
{
	/**
	 * @var    integer  The mcrypt cipher constant.
	 */
	protected $type = MCRYPT_RIJNDAEL_256;

	/**
	 * @var    integer  The mcrypt block cipher mode.
	 */
	protected $mode = MCRYPT_MODE_CBC;
}
