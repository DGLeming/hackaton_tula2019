<?php
include 'db.php';
session_start();
if($_SESSION['user'] == '' || !$_SESSION['user']){
	header('Location: /');
}
$stmt = $pdo->query('SELECT * FROM users WHERE login = "'.$_SESSION['user'].'"');
$user = $stmt->fetch();
$ratings = json_decode($user['rated']);
$found = false;
$stmt = $pdo->query('SELECT * FROM quests WHERE id = '.$_POST['quest_id']);
$quest = $stmt->fetch();
for($i = 0; $i < count($ratings); $i++){
	if($ratings[$i][0] == $_POST['quest_id']){
		$found = true;
		if($_POST['like'] == 'like'){
			$liked = true;
		} else if($_POST['like'] == 'dislike'){
			$liked = false;
		}
		if($ratings[$i][1] == 1){
			$liked_before = true;
		} else if ($ratings[$i][1] == 0){
			$liked_before = false;
		}
		if($liked_before && !$liked){
			$ratings[$i][1] = 0;
			echo $liked;
			$statement = $pdo->prepare("UPDATE quests SET rating = ? WHERE id = ?");
			$statement->execute(array($quest['rating']-2, $_POST['quest_id']));
			$statement = $pdo->prepare("UPDATE users SET rated = ? WHERE login = ?");
			$statement->execute(array(json_encode($ratings), $_SESSION['user']));
		}
		if(!$liked_before && $liked){
			$ratings[$i][1] = 1;
			$statement = $pdo->prepare("UPDATE quests SET rating = ? WHERE id = ?");
			$statement->execute(array($quest['rating']+2, $_POST['quest_id']));
			$statement = $pdo->prepare("UPDATE users SET rated = ? WHERE login = ?");
			$statement->execute(array(json_encode($ratings), $_SESSION['user']));
		}
	}
}
if(!$found){
	if($_POST['like'] == 'like'){
		$liked = 1;
		$liked2 = 1;
	} else if($_POST['like'] == 'dislike'){
		$liked = 0;
		$liked2 = -1;
	}
	array_push($ratings, array($_POST['quest_id'], $liked));
	$statement = $pdo->prepare("UPDATE users SET rated = ? WHERE login = ?");
	$statement->execute(array(json_encode($ratings), $_SESSION['user']));
	$statement = $pdo->prepare("UPDATE quests SET rating = ? WHERE id = ?");
	$statement->execute(array($quest['rating']+$liked2, $_POST['quest_id']));
}
?>