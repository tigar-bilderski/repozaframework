<?php
require_once "Loader.php";
include_once realpath("controllers/baseController.php");
include_once realpath("models/baseModel.php");
var_dump($url = explode("/",$_GET['rt']));
$controller=(isset($_GET['rt']))?$url[0]:_DEFAULT_CONTROLLER;
$method=(isset($_GET['rt']))?$url[1]:"index";

$path_to_controller=realpath("controllers/".strtolower($controller)."Controller.php");
if (file_exists($path_to_controller))
{
include_once $path_to_controller;
$controller=strtolower($controller)."Controller";
unset($url[0]);
unset($url[1]);
$params=$url;
var_dump($params);
Loader::loadController($controller,$method,$params);
}
else
echo $config['Poruke']['error404'];
