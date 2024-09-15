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

        public function insert($table, $data) {
            $keys = implode(",", array_keys($data['brand']));
            $values = ":" . implode(", :", array_keys($data['brand']));
            
            $sql = "INSERT INTO $table($keys) VALUES($values)";
            
            $statement = $this->prepare($sql);
            
            foreach($data['brand'] as $key => $value) {
                $statement->bindValue(":$key", $value);
            }
            
            return $statement->execute();
        }

        // public function insertBrand($data){
        //     $sql = "INSERT INTO brands(name, slug, status) VALUES(:name,:slug,:status)";
        //     $name = $data['brand']['name'];
        //     $slug = $data['brand']['slug'];;
        //     $status = $data['brand']['status'];;
        //     $statement = $this->prepare($sql);
        //     $statement->bindParam("name", $name);
        //     $statement->bindParam("slug", $slug);
        //     $statement->bindParam("status", $status);

        //     return $statement->execute();
        // }
        // public function insertCategory($data){
        //     $sql = "INSERT INTO categories(name, slug, status) VALUES(:name,:slug,:status)";
        //     $name = $data['category']['name'];
        //     $slug = $data['category']['slug'];;
        //     $status = $data['category']['status'];;
        //     $statement = $this->prepare($sql);
        //     $statement->bindParam("name", $name);
        //     $statement->bindParam("slug", $slug);
        //     $statement->bindParam("status", $status);

        //     return $statement->execute();
        // }
        // public function insertProduct($data){
        //     $sql = "INSERT INTO categories(name, slug, status) VALUES(:name,:slug,:status)";
        //     $name = $data['category']['name'];
        //     $slug = $data['category']['slug'];;
        //     $status = $data['category']['status'];;
        //     $statement = $this->prepare($sql);
        //     $statement->bindParam("name", $name);
        //     $statement->bindParam("slug", $slug);
        //     $statement->bindParam("status", $status);

        //     return $statement->execute();
        // }
        
        


    }

?>