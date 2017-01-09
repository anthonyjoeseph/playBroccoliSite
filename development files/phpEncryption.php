<?php
// DEFINE our cipher
define('AES_256_CBC', 'aes-256-cbc');

$handle = fopen("secrets.txt", "r");
$encryption_key = fgets($handle);
$iv = fgets($handle);
fclose($handle);

$data = $_GET["email"];

$encrypted = openssl_encrypt($data, AES_256_CBC, $encryption_key, 0, $iv);
echo "$encrypted";
?>
