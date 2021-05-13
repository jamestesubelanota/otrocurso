<?php


try {
    $pdo = new PDO("mysql:host=localhost;dbname=block","root", "");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
    echo $e->getMessage();
}
?>