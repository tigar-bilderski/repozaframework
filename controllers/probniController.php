<?php

class probniController extends baseController
{
    private $loginModule;
    public function __construct()
    {
        //ucitana SimpleImage klasa iz foldera classes
        Loader::loadClass("SimpleImage");
        Loader::loadModel($this, "users");
        $this->loginModule = new loginController();
        
    }
    public function index(){
        $this->loginModule->index();
    }
    
    function login(){
        $this->loginModule->login();
    }
    
    function home(){
        if(isset($_SESSION['name'])){
             Loader::loadView("test");
        }  else {
            header("Location:index");
        }
       
    }
    function logOut(){
        $this->loginModule->logOut();
        header("Location:index");
    }
    
    public function insertUsers()
    {
        $name = $this->filter_input($_POST['name']);
        $email = $this->filter_input($_POST['email']);
        $password = $this->filter_input($_POST['password']);
        
        $users = $this->models['users'];
        $users->name = $name;
        $users->email = $email;
        $users->password = $password;
        
        if((int)$users->insert() > 0){
            $data = array(
                "error"=>false,
                "message"=>"Uspesno ste uneli novog korisnika."
            );
        }else{
            $data = array(
                "error"=>true,
                "message"=>"Doslo je do neocekivane greske."
            );
        }
        $this->response($data);
    }
    
    private function response($data){
        header("Content-type:application/json");
        echo json_encode($data);
    }
}
