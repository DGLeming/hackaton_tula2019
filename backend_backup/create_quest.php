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
	<div class="border_block" id="create_quest_block1">
		<label for="name">Название: </label>
		<input type="text" name="name"><br><br>
		<label for="description">Описание: </label>
		<textarea type="text" name="description"></textarea>
	</div>
	<div class="create_quest_buttons_div">
		<button onclick="add_task()" class="create_quest_buttons" id="create_quest_add_step" type="button">Добавить этап</button>
		<button type="submit" id="send" class="create_quest_buttons">Создать</button>
	</div>
	<div class="border_block create_quest_step">
		<p>Этап #1</p>
		<label>Вопрос этапа: </label>
		<textarea type="text" name="task[descriptions][]"></textarea><br><br>
		<label>Ответ на этап: </label>
		<input type="text" name="task[ansvers][]"><br><br>
		<label>Подсказка на этап: </label>
		<input type="text" name="task[help][]">
	</div>
	<p id="work_stuff" style="display: none">1</p>	
</form>

<?php
include 'markup/footer.php';
?>