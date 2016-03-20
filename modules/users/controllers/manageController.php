<?php
class manageController extends baseController{
    
    public function index(){}
    
    public function insert(){
       $template['lng'] = Cookie::get("lng");
       Loader::loadView("insert","users",false,$template);
    }
}