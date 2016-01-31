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
        
        return self::$instance;
    }
}

