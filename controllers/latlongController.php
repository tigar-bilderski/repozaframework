<?php
require "frontendController.php";
class latlongController extends frontendController
{
   
     public function __construct() {
        parent::__construct();
    }
   
    public function index()
    {
        
        //$template['niz_regiona']=$this->models['latlong']->getRegions();
        $r = new Registracija;
        $r->index();
        //Loader::loadView('latlong',$template);
    }
    public function ajaxLoadCities()
    {
            if($_POST['region']=="izaberi")
            echo "0";
            else
            {
            echo $this->models['latlong']->getCitiesByRegion($_POST['region']);
            }
    }
    public function ajaxLoadPostals()
    {  
            echo $this->models['latlong']->getPostalsByCity($_POST['region'],$_POST['city']);  
    }
    public function ajaxCalcualteDisatance()
    {
            
           $od=json_decode($this->models['latlong']->getLatLongByPostal($_POST['postal']));
           $do=json_decode($this->models['latlong']->getLatLongByPostal($_POST['postal1']));
           echo $this->distanceGeoPoints($od[0]->latitude,$od[0]->longitude,$do[0]->latitude,$do[0]->longitude);  
    }
    private function distanceGeoPoints ($lat1, $lng1, $lat2, $lng2) 
    {

        $earthRadius = 3958.75;

        $dLat = deg2rad($lat2-$lat1);
        $dLng = deg2rad($lng2-$lng1);


       $a = sin($dLat/2) * sin($dLat/2) +
       cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
       sin($dLng/2) * sin($dLng/2);
       $c = 2 * atan2(sqrt($a), sqrt(1-$a));
       $dist = $earthRadius * $c;

      // from miles
      $meterConversion = 1609;
      $geopointDistance = $dist * $meterConversion;

        return $geopointDistance/1000;
    }
    private function insertCSV($filename,$delimiter=",")
    {
           $header = NULL;
           $data = array();
           $affected;
           if (($handle = fopen($filename, 'r')) !== FALSE)
           {
              
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
            {
            if(!$header)
                $header = $row;
            else
                //$data[] = array_combine($header, $row);
                $data[] = $row;
            }
            fclose($handle);
           }
           
           foreach($data as $d)
           {
         // var_dump($d);
          $affected=$this->models['latlong']->insertIntoLatLongTable($d);
           }
          $num_inserts = $affected->rowCount();
          if($num_inserts==0)
          {
           echo "Neuspesan upis u bazu";
          }
          else
          {
           echo "Uspesno upisano";
          }
    }
    public function UbaciUTabelu()
    {
       
       $q = $this->models['latlong']->db->prepare("SELECT Id FROM latlong");
       $q->execute();
       if ($q->rowCount() < 1)
       {
           $this->insertCSV(realpath("resources/IMPORT_TEST.csv"),",");
       }
       else
       {
            echo "Tabela je popunjena";
       }
            
    }
    
    public function proba($a,$b,$c){
        $t['a'] = $a;
        $t['b'] = $b;
        $t['c'] = $c;
        Loader::loadView('proba',$t);
    }
}
