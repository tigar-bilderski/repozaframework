<?php
/**
 * abstrktni kontroler koji sluzi za nasledjivanje
 * 
 * eeeeeeeeeee
 */
abstract class baseController
{
    protected $models=array();
    public function setModel($name,$value)
    {
        $this->models[$name]=$value;
    }
    abstract public function index();
}

