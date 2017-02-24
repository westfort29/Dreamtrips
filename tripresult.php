<?php

require_once 'config.php';
require_once 'head.php';
require_once 'foot.php';
require_once 'functions.php';

if (isset($_GET['trip-type'])) $triptype = $_GET['trip-type'];
else {$_GET['trip-type'] = ""; $triptype = "";}
if (isset($_GET['tripflight'])) $tripflight = $_GET['tripflight'];
else {$tripflight = 48; $_GET['tripflight'] = 48;}

if (isset($_GET['people'])) $people = $_GET['people'];
else {$people = 2; $_GET['people'] = 2;}

$tripseason = $_GET['date-to'];
$tripseasonend = $_GET['date-back'];
if (isset($_GET['comfort'])) $comfort = $_GET['comfort'];
else $comfort = isset($_GET['comfort']) ? (int)$_GET['comfort'] : 1;
if (isset($_GET['cost'])) $totalcost = $_GET['cost'];
else {$totalcost = 150000; $_GET['cost'] = 150000;}
if (isset($_GET['entertain'])) $entertain = $_GET['entertain'];
else $entertain = isset($_GET['entertain']) ? (int)$_GET['entertain'] : "";

$countries = tripFinder($triptype, $tripflight, $tripseason, $tripseasonend, $totalcost, $comfort, $entertain, $people);

if ($_GET['trip-type'] == "bea") $type ="пляжный";
if ($_GET['trip-type'] == "hot") $type ="отельный";
if ($_GET['trip-type'] == "hea") $type ="лечебный";
if ($_GET['trip-type'] == "ecs") $type ="культурный";
if ($_GET['trip-type'] == "lon") $type ="уединенный";
if ($_GET['trip-type'] == "eco") $type ="эко-туризм";
if ($_GET['trip-type'] == "ski") $type ="горнолыжный";
if ($_GET['trip-type'] == "") $type ="не имеет значение";

if ($comfort == 1) $fort ="&#9733;&#9733;";
if ($comfort == 2.5) $fort ="&#9733;&#9733;&#9733;";
if ($comfort == 4) $fort ="&#9733;&#9733;&#9733;&#9733;";
if ($comfort == 6) $fort ="&#9733;&#9733;&#9733;&#9733;&#9733;";
if ($comfort == 0) $fort ="под открытым небом";

if ($entertain == "dive") $active ="дайвинг";
if ($entertain == "surf") $active ="серфинг";
if ($entertain == "club") $active ="клубны";
if ($entertain == "raft") $active ="рафтинг";
if ($entertain == "thea") $active ="театры";
if ($entertain == "safa") $active ="сафари";
if ($entertain == "") $active ="не имеет значения";

if ($people > 3) $hotelMult = 2;
else $hotelMult = 1;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=1260">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="shortcut icon" href="dream-1.png" type="image/png">
	<link href="style.css" rel="stylesheet">
	<title> Результат подбора отдыха - Dream Trip </title>
</head>
<body>

<?php echo $head ?>

<div class="container_self">
	
	<div class="bs">
		<a href="index.php">Главная</a>	
		<a href="trip-finder.php"> Подбор отдыха</a>
		<a href="#">Результат подбора</a>	
	</div>

	
	<div class="finder_result">
	<?php if ($countries):?>
	<h4> По <abbr title="1)Вид отдыха: <?=$type?> 2)Даты поездки: с <?=$_GET['date-to'];?> по <?=$_GET['date-back']?> 3)Перелет: до <?=$_GET['tripflight']?> часов 4)Комфорт:<?=$fort?> 5)Количество человек: <?=$_GET['people']?> 6)Стоимость: до <?=$_GET['cost'];?> 7)Развлечения: <?=$active?>">Вашему</abbr> запросу найдены следующие страны. Чтобы узнать о них подробнее кликните на них:</h4>
		<?php foreach ($countries as $country):?>
		
		<div class="panel-group">
		<article class="panel panel-default">
			<div class="panel-heading trip-result-head">
				<div class="trip-result-desc">
					<a href="country.php?country_name=<?=$country['name_en']?>"><h3 class="avia"><?=$country['name'];?></h3></a>
					<p class="text-justify"><?=$country['country_desc'];?></p>
					<p class="text-justify"><b>Ориентировочная стоимость по выбранным параметрам на <?=$_GET['people']?> человек(а): </b> 
					<?php 
						$date = date_create($_GET['date-to']);
						$date1 = date_create($_GET['date-back']);
						$days = date_diff($date, $date1)->days;
						if ($_GET['trip-type'] == "ski")
						{
						$costs = $country['ski_avia'] * $people + $country['visa'] * $people + $country['hotelcost'] * $days * $comfort * $hotelMult;
						}
						else
						{
						$costs = $country['aviacost'] * $people + $country['visa'] * $people + $country['hotelcost'] * $days * $comfort * $hotelMult;
						}
					?>
					<?=$costs;?> рублей.</p>
					<a data-toggle="collapse" href="#collapse<?=$country['id_country'];?>"><p class="text-justify">Подробнее</p></a>
				</div>
				<div class="trip-result-img">
					<img  src="img/countries/<?=$country['img_name']?>"width="100%" height="265" />
				</div>
				<div class="clear"></div>
			</div>
			
			<div id="collapse<?=$country['id_country'];?>" class="panel-collapse collapse">
			
				<p class="text-justify"><b>Сезон: </b> <?=$country['seasons_ru'];?>. </p>
				<p class="text-justify"><b>Аэропорты: </b> <?=$country['airports'];?>.</p>
				<p class="text-justify"><b>Направления: </b><?=$country['places'];?>. </p>
				<p class="text-justify"><b>Виза: </b><?=$country['visa_ru'];?> </p>
				
				<div class="avia-trip">
					<p class="text-justify"> <b>Календарь цен на авиабилеты</b> (туда-обратно на 1 человека):</p>
					<?=$country['widget_avia'];?>
				</div>
				<div class="hotel-trip">
					<p class="text-justify"> <b>Подборка хороших отелей на любой вкус</b> (цена на двух человек за ночь): </p>
					<?=$country['widget_hotel'];?>
				</div>	
				
				<p class="text-justify clear"> <b>Подробнее</b> о том как <a href="avia.php"> покупать авиабилеты</a> и <a href="hotel.php"> бронировать номера. </a> </p>
				
			</div>
		</article>
		</div>
		<?php endforeach;?>
		<?php else:?>
			<h4> К сожалению по <abbr title="1)Вид отдыха: <?=$type?> 2)Даты поездки: с <?=$_GET['date-to'];?> по <?=$_GET['date-back']?> 3)Перелет: до <?=$_GET['tripflight']?> часов 4)Комфорт:<?=$fort?> 5)Стоимость: до <?=$_GET['cost'];?> 6)Развлечения: <?=$active?>">Вашему</abbr> запросу не найдено вариантов. Пожалуйста вернитесь к <a href="trip-finder.php">подбору отдыха </a>, измените параметры поиска и повторите попытку</h4>
		<?php endif;?>
	</div>
</div>

<?php echo $foot;?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script async type='text/javascript' src='app.js'></script>
</body>
</html>