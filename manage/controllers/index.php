<?php
    class index extends DController{
        public function __construct(){
            parent::__construct();
        }
        public function homepage(){
            $this->load->view("listcats");
        }
       

    }
?>