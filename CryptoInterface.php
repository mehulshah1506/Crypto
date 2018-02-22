<?php

namespace mehul\Crypto;

/**
 * Interface CryptoInterface
 *
 */
interface CryptoInterface
{
    /**
     * encrypt
     *
     * @param string $string
     * @param string $key
     * @param string $iv
     *
     * @return  string
     */
    public function encrypt($string, $key = null, $iv = null);

    /**
     * decrypt
     *
     * @param string $string
     * @param string $key
     * @param string $iv
     *
     * @return  string
     */
    public function decrypt($string, $key = null, $iv = null);

    /**
     * match
     *
     * @param string $string
     * @param string $encrypted
     * @param string $key
     * @param string $iv
     *
     * @return  boolean
     */
    public function verify($string, $encrypted, $key = null, $iv = null);
}