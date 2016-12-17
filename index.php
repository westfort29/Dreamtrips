<?php

require_once 'config.php';
require_once 'slider.php';
require_once 'services.php';
require_once 'foot.php';
require 'functions.php';

$today = date("Y-m-d");

$minDay = date_create($today);
date_modify($minDay, '+1 day');

$day = date_create($today);
date_modify($day, '+7 day');

$nextDay = date_create($today);
date_modify($nextDay, '+14 day');

$articles = get_articles_main();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=1260">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="shortcut icon" href="dream-1.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="tcal.css" />
	<link href="style.css" rel="stylesheet">
	<title> Dream Trip - начните свое путешествие здесь </title>
</head>
<body>
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
<?php echo $slider;?>
<?php echo $services; ?>


<div class="main_desc">
	<div class="main_desc_text">
		<p>DreamTrip — проект, который призван помочь путешественникам. Наш сайт поможет Вам определиться с тем куда поехать на отдых, расскажет самое интересное о странах и местах отдыха в мире и научит Вас как можно выгодно отдохнуть. Путешествуйте с нами.</p>
	</div>
</div>

<div class="main_finder_date">
	<div class="text-center">
		<h3>Узнать где сезон по датам: </h3>
	
		<div class="main_finder_date_form">
			<form method="get" action="tripresult.php">	
				<p>
					<input type="text" class="tcal" id="date-to" oninput="minDateBack()" name="date-to" value="<?=date_format($day, 'd.m.Y');?>"/>  –  
					<input type="text" class="tcal" id="date-back" name="date-back" value="<?=date_format($nextDay, 'd.m.Y');?>"/>
				</p>
				<p>
					<button class="trip_button" type="submit">Узнать</button>
				</p>
			</form>
		</div>
		
	</div>
</div>

<div class="main_articles_wrapper">
	<div class="main_articles">
		<?php  foreach($articles as $article):?>
			<div class="main_articles_item">
			<div class="text-center">
				<a href="article.php?blog=<?=$article['id']?>">
					<img class="main_articles_item_img" src="img/articles/<?=$article['img_name']?>"width="450" height="250" />
				</a>
				<h2><a href="article.php?blog=<?=$article['id']?>"><?=$article['heading']?> </a></h2>
				<p class="article_date"><?=$article['data']?><p>
				<p class="text-justify"><?=$article['preview']?> </p>
				<div class="main_articles_item_link">
							<a href="article.php?blog=<?=$article['id']?>">Читать дальше</a>
				</div>
			</div>
			<hr>			
			</div>
		<?php endforeach;?>
	</div>
</div>


<?php echo $foot;?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type='text/javascript' src='app.js'></script>
<script async type="text/javascript" src="tcal.js"></script> 
</body>
</html>