<?php
abstract class baseController
{
    protected $models=array();
    public function setModel($name,$value)
    {
        $this->models[$name]=$value;
    }
    abstract public function index();
}

