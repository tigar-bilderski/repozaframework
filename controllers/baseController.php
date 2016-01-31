<?php
/**
 * abstrktni kontroler koji sluzi za nasledjivanje
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

