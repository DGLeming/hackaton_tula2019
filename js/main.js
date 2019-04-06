function add_task(){
    step_new = parseInt(document.getElementById('work_stuff').innerHTML) + 1;
	document.getElementById('work_stuff').outerHTML = '<div class="border_block create_quest_step"><p>Этап #'+step_new+'</p><label>Вопрос этапа: </label><textarea type="text" name="task[descriptions][]"></textarea><br><br><label>Ответ на этап: </label><input type="text" name="task[ansvers][]"><br><br><label>Подсказка на этап: </label><input type="text" name="task[help][]"></div><p id="work_stuff" style="display: none">'+step_new+'</p>';
    window.scrollTo(0, document.body.scrollHeight);
}

function send_ansver(task_id,task_num){
	ansver = $('#ansver')[0].value;
	quest_id = parseInt($('#quest_id')[0].innerHTML)
	$('#success_p')[0].innerHTML = '';
	$('#error_p')[0].innerHTML = '';
	$.post( "scripts/task_check.php", { 'task_id': task_id, 'ansver': ansver})
        .done(function( data ) {
        	console.log(data);    
        if(data == 'right'){
        	$('#success_p')[0].innerHTML = 'Поздравляем, ваш ответ принят, через 3 секунды вы будете перенаправлены к следующему заданию!';	
        	setTimeout(function(){
        		window.location.href = "/quest_"+quest_id+"_"+(task_num+1);
        	}, 3000);

        	
        }
        if(data == 'wrong'){
        	$('#error_p')[0].innerHTML = 'К сожалению - ответ не верный, попробуйте снова';
        }
    });
}

function quests_sort (type) {
    console.log(type);
}

$('#quests_sorting_type_1').click(function(){
    quests_sort('hot');
});

$('#quests_sorting_type_2').click(function(){
    quests_sort('best');
});

$('#quests_sorting_type_3').click(function(){
    quests_sort('fresh');
});

$('.quest_item').click(function(){
    window.location.href="/"+this.getAttribute('link')+"_1";
});

$('#logo').click(function(){
    window.location.href = '/';
})

function quest_rating(quest_id, liked){
    if(liked){
        like = 'like';
    } else {
        like = 'dislike';
    }
    $.post( "scripts/rate_quest.php", { 'quest_id': quest_id, 'like': like})
        .done(function( data ) {
        console.log(data);    
    });
}

$('#create_quest_add_step').submit(function(){
return false;
});