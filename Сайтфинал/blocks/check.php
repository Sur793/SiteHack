<?php
	// print_r($_POST);
	$email = $_POST['email'];
	$message = $_POST['message'];

	$error = '';
		if(trim($email) == '')
			$error = 'Произошла ошибка';
		else if(trime($Message) == '')
			$error = 'Произошла ошибка в тексте';
		else if(strlen($Message) < 5)
			$error = 'Напишите сообщение';

		if($error != ''){
			echo $error;
			exit;
		}
		$subject = "=?utf-8?b?".base64_encode("Тестовое сообщение")."?=";
		$headrs = "Form: $email\r\nReply-to: $email\r\nContent-type: text/html.charset=utf-8\r\n"
		mail('stepashka0992@gmail.com', $subject, $Message, $headrs);
		headr('Location: /about.php');
?>