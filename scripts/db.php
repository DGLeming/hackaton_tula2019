<?php
$host = 'localhost';
$db   = 'u0693711_default';
$user = 'u0693711_default';
$pass = 'ioY4_o0r';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}

?>