<?php
abstract class baseModel
{
    private static $instance=NULL;
    public $db;
    public function __construct()
    {
        $this->db=self::dbInstance();
    }
    /**
     * 
     * @global array $config
     * @return object database instance
     */
    public static function dbInstance()
    {
        global $config;
        //var_dump($config);
       if(self::$instance===NULL)
        {
            self::$instance = new PDO("mysql:host={$config['db']['host']};dbname={$config['db']['dbname']}", "{$config['db']['username']}", "{$config['db']['password']}");
            self::$instance-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        //$this->conn = self::$instance;
        return self::$instance;
    }
    
    /**
     * Metoda za dobavljanje podataka
     * @param type $fields
     * @param type $filter
     * @return type
     */
    public function getAll($fields = "*", $filter = "") {

        try {
            $sql = "SELECT " . $fields . " FROM " . static::$table . " " . $filter;
            $res = $this->db->query($sql);
            return $res->fetchAll(PDO::FETCH_CLASS, get_called_class());
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    /**
     * Dobavaljanje po id-u
     * @param int $id
     * @param string $fields
     * @return array
     */
    public function get($id, $fields="*") {
        try {
            $sql = "SELECT ".$fields." FROM " . static::$table . " WHERE " . static::$key . "='" . $id."'";
            //echo $sql;
            $rez = $this->db->query($sql);
            return $row = $rez->fetchObject(get_called_class());
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public function insert() {
        try {
            $q = "INSERT INTO " . static::$table . " ";
            //$q.= static::$table;
            $polja_arr = get_object_vars($this);
            unset($polja_arr['db']);
            $polja = array_keys($polja_arr);
            $q.= "(" . implode(",", $polja) . ") VALUES ";
            $q.= "('";
            $q.= implode("','", array_values($polja_arr));
            $q.="')";
            if ($this->db->exec($q) > 0) {
                return $this->db->lastInsertId();
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
   }
   
   public function update() {
       try {
            $q = "UPDATE " . static::$table . " SET ";
            $polja_arr = get_object_vars($this);
            unset($polja_arr['db']);
            foreach ($polja_arr as $key => $value) {
                if ($key == static::$key)
                    continue;
                $q.= $key . "='" . $value . "',";
            }
            $q = rtrim($q, ",");
            $keyString = static::$key;
            $q.= " WHERE " . $keyString . " = " . $this->$keyString;
            return $count = $this->db->exec($q);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public function delete($id){
        try {
            $query = "DELETE from " . static::$table . " WHERE " . static::$key . "='{$id}'";
            return $this->db->exec($query);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}

