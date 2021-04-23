<?php


class ConnexionDB
{
    static private $_host = "localhost";
    static private $_dbname = "user";
    static private $_user = "root";
    static private $_pwd = "";
    static private $_db = null;


    private function __construct(){
        self::$_db = new PDO("mysqli:host=".self::$_host.";dbname:".self::$_dbname,self::$_user,self::$_pwd);
    }

    static public function getInsatnce(){
        if(self::$_db){
            return self::$_db;
        }
        return new ConnexionDB();
    }
}