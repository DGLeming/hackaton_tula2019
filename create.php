<?php
session_start();
if($_SESSION['user'] != ''){
	$isLogged = true;
} else {
	header('Location: /login');
}


include 'markup/header.php';
?>
	<section class="page-title">
		<div class="auto-container">
			<h1></h1>
			<ul class="page-breadcrumb">
				<li><a href="#">Главная</a></li>
				<li>Создание квеста</li>
			</ul>
		</div>
	</section>

	<div class="comment-form">
							
							<!-- Contact Form -->
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4">
									<div class="contact-form">
									
								<!--Contact Form-->
								<form action="scripts/add_quest.php" method="post" id="form">
									<div class="row clearfix">
									
										<div class="column col-lg-12 col-md-12 col-sm-12">
											
											<div class="form-group">
												<span class="icon fa fa-user"></span>
												<input type="text" name="name" placeholder="Название">
											</div>
											
											<div class="form-group">
												<span class="icon"><i class="fas fa-gamepad"></i></span>
												<input type="text" name="description" placeholder="Описание">
											</div>

											<div class="form-group">
												<span style="color:white">ЭТАП 1</span>
											</div>
											<div class="form-group">
												<span class="icon"><i class="fas fa-question"></i></span>
												<input type="text" name="task[descriptions][]" placeholder="Вопрос">
											</div>

											<div class="form-group">
												<span class="icon"><i class="fas fa-pen-fancy"></i></span>
												<input type="text" name="task[ansvers][]" placeholder="Ответ">
											</div>

											<div class="form-group">
												<span class="icon"><i class="fas fa-brain"></i></span>
												<input type="text" name="task[help][]" placeholder="Подсказка к этапу">
											</div>
											
											<div class="form-group" id="question_add_step" onclick="add_task()">
												<button class="theme-btn submit-btn comment-btn" type="button">Добавить вопрос</button>
											</div>
											<p style="display: none" id="quest_steps_num">1</p>

											<!-- <div class="form-group">
												<button class="theme-btn submit-btn comment-btn" type="submit" name="addQM">Добавить вопрос с картой</button>
											</div>

											<div class="form-group">
												<button class="theme-btn submit-btn comment-btn" type="submit" name="addC">
													Добавить категории
												</button>
											</div> -->

											<div class="form-group">
												<button class="theme-btn submit-btn comment-btn" type="submit" name="submit-form">Создать</button>
											</div>
											
										</div>
										
									
										
										
									</div>
								</form>
									
							</div>
								</div>
								<div class="col-md-4"></div>
							</div>
							
							<!--End contact Form -->
						</div>
	
<?php
include 'markup/footer.php';
?>