<?php
    class categorymodel extends DModel{
        public function __construct(){
            parent::__construct();
        }
        public function getAllCategory($table){
            return $this->db->select($table);
        }
        public function insertCategory($data){
            return $this->db->insertCategory($data);
        }
    }


?>