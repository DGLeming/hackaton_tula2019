<!DOCTYPE html>
<html>
<head>
	<title>Push Your Borders</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
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