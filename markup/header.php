<!DOCTYPE html>
<html>
<head>
	<title>Push Your Borders</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<img src="logo.png">
<?php
if($isLogged){
	echo '<p>nickname</p>';
	echo '<a href="exit">Выход</a>';
} else {
	echo '<a href="login">Войти</a>';
	echo '<a href="register">Зарегистрироваться</a>';
}
?>