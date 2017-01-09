<?php
  // DEFINE our cipher
  define('AES_256_CBC', 'aes-256-cbc');

  $handle = fopen("secrets.txt", "r");
  $encryption_key = fgets($handle);
  $iv = fgets($handle);
  fclose($handle);

  $encrypted = $_POST["encrypted"] . ':' . $iv;
  $parts = explode(':', $encrypted);
  $decrypted = openssl_decrypt($parts[0], AES_256_CBC, $encryption_key, 0, $parts[1]);

  $email = $_POST["email"];
  $isAuthenticated = false;
  if($decrypted == $email){
    $isAuthenticated = true;
  }

  echo json_encode($isAuthenticated);
?>
