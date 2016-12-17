<?php

 $head = '
<div id="header">	
	<div class="navigation_content_wrapper" id="navigation_content_wrapper">
	<div class="navigation_wrapper">
		<div class="navbar_header_wrapper">
		<a href="index.php">
			<div class="navbar-header">
				<p><img src="dream-2.png" width="40" height="50" />Dream Trip</p>
			</div>
		</a>
		</div>
		<div class="navigation">	
			<a class="country_point_link" href="trip-finder.php"><div class="point text-center">Подбор отдыха</div></a>
			<a class="country_point_link" href="blog.php"><div class="point text-center" >Блог </div></a>
			<a class="country_point_link" href="countries.php"><div class="point text-center">Страны </div></a>
			<a class="country_point_link" href="gal.php"><div class="point text-center">Галерея</div></a>
			<!--<li><a class="nav-text" id="log">Войти</a></li>--> 
		</div>
	
	</div>
	</div>


		
	<div class="loger hide">
	<h3 class="log_head">Введите Email и пароль</h3>
	<form action="user_check.php" method="post">
		<div class="form-group">
		<label for="email">Email:</label>
		<input name="login" type="email" class="form-control" placeholder="Введите email">
		</div>
		<div class="form-group">
		<label for="pwd">Пароль:</label>
		<input name="password" type="password" class="form-control" id="pwd" placeholder="Введите пароль">
		</div>
		<input name="submit" type="submit" class="btn btn-default" value="Войти">
		<a class="text-right" href="registration.php">Зарегистрироваться</a> 
	</form>
	</div>	

</div>

'
?>
