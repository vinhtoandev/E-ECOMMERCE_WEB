<?php
    class ordermodel extends DModel{
        public function __construct(){
            parent::__construct();
        }
        public function getAllOrder($table){
            return $this->db->select($table);
        }
        public function insertOrder($table,$data){
            return $this->db->insert($table,$data);
        }
        public function update($table, $data, $cond){
            return $this->db->update($table,$data,$cond);
        }
        public function delete($table, $cond){
            return $this->db->delete($table, $cond);
        }
        public function getOrderDetailByID($table, $cond){
            return $this->db->selectByCondition($table, $cond);
        }
        public function getGioHang($order_id){
            return $this->db->getGioHang($order_id);
        }
    }


?>