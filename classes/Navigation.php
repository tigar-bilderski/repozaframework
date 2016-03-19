<?php

class Navigation extends baseController{
    
    public function __construct() {
       
    }
    public function index() {}
    
public function renderNav($lng) {
    global $config;
        Loader::loadModel($this, "nav");
        $nav = $this->models['nav'];
        $navigration = $nav->getAll("*","WHERE status=1");
        $string = "";
        foreach($navigration as $nvg){
            $string .="
               <li class='".$nvg->active."'>
                   <a href='"._WEB_PATH.$nvg->link."'><span class='".$nvg->icon_class."'></span> <span class='".$nvg->nav_class."'>".$config['prevod']["{$nvg->name}"]["{$lng}"]."</a>
               </li>";
           }
        return $string;
    }

}
