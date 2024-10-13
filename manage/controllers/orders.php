<?php
    class orders extends DController{
        public function __construct(){
            $data = array();
            parent::__construct();
        }
        
        public function listOrder(){
        
            $table = "orders";
            
            $ordermodel = $this->load->model("ordermodel");
            $data['order'] = $ordermodel->getAllOrder($table);
            $this->load->view('giohang', $data);
        }

        public function getGioHang($order_id){
            $ordermodel = $this->load->model("ordermodel");
            $data['order'] = $ordermodel->getGioHang($order_id);
            $this->load->view('giohang', $data);
        }
        
    }
?>