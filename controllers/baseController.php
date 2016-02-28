<?php
/**
 * abstrktni kontroler koji sluzi za nasledjivanje
 *
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
    
    /**
     * Metoda koja filttrira korisnicki unos
     * @param type $var
     * @return string
     */
    public function filter_input($var){
       return $var = filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);
    }
}

