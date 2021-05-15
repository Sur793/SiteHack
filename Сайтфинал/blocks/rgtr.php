<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widht=device=widht, intitial-scale=1.0">
	<title>Регестрация</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="lo1.css">
</head>
<body>
	<div class="container mt-4">
		<div class="form">
	<h1>Форма регестрации</h1><br>
		<form action="checker.php" method="post">
			<div class="input-form">
			<input type="text" name="login" class="form-control" id="login " placeholder="Логин">
		    </div><br>
		    <div class="input-form">
			<input type="text" name="name" class="form-control" id="name" placeholder="Введите имя">
		    </div><br>
		    <div class="input-form">
			<input type="password" name="password" class="form-control" id="password" placeholder="Придумайте пароль">
		    </div><br>
			<button class="btn btn-success" type="submit">Зарегистрировать</button>
		</form>
	 </div>
	</div>
</body>
</html>