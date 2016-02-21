<?php
require_once "Loader.php";
require_once 'Router.php';
include_once realpath("controllers/baseController.php");
include_once realpath("models/baseModel.php");
/**
 * $_GET['rt'] automatski setova u .htaccess fajlu regularnim izrazom
 */

$route = new Router($_GET['rt']);
$controller=$route->getController();
$method=$route->getMethod(); 
$params = $route->getParams();
    
Loader::loadController($controller,$method,$params);