<?php
// Text to be encrypted
$textToEncrypt = "Hello, World!";

// Load public key
$publicKey = openssl_pkey_get_public(file_get_contents("public.pem"));

// Encrypt the text using the public key
openssl_public_encrypt($textToEncrypt, $encryptedText, $publicKey, OPENSSL_PKCS1_OAEP_PADDING);

// Encoded encrypted text for safe storage or transmission
$encodedEncryptedText = base64_encode($encryptedText);

echo "Encrypted Text: $encodedEncryptedText\n";
?>
