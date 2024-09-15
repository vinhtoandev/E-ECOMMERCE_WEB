<?php
    class categorymodel extends DModel{
        public function __construct(){
            parent::__construct();
        }
        public function getAllCategory($table){
            return $this->db->select($table);
        }
        public function insert($table,$data){
            return $this->db->insert($table,$data);
        }
    }


?>