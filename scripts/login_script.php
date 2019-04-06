<?php
include "db.php";
session_start();
$stmt = $pdo->query('SELECT * FROM users');
while ($row = $stmt->fetch())
{
    if(($row['login'] == $_POST['login']) && (hash('sha256',$_POST['password']) == $row['password'])){
        $_SESSION['user'] = $_POST['login'];
        header('Location: /');
    }
}
header('Location: /login?error_code=1');
?>