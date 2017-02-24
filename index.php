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

<div id="navigation-wrapper">
	<div class="navigation-wrapper">
		<a class="logo" href="index.php"><img src="dream-2.png" width="40" height="50" />Dream Trip</a>
		
		<nav class="main-menu">
			<a class="main-menu__link" href="trip-finder.php">Подбор отдыха</a>
			<a class="main-menu__link" href="blog.php">Блог</a>
			<a class="main-menu__link" href="countries.php">Страны</a>
			<a class="main-menu__link" href="gal.php">Галерея</a>
		
		</nav>
	</div>
</div>

<?php echo $slider;?>
<?php echo $services; ?>


<article class="main_desc">
		<p class="main_desc_text">DreamTrip — проект, который призван помочь путешественникам. 
		Наш сайт поможет Вам определиться с тем куда поехать на отдых, расскажет самое интересное о странах и местах отдыха в мире и научит Вас как можно выгодно отдохнуть. 
		Путешествуйте с нами.</p>
</article>

<div class="main_finder_date">
	<div class="text-center">
		<h3 class="main_finder_date__header">Узнать где сезон по датам: </h3>
	
		<div class="main_finder_date_form">
			<form method="get" action="tripresult.php">	
					<input type="text" class="tcal" id="date-to" oninput="minDateBack()" name="date-to" value="<?=date_format($day, 'd.m.Y');?>"/>  –  
					<input type="text" class="tcal" id="date-back" name="date-back" value="<?=date_format($nextDay, 'd.m.Y');?>"/>
				
					<button class="trip_button" type="submit">Узнать</button>
			</form>
		</div>
	</div>
</div>

<section class="main_articles_wrapper">
	<div class="main_articles">
		<?php  foreach($articles as $article):?>
		
			<div class="main_articles_item">
			<article>
				<div class="main_article_img">
					<img class="main_article_img" src="img/articles/<?=$article['img_name']?>"/>
				</div>
				<div class="main_article_desc">
					<h2><a href="article.php?blog=<?=$article['id']?>"><?=$article['heading']?> </a></h2>
					<p class="article_date"><?=$article['data']?><p>
					<p class="text-justify"><?=$article['preview']?> </p>
					<a class="main_articles_item_link" href="article.php?blog=<?=$article['id']?>">Читать дальше</a>
				</div>
				<div class="clear"></div>
			</article>
			</div>		
		<?php endforeach;?>
	</div>
</section>


<?php echo $foot;?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type='text/javascript' src='app.js'></script>
<script async type="text/javascript" src="tcal.js"></script> 
</body>
</html>