<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-wigth, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<title>Саха цифра</title>
</head>
<title>Стол заказов</title>
<body>
  <?php require"headr.php" ?>
  <div class="container mt-5">
    <h3>Опишите свой заказ</h3><br>
  <form action="check.php" method="post">
    <input class="form-control" type="email" name="email" placeholder="Ваш Email"><br>
    <textarea name="Message" class="form-control" placeholder="Сообщение..."></textarea><br>
    <button type="submit" name="send" class="btn btn-success">Отправить</button>
  </form>
</div>
  <?php require"footer.php" ?>
    
</body>
</html>