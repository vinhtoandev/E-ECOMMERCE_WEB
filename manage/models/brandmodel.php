<?php
    class brandmodel extends DModel{
        public function __construct(){
            parent::__construct();
        }
        public function getAllBrand($table){
            return $this->db->select($table);
        }
        public function getBrandByID($table, $id){
            $sql = "SELECT * FROM $table WHERE id =:id";
            $statement = $this->db->prepare($sql);
            $statement->bindParam(":id",$id);
            $statement->execute();
            return $statement->fetchAll();
        }
        public function insertBrand($data){
            return $this->db->insertBrand($data);
        }
    }


?>