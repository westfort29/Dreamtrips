<?php
require 'functions.php';
require_once 'config.php';
require_once 'head.php';
require_once 'foot.php';

/*$gallery = isset($_GET['gallery']) ? (int)$_GET['gallery'] : 1;
if($gallery < 1) $gallery = 1;*/

$blog = isset($_GET['blog']) ? (int)$_GET['blog'] : 0;

$articles = get_article($blog);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=1260">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="shortcut icon" href="dream-1.png" type="image/png">
	<link rel="stylesheet" href="lightbox.css">	
	<link href="style.css" rel="stylesheet">
	<title> Блог - Dream Trip </title>
</head>
<body>

<?php echo $head ?>


<div class="container_self">
		
	<div class="bs">
		<a href="index.php">Главная</a>	
		<a href="blog.php">Блог</a>
		
		<?php foreach($articles as $article):?>
			<a href="article.php?blog=<?=$article['id']?>">
			<?=$article['heading']?>
			<?php endforeach?>
		</a>	
	</div>
				
		<div class="blog">
		<div class="blog_wrapper">

			<div class="blog_content_wrapper">
				
				<div class="blog_content_secondary">
					<div class="blog_content_secondary_item">
						<script charset="utf-8" src="//www.travelpayouts.com/widgets/a00dc2deac51b76691cbf5b62c33ee4d.js?v=871" async></script>
					</div>
					<div class="blog_content_secondary_item">
						<a target="_blank" href="http://c24.travelpayouts.com/click?shmarker=62232&promo_id=497&source_type=banner&type=click"><img src="http://c24.travelpayouts.com/content?promo_id=497&shmarker=62232&type=init" alt="Страхование выезжающих зарубеж - 250*360" width="250" height="360"></a>
					</div>
					<div class="blog_content_secondary_item">
						<a target="_blank" href="http://c48.travelpayouts.com/click?shmarker=62232&promo_id=1195&source_type=banner&type=click"><img src="http://c48.travelpayouts.com/content?promo_id=1195&shmarker=62232&type=init" alt="300x250" width="250" height="200"></a>
					</div>
					<div class="blog_content_secondary_item">
						<a target="_blank" href="http://c18.travelpayouts.com/click?shmarker=62232&promo_id=1241&source_type=banner&type=click"><img src="http://c18.travelpayouts.com/content?promo_id=1241&shmarker=62232&type=init" alt="Турция - 240*400" width="250" height="410"></a>
					</div>
				</div>
				
				<?php  foreach($articles as $article):?>	
					<div class="blog_articles">
						<h3><a href="article.php?blog=<?=$article['id']?>"><?=$article['heading']?> </a></h3>
						<p class="article_date"><?=$article['data']?></p>
						<img  src="img/articles/<?=$article['img_name']?>" width="100%" height="350" />
						<p><?=$article['text']?></p>
					</div>
				<?php endforeach;?>
				
				
				
				<div class="clear"> 
				</div>
			
			</div>
		
		</div>
		</div>

</div>



<?php echo $foot;?>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type='text/javascript' src='app.js'></script>
<script src="lightbox.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
</body>
</html>