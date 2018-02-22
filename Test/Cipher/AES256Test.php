<?php

namespace mehul\Crypto\Test\Cipher;

use mehul\Crypto\Cipher\Algorithms\AES256;

/**
 * Test class of AES256
 */
class AES256Test extends AbstractOpensslTestCase
{
	/**
	 * Test instance.
	 *
	 * @var Aes256Cipher
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
		$this->instance = new AES256;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 *
	 * @return void
	 */
	protected function tearDown()
	{
	}

	/**
	 * Method to test getIVSize().
	 *
	 * @return void
	 */
	public function testGetIVSize()
	{
		$this->assertEquals(16, $this->instance->getIVSize());
	}
}
