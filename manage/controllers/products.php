<?php
    class products extends DController{
        public function __construct(){
            $data = array();
            parent::__construct();
        }
        
        public function listProduct(){
        
            $table = "products";
            
            $productmodel = $this->load->model("productmodel");
            $data['product'] = $productmodel->getAllProduct($table);
            $this->load->view('listproduct', $data);
        }
        
        public function insertProduct(){
            
            $product = $this->load->model("productmodel");
            $name = $_POST["name"];
            $slug = $_POST["slug"];
            $status = $_POST["status"];
            $data['category'] = array(
                "name" => $name,
                "slug" => $slug,
                "status"=> $status
            );
            $product->insertProduct($data);
            
        }
        public function addProduct(){
            $this->load->view("addproducts");
        }
    }
?>