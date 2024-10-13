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
        public function selectById($table, $id){
            $sql = "SELECT * from $table WHERE id = :id";
            $statement = $this->prepare($sql);
            $statement->bindParam("id", $id);
            $statement->execute();
            return $statement->fetchAll();
        }
        public function selectByCondition($table, $cond){
            $sql = "SELECT * from $table WHERE $cond";
            echo $sql;
            $statement = $this->prepare($sql);
            $statement->execute();
            return $statement->fetchAll();
        }
       

        public function insert($table, $data) {
            $keys = implode(",", array_keys($data['brand']));
            echo $keys;
            $values = ":" . implode(", :", array_keys($data['brand']));
            echo $values;
            
            $sql = "INSERT INTO $table($keys) VALUES($values)";
            
            $statement = $this->prepare($sql);
            
            foreach($data['brand'] as $key => $value) {
                $statement->bindValue(":$key", $value);
            }
            
            return $statement->execute();
        }

        public function update($table, $data, $cond) {
            $updateKeys = NULL;
            foreach ($data['brand'] as $key => $value) {
                $updateKeys .= "$key=:$key,";
            }
            $updateKeys = rtrim($updateKeys,",");
            $sql = "UPDATE $table SET $updateKeys WHERE $cond";
            $statement = $this->prepare($sql);
            foreach($data['brand'] as $key => $value) { 
                $statement->bindValue(":$key", $value);
                
                   
            }
            return $statement->execute();
        }
        public function delete($table, $cond) {
            $sql = "DELETE FROM $table WHERE $cond";
            $statement = $this->prepare($sql);
            return $statement->execute();
        }

        public function getGioHang($order_id){
            $sql = "SELECT order_details.order_id,order_details.price, order_details.qty, order_details.total, products.name, products.images
                    FROM order_details 
                    INNER JOIN products ON order_details.product_id=products.id
                    WHERE order_id = $order_id;";
            $statement = $this->prepare($sql);
            $statement->execute();
            return $statement->fetchAll();        
        }

    }

?>