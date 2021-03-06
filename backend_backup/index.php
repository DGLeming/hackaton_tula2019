<?php
include 'scripts/db.php';
session_start();
if($_SESSION['user'] != ''){
	$isLogged = true;
} else {
	$isLogged = false;
}
$stmt = $pdo->query('SELECT id FROM quests');
$quests_ids = array();
while ($row = $stmt->fetch()){
	array_push($quests_ids, $row['id']);
}
$quests_num = count($quests_ids);
$random_quest_num = rand(0, $quests_num);
$random_quest_id = $quests_ids[$random_quest_num];


include 'markup/header.php';
?>
<div class="quests_list">
	<div class="quests_sorting">
		<p class="quests_sorting_type" id='quests_sorting_type_1'>Горячие</p>
		<p class="quests_sorting_type" id='quests_sorting_type_2'>Лучшие</p>
		<p class="quests_sorting_type" id='quests_sorting_type_3'>Новые</p>
	</div>
	<?php
	$stmt = $pdo->query('SELECT * FROM quests');
	while ($row = $stmt->fetch())
	{
		if($row['img'] != ''){
			$img_link = $row['img'];
		} else {
			$img_link = 'img/fun.jpg';
		}
	    echo '<div class="quest_item" link="quest_'.$row['id'].'">
				<img src="'.$img_link.'" class="quest_img">
				<p class="quest_name">'.$row['name'].'</p>
				<p class="quest_description">'.$row['description'].'</p>
				<p class="quest_author">Автор: '.$row['creator'].'<br>Квест прошло '.$row['finished'].' человек из '.$row['started'].' начавших его</p>
				<div class="quest_rating">
					<p>Рейтинг:</p>
					<p>'.$row['rating'].' баллов</p>
				</div>
			</div>';
	}
	?>
	<!-- <div class="quest_item" link="quest_1">
		<img src="img/fun.jpg" class="quest_img">
		<p class="quest_name">Название квеста1</p>
		<p class="quest_description">Описание квеста может быть довольно обширным, так что надо написать длинный текст для проверки того, как будет вести себя верстка</p>
		<p class="quest_author">Автор: DGLeming</p>
		<div class="quest_rating">
			<p>Рейтинг:</p>
			<p>10 баллов</p>
		</div>
	</div> -->
</div>
<div class="right_menu">
	<div class="right_menu_item">
		<p>Основные возможности</p>
		<ul type="square">
			<li>
				<a href="/create_quest" class="right_menu_link">Создать квест</a>
			</li>
			<li>
				<a href="/quest_<?=$random_quest_id?>_1" class="right_menu_link">Случайный квест</a>
			</li>
		</ul>
	</div>
</div>

<?php
include 'markup/footer.php';
?>