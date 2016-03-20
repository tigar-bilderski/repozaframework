<?php
require "frontendController.php";
class languagesController extends frontendController{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){}
    
    public function changeLanguage($lng){
        Cookie::set("lng", $lng, "10", "/");
        header("Location:"._WEB_PATH."dashboard/home");
    }
    
    public function loginLanguage($lng){
      $cookie = Cookie::set("lng", $lng, "10", "/");
      header("Location:"._WEB_PATH."");
    }
}
