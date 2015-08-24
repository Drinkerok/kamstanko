<?php
//mail processing script

	$name = $_GET['name'];
	$email = $_GET['email'];
	$message = $_GET['message'];

	// remove escape characters from POST array
	if (PHP_VERSION < 6 && get_magic_quotes_gpc())  
	{
  		function stripslashes_deep($value) 
  		{
    		$value = is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value);
    		return $value;
    	}
    	
  		$_POST = array_map('stripslashes_deep', $_POST);
  	}

	//$to = 'dmkazantsev@gmail.com';
	$to = 'office@kamstanko.ru';
	$subject= 'Получено сообщение с вебсайта';
	
	//set required fields
	$required = array('name', 'email', 'message');
	
	//create empty array for any missing fields
	$missing = array();

	//assume that there is nothing susupect
	$suspect = false;
	
	//create a pattern to locate suspect phrases
	$pattern = '/Content-Type:|Bcc:|Cc:/i';

	//function to check 4 suspect phrases
	function isSuspect($val, $pattern, $suspect) 
	{
		//if the variable is an array, loop through each element
		//and pass if recursively back to the same function
		if (is_array($val)) 
		{
			foreach ($val as $item) 
			{
				isSuspect($item, $pattern, $suspect);
			}
		}
		else 
		{
			//if one of the suspect phrases is found, set Boolean to true
			if(preg_match($pattern, $val)) 
			{
				$suspect = true;
			}
		}
	}
	
	//don't send message if it contains suspishious patterns
	//user will get a warning that there was a problem sending a message
	if ($suspect) 
	{
		$mailSent = false;
		unset($missing);
	}
	else //everything is fine
	{
		foreach ($_GET as $key => $value) 
		{
			//assign to temporary variable and strip whitespace 
			$temp = is_array($value) ? $value : trim($value);
			
			//if empty and required, add to $missing array
			if (empty($temp) && in_array($key, $required))
			{
				array_push($missing, $key);
			} 
			elseif (in_array($key, $required)) //otherwise assign to a variable of the same name as $key
			{
				${$key} = $temp;
			}
		}
	}

	//validate the email address
	if (!empty($email)) 
	{
		// regex to identify illegal characters in email address
		$checkEmail = '/^[^@]+@[^\s\r\n\'";,@%]+$/';
		//reject the email address if it doesn't match
		if (!preg_match($checkEmail, $email)) 
		{
			$suspect = true;
			$mailSent = false;
			unset($missing);
			echo 'Неправильный адрес электронной почты';
		}
	}

	//go ahead only if not suspecious and all required fields are ok
	if (!$suspect && empty($missing))
	{
		// build the message
    	$messageBody = "Имя: $name\n\n";
    	$messageBody .= "Электронная почта: $email\n\n";
    	$messageBody .= "Сообщение: $message\n\n";
	
		//limit line lenght to 70 characters
		$messageBody = wordwrap($messageBody, 70);

		//create additional headers
		$headers = "From: <$email>\r\n";
		$headers .= 'Content-Type: text/plain; charset=utf-8';
		if (!empty($email)) 
		{
			$headers .= "\r\nReply-To: $email";
		}
		
		//send it
		$mailSent = mail($to, $subject, $messageBody, $headers);
		if ($mailSent) 
		{
			//$missing is no longer needed if the email is sent, so unset it
			unset($missing);
			echo 'Ваше сообщение отправлено успешно. Спасибо!';
		}
		
		else
		{
			unset($missing);
			echo 'Произошла ошибка. Пожалуйста попробуйте позднее. ';
		}
	}
	

?>	