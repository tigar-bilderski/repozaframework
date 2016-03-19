<?php
require "frontendController.php";
class appController extends frontendController{
    public function __construct() {
        parent::__construct();
    }
    
   public function index() {
       $reg = new Registracija();
       $reg->index();
       
    }
}