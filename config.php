<?php

$host = $_SERVER['HTTP_HOST'].'/www/DTv2/';

define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "gallery");
$db = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die("Нет подключения");
mysqli_set_charset($db, "utf8") or die ("Не установлена кодировка");