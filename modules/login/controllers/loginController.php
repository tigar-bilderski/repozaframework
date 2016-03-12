<?php
class loginController extends baseController
{
    public function __construct() {
        Loader::loadModel($this, "login", "login");
    }

    public function index()
    {
        Loader::loadView("login","login");
    }
    
    public function login(){
            $email = $_POST['email'];
            $password = $_POST['password'];

            if(!empty($email) && !empty($password)){
                $email = $this->filter_input($email);
                $password = $this->filter_input($password);
                $user = $this->models['login']->getAll("*","WHERE email='{$email}' and password='{$password}' limit 1");

            if(count($user) == 1){
                Session::set("id", $user[0]->id);
                Session::set("name", $user[0]->name);
                Session::set("email", $user[0]->email);
                header("Location:home");
            }else{
                echo "Upisite ispravne podatke za logovanje!!!";
            }
        }else{
            echo "Popunite sva polja!";
        }
    }
    public function logOut(){
        Session::stop();
    }
}
   