<?php

require_once 'config.php';
require_once 'head.php';
require_once 'foot.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=1260">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="shortcut icon" href="dream-1.png" type="image/png">
	<link href="style.css" rel="stylesheet">
	<title> Аренда авто - Dream Trip </title>
</head>
<body>

 <?php echo $head ?>


<div class="container_self">
		
	<div class="bs">
		<a href="index.php">Главная</a>	
		<a href="#">Аренда машины</a>		
	</div>
	
		<div class="FAQ">
		<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
				<a data-toggle="collapse" href="#collapse1"><h3 class="avia">Как арендовать автомобиль</h3></a>
			</div>
		<div id="collapse1" class="panel-collapse collapse in first_panel_car">
		<hr>
		<div class="wiget">
			<iframe src="//c13.travelpayouts.com/content?promo_id=1354&shmarker=62232&widget=100x420" width="100%" height="420" frameborder="0"> </iframe>
		</div>
		<p class="text-justify avia">
			Для поиска доступных вариантов аренды автомобиля воспользуйтесь формой справа. Обязательно заполните все поля. После клика по кнопке "Поиск" откроется страница с доступными вариантами аренды. Просто выбирайте подходящий для себя вариант и бронируйте.
		</p>
		<p class="text-justify avia">
			Поиск производится по ведущим компания предоставляющих услуги аренды авто. У каждой компании свои условия аренды. Основные условия заключаются в следующем:  
			<ol>
			<li class="avia text-justify"> <b>Депозит</b> - это сумма, которую необходимо оставить в залог при получении авто, при его возврате депозит Вам вернут в полном объеме.</li>
			<li class="avia text-justify"> <b>Лимит проезжаемого расстояния</b> в расчете на один день, обычно превышенные километры оплачиваются дополнительно. Некоторые компании не устанавливают ограничений по данному условию, то есть сколько бы километров вы не проехали доплачивать за это вы не будете. </li>
			<li class="avia text-justify"> <b>Пересечение границы.</b> Некоторые агентства запрещают пересечение границы, а те, что разрешают - просят уведомлять об этом заранее. Поэтому, если вы планируете пересекать границу на арендуемой машине, то обязательно изучите данный пункт в условиях аренды. За разрешение на пересечение границы агентством может взиматься дополнительная плата. </li>
			</ol>
		</p>
		
		</div>
		<div class="clear"></div>
		</div>
		</div>

		

		</div>

</div>

<?php echo $foot;?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script async type='text/javascript' src='app.js'></script>
</body>
</html>