<?php
$db_name = 'controle-estoque';
$db_host = "localhost";
$db_user = "root";
$db_pass = "";


try {

  $pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);

} catch(PDOException $e) {

  echo "Error!: ". $e->getMessage();

}


