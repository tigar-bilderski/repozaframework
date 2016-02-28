<?php

class probniController extends baseController
{
    public function __construct()
    {
        //ucitana SimpleImage klasa iz foldera classes
        Loader::loadClass("SimpleImage");
        Loader::loadModel($this, "users");
    }
    public function index()
    {
//        $users = $this->models['users']->getAll("name","WHERE name='{$this->filter_input("abc'")}'");
//        $string = $this->filter_input("1");
//       $user = $this->models['users']->insert();
//       dump($user);
//        $users = $this->models['users'];
//        $users->delete($this->filter_input("'2"));
//        $users->id = "7";
//        $users->name = "Dragan Peric";
//        $users->email = "dragan.savic@link.co.rs";
//        $users->password = "oprem";
//        $users->update();
        Loader::loadView("test");
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
