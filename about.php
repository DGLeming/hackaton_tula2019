<?php
include 'scripts/db.php';
session_start();
if($_SESSION['user'] != ''){
	$isLogged = true;
} else {
	$isLogged = false;
}
include 'markup/header.php';
?>	
	<section class="page-title">
		<div class="auto-container">
			<h1>О нас</h1>
			<ul class="page-breadcrumb">
				<li><a href="#">Главная</a></li>
				<li>О нас</li>
			</ul>
		</div>
	</section>

	<section class="we-are-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="title-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<h6>Кто мы</h6>
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<h4>Чего мы хотим:</h4>
						<div class="text">Предоставить любителям квестов возможность делиться радостью со своими друзьями, ведь на нашем сайте можно создавать эти самые квесты (сори, описание писал в час ночи)</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<h4>История</h4>
						<div class="text">Как-то на одном из хакатонов нам не понравился не один из кейсов и мы решил придумать что-то свое, в процессе раздумей нам и пришла идея - создать сервис, позволяющий создавать квесты для друзей, так и появился этот сайт </div>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	<section class="services-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<h6>Наша команда</h6>
			</div>
			
			<div class="row clearfix">
				
				<!-- Services Block Two -->
				<div class="services-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow bounceIn animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: bounceIn;">
						<div class="image">
							<img src="images/creators/kir.png" alt="">
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<!-- Social Icon Two -->
										<ul class="social-icon-two">
											<li><a href="#"><i class="fab fa-vk"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											
										</ul>
										<div class="text-content">
											<h6>Тут у нас некто</h6>
											<div class="designation">Разработчик</div>
											<div class="text">то-то то-то (у него есть скальпель) </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Services Block Two -->
				<div class="services-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow bounceIn animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: bounceIn;">
						<div class="image">
							<img src="images/creators/vlad.png" alt="">
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<!-- Social Icon Two -->
										<ul class="social-icon-two">
											<li><a href="#"><i class="fab fa-vk"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											
										</ul>
										<div class="text-content">
											<h6>Тут у нас некто</h6>
											<div class="designation">Разработчик-воришка</div>
											<div class="text">то-то то-то (любит api для карт) </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Services Block Two -->
				<div class="services-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow bounceIn animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: bounceIn;">
						<div class="image">
							<img src="images/creators/mih.png" alt="">
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<!-- Social Icon Two -->
										<ul class="social-icon-two">
											<li><a href="#"><i class="fab fa-vk"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											
										</ul>
										<div class="text-content">
											<h6>Тут у нас некто</h6>
											<div class="designation">Генератор-идей</div>
											<div class="text">то-то то-то (постоянно ищет полезную информацию для выступления)</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Services Block Two -->
				<div class="services-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow bounceIn animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: bounceIn;">
						<div class="image">
							<img src="images/creators/anna.png" alt="">
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<!-- Social Icon Two -->
										<ul class="social-icon-two">
											<li><a href="#"><i class="fab fa-vk"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											
										</ul>
										<div class="text-content">
											<h6>Тут у нас некто</h6>
											<div class="designation">Художник</div>
											<div class="text">то-то то-то (любит порисовать в блокноте)</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Services Block Two -->
				<div class="services-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow bounceIn animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: bounceIn;">
						<div class="image">
							<img src="images/creators/andr.png" alt="">
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<!-- Social Icon Two -->
										<ul class="social-icon-two">
											<li><a href="#"><i class="fab fa-vk"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											
										</ul>
										<div class="text-content">
											<h6>Тут у нас некто</h6>
											<div class="designation">Разработчик</div>
											<div class="text">то-то то-то (любит спать)</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Services Block Two -->
				<div class="services-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow bounceIn animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: bounceIn;">
						<div class="image">
							<img src="images/creators/tss.png" alt="">
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<!-- Social Icon Two -->
										<ul class="social-icon-two">
											<li><a href="#"><i class="fab fa-vk"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											
										</ul>
										<div class="text-content">
											<h6>Тут у нас некто</h6>
											<div class="designation">Допольнительный участник</div>
											<div class="text">то-то то-то (только тсссс)</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!-- Services Block Two -->
				<div class="services-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow bounceIn animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: bounceIn;">
						<div class="image">
							<img src="images/creators/roma.png" alt="">
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<!-- Social Icon Two -->
										<ul class="social-icon-two">
											<li><a href="#"><i class="fab fa-vk"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											
										</ul>
										<div class="text-content">
											<h6>Тут у нас некто</h6>
											<div class="designation">Шпион с камерой</div>
											<div class="text">то-то то-то (не дает пуфики)</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
<?php
include 'markup/footer.php';
?>