<?php
include "latlongController.php";
class latlongapiController extends frontendController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
       echo $this->models['latlong']->getCityRegionByPostal($_POST['postal']);
    }
}

