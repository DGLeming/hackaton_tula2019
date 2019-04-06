<?php
include 'db.php';
session_start();
if($_SESSION['user'] == '' || !$_SESSION['user']){
	header('Location: /');
}

$stmt = $pdo->query('SELECT * FROM tasks WHERE id = '.$_POST['task_id']);
$task = $stmt->fetch();
if($_POST['ansver'] == $task['ansver']){
	$stmt = $pdo->query('SELECT * FROM users WHERE login = "'.$_SESSION['user'].'"');
	$user = $stmt->fetchAll();
	$quests = json_decode($user[0]['quests_done']);
	for($i = 0; $i < count($quests); $i++){
		if($quests[$i][0] == $task['original_quest']){
			$quests[$i][1]++;
			$quests_encoded = json_encode($quests);
			$statement = $pdo->prepare("UPDATE users SET quests_done = ? WHERE login = ?");
			$statement->execute(array($quests_encoded, $_SESSION['user']));
		}
	}
	echo 'right';
} else {
	echo 'wrong';
}
?>