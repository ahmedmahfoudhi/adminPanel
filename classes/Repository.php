<?php
include_once "autoload.php";

class Repository
{
    private static $_db;
    private $_tableName;
    public function __construct($tableName){
        self::$_db = ConnexionDB::getInstance();
        $this->_tableName = $tableName;
    }

    protected static function execQuery($query,$values,$type = 0){
        self::$_db = ConnexionDB::getInstance();
        $response = self::$_db->prepare($query);
        if($type == 0){
            return $response->execute($values);
        }

        $response->execute($values);
        return $response;
    }

    public function add($cols,$values){
        $query = "INSERT INTO ".$this->_tableName;
        $query .= "(" . $cols[0]."";
        for($i = 1; $i < count($cols); ++$i){
            $query .= ",".$cols[$i];
        }
        $query .= ")";
        $query .= " VALUES (";
        $query .= str_repeat("?,", count($values)-1);
        $query .= "?)";
        return $this->execQuery($query,$values,0);
    }
    public function findOne($id){
        $query = "SELECT * from ".$this->_tableName." where id = ?";
        $res = $this->execQuery($query,[$id],1);
        return $res->fetch(PDO::FETCH_ASSOC);
    }

    public function findAll(){
        $query = "SELECT * from " . $this->_tableName;
        $res = $this->execQuery($query,[],1);
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($assocCriteria,$modifiedColumns,$newValues){
        $query = "UPDATE ".$this->_tableName. " SET ";
        foreach($modifiedColumns as $str){
            $query .= $str;
            $query .= " = ? ";
        }
        $query = $this->addQueryCondition($query,$assocCriteria);

        $this->execQuery($query,$newValues,0);

    }

    private function addQueryCondition($query,$assocCriteria){
        $query .= " where";
        foreach ($assocCriteria as $key=>$value){
            $query.= " ".$key ." = ".$value;
        }
        ?>
        <script>
            console.log(<?=$query?>);
        </script>
<?php
        return $query;
    }
}
?>