<?php

namespace mehul\Crypto\Test\Cipher;

use mehul\Crypto\Cipher\Algorithms\DES3;

/**
 * Test class of DES3
 *
 */
class DES3Test extends AbstractOpensslTestCase
{
	/**
	 * Test instance.
	 *
	 * @var Des3Cipher
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
		parent::setUp();

		$this->instance = new DES3;
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
	 *
	 * @covers \mehul\Crypto\Cipher\DES3::getIVSize
	 */
	public function testGetIVSize()
	{
		$this->assertEquals(8, $this->instance->getIVSize());
	}
}
