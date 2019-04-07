<?php
session_start();
if($_SESSION['user'] != ''){
	$isLogged = true;
} else {
	header('Location: /login');
}


include 'markup/header.php';
?>
	<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
    <script src="http://js.api.here.com/v3/3.0/mapsjs-pano.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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

											<div class="form-group">
												<span class="icon"><i class="fas fa-brain"></i></span>
												<input type="text" name="task[addres][]" placeholder="Адрес объекта" id="address0" oninput="showMap(0)">
											</div>

											<div class="form-group">
												<div style="width: 400px; height: 400px" id="mapContainer0"></div>
											</div>

											<div class="form-group">
												<span style="color:white">ЭТАП 2</span>
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

											<div class="form-group">
												<span class="icon"><i class="fas fa-brain"></i></span>
												<input type="text" name="task[addres][]" placeholder="Адрес объекта" id="address1" oninput="showMap(1)">
											</div>

											<div class="form-group">
												<div style="width: 400px; height: 400px" id="mapContainer1"></div>
											</div>

											
											<div class="form-group" id="question_add_step" onclick="add_task()">
												<button class="theme-btn submit-btn comment-btn" type="button">Добавить вопрос</button>
											</div>
											<p style="display: none" id="quest_steps_num">1</p>

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
<script src="js/vlad.js"></script>
	
<?php
include 'markup/footer.php';
?>