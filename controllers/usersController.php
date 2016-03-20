<?php
require "frontendController.php";
class usersController extends frontendController{
    
    private $usersModul;
    public function __construct() {
        parent::__construct();
        $this->usersModul = new manageController();
    }
    
    public function index() {
        
    }

    public function insert(){
        $this->usersModul->insert();
    }
    
}
