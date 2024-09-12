<?php
    class Load {
        public function __construct(){
           
        }
        public function view($filename, $data = NULL){
            include($filename.'.php');
        }
        public function model($filename){
            include('models/'.$filename.'.php');
            return new $filename;
        }
    }
?>