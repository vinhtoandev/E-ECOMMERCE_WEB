<?php
    class categories extends DController{
        public function __construct(){
            $data = array();
            parent::__construct();
        }
        
        public function listCategory(){
        
            $table = "categories";
            
            $brandmodel = $this->load->model("categorymodel");
            $data['category'] = $brandmodel->getAllCategory($table);
            $this->load->view('listcats', $data);
        }
        
        public function insertCategory(){
            
            
            $category = $this->load->model("categorymodel");
            $name = $_POST["name"];
            $slug = $_POST["slug"];
            $status = $_POST["status"];
            $data['category'] = array(
                "name" => $name,
                "slug" => $slug,
                "status"=> $status
            );
            $category->insertCategory($data);
            
        }
        public function addCategories(){
            $this->load->view("addcategories");
        }
    }
?>