<?php
// CONNECTION PARAMS
const DB_HOST ="localhost";
const DB_USER ="root";
const DB_PASS ="";
const DB_NAME ="testing_account";
const CHARSET_NAME ="utf8mb4";

//DSN

$dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".CHARSET_NAME;

try {
$dbh = new PDO ($dsn,DB_USER,DB_PASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("Connection Failed: ".$e->getMessage());
}



 ?>
