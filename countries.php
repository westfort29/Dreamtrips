<?php

require_once 'config.php';
require_once 'head.php';
require_once 'foot.php';
require_once 'functions.php';

$countries = get_countries();
$countries_ru = array();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=1260">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="shortcut icon" href="dream-1.png" type="image/png">
	<link href="style.css" rel="stylesheet">
	<title> Поиск по странам - Dream Trip </title>
	
</head>
<body>

<?php echo $head ?>
<div class="container_self">
	
	<div class="bs">
		<a href="index.php">Главная</a>	
		<a href="countries.php">Страны</a>	
	</div>
	<div class="countries">
		<div class="country_finder">
			
			<input oninput="upperCase();countryFilter();" onkeyup="countryFilter();" type="text" class="form-control" name="country_name" id="country_finder" list="country_list" placeholder="Поиск по странам">
				<div class="country_finder_img">
					<span class="glyphicon glyphicon-search"></span>
				</div>
			</input>
				<datalist id="country_list">
					<?php foreach ($countries as $country):?>
					<option><?=$country['name'];?></option>
					<?php endforeach;?>
				</datalist>
		</div>
		<div class="clear"></div>
		
		<div class="country_list">
			<?php foreach ($countries as $country):?>
				<a class="country_item" 
					id="<?=$country['name'];?>"
					style="background:url(img/countries/<?=$country['img_name']?>); background-size: 100% 100%;" 
					href="country.php?country_name=<?=$country['name_en']?>">
					<p class="text-center country_name"> <?=$country['name']?></p>
				</a>
			<?php endforeach;?>
		</div>
		<div class="clear"></div>
	</div>
</div>

<?php echo $foot;?>

<?php foreach($countries as $country)
{
 array_push($countries_ru, $country['name']);	
}
$json = json_encode($countries_ru);
?>
<script>
function countryFilter()
{
	var allCountries = eval('<?php echo $json;?>');
	var countryInput = document.getElementById('country_finder');
	for (var k = 0; k < allCountries.length; k++)
	{
		var elementsAll = document.getElementById(allCountries[k]);
		elementsAll.style.display = "inline-block";
	}
	var e = document.getElementById('country_finder').value;
	var userCountries = new Array();
	for (var i = 0; i < allCountries.length; i++)
	{
		var elementID = document.getElementById(allCountries[i]);
		elementID.style.display = "none";
		var index = allCountries[i].search(e);
		if (index != -1)
		{
			userCountries.push(allCountries[i]);
		}
	}
	for (var j = 0; j < userCountries.length; j++)
	{
		var elementID = document.getElementById(userCountries[j]);
		elementID.style.display = "inline-block";
	}
}

</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script async type='text/javascript' src='app.js'></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
</body>
</html>