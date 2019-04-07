<div class="play_quest_about_block">
	<p class="quest_play_name"><?=$quest['name']?></p>
	<p class="quest_step">Этап <?=$user_task?> из <?=$this_quest_total_parts?></p>
	<p class="quest_played">Квест завершило <?=$quest['finished']?> человек из <?=$quest['started']?>, которые его начинали</p>
</div>
<div class="play_quest_about_block">
	<p class="quest_play_question">Вопрос: <?=$task['question']?></p>
	<textarea type="text" name="ansver" placeholder="Ваш ответ" id="ansver"></textarea>
	<button onclick="send_ansver(<?=$task_id;?>,<?=$_GET['task'];?>)" class='quest_send_ansver'>Отправить ответ</button>
</div>
<p style="display: none" id="quest_id"><?=$quest['id']?></p>
<p id="error_p"></p>
<p id="success_p"></p>