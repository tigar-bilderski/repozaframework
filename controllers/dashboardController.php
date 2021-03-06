<?php
require "frontendController.php";
class dashboardController extends frontendController
{
    private $loginModule;
    
    public function __construct()
    {
        //ucitana SimpleImage klasa iz foldera classes
        parent::__construct();
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
            $template['lng']= Cookie::get("lng");
            Loader::loadView("test", "", false ,$template);
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
    
    
}
