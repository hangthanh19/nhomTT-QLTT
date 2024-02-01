<?php

$db_name = 'mysql:host=localhost;dbname=qlsvtt';
$user_name = 'root';
$user_password = '';

#$conn = new PDO($db_name, $user_name, $user_password);
try {
    $conn = new PDO($db_name, $user_name, $user_password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

?>