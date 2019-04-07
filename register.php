<?php
session_start();
if($_SESSION['user'] != ''){
	header('Location: /');
} else {
	$isLogged = false;
}
switch ($_GET['error_code']) {
	case '1':
		$error = 'Пользователь с таким логином уже зарегистрирован';
		break;
	case 2:
		$error = 'Пользователь с таким e-mail уже зарегистрирован';
		break;
	case 3:
		$error = 'Введенные пароли не совпадают';
		break;
	default:
		$error = '';
		break;
}
include 'markup/header.php';
?>
	<section class="page-title">
		<div class="auto-container">
			<h1></h1>
			<ul class="page-breadcrumb">
				<li><a href="/">Главная</a></li>
				<li>Регистрация</li>
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
								<form action="scripts/register_script.php" method="POST">
									<div class="row clearfix">
									
										<div class="column col-lg-12 col-md-12 col-sm-12">
											
											<?php if($error != '') {?>
											<div class="form-group" id="quest_message" style="color: red;">
												<p id="quest_message_p" style="font-weight: bold;"><?=$error?></p>
											</div>
											<?php } ?>

											<div class="form-group">
												<span class="icon fa fa-user"></span>
												<input type="text" name="login" placeholder="логин" required="">
											</div>

											<div class="form-group">
												<span class="icon fa fa-envelope"></span>
												<input type="text" name="email" placeholder="e-mail" required="">
											</div>
											
											<div class="form-group">
												<span class="icon fa fa-lock"></span>
												<input type="password" name="password1" placeholder="пароль" required="">
											</div>

											<div class="form-group">
												<span class="icon fa fa-lock"></span>
												<input type="password" name="password2" placeholder="повторите пароль" required="">
											</div>
											

											<div class="form-group">
												<button class="theme-btn submit-btn comment-btn" type="submit" name="submit-form">Войти</button>
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