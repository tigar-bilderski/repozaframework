<?php

class RegistracijaModel extends baseModel
{
    public function __construct()
    {
      parent::__construct();
    }
    
    function getAll(){
        return "Model";
    }
    
     public function getRegions()
    {
       $q = $this->db->prepare("SELECT DISTINCT region_name FROM latlong");
       $q->execute();
       if ($q->rowCount() > 0)
       {
        $check = $q->fetchall(PDO::FETCH_OBJ);
        return $check;
       } 
    }
    
    function insert($name, $email, $password){
        $result_set = $this->db->prepare("INSERT INTO `users` VALUES ('', :name, :email, :password)");
        $result_set->execute(array(
            ':name' => $name,
            ':email' => $email,
            ':password' => $password
        ));
    }
}
