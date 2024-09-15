<?php
    class brands extends DController{
        public function __construct(){
            $data = array();
            parent::__construct();
        }
        public function show(){
            echo "css";
            
        }
        public function listBrands(){
        
            $table = "brands";
            
            $brandmodel = $this->load->model("brandmodel");
            $data['brand'] = $brandmodel->getAllBrand($table);
            $this->load->view('listbrands', $data);
        }
        public function getBrandById($id){

        }
        
        public function insert(){
            
            $table = "brands";
            $brandmodel = $this->load->model("brandmodel");
            $name = $_POST["name"];
            $slug = $_POST["slug"];
            $status = $_POST["status"];
            $data['brand'] = array(
                "name" => $name,
                "slug" => $slug,
                "status"=> $status
            );
            $brandmodel->insert($table,$data);
            
        }
        public function addBrands(){
            $this->load->view("addbrands");
        }
    }
?>