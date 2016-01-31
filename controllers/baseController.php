<?php
/**
 * abstrktni kontroler koji sluzi za nasledjivanje
 * 
 * eeeeeeeeeee
 * kkkkkk
 * 
 * cao
 */
abstract class baseController
{
    protected $models=array();
    /**
     * 
     * @param string $name naziv modela
     * @param string $value objekat
     */
    public function setModel($name,$value)
    {
        $this->models[$name]=$value;
    }
    abstract public function index();
}

