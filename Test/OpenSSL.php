<?php

include_once __DIR__ . '/../vendor/autoload.php';

echo '########## OpenSSL Encrypt Example ##########';
echo '<br/>';
echo "\n\n";

echo 'Example of DES3';
echo '<br/>';
echo "\n\n";

$crypto = new \mehul\Crypto\Crypto(new \mehul\Crypto\Cipher\Algorithms\DES3);

echo 'Encoded String = ' . $encoded_string = $crypto->encrypt('The String that i have encoded');
echo '<br/>';
echo "\n\n";

$crypto = new \mehul\Crypto\Crypto(new \mehul\Crypto\Cipher\Algorithms\DES3);

echo 'Original String = ' . $crypto->decrypt($encoded_string);
echo '<br/>';
echo "\n\n";

echo 'Example of AES256';
echo '<br/>';
echo "\n\n";

$crypto = new \mehul\Crypto\Crypto(new \mehul\Crypto\Cipher\Algorithms\AES256);

echo 'Encoded String = ' . $encoded_string = $crypto->encrypt('The String that i have encoded');
echo '<br/>';
echo "\n\n";

$crypto = new \mehul\Crypto\Crypto(new \mehul\Crypto\Cipher\Algorithms\AES256);

echo 'Original String = ' . $crypto->decrypt($encoded_string);
echo '<br/>';
echo "\n\n";
