<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/shop/core');
define("LIBS", ROOT . '/vendor/shop/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", 'watches');

//http://shop.loc/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
//http://shop.loc/
$app_path = preg_replace("#[^/]+$#", '', $app_path); //Назнаю почему дома на локали не работает
$app_path = str_replace("public/", '', $app_path);
$app_path = str_replace(".loc/", '.loc', $app_path); //Назнаю почему дома на локали не работает

define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';
