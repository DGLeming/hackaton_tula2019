<p id="success_p">Поздравляем, вы прошли квест "<?=$quest['name']?>"! Вот немного информации о нем:</p>
<div class="quest_item_copy">
	<?php
	if($quest['img'] != ''){
		$img_link = $quest['img'];
	} else {
		$img_link = 'img/fun.jpg';
	}
	?>
	<img src="<?=$img_link?>" class="quest_img">
	<p class="quest_name"><?=$quest['name']?></p>
	<p class="quest_description"><?=$quest['description']?></p>
	<p class="quest_author">Автор: <?=$quest['creator']?></p>
	<div class="quest_rating">
		<p>Рейтинг:</p>
		<p><?=$quest['rating']?> баллов</p>
	</div>
</div>
<div id="quest_ending">
	<p>Пожалуйста, оцените квест:<p>
	<button onclick="quest_rating(<?=$quest['id']?>,true)" class='quest_send_ansver'>Понравился</button>
	<button onclick="quest_rating(<?=$quest['id']?>,false)" class='quest_send_ansver'>Не понравился</button>
</div>