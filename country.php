<?php

require_once 'config.php';
require_once 'head.php';
require_once 'foot.php';
require_once 'functions.php';

$countryname = $_GET['country_name'];
$countries = get_country($countryname);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=1260">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="shortcut icon" href="dream-1.png" type="image/png">
	<link href="style.css" rel="stylesheet">
	<title> <?php foreach ($countries as $country):?> <?=$country['name'];?> <?php endforeach;?> - Dream Trip </title>	
</head>
<body>

<?php echo $head ?>

<div class="container_self">
	
	<div class="bs">
		<a href="index.php">Главная</a>	
		<a href="countries.php">Страны</a>	
		<a href="#"><?php foreach ($countries as $country):?> <?=$country['name']?> <?php endforeach;?></a>	
	</div>
	
	<div class="countries">
		<nav class="country_point" id="country_point">
			<a class="country_point_link" href="#about"><div class="country_point_item"><p class="text-center"> О стране</p></div></a>
			<a class="country_point_link" href="#visa"><div class="country_point_item"><p class="text-center"> Виза</p></div></a>
			<a class="country_point_link" href="#weather"><div class="country_point_item"><p class="text-center"> Погода</p></div></a>
			<a class="country_point_link" href="#sight"><div class="country_point_item"><p class="text-center"> Развлечения</p></div></a>
			<a class="country_point_link" href="#avia"><div class="country_point_item"><p class="text-center"> Авиабилеты</p></div></a>
			<a class="country_point_link" href="#hotel"><div class="country_point_item"><p class="text-center"> Отели</p></div></a>
		</nav>
		<div class="country_info" id="article">
			<?php foreach ($countries as $country):?>
				
				<a name="about"></a><h3> <?=$country['name'];?></h3>
				<div class="trip-result-img">
					<img src="img/countries/<?=$country['img_name'];?>"width="100%" height="220" />
				</div>
				<p><?=$country['country_desc'];?></p>
				<p><?=$country['country_desc_ru'];?></p>
				<p><b>Аэропорты: </b> <?=$country['airports'];?>.</p>
				<p><b>Направления: </b><?=$country['places'];?>. </p>
				<div class="clear"></div>
				<p><a name="visa"></a><b>Виза: </b><?=$country['visa_ru'];?> </p>
				<div class="visa-ban">
					<?=$country['visa_ban'];?>
				</div>
				<?=$country['visa_desc'];?>
				
				<p><a name="weather"></a><b>Сезон: </b> <?=$country['seasons_ru'];?>. </p>
				<?=$country['weather']?>
				
				<a name="sight"></a>
				<p class="text-justify clear"><b>Развлечения:</b></p>
				<div class="column">
					<?=$country['entertain_ru']?>
				</div>
				<?=$country['ecscursions']?>
				
				<div class="avia-country">
					<p class="text-justify"><a name="avia"></a> <b>Календарь цен на авиабилеты:</b>(туда-обратно на 1 человека)</p>
					<?=$country['widget_avia'];?>
					<p class="text-justify clear"> Подробнее о том как <a href="avia.php"> покупать авиабилеты</a></p>
				</div>
				
				<div class="hotel-country">
					<p class="text-justify"><a name="hotel"></a> <b>Подборка хороших отелей на любой вкус:</b></p>
					<?=$country['widget_hotel'];?>
					<p class="text-justify clear"> Подробнее о том как <a href="hotel.php"> бронировать номера. </a> </p>
				</div>	

			<?php endforeach;?>
		</div>
		<div class="clear"></div>

	</div>
</div>

<?php echo $foot;?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type='text/javascript' src='app.js'></script>
</body>
</html>