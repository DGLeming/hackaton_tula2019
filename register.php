<?php
session_start();
if($_SESSION['user'] != ''){
	header('Location: /');
}


include 'markup/header.php';
?>
<form action="scripts/register_script.php">
	<label for="login">Логин:</label>
	<input type="text" name="login">
	<label for="email">E-mail:</label>
	<input type="text" name="email">
	<label for="password">Пароль:</label>
	<input type="password" name="password1">
	<label for="password">Повторите пароль:</label>
	<input type="password" name="password2">
	<button type="submit">Зарегистрироваться</button>
</form>


<?php
include 'markup/footer.php';
?>