<?php
require_once "Loader.php";
include_once realpath("controllers/baseController.php");
include_once realpath("models/baseModel.php");
/**
 * $_GET['rt'] automatski setova u .htaccess fajlu regularnim izrazom
 */
if($_GET['rt'] == ''){
    $_GET['rt']=_DEFAULT_CONTROLLER."/index";
}
$url = explode("/",$_GET['rt']);
if(!isset($url[1])) $url[1] ='/'; 
$url[1]=($url[1]=='/')?'index':$url[1];
$controller=(isset($_GET['rt']))?$url[0]:'';
$method=(isset($_GET['rt']))?$url[1]:'';    

$path_to_controller=realpath("controllers/".strtolower($controller)."Controller.php");
if (file_exists($path_to_controller))
{
    include_once $path_to_controller;
    $controller=strtolower($controller)."Controller";
    unset($url[0]);
    unset($url[1]);
    $params=$url;
    Loader::loadController($controller,$method,$params);
}
else
echo $config['Poruke']['error404'];
