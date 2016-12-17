<?php
require 'functions.php';
require_once 'config.php';
require_once 'head.php';
require_once 'foot.php';


$gallery = isset($_GET['gallery']) ? (int)$_GET['gallery'] : 1;
if($gallery < 1) $gallery = 1;



$dir = 'img/gallery/';
//$images = get_images($dir);

$images = get_images_db($gallery);
$filters = array();

$gals = array();

//require_once 'pagination.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=1260">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="shortcut icon" href="dream-1.png" type="image/png">
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="lightbox.css">
	<title> Галерея - Dream Trip </title>
</head>
<body>
 
<?php echo $head ?>
 
<div class="inside">
<div class="container_self">

	<div class="bs">
		<a href="index.php">Главная</a>	
		<a href="gal.php">Галерея</a>	
		<?php if ($gallery > 1):?>	
		<a href="#"> 
			
			<?php  foreach($images as $image)
				{
					array_push($gals, $image['gallery_name']);	
				}
			?>
		
			<?php $gals = array_unique($gals);?>
		
		
			<?php  foreach($gals as $gal):?>	
			<?=$gal?>
			<?php endforeach;?>
			
		</a>
		<?php endif;?>
	</div>	
	
<div class="content">

<div class="col-xs-<?php if ($gallery==1) echo 12; else echo 10?>">


	<div class="country_list">
		<?php if($images):?>
		<?php  foreach($images as $image):?>
		<div class="item <?=$image['location']?>">
			<div class="img-item"><a href="<?=$dir . '/' . $image['gallery_name_en'] . '/' . $image['img_name']?>" data-lightbox="gal" data-title="<?=$image['description']?>, <?=$image['location']?>"> <img src="<?=$dir . '/' . $image['gallery_name_en'] . '/small/' . $image['img_name']?>" width="100%" height="100%"/></a>
			<div class="img-desc"><span> <?=$image['description']?>, <?=$image['location']?></span></div>
			</div>
			
		</div>
		<?php endforeach;?>
		
		<?php else:?>
		<div class="text-center">
		<div class="item" onclick="location.href='?gallery=2';">
			
			<div class="img-item"><img src="img/gallery/img1.jpg" width="100%" height="100%"/> 
			<div class="img-desc-gal"><img src="img/camera.png" width="35" height="25"/> Черногория</div>
			</div>
		</div>
		
		<div class="item" onclick="location.href='?gallery=3';">
			
			<div class="img-item"><img src="img/gallery/img2.jpg" width="100%" height="100%"/> 
			<div class="img-desc-gal"> <img src="img/camera.png" width="35" height="25"/> Таиланд </div>
			</div>
		</div>
		
		<div class="item" onclick="location.href='?gallery=4';">
			
			<div class="img-item"><img src="img/gallery/img3.jpg" width="100%" height="100%"/> 
			<div class="img-desc-gal"> <img src="img/camera.png" width="35" height="25"/> Италия <div>
			</div>
		</div>
		</div>
		</div>
		
	
		<?php endif;?>
	</div>
	</div>
	<?php if ($gallery!=1):?>
<div class="col-xs-2">
<div class="filters">
<?php if($images):?>
		<?php  foreach($images as $image)
		{
			array_push($filters, $image['location']);	
		}
		?>
		
		<?php $filters = array_unique($filters);?>
		
		
		<?php  foreach($filters as $filter):?>	
		
			<input type="checkbox" checked name="filter" id="<?=$filter?>" value="<?=$filter?>" onclick="showMe(this, '<?=$filter?>')"> 
			<label for="<?=$filter?>"><?=$filter?></label>
			<br>
		<?php endforeach;?>	 
		
	</div>	
<?php endif;?>
</div>
	<?php endif;?>
	
	

</div>
<div class="clear"> </div>
</div>
</div>


<?php echo $foot;?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src='app.js'></script>
<script src="lightbox.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>