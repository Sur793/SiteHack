<?php
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

	$password = md5($password."opopopqwerty");

	$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');

	$result = $mysql->query("SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");
	$user = $result->fetch_assoc();
	if(count($user) == 0) {
		echo "Пользователь не найден";
		exit();
	}

	setcookie('user', $user['name'], time() + 3600, "/");
	$mysql->close();
	if($_COOKIE['user'] == 'Да')
setcookie('user', 'Да', time() - 3600, '/');
	else
 setcookie('user', 'Да', time() + 3600, '/');
		header('Location: /blocks/office.php');
?>