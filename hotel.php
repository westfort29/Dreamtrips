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
	<title> Бронированние номеров - Dream Trip </title>
</head>
<body>

<?php echo $head ?>


<div class="container_self">
		
	<div class="bs">
		<a href="index.php">Главная</a>	
		<a href="hotel.php">Номера в отеле</a>		
	</div>
		
		<div class="FAQ">
			<div class="panel-group">
				<article class="panel panel-default">
					<header class="panel-heading">
						<h3 class="avia"><a data-toggle="collapse" href="#collapse1">Как забронировать номер в отеле</a></h3>
					</header>
					<div id="collapse1" class="panel-collapse collapse in first_panel">
						<hr>
						<div class="wiget">
							<script charset="utf-8" src="//www.travelpayouts.com/widgets/0c7235a6972f871f87a4eb10e7027c79.js?v=863" async></script>
						</div>
						<p class="text-justify avia">
							<ol>
							<li class="avia text-justify">	Для поиска вариантов размещения воспользуйтесь формой справа. Просто выберите город, где хотите остановиться,  даты прибытия/отъезда и количество гостей.</li>
							<li class="avia text-justify"> После клика на кнопку "Узнать цены" Вы будете перенаправлены на страницу наших партнеров, где Вам будут предложены возможные варианты размещения. Все, что остается - просто выбрать. Главный помощник в этом деле это конечно же фильтр. Он экономит уйму времени отсекая не подходящие варианты по выбранным Вами условиям. Как только вы определитесь с вариантом размещения смело бронируете его. Для этого нужно только ввести свои данные и детали поездки.</li>
							<li class="avia text-justify"> Что дальше? На указанную при оформлении электронную почту придет письмо с подтверждением бронирования и детальной информацией об объекте размещения. С Вами обязательно свяжется представитель отеля удобным для Вас способом и уточнит детали размещения. После этого можете смело хвать свой чемодан и отправляться открывать новые горизонты.</li>
						</p>
					</div>
				</article>
			</div>
			
			<div class="panel-group">
				<article class="panel panel-default">
					<header class="panel-heading">
						<h3 class="avia"><a data-toggle="collapse" href="#collapse2">На что обращать внимание</a></h3>
					</header>
					<div id="collapse2" class="panel-collapse collapse">
						<hr>
						<p class="text-justify avia">
							Существует несколько хитростей, благодаря которым Вы выберите лучший для себя вариант.
							<ol>
							<li class="avia text-justify"> <b>Изучайте отзывы</b> перед принятием окончательного решения о бронировании номера. Может сложиться так, что фото, расположение отеля и его цена Вас устраивает, но в помещении плохая звукоизоляция, а неподалеку идет стройка. Такие тонкости могут рассказать только не заинтересованные путешественники, потому не пренебрегайте чтением отзывов. В тоже время следует подозрительно относиться к отзыву, если это единственный отзыв его автора.</li>
							<li class="avia text-justify"> <b>Пробейте отель на Гугл картах</b>, там тоже оставляют свои фотографии отдыхающие. Это поможет сложиться реальному представлению об объекте размещения. </li>
							<li class="avia text-justify"> <b>Обращайте внимание на время заезда и выезда из отеля.</b> У каждого отеля свои условия и чтобы не попасть в неловкую ситуацию и правильно спланировать свое прибытие в отель обязательно обратите на это внимание перед совершением бронирования</li>
							<li class="avia text-justify"> </li>
							</ol>
						</p>
					
					</div>
				</article>
			</div>
		

		</div>
</div>

<?php echo $foot;?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script async type='text/javascript' src='app.js'></script>
</body>
</html>