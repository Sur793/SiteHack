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
<body>
       <?php require"blocks/headr.php" ?>
        <div class="container mt-5">
        	<h3 class="mb-5">Новости</h3>
        	  <div class="d-flex flex-warp">
        	<?php
        		for($i=0; $i <5; $i++):
        	?>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Какие-то новости</h4>
          </div>
          <div class="card-body">
          	 <img src="img/<?php echo ($i+1) ?>.jpg" class="img-thumbnail">
            <ul class="list-unstyled mt-3 mb-4">
              <li>В АГАТУ</li>
              <li>Прошла студ-весна</li>
              <li>было много конкурсов</li>
              <li>И выступлений</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Узнать больше...</button>
          
        </div>
    </div>
        		<?php endfor; ?>
        </div>
    </div>
    <?php require"blocks/footer.php" ?>
</body>
</html>