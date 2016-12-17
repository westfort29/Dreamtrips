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
	<title> Трансфер - Dream Trip </title>
</head>
<body>

<?php echo $head ?>


<div class="container_self">
		
	<div class="bs">
		<a href="index.php">Главная</a>	
		<a href="transfer.php">Трансфер</a>	
	</div>
		
		<div class="FAQ">
		<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
				<a data-toggle="collapse" href="#collapse1"><h3 class="avia">Как заказать трансфер</h3></a>
			</div>
		<div id="collapse1" class="panel-collapse collapse in first_panel_car">
		<hr>
		<div class="wiget-transfer">
			<iframe src="//c1.travelpayouts.com/content?promo_id=36&shmarker=62232&widget=230x390" width="100%" height="390" frameborder="0"></iframe>
		</div>
		<p class="text-justify avia">
			Заказать трансфер очень легко. Просто следуйте инструкции: 
		</p>
		
			
			<ol>
			<li class="avia text-justify"> <p class="text-justify"><b>Заполните форму справа</b> Введите аэропорт, куда при прилетаете или город, в котором находится ваш отель. При вводе появится подсказка с вариантами точек. После нажатия кнопки «Найти такси» откроется страница, где будут показаны варианты трансферов для вашего маршрута.</p></li>
			<li class="avia text-justify"> <p class="text-justify"><b>Выберите класс автомобиля.</b> В списке предложенных трансферов выберите подходящий вам класс авто. Для каждого класса указано допустимое число пассажиров, багажа и стоимость. Дети считаются пассажирами. Стоимость поездки не зависит от количества пассажиров. У подходящего вам варианта нажмите «Заказать», чтобы перейти к бронированию.</p></li>
			<li class="avia text-justify"> <p class="text-justify"><b>Укажите детали поездки.</b> Обязательно введите имя, которое водитель напишет на табличке при встрече, контактный Email и телефон. На Email вы получите подтверждение заказа и ваучер. Телефон пригодится, если водитель не сможет найти вас в месте отправления. </p></li>
			<li class="avia text-justify"> <p class="text-justify"><b>Внесите предоплату.</b> Небольшую часть стоимости берется в качестве предоплаты за бронирование машины. Оставшуюся часть вы сможете оплатить по приезду, наличными водителю. Вы также можете оплатить всю сумму сразу или сделать заказ без предоплаты.</p>
											<p class="text-justify">В случае отмены заказа не менее чем за 24 часа до поездки, предоплата возвращается. После внесения предоплаты ваш заказ будет подтвержден и такси забронировано. На ваш электронный адрес будет отправлено письмо с подтверждение в виде ваучера. Распечатайте ваучер и возьмите его с собой.</p></li>
			<li class="avia text-justify"> <p class="text-justify"><b> В условленном месте Вас встретит водитель</b> В указанное время вас встретит водитель. Он будет отслеживать ваш рейс по номеру и приедет позже или подождет вас в случае небольшой задержки рейса. У него будет ваш телефон, а у вас — телефон диспетчера такси. При необходимости он свяжется с вами. Вы также сможете сообщить ему, если приедете раньше или позже. Оставшуюся часть оплаты вы должны будете отдать водителю наличными, когда он привезет вас на место назначения.</p></li>

			</ol>
		
		
		</div>
		</div>
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