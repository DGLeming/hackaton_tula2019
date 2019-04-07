<?php
include 'scripts/db.php';
session_start();
if($_SESSION['user'] == '' || !$_SESSION['user']){
	header('Location: /login');
} else {
	$isLogged = true;
}
$stmt = $pdo->query('SELECT * FROM quests WHERE id = '.$_GET['id']);
$quest = $stmt->fetch();
$this_quest_total_parts = count(json_decode($quest['tasks']));

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
	$statement = $pdo->prepare("UPDATE quests SET started = ? WHERE id = ?");
	$statement->execute(array($quest['started']+1, $quest['id']));
}
if($user_task != $_GET['task']){
	header('Location: /quest_'.$_GET['id'].'_'.$user_task);
}



$stmt = $pdo->query('SELECT * FROM quests WHERE id = '.$_GET['id']);
$quest = $stmt->fetch();
$task_id = json_decode($quest['tasks']);
$task_id = $task_id[$_GET['task']-1];
if($_GET['task'] <= $this_quest_total_parts){
	$stmt_task = $pdo->query('SELECT * FROM tasks WHERE id = '.$task_id);
	$task = $stmt_task->fetch();
}
if($this_quest_total_parts >= $user_task){
	//показываем сам квест
	$playing = true;
} else {
	$ended = json_decode($quest['ended']);
	$found = false;
	for($i = 0; $i < count($ended); $i++){
		if($ended[$i] == $user[0]['id']){
			$found = true;
		}
	}
	if(!$found){
		array_push($ended,$user[0]['id']);
		$statement = $pdo->prepare("UPDATE quests SET finished = ?, ended = ? WHERE id = ?");
		$statement->execute(array($quest['finished']+1, json_encode($ended), $quest['id']));
	}
	$playing = false;
	//показываем закрывающий экран
}




include 'markup/header.php';
?>
	<section class="page-title">
		<div class="auto-container">
			<h1></h1>
			<ul class="page-breadcrumb">
				<li><a href="/">Главная</a></li>
				<li><?=$quest['name']?></li>
			</ul>
		</div>
	</section>

	<div class="comment-form">
							
							<!-- Contact Form -->
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4">
									<div class="contact-form">
										<?php
										if($playing){?>
										<!--Contact Form-->
										<form>
											<div class="row clearfix">
											
												<div class="column col-lg-12 col-md-12 col-sm-12">
													<div class="form-group" style="display: none;" id="quest_message">
														<p id="quest_message_p" style="font-weight: bold;">НЕ ВЕРНО!</p>
													</div>
													<p id="quest_id" style="display: none;"><?=$quest['id']?></p>
													<p id="task_id" style="display: none"><?=$task['id']?></p>
													<div class="form-group">
														<span class="icon"><i class="fas fa-question"></i></span>
														<label class="play_quest_question"><?=$task['question']?></label>
													</div>

													<div class="form-group" style="display: none;" id="question_hint">
														<span class="icon"><i class="fas fa-question"></i></span>
														<label class="play_quest_hint"><?=$task['help']?></label>
													</div>

													
													
													<div class="form-group">
														<span class="icon"><i class="fas fa-gamepad"></i></span>
														<input type="text" name="ansver" placeholder="Ответ" required="" id="question_ansver">
													</div>


													


													<div class="form-group">
														<button class="theme-btn submit-btn comment-btn" type="button" name="giveAns" id="question_send_ansver">
															Ответить
														</button>
													</div>

													<div class="form-group" onclick="get_hint()">
														<button class="theme-btn submit-btn comment-btn" type="button" name="getAdv">Получить подсказку</button>
													</div>
												</div>
											</div>
										</form>
										<?php
										} else {?>
											<div>
											<div class="row clearfix">
											
												<div class="column col-lg-12 col-md-12 col-sm-12">
													<div class="form-group" style="display: none;" id="quest_message">
														<p id="quest_message_p" style="font-weight: bold;">НЕ ВЕРНО!</p>
													</div>
													<div class="form-group">
														<!-- <span class="icon"><i class="fas fa-question"></i></span> -->
														<label class="play_quest_question">Спасибо за прохождение квеста!</label>
													</div>
													<div class="form-group">
														<!-- <span class="icon"><i class="fas fa-question"></i></span> -->
														<label class="play_quest_question" style="height: 70px">Пожалуйста, оцените квест с помощью кнопок внизу.</label>
													</div>											


													<div class="form-group">
														<button class="theme-btn submit-btn comment-btn" type="button" name="giveAns" id="question_rate_good" onclick="quest_rating(<?=$quest['id']?>,true)">
															Квест мне понравился
														</button>
													</div>
													<div class="form-group">
														<button class="theme-btn submit-btn comment-btn" type="button" name="giveAns" id="question_rate_bad" onclick="quest_rating(<?=$quest['id']?>,false)">
															Квест мне не понравился
														</button>
													</div>
													<div class="form-group">
														<button class="theme-btn submit-btn comment-btn" type="button" name="giveAns" id="question_send_ansver" onclick="window.location.href='/'">
															На главную
														</button>
													</div>
												</div>
											</div>
										</div>
										<?php }?>								
									</div>
								</div>
								<div class="col-md-4"></div>
							</div>
							
							<!--End contact Form -->
						</div>
<?php
include 'markup/footer.php';
?>