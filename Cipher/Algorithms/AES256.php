<?php

namespace mehul\Crypto\Cipher\Algorithms;

use mehul\Crypto\Cipher\AbstractOpensslCipher;

/**
 * The Aes256 class.
 */
class AES256 extends AbstractOpensslCipher
{
	/**
	 * @var    integer  The openssl cipher method.
	 */
	protected $method = 'aes-256';

	/**
	 * Property mode.
	 *
	 * @var  string
	 */
	protected $mode = 'cbc';
}
