<?php
class latlongModel extends baseModel
{
    public function __construct()
    {
      parent::__construct();
    }
    public function insertIntoLatLongTable($data)
    {
        set_time_limit(0);
        //var_dump($data);
      $stmt = $this->db->prepare("INSERT INTO latlong VALUES('',?,?,?,?,?,?)");
      $stmt->execute($data);
      return $stmt;
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
    public function getCitiesByRegion($region)
    {
       $q = $this->db->prepare("SELECT DISTINCT city FROM latlong WHERE region_name=:name");
       $q->bindValue(':name', $region, PDO::PARAM_STR);
       $q->execute();
       if ($q->rowCount() > 0)
       {
        $check = $q->fetchall(PDO::FETCH_OBJ);
        return json_encode($check);
       } 
    }
    public function getPostalsByCity($region,$city)
    {
       $q = $this->db->prepare("SELECT postal FROM latlong WHERE region_name=:rname AND city=:cname");
       $q->bindValue(':rname', $region, PDO::PARAM_STR);
       $q->bindValue(':cname', $city, PDO::PARAM_STR);
       $q->execute();
       if ($q->rowCount() > 0)
       {
        $check = $q->fetchall(PDO::FETCH_OBJ);
        return json_encode($check);
       } 
    }
    public function getLatLongByPostal($postal)
    {
       $q = $this->db->prepare("SELECT latitude,longitude FROM latlong WHERE postal=:postal");
       $q->bindValue(':postal', $postal, PDO::PARAM_INT);
       $q->execute();
       if ($q->rowCount() > 0)
       {
        $check = $q->fetchall(PDO::FETCH_OBJ);
        return json_encode($check);
       } 
    }
    public function getCityRegionByPostal($postal)
    {
       $q = $this->db->prepare("SELECT city,region_name,region_iso FROM latlong WHERE postal=:postal");
       $q->bindValue(':postal', $postal, PDO::PARAM_INT);
       $q->execute();
       if ($q->rowCount() > 0)
       {
        $check = $q->fetchall(PDO::FETCH_OBJ);
        return json_encode($check);
       } 
    }
}
