<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-wigth, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="blocks/menu.css">
	<title>Саха цифра</title>
</head>
<body>
       <?php require"blocks/headr.php" ?>
        <div class="container mt-5">
        	<h3 class="mb-5">Участники</h3>
        	  <div class="d-flex flex-warp">
        	<?php
        		for($i=0; $i <5; $i++):
        	?>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">IT-центр</h4>
          </div>
          <div class="card-body">
          	 <img src="img/<?php echo ($i+1) ?>.jpg" class="img-thumbnail" style="height: 200px;">
            <ul class="list-unstyled mt-3 mb-4">
              <li>IT-парк</li>
              <li>Проходит финал хакатона</li>
              <li>было много конкурсов</li>
              <li>И выступлений</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Подробнее...</button>
          
        </div>
    </div>
        		<?php endfor; ?>
        </div>
    </div>
    <?php require"blocks/footer.php" ?>
</body>
</html>