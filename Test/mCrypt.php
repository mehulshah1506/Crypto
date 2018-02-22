<?php

include_once __DIR__ . '/../vendor/autoload.php';

echo '########## Mcrypt Encrypt Example ##########';
echo '<br/>';
echo "\n\n";

echo 'Example of AES256';
echo '<br/>';
echo "\n\n";

$crypto = new \mehul\Crypto\Crypto(new \mehul\Crypto\Mcrypt\Algorithms\AES256);

echo 'Encoded String = ' . $encoded_string = $crypto->encrypt('The String that i have encoded');
echo '<br/>';
echo "\n\n";

$crypto = new \mehul\Crypto\Crypto(new \mehul\Crypto\Mcrypt\Algorithms\AES256);

echo 'Original String = ' . $crypto->decrypt($encoded_string);
echo '<br/>';
echo "\n\n";


echo '<br/>';
echo 'Example of AES256 With Key';
echo '<br/>';
echo "\n\n";


$crypto = new \mehul\Crypto\Crypto(new \mehul\Crypto\Mcrypt\Algorithms\AES256);

echo 'Encoded String = ' . $encoded_string = $crypto->encrypt('The String that i have encoded', 'My private key');
echo '<br/>';
echo "\n\n";

$crypto = new \mehul\Crypto\Crypto(new \mehul\Crypto\Mcrypt\Algorithms\AES256);

echo 'Original String = ' . $crypto->decrypt($encoded_string, 'My private key');
echo '<br/>';
echo "\n\n";


echo '<br/>';
echo 'Example of AES128';
echo '<br/>';
echo "\n\n";

$crypto = new \mehul\Crypto\Crypto(new \mehul\Crypto\Mcrypt\Algorithms\AES128);

echo 'Encoded String = ' . $encoded_string = $crypto->encrypt('The String that i have encoded');
echo '<br/>';
echo "\n\n";

$crypto = new \mehul\Crypto\Crypto(new \mehul\Crypto\Mcrypt\Algorithms\AES128);

echo 'Original String = ' . $crypto->decrypt($encoded_string);
