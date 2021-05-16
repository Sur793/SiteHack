<?php
	$email = $_POST['email'];
	$message = $_POST['message'];

	$error = '';
		if(trim($email) == '')
			$error = 'Напишите e-mail';
		else if(trim($message) == '')
			$error = 'Произошла ошибка в тексте';
		else if(strlen($message) < 10)
			$error = 'Напишите сообщение';

		if($error != ''){
			echo $error;
			exit;
		}
		$subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
		$headers = "Form: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

mail('stepashka0992@gmail.com', $subject, $message, $headers);
		header('Location: /);
?>