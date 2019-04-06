<?php
include 'scripts/db.php';
session_start();
if($_SESSION['user'] == '' || !$_SESSION['user']){
	header('Location: /');
}

$stmt_user = $pdo->query('SELECT * FROM users WHERE login = "'.$_SESSION['user'].'"');
$user = $stmt_user->fetchAll();
$user_quests = json_decode($user[0]['quests_done']);
$user_task = 0;
for($i = 0; $i < count($user_quests); $i++){
	if((int)$user_quests[$i][0] == (int)$_GET['id']){
		$user_task = $user_quests[$i][1];
	}
}
if($user_task == 0){
	array_push($user_quests, array((int)$_GET['id'],1));
	$user_quests_encoded = json_encode($user_quests);
	$statement = $pdo->prepare("UPDATE users SET quests_done = ? WHERE login = ?");
	$statement->execute(array($user_quests_encoded, $_SESSION['user']));
	$user_task = 1;
}
if($user_task != $_GET['task']){
	header('Location: /quest_'.$_GET['id'].'_'.$user_task);
}

include 'markup/header.php';
?>

<?php
$stmt = $pdo->query('SELECT * FROM quests WHERE id = '.$_GET['id']);
$quest = $stmt->fetch();
$task_id = json_decode($quest['tasks']);
$task_id = $task_id[$_GET['task']-1];
$stmt_task = $pdo->query('SELECT * FROM tasks WHERE id = '.$task_id);
$task = $stmt_task->fetch();
echo $task['question'];
echo '<br>Otvet:'.$task['ansver'];
echo '<br>Подсказка'.$task['help'];






?>
<p class="quest_play_name"><?=$quest['name']?></p>
<p class="quest_play_question"><?=$task['question']?></p>
<input type="text" name="ansver" placeholder="Ваш ответ" id="ansver">
<button onclick="send_ansver(<?=$task_id;?>,<?=$_GET['task'];?>)">Отправить ответ</button>
<p style="display: none" id="quest_id"><?=$quest['id']?></p>
<p id="error_p"></p>
<p id="success_p"></p>


<?php
include 'markup/footer.php';
?>