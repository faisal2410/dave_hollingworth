<?php

$key = 'ctlHQsJGG3EluUw98Z1Sqb3JBXJWbtHG';

$nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);

$plaintext = readline('Enter some text: ');

$ciphertext = sodium_crypto_secretbox($plaintext, $nonce, $key);

echo "Original string: $plaintext\n";

echo "Encrypted string: $ciphertext\n";

echo "Encrypted string hex: " . bin2hex($ciphertext) . "\n";

$decrypted = sodium_crypto_secretbox_open($ciphertext, $nonce, $key);

echo "Decrypted string: $decrypted\n";
