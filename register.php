<?php
session_start();
if($_SESSION['user'] != ''){
	header('Location: /');
}
switch ($_GET['error_code']) {
	case 1:
		echo 'Пользователь с таким логином уже зарегистрирован';
		break;
	case 2:
		echo 'Пользователь с таким e-mail уже зарегистрирован';
		break;
	case 3:
		echo 'Введенные пароли не совпадают';
	default:
		break;
}


include 'markup/header.php';
?>
<form action="scripts/register_script.php" method="POST">
	<label for="login">Логин:</label>
	<input type="text" name="login">
	<label for="email">E-mail:</label>
	<input type="text" name="email">
	<label for="password1">Пароль:</label>
	<input type="password" name="password1">
	<label for="password2">Повторите пароль:</label>
	<input type="password" name="password2">
	<button type="submit">Зарегистрироваться</button>
</form>


<?php
include 'markup/footer.php';
?>