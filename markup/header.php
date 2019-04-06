<!DOCTYPE html>
<html>
<head>
	<title>Push Your Borders</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link href="css/main.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<div class="header">
	<img src="img/logo.svg" class="logo" id="logo">
	<?php
	if($isLogged){
		echo '<a href="/exit" class="header_link">Выход</a>';
		echo '<a href="/" class="header_link">'.$_SESSION['user'].'</a>';
		
	} else {
		echo '<a href="/register" class="header_link">Зарегистрироваться</a>';
		echo '<a href="/login" class="header_link">Войти</a>';
	}
	?>
</div>
<img src='img/header_img.jpg' style="width:100%">	

