<?php

class RegistracijaModel extends baseModel
{
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
}
