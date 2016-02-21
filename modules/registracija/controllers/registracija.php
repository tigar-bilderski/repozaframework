<?php

class Registracija extends baseController
{
    public function index()
    {
        $model = new RegistracijaModel();
        Loader::loadModel($this, "registracija", "registracija");
        if(isset($_POST['name'])){
            $this->models['registracija']->insert($_POST['name'],$_POST['email'],$_POST['password']);
            echo 'uspseno';
        }
        Loader::loadView('registracija',[],'registracija');
    }
}

