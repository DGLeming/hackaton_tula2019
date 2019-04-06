<?php
session_start();
if($_SESSION['user'] != ''){
	$isLogged = true;
} else {
	header('Location: /login');
}


include 'markup/header.php';
?>
<form action="scripts/add_quest.php" method="post" id="form">
	<label for="name">Название:</label>
	<input type="text" name="name"><br>
	<label for="description">Описание</label>
	<input type="text" name="description"><br>
	<label>Вопрос этапа</label>
	<input type="text" name="task[descriptions][]"><br>
	<label>Ответ на этап</label>
	<input type="text" name="task[ansvers][]"><br>
	<label>Подсказка на этап</label>
	<input type="text" name="task[help][]"><br>
	<button type="submit" id="send">Создать</button>
</form>
<button onclick="add_task()">Добавить этап</button>

<?php
include 'markup/footer.php';
?>