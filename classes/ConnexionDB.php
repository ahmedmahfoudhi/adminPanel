<?php


class ConnexionDB
{
    static private $_host = "localhost";
    static private $_dbname = "adminpanel";
    static private $_user = "root";
    static private $_pwd = "";
    static private $_db = null;


    private function __construct(){
        try{
            self::$_db = new PDO("mysql:host=" . self::$_host . ";dbname=" . self::$_dbname . ";charset=utf8", self::$_user, self::$_pwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));
        }catch(PDOException $e){
            echo "error ".$e->getMessage();
        }

    }

    static public function getInstance(){
        if(!self::$_db){
            new ConnexionDB();
        }
        return (self::$_db);
    }
}