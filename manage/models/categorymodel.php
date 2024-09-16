<?php
    class categorymodel extends DModel{
        public function __construct(){
            parent::__construct();
        }
        public function getAllCategory($table){
            return $this->db->select($table);
        }
        public function getCategoryById($table, $id){
            return $this->db->selectById($table, $id);
        }
        public function insert($table,$data){
            return $this->db->insert($table,$data);
        }
    }


?>