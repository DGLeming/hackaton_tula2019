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
	<!-- Page Title -->
	<section class="page-title">
		<div class="auto-container">
			<h1>Квесты</h1>
			<ul class="page-breadcrumb">
				<li><a href="#">Квесты</a></li>
				
			</ul>
		</div>
	</section>
	<!-- End Page Title -->
	
	<!-- Shop Page Section -->
	<section class="page-title-cat">
		<div class="auto-container">
			<h1>Лучшее:</h1>
			
		</div>
	</section>
	<section class="quest-page-section">
		<div class="auto-container">
			<div class="row clearfix">
				<?php
				$stmt = $pdo->query('SELECT * FROM quests');
				while ($row = $stmt->fetch())
				{
					if($row['img'] != ''){
						$img_link = $row['img'];
					} else {
						$img_link = 'images/fun.jpg';
					}
				    echo '<div class="shop-item col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="image">
									<img src="'.$img_link.'" alt= ""/>
									<!-- Overlay Box -->
									<div class="overlay-box">
										<div class="overlay-inner">
											<h4><a href="quest_'.$row['id'].'_1">'.$row['name'].'</a></h4>
											<div class="price">'.$row['description'].'</div>
											<div class="price">Рейтинг: '.$row['rating'].'</div>
											<div class="price">Пользователей: '.$row['started'].'</div>
											<ul class="product-list">
												<li><a href="quest_'.$row['id'].'_1"><i class="fas fa-play"></i></a></li>
												<!--<li><a href="#"><span class="icon flaticon-heart"></span></a></li>-->
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>';
				}
				?>
				<!-- Shop Item -->
				<!-- <div class="shop-item col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/products/1.jpg" alt= ""/>
							<div class="overlay-box">
								<div class="overlay-inner">
									<h4><a href="shop-single.html">Квест первый</a></h4>
									<div class="price">Тут описание</div>
									<ul class="product-list">
										<li><a href="#"><i class="fas fa-play"></i></a></li>
										<li><a href="#"><span class="icon flaticon-heart"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!-- Скролл квестов
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="text-center">
						<ul class="styled-pagination">
							<li class="prev"><a href="#"><span class="fa fa-angle-left"></span> &nbsp; Назад</a></li>
							<li><a href="#" class="active">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li class="next"><a href="#">Вперед &nbsp; <span class="fa fa-angle-right"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4"></div>-->
			</div>
		</div>
	</section>
	<!-- End Shop Page Section -->
	<section class="page-title-cat">
		<div class="auto-container">
			<h1>Горячее:</h1>
			
		</div>
	</section>
	<section class="quest-page-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Shop Item -->
				<?php
				$stmt = $pdo->query('SELECT * FROM quests');
				while ($row = $stmt->fetch())
				{
					if($row['img'] != ''){
						$img_link = $row['img'];
					} else {
						$img_link = 'images/fun.jpg';
					}
				    echo '<div class="shop-item col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="image">
									<img src="'.$img_link.'" alt= ""/>
									<!-- Overlay Box -->
									<div class="overlay-box">
										<div class="overlay-inner">
											<h4><a href="quest_'.$row['id'].'_1">'.$row['name'].'</a></h4>
											<div class="price">'.$row['description'].'</div>
											<div class="price">Рейтинг: '.$row['rating'].'</div>
											<div class="price">Пользователей: '.$row['started'].'</div>
											<ul class="product-list">
												<li><a href="quest_'.$row['id'].'_1"><i class="fas fa-play"></i></a></li>
												<!--<li><a href="#"><span class="icon flaticon-heart"></span></a></li>-->
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>';
				}
				?>
			</div>
		</div>
	</section>
	<section class="page-title-cat">
		<div class="auto-container">
			<h1>Свежее:</h1>
			
		</div>
	</section>
	<section class="quest-page-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Shop Item -->
				<?php
				$stmt = $pdo->query('SELECT * FROM quests');
				while ($row = $stmt->fetch())
				{
					if($row['img'] != ''){
						$img_link = $row['img'];
					} else {
						$img_link = 'images/fun.jpg';
					}
				    echo '<div class="shop-item col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="image">
									<img src="'.$img_link.'" alt= ""/>
									<!-- Overlay Box -->
									<div class="overlay-box">
										<div class="overlay-inner">
											<h4><a href="quest_'.$row['id'].'_1">'.$row['name'].'</a></h4>
											<div class="price">'.$row['description'].'</div>
											<div class="price">Рейтинг: '.$row['rating'].'</div>
											<div class="price">Пользователей: '.$row['started'].'</div>
											<ul class="product-list">
												<li><a href="quest_'.$row['id'].'_1"><i class="fas fa-play"></i></a></li>
												<!--<li><a href="#"><span class="icon flaticon-heart"></span></a></li>-->
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>';
				}
				?>
			</div>
		</div>
	</section>
<?php
include 'markup/footer.php';
?>