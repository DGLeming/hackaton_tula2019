<?php
session_start();
if($_SESSION['user'] != ''){
	header('Location: /');
}
switch ($_GET['error_code']) {
	case 1:
		echo 'не правильный логин или пароль';
		break;
	default:
		break;
}


include 'markup/header.php';
?>
<form action="scripts/login_script.php" method="POST">
	<label for="login">Логин:</label>
	<input type="text" name="login">
	<label for="password">Пароль:</label>
	<input type="password" name="password">
	<button type="submit">Войти</button>
</form>


<?php
include 'markup/footer.php';
?>