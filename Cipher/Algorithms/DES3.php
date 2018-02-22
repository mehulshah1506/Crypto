<?php

namespace mehul\Crypto\Cipher\Algorithms;

use mehul\Crypto\Cipher\AbstractOpensslCipher;

/**
 * The Cipher3DES class.
 * 
 */
class DES3 extends AbstractOpensslCipher
{
	/**
	 * @var    integer  The openssl cipher method.
	 */
	protected $method = 'des-ede3';

	/**
	 * Property mode.
	 *
	 * @var  string
	 */
	protected $mode = 'cbc';
}
