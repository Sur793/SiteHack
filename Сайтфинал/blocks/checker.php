<?php
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

	if(mb_strlen($login) < 3 || mb_strlen($login) > 80){
		echo "Неподустимый логин";
		exit();
		} else if(mb_strlen($name) < 3 || mb_strlen($name) > 80){
		echo "Неподустимое имя";
		exit();
		} else if(mb_strlen($password) < 3 || mb_strlen($password) > 80){
		echo "Неподустимый пароль";
		exit();
	}

	$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
	$mysql->query("INSERT INTO `user` (`login`, `password`, `name`) VALUES('$login', '$password', '$name')");
		$mysql->close();
		header('Location: /')
?>