<?php
include_once "autoload.php";

class PersonneRepository extends Repository
{
    private $_name;
    private $_age;
    private $_job;
    public function __construct($name = "",$age = 0,$job = ""){
        parent::__construct("Personne");
        $this->_name = $name;
        $this->_age = $age;
        $this->_job = $job;
    }


    public static function removePersonne($id){
        $query = "DELETE from Personne where id = ?";
        parent::execQuery($query,[$id],0);
    }

}