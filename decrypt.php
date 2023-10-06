<?php
// Encoded encrypted text
$encodedEncryptedText = "encoded encrypted text from previous step";

// Load private key
$privateKey = openssl_pkey_get_private(file_get_contents("private.pem"));

// Decode the encoded encrypted text
$encryptedText = base64_decode($encodedEncryptedText);

// Decrypt the encrypted text using the private key
openssl_private_decrypt($encryptedText, $decryptedText, $privateKey, OPENSSL_PKCS1_OAEP_PADDING);

echo "Decrypted Text: $decryptedText\n";
?>
