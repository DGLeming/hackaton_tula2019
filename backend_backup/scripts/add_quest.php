<?php
include 'db.php';
session_start();
if($_SESSION['user'] != ''){
	$ids = array();
	for($i = 0; $i < count($_POST['task']['descriptions']); $i++){
		$query = $pdo->prepare("INSERT INTO tasks (question,ansver,help) VALUES (?,?,?)");
		$query->execute(array($_POST['task']['descriptions'][$i],$_POST['task']['ansvers'][$i],$_POST['task']['help'][$i]));
		array_push($ids, $pdo->lastInsertId());
	}
	$query = $pdo->prepare("INSERT INTO quests (name,description,reward,creator,tasks) VALUES (?,?,?,?,?)");
	$query->execute(array($_POST['name'],$_POST['description'],1,$_SESSION['user'],json_encode($ids)));
	$quest_id = $pdo->lastInsertId();
	for($i = 0; $i < count($ids); $i++){
		$statement = $pdo->prepare("UPDATE tasks SET original_quest = ? WHERE id = ?");
		$statement->execute(array($quest_id, $ids[$i]));
	}
	header('Location: /');
} else {
	header('Location: /');
}
?>