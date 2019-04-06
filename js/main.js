function add_task(){
	document.getElementById('send').outerHTML = '<label>Вопрос этапа</label><input type="text" name="task[descriptions][]"><br><label>Ответ на этап</label><input type="text" name="task[ansvers][]"><br><label>Подсказка на этап</label><input type="text" name="task[help][]"><br><button type="submit" id="send">Создать</button>';
	//подсказка
}