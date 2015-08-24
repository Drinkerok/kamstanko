function handleMessage() {
	$('#send_message').click(function(event) {
	
		event.preventDefault();
		
		//check if all the information is there
		var name = $('#name');
		var email = $('#email');
		var message = $('#message');
		
		if (((validate(name)) +(validate(email)) + (validate(message))) == 3)
		{
			name = name.val();
			email = email.val();
			message = message.val();
			//alert ('sending request');
			$.ajax({
				url:"php/message_process.php",
				data: "name="+name +"&email="+ email + "&message="+message,
				dataType: "html",
				success: function(data)
				{
					$('#status').html(data);
					
					if (data =='Ваше сообщение отправлено успешно. Спасибо!'){
						name.val() = '';
						email.val() = '';
						message.val() = '';
						
					}
				}
			}); //end of ajax
		}
		
	}); //end of click
}


function validate(field) {
	var missing;
	$('.' + field.attr('id') + ' .warning').html('');
	
	if (field.val() == '') {
		if (field.attr('id')== 'name'){
			missing = 'имя';
		} else if (field.attr('id') == 'email'){
			missing = 'электронный адрес';
		} else {
			missing = 'сообщение';
		}
		$('.' + field.attr('id')).append('<span class="warning"> Пожалуйста введите '+ missing +'</span"');
		return 0;
	}
	else
	{
		return 1;
	}
}

(function(){
	handleMessage();
})();