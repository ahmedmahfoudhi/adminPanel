<?php
include_once "autoload.php";

class Repository
{
    private static $_db;
    private $_tableName;
    public function __construct($tableName){
        self::$_db = ConnexionDB::getInsatnce();
        $this->_tableName = $tableName;
    }

    protected static function execQuery($query,$values,$type = 0){
        $response = self::$_db->prepare($query);
        $response->execute($values);
        if($type == 1){
            return $response;
        }
        return null;
    }

    public function add($values){
        $query = "INSERT INTO ".$this->_tableName."VALUES (,";
        $query .= str_repeat("?,", count($values));
        $query .= ")";
        $this->execQuery($query,$values,0);
    }
    public function findOne($id){
        $query = "SELECT * from".$this->_tableName." where id = ?";
        return $this->execQuery($query,[$id],1);
    }

    public function findAll(){
        $query = "SELECT * from" . $this->_tableName;
        return $this->execQuery($query,[],1);
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