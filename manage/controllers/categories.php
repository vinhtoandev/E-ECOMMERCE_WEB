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
        public function getBrandById($id){
            $table = "categories";
            $categorymodel = $this->load->model("categorymodel");
            $data['category'] = $categorymodel->getBrandById($table, $id);
            $this->load->view('listcats', $data);
        }
        
        public function insertCategory(){
            
            $table = 'categories';
            $category = $this->load->model("categorymodel");
            $name = $_POST["name"];
            $slug = $_POST["slug"];
            $status = $_POST["status"];
            $data['brand'] = array(
                "name" => $name,
                "slug" => $slug,
                "status"=> $status
            );
            $category->insert($table, $data); 
        }
        public function addCategories(){
            $this->load->view("addcategories");
        }
        public function nhap(){

                                include("models/categorymodel.php");
                                $categorymodel = new categorymodel();
                                $result1 = $categorymodel->getAllCategory('categories');                                    
                            
                            
                                foreach ($result1 as $value) {
                                    
                                   echo $value['name'] ;

                               
                                }
                                
        }
    }
?>