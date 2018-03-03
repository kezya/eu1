<?php

//FRONT controller

//Общие настройки 
ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
//2. Подключение файлов

	define('ROOT', dirname(__FILE__));
	require_once(ROOT.'/components/Router.php');

	$router = new Router();

	$router->run();

	?>