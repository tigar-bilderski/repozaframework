<?php
require_once "Loader.php";
include_once realpath("controllers/baseController.php");
include_once realpath("models/baseModel.php");
$controller=(isset($_GET['c']))?$_GET['c']:_DEFAULT_CONTROLLER;
$method=(isset($_GET['f']))?$_GET['f']:"index";
$path_to_controller=realpath("controllers/".strtolower($controller)."Controller.php");
if (file_exists($path_to_controller))
{
include_once $path_to_controller;
$controller=strtolower($controller)."Controller";
unset($_GET['c']);
unset($_GET['f']);
$params=$_GET;
Loader::loadController($controller,$method,$params);
}
else
echo $config['Poruke']['error404'];
