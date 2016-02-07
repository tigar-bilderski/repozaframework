<?php
error_reporting(-1);
include_once "config_poruke.php";
include_once "config_db.php";
define("_DEFAULT_CONTROLLER", "latlong");
define("_MODULE_MODE_", true);
$modules = ['registracija','login'];
if(_MODULE_MODE_){
    function autoload_module($className) {
        global $modules;
        foreach ($modules as $module) {
            if (file_exists(realpath("modules/" . $module . "/controllers/" . $className . ".php"))) {
                require_once realpath("modules/" . $module . "/controllers/" . $className . ".php");
            }
        }
    }

    function autoload_models($className) {
        global $modules;
        foreach ($modules as $module) {
            if (file_exists(realpath("modules/" . $module . "/models/" . $className . ".php"))) {
                require_once realpath("modules/" . $module . "/models/" . $className . ".php");
            }
        }
    }

spl_autoload_register("autoload_module");
spl_autoload_register("autoload_models");
}