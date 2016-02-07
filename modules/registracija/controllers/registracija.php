<?php

class Registracija extends baseController
{
    public function index()
    {
        $login = new loginController();
        $template['all'] = $login->index();
        Loader::loadView('registracija',$template,'registracija');
    }
}

