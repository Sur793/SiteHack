 <div class="d-flex flex-colum flex-md-row align-items-center p-3 px-md-4 md-3 border-bottom shadow-sm" style="background-color: black;">
    <img  src="img/logo2.png" style="width: 50px;">
        	<h5 style="margin-left: 5px; color: white;" class="my-0 mr-md-auto font-weight-normal">Саха цифра</h5>
            <header>
        	<nav class="my-2 my-md-0 mr-md-3 dws-menu">
                    <ul>
            <a class="p-2 text-white" href="blocks/menu.php">Меню</a>
            <a class="p-2 text-white" href="blocks/about.php">Стол заказов</a>
                    </ul>
        	</nav>
            </header>
        	<?php
        	if($_COOKIE['user'] =='Да'):
        	?>
        <a class="btn btn-outline-primary" href="blocks/office.php">Кабинет пользователя</a>
         <?php else: ?>
        	<a class="btn btn-outline-primary" href="blocks/login.php">Войти</a>
         <?php endif; ?>	
        </div>