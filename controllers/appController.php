<?php
class appController extends baseController{
    
   public function index() {
       $reg = new Registracija();
       $reg->index();
    }
}