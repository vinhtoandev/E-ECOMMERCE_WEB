<?php
    class productmodel extends DModel{
        public function __construct(){
            parent::__construct();
        }
        public function getAllProduct($table){
            return $this->db->select($table);
        }
        public function insertProduct($table,$data){
            return $this->db->insert($table,$data);
        }
        public function update($table, $data, $cond){
            return $this->db->update($table,$data,$cond);
        }
    }


?>