<?php
class loginController extends baseController
{
    public function index()
    {
        $login = new loginModel();
        return $login->getRegions();
    }
}