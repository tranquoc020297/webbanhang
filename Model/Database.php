<?php
define('db_host', 'localhost');
define('db_user', 'root');
define('db_pass', '');
define('db_name', 'db_banhang');

class Database{	
    protected static $host = db_host;
    protected static $user = db_user;
    protected static $pass = db_pass;
    protected static $dbname = db_name;
    protected static $conn;
    protected static $error;

    public static function connect(){
        self::$conn = new mysqli(self::$host, self::$user, self::$pass, self::$dbname);
        if(!self::$conn){
            self::$error = "Fatal Error: Can't connect to database" . self::connect()->connect_error();
            return false;
        }
        self::$conn->query("SET NAMES 'utf8'");
    }
}	
?>