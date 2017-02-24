<?php
require 'functions.php';
require_once 'config.php';
require_once 'head.php';
require 'foot.php';


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="shortcut icon" href="dream-1.png" type="image/png">
	<link rel="stylesheet" href="lightbox.css">	
	<link href="style.css" rel="stylesheet">
</head>
<body>

<?php echo $head ?>

<div class="inside">
		<nav class="breadcrumbs">
			<a href="index.php">Главная</a>
			<span class="glyphicon glyphicon-chevron-right"></span>
			<a href="#">Регистрация</a>			
		</nav>
<div class="container">
<div class="row">


<h2>Регистрация</h2>
    <form action="registration.php" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
	<p>
		<label>Email:<br></label>
		<input name="login" type="email" size="20" maxlength="255">
    </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
	<p>
		<label>Пароль:<br></label>
		<input name="password" type="password" size="20" maxlength="255">
    </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<p>
    <input type="submit" name="submit" value="Зарегистрироваться">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p>
</form>


<?php
if (!empty($_SESSION['login']))
{
    if (isset($_POST['login'])) 
	{ 
		$login = $_POST['login']; 
		if ($login == '') 
		{ 
			unset($login);
		}; 
	}; //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) 
	{ 
		$password=$_POST['password']; 
		if ($password =='') 
		{ 
			unset($password);
		};
	};
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
	if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, заполните все поля!");
    };
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
	$password = stripslashes($password);
    $password = htmlspecialchars($password);
 //удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
 // проверка на существование пользователя с таким же логином
    $result = mysqli_query($db, "SELECT id FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин <b>". $login ."</b> уже зарегистрирован. Введите другой логин.");
    };
 // если такого нет, то сохраняем данные
    $result2 = mysqli_query ($db, "INSERT INTO users (login,password) VALUES('$login','$password')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
		echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    }
	else 
	{
		echo "Ошибка! Вы не зарегистрированы.";
    }
}
 ?>


</div>
</div>
</div>

<?php echo $foot;?>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type='text/javascript' src='app.js'></script>
<script src="lightbox.js"></script>
</body>
</html>