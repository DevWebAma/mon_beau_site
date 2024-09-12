<?php 

try {
    $connexion = new PDO('msql:host='.DB_HOST.';dbname='. DB_NAME, DB_USER, DB_PASSWORD);
} catch(PDOException $e){
  var_dump($e);
}