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
            $table = "brands";
            $brandmodel = $this->load->model("brandmodel");
            $data['brand'] = $brandmodel->getBrandById($table, $id);
            $this->load->view('listbrands', $data);
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
        public function update(){
            $table = "brands";
            $brandmodel = $this->load->model("brandmodel");
            $data['brand'] = array(
                "name" => "oppo",
                "slug" => "op",
                "status"=> "Active"
            );
            
            $id = 41;
            $cond = "id = $id";
            $brandmodel->update($table,$data,$cond);
        }
        public function delete($id){
            $table = "brands";
            $brandmodel = $this->load->model("brandmodel");
            $cond = "id = $id";
            $brandmodel->delete($table, $cond);
            $data['brand'] = $brandmodel->getAllBrand($table);
            $this->load->view('listbrands', $data);
        }
    }
?>