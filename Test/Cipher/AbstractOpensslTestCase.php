<?php

namespace mehul\Crypto\Test\Cipher;

use mehul\Crypto\Cipher\AbstractCipher;
use mehul\Crypto\CryptoHelper;

/**
 * The AbstractCipherTestCase class.
 */
abstract class AbstractOpensslTestCase extends \PHPUnit\Framework\TestCase
{
	/**
	 * Property key.
	 *
	 * @var  string
	 */
	protected $key = 'foo';

	/**
	 * Test instance.
	 *
	 * @var AbstractCipher
	 */
	protected $instance;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @return void
	 */
	protected function setUp()
	{
		if (!is_callable('openssl_encrypt'))
		{
			$this->markTestSkipped('Openssl Extension not available.');
		}
	}

	/**
	 * Method to test encrypt().
	 *
	 * @return void
	 *
	 * @covers \mehul\Crypto\Cipher\AbstractCipher::encrypt
	 */
	public function testEncrypt()
	{
		$data = $this->instance->encrypt('mehul', $this->key);

		$data = $this->instance->decrypt($data, $this->key);

		$this->assertEquals('mehul', $data);

		// Use IV
		$iv = $this->instance->getIVKey();

		$data = $this->instance->encrypt('mehul', $this->key, $iv);

		$data = $this->instance->decrypt($data, $this->key, $iv);

		$this->assertEquals('mehul', $data);
	}

	/**
	 * Method to test decrypt().
	 *
	 * @return void
	 *
	 * @covers \mehul\Crypto\Cipher\AbstractCipher::decrypt
	 */
	public function testDecrypt()
	{
		// Use IV
		$iv = $this->instance->getIVKey();

		$data = $this->instance->encrypt('mehul', $this->key, $iv);

		$data = $this->instance->decrypt($data, $this->key, $iv);

		$this->assertEquals('mehul', $data);
	}

	/**
	 * Method to test getIVKey().
	 *
	 * @return void
	 *
	 * @covers \mehul\Crypto\Cipher\AbstractCipher::getIVKey
	 */
	public function testGetIVKey()
	{
		$this->assertEquals($this->instance->getIVSize(), strlen($this->instance->getIVKey()));
	}

	/**
	 * rawEncrypt
	 *
	 * @param string  $data
	 * @param string  $key
	 * @param integer $type
	 * @param integer $mode
	 *
	 * @return  string
	 */
	protected function rawEncrypt($data, $key, $type, $mode)
	{
		$size = openssl_cipher_iv_length($type . '-' . $mode);

		$iv = CryptHelper::genRandomBytes($size);

		// Encrypt the data.
		$encrypted = openssl_encrypt($data, $type . '-' . $mode, $key, OPENSSL_RAW_DATA, $iv);

		return $iv . $encrypted;
	}
}
