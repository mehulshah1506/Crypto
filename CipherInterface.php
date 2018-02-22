<?php

namespace mehul\Crypto;

/**
 * Interface CipherInterface
 */
interface CipherInterface
{
	/**
	 * Method to decrypt a data string.
	 *
	 * @param   string  $data  The encrypted string to decrypt.
	 * @param   string  $key   The private key.
	 * @param   string  $iv    The public key.
	 *
	 * @return  string  The decrypted data string.
	 */
	public function decrypt($data, $key = null, $iv = null);

	/**
	 * Method to encrypt a data string.
	 *
	 * @param   string  $data  The data string to encrypt.
	 * @param   string  $key   The private key.
	 * @param   string  $iv    The public key.
	 *
	 * @return  string  The encrypted data string.
	 */
	public function encrypt($data, $key = null, $iv = null);
}
