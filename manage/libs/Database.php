<?php
    class Database extends PDO{
        public function __construct($connect,$username,$password){
            
            parent::__construct($connect,$username,$password);
        }
            public function select($table){
            $sql = "SELECT * from $table"; 
            $statement = $this->prepare($sql);
            $statement->execute();
            return $statement->fetchAll();
        }
        public function insert($table,$data){
            $keys = implode(',',array_keys($data['brand']));
            $values = ':'.implode(', :',array_keys($data['brand']));
            echo $values;
            echo '<br>';
            $sql = "INSERT INTO $table($keys) VALUES($values)";
            echo $sql;
            echo '<br>';
            $statement = $this->prepare($sql);
            foreach($data['brand'] as $key =>$value){
                $statement->bindParam(":$key", $value);
                echo $key;
                echo $value;
                echo '<br>';
            }
            return $statement->execute();
        }

    }

?>