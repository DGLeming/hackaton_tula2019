<?php
include "db.php";
session_start();
$stmt = $pdo->query('SELECT * FROM users');
while ($row = $stmt->fetch())
{
    if($row['login'] == $_POST["login"]){
    	header('Location: /register?error_code=1');
    }
    if($row['email'] == $_POST["email"]){
    	header('Location: /register?error_code=2');
    }
}
if($_POST['password1'] == $_POST['password2']){
	$sql = "INSERT INTO users (login, email, password) VALUES (?,?,?)";
	$stmt= $pdo->prepare($sql);
	$stmt->execute(array($_POST['login'], $_POST['email'], hash('sha256', $_POST['password1'])));
    $_SESSION['user'] = $_POST['login'];
	header('Location: /?message_code=1');
} else {
	header('Location: /register?error_code=3');
}
?>