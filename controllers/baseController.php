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
       $var = trim($var);
       return $var = filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
      /**
     * Validate user input 
     * @param array $datas
     * @return array
     */
    public function validate($datas){
       foreach($datas as $data){
           $this->filter_input($data);
       }
       return $datas;
   }
    
    /**
     * Metoda koja vraca json
     * @param json $data
     */
    public function response($data){
        echo json_encode($data);
    }
}

