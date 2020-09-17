<?php
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
define('WEBROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));


$params = explode('/', $_GET['p']);
print_r($params);
$controller = $params[0];
$action = $params[1];

require('core/controller.php');
require('controllers/'.$controller.'.php');


$controller = new $controller;
$controller->$action;

