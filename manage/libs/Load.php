<?php
    class Load {
        public function __construct(){
           
        }
        public function view($filename){
            include($filename.'.php');
        }
    }
?>