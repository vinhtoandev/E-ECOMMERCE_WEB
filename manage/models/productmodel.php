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
        public function aa(){
            return 'mt';
        }
    }


?>