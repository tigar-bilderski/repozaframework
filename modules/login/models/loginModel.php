<?php

class loginModel extends baseModel
{
    public function get()
    {
        return "login";
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
}