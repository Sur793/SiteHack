 <div class="d-flex flex-colum flex-md-row align-items-center p-3 px-md-4 md-3 bg-white border-bottom shadow-sm">
        	<h5 class="my-0 mr-md-auto font-weight-normal">Саха цифра</h5>
        	<nav class="my-2 my-md-0 mr-md-3">
        		<a class="p-2 text-dark" href="#">Контакты</a>
        		<a class="p-2 text-dark" href="#">Новости</a>
        		<a class="p-2 text-dark" href="about.php">Стол заказовв</a>
        	</nav>
        	<?php
        	if($_COOKIE['user'] =='Да'):
        	?>
        <a class="btn btn-outline-primary" href="auth.php">Кабинет пользователя</a>
         <?php else: ?>
        	<a class="btn btn-outline-primary" href="blocks/login.php">Войти</a>
         <?php endif; ?>	
        </div>