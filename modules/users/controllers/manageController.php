<?php
class manageController extends baseController{
    
    private $usersModel;
    
     public function __construct() {
        Loader::loadModel($this, "users", "users");
        $this->usersModel = $this->models['users'];
    }
    
    public function index(){}
    
    /**
     * 
     */
    public function insert(){
       $template['lng'] = Cookie::get("lng");
       Loader::loadView("insert","users",false,$template);
    }
    
    /**
     * 
     */
    public function insertUsers(){
        $name = $this->filter_input($_POST['name']);
        $surname = $this->filter_input($_POST['surname']);
        $email = $this->filter_input($_POST['email']);
        $password = $this->filter_input($_POST['password']);
        $phone = $this->filter_input($_POST['telephone']);
        
       $this->usersModel->name = $name;
       $this->usersModel->surname = $surname;
       $this->usersModel->email = $email;
       $this->usersModel->password = md5($password);
       $this->usersModel->phone = $phone;
       
       if(is_int((int)$this->usersModel->insert())){
           $error = false;
       }else{
            $error = true;
       }
       $data = array(
         "error"=>$error 
       );
       $this->response($data);
    }
    
}