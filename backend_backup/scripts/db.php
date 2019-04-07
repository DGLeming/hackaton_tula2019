<?php
$host = 'localhost';
$db   = 'main';
$user = 'admin';
$pass = 'admin';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}

?>