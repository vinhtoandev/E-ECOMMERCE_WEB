<?php
    class brands extends DController{
        public function __construct(){
            $data = array();
            parent::__construct();
        }
        public function show($id){
            echo "css".$id;
        }
        public function listBrands(){
            
            // $homemodel = $this->load->model("homemodel");
            // $data['category'] = $homemodel->category();
            // $this->load->view('listbrands', $data); 
            $table = "brands";
            
            $brandmodel = $this->load->model("brandmodel");
            $data['brand'] = $brandmodel->getAllBrand($table);
            $this->load->view('listbrands', $data);
        }
        public function getBrandById($id){

        }
        public function insertBrand(){
            
            $table = "brands";
            $brandmodel = $this->load->model("brandmodel");
            $data['brand'] = array(
                "name" => "hp",
                "slug" => "h_p",
                "status"=> "Active"
            );
            $brandmodel->insertBrand($table,$data);
        }
    }
?>