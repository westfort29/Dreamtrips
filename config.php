<?php
define("DBHOST", "mysql.hostinger.ru");
define("DBUSER", "u567459315_trip");
define("DBPASS", "19926148q");
define("DBNAME", "u567459315_dream");
$db = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die("Нет подключения");
mysqli_set_charset($db, "utf8") or die ("Не установлена кодировка");
