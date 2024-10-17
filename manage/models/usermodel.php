<?php
    class usermodel extends DModel{
        public function __construct(){
            parent::__construct();
        }
        public function getUserByID($table, $id){
            return $this->db->selectById($table, $id);
        }
    }


?>