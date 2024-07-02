<?php

use Defuse\Crypto\Key;
use Defuse\Crypto\Crypto;

require 'vendor/autoload.php';

$key_ascii='def00000a7a73cc18708a250d64119755c7ca111967e13152ddcd2959682c46d07938d9bdb5fc4a9e8493f5a187ea8c4baf0825a489e5eabde276f319d18dbcc3dd84d59';

$key = Key::loadFromAsciiSafeString($key_ascii);

$plaintext = readline('Enter some text: ');

$ciphertext = Crypto::encrypt($plaintext, $key);

echo "Original string: $plaintext\n";

echo "Encrypted string: $ciphertext\n";

$decrypted = Crypto::decrypt($ciphertext, $key);

echo "Decrypted string: $decrypted\n";
