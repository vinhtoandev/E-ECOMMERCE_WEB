<?php
    class brandmodel extends DModel{
        public function __construct(){
            parent::__construct();
        }
        public function getAllBrand($table){
            return $this->db->select($table);
        }
        public function getBrandById($table, $id){
            return $this->db->selectById($table, $id);
        }
        public function insert($table, $data){
            return $this->db->insert($table, $data);
        }
        public function update($table, $data, $cond){
            return $this->db->update($table, $data, $cond);
        }
        public function delete($table, $cond){
            return $this->db->delete($table, $cond);
        }
    }


?>