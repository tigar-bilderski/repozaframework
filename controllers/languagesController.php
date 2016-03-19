<?php

class languagesController extends baseController{
    
    public function index(){}
    
    public function changeLanguage($lng){
        Session::set("lng", $lng);
        header("Location:"._WEB_PATH."probni/home");
    }
    
    public function loginLanguage($lng){
        var_dump($lng);
        Session::set("lng", $lng);
        Cookie::set("lng", $lng, "10", "/");
        var_dump($_SESSION);
    }
}
