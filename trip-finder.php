<?php

require_once 'config.php';
require_once 'head.php';
require_once 'foot.php';
$today = date("Y-m-d");

$minDay = date_create($today);
date_modify($minDay, '+1 day');

$day = date_create($today);
date_modify($day, '+7 day');

$nextDay = date_create($today);
date_modify($nextDay, '+14 day');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=1260">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="shortcut icon" href="dream-1.png" type="image/png">
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="tcal.css" />
	<link rel="stylesheet" type="text/css" href="easydropdown.flat.css" />
	<title> Подбор отдыха - Dream Trip </title>
</head>
<body>

<?php echo $head ?>

<div class="container_self">
		
	<div class="bs">
		<a href="index.php">Главная</a>	
		<a href="trip-finder.php">Подбор отдыха</a>	
	</div>
	
	<div class="finder">
		<section class="finder_wrapper">
		<form method="get" class="text-center" action="tripresult.php">

			
			<div class="option text-left">
				<div class="option-quest">
				
					<p class="option-text">1) Предпочтительный вид отдыха:</p>
				</div>
				<div class="option-answer">
					<div class="select_input">
					<select size="1"name="trip-type" class="dropdown">
						<option value="bea">Пляжный</option>
						<option value="hea">Лечебный</option>
						<option value="hot">Отельный</option>
						<option value="lon">Уединенный</option>
						<option value="eco">Экотуризм</option>
						<option value="ecs">Культурный</option>
						<option value="ski">Горнолыжный</option>
					</select>
					</div>
				</div>
			</div>
			
			<div class="option text-left">
			<div class="option-quest">
				<p class="option-text">2) Даты желаемой поездки: </p>
			</div>
			<div class="option-answer">
					<input type="text" class="tcal" id="date-to" oninput="minDateBack()" name="date-to" value="<?=date_format($day, 'd.m.Y');?>"/> – 
					<input type="text" class="tcal" id="date-back" name="date-back" value="<?=date_format($nextDay, 'd.m.Y');?>"/>
			</div>
			</div>
			
			<div class="option text-left">
			<div class="option-quest">
				<p class="option-text">3) Максимальная длительность перелета: </p>
			</div>
			<div class="option-answer">
				<div class="select_input">
				<select size="1"name="tripflight" class="dropdown">
					<option value="48">Не имеет значения</option>
					<option value="6">До 6 часов</option>
					<option value="12">До 12 часов</option>
					<option value="18">До 18 часов</option>
				</select>
				</div>
			</div>	
			</div>
			
			<div class="option text-left">
			<div class="option-quest">
				<p class="option-text">4) Комфорт места проживания: </p>
			</div>	
			<div class="option-answer">	
				<div class="select_input">
				<select size="1" name="comfort" class="dropdown">
					<option value="1">Эконом вариант (2 звезды)</option>
					<option value="2.5">Обычный (3 звезды)</option>
					<option value="4">Комфортный (4 звезды)</option>
					<option value="6">Роскошный (5 звезд)</option>
					<option value="0">Я романтик — палатка подойдет</option>
				</select>
				</div>
			</div>	
			
			</div>
			
			<div class="option text-left">
			<div class="option-quest">
				<p class="option-text">5) Количество путешественников: </p> 
			</div>
			<div class="option-answer">	
			<div class="select_input">
				<select size="1" name="people" class="dropdown">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="4">5</option>
				</select>
				</div>
			</div>
			</div>
			
			<div class="option text-left">
			<div class="option-quest">
				<p class="option-text">6) Стоимость поездки: </p> <p class="option-text">(перелет из Москвы, виза и отель на всех путешественников):</p>
			</div>
			<div class="option-answer">
				<p> <input id="val" oninput="valueOption()" type="range" min="10000" max="300000" value="100000" step="1000"/></p>
				<p> <input id="cost" oninput="valueOptionNumber()" name="cost" type="text" value="100000" max="300000" size="15"/> рублей</p>
			</div>
			</div>
			<div class="option text-left">
				<div class="option-quest">
					<p class="option-text">7) Предпочтительные развлечения:</p>
				</div>
				<div class="option-answer">
					<div class="select_input">
					<select size="1" name="entertain" class="dropdown">
						<option value="">Не имеет значения</option>
						<option value="dive">Дайвинг</option>
						<option value="surf">Серфинг</option>
						<option value="raft">Рафтинг</option>
						<option value="thea">Театры</option>
						<option value="club">Клубы</option>
						<option value="safa">Сафари</option>
					</select>
					</div>
				</div>
								
			</div>
			<div class="option text-left">
			<div class="option-quest">
				<p class="option-text"></p>
			</div>
			<div class="option-answer">
				<button class="trip_button" type="submit"> Подобрать</button>
			</div>
			</div>
		</form>	
		</section>
	</div>
</div>

<?php echo $foot;?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script async type="text/javascript" src="tcal.js"></script> 
<script async type='text/javascript' src='app.js'></script>

</body>
</html>