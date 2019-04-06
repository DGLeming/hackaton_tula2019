<p id="success_p">Поздравляем, вы прошли квест "<?=$quest['name']?>"! Вот немного информации о нем:</p>
<div class="quest_item_copy">
	<img src="img/fun.jpg" class="quest_img">
	<p class="quest_name">Название квеста1</p>
	<p class="quest_description">Описание квеста может быть довольно обширным, так что надо написать длинный текст для проверки того, как будет вести себя верстка</p>
	<p class="quest_author">Автор: DGLeming</p>
	<div class="quest_rating">
		<p>Рейтинг:</p>
		<p>10 баллов</p>
	</div>
</div>
<div id="quest_ending">
	<p>Пожалуйста, оцените квест:<p>
	<button onclick="quest_rating(<?=$quest['id']?>,true)" class='quest_send_ansver'>Понравился</button>
	<button onclick="quest_rating(<?=$quest['id']?>,false)" class='quest_send_ansver'>Не понравился</button>
</div>