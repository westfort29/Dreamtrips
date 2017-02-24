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
	
	<title> Авиабилеты - Dream Trip </title>
</head>
<body>
<?php echo $head ?>

<div class="container_self">
	
	<div class="bs">
		<a href="index.php">Главная</a>	
		<a href="avia.php"> Авиабилеты</a>		
	</div>
		
		<div class="FAQ">
			<div class="panel-group">
				<article class="panel panel-default">
					<header class="panel-heading">
						<h3 class="avia"><a data-toggle="collapse" href="#collapse1">Как покупать авиабилеты онлайн</a></h3>
					</header>
					<div id="collapse1" class="panel-collapse collapse in first_panel">
						<hr>
						<div class="wiget">
							<script charset="utf-8" src="//www.travelpayouts.com/widgets/a00dc2deac51b76691cbf5b62c33ee4d.js?v=846" async></script>
						</div>
						<p class="text-justify avia"> 
							<ol>
							<li class="avia text-justify">В форме справа выберете параметры желаемых перелетов (город вылета и прибытия, количество пассажиров и даты путешествия, если вам не нужен обратный билет, то при клике на соответствующее поле под появившимся календарем нажмите на "Обратный билет не нужен"). </li>
							<li class="avia text-justify">Нажмите на "Найти билеты". Вы будете перенаправлены на страницу наших партнеров, где Вам будут предложены возможные варианты перелетов. Для удобства билеты можно отфильтровать воспользовавшись формой слева на странице с вариантами. Выбрав перелет, заполните свои данные и завершите покупку, оплатив билеты удобным для Вас способом. </li> 
							<li class="avia text-justify">На указанную при оформлении электронную почту придет письмо с подтверждением покупки и детальной информацией о перелете. На сайте перевозчика можно отслеживать статус Вашего рейса по номеру электронного билета. Осталось только явиться в указанное время в аэропорт вылета с паспортом, по которому оформлялись билеты, и отправится в путешествие своей мечты.</li>
							</ol>
						</p>
						<div class="clear"></div>
					</div>
				</article>
			</div>
			
			<div class="panel-group">
				<article class="panel panel-default">
					<header class="panel-heading">
						<h3 class="avia"><a data-toggle="collapse" href="#collapse2">Как выгодно приобрести билеты</a></h3>
					</header>
					<div id="collapse2" class="panel-collapse collapse">
						<hr>
						<p class="text-justify avia">
							Теперь когда с поиском все понятно остается еще один, не менее важный вопрос: как выгодно приобрести билеты. Есть несколько простых правил, которые позволят сэкономить: 
							<ol>
								<li class="avia text-justify"> <b>Покупать билеты от 6 до 2.5 месяцев до предполагаемого вылета.</b> 
									Разные авиакомпании в разное время открывают покупку билетов. Как правило, это делается за период от года до 6 месяцев до вылета. 
									При поиске билетов за год не все авиакомпании могут успеть спланировать свое расписание, обычно это делается в декабре, 
									а хочется рассмотреть все варианты. 
									Поэтому оптимальным временем покупки является от 6 месяцев до 2.5 месяцев до вылета. 
									Статистически доказано, что как только до рейса остается меньше 2.5 месяцев авиабилеты в 99% случаях будут только дорожать. </li>
								<li class="avia text-justify"> <b>Следите за скидками и акциями.</b> Авиакомпании часто устраивают распродажи билетов и делают реальные скидки на билеты, 
									их просто нужно успеть поймать. Все что необходимо делать - регулярно, хотя бы 2 раза в неделю осуществлять поиск по интересующим направлениям.</li>
								<li class="avia text-justify"> <b>Не отправляйтесь в самый пик сезона.</b> 
									Старайтесь обходить пик туристических сезонов, так как на эти даты труднее найти низкие цены. 
									Если все-таки Вы решили поехать в разгар сезона, то постарайтесь не лететь в популярные дни недели: пятницу, субботу и воскресенье. </li>
								<li class="avia text-justify"> На разные даты цены разные, чтобы не менять поисковый запрос несколько раз 
									<b>пользуйтесь специальной формой-календарем</b>. Все что нужно сделать - это выбрать город прилета и вылета. 
									В ячейке соответствующей месяцу будет показана минимальная цена билета на человека в этом месяце. 
									После перехода к одному из них, Вам покажут расписание минимальных цен на выбранный месяц. 
									Выбрав даты вы будете перенаправлены на страницу с предложениями.</li>
							</ol>
						</p>
						<div class="wiget-calendar text-center">
							<script src="//www.travelpayouts.com/calendar_widget/iframe.js?marker=62232.&origin=MOW&destination=TIV&currency=rub&searchUrl=hydra.aviasales.ru&one_way=false&only_direct=false&locale=ru&period=year&range=4%2C16" async></script>
						</div>
					</div>
				</article>
			</div>
			
			<div class="panel-group">
				<article class="panel panel-default">
					<header class="panel-heading">
						<h3 class="avia"><a data-toggle="collapse" href="#collapse3"> Важно помнить </a></h3>
					</header> 
					<div id="collapse3" class="panel-collapse collapse">
						<hr>
						<p class="text-justify avia">
							<ol>
								<li class="avia text-justify"> <b>Если вы летите с пересадкой может понадобиться виза</b>, но только в том случае, если миграционные правила страны это предусматривают. Иногда, если Вы не покидаете таможенной зоны, визу оформлять не нужно, в тех случаях, когда вы не будете проходить паспортный контроль и получать багаж (он сразу отправится на второй рейс). Виза не нужна в тех случаях, когда прилет и вылет осуществляются из одного терминала или между данными терминалами существует специальный коридор, что зависит от конкретного аэропорта.  </li>
								<li class="avia text-justify"> <b>Обращайте внимание на максимально допустимый размер багажа</b> выбранного билета. У разных авиакомпаний разная система тарифов, поэтому не все тарифы могут включать бесплатный провоз багажа и его объем может меняться. Во избежание недоразумений обратите на это внимание при оформлении билета. В крайнем случае багаж модно оплатить отдельно, другое дело, что оплачивать онлайн дешевле, чем на месте в аэропорте. </li>
								<li class="avia text-justify"> <b>Если сомневаетесь в авиакомпании, то прочтите о ней отзывы</b> на многочисленных интернет ресурсах. Это прояснит ситуацию и вы сможете принять правильное для себя решение.</li>
							</ol>
						</p>
					</div>
				</article>
			</div>
		
			<div class="panel-group">
				<article class="panel panel-default">
					<header class="panel-heading">
						<h3 class="avia"><a data-toggle="collapse" href="#collapse4"> Специальные предложения </a></h3>
					</header> 
					<div id="collapse4" class="panel-collapse collapse">
						<script async src="//www.travelpayouts.com/ducklett/scripts.js?widget_type=brickwork&currency=rub&host=hydra.aviasales.ru&marker=62232.&limit=21" charset="UTF-8"></script>
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