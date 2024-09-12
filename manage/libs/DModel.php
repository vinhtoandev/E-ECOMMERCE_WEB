<?php
    class DModel{
        protected $db = array();
        public function __construct(){
            $connect = 'mysql:dbname=e_ecommerce; host=localhost:3307';
            // $servername = 'localhost:3307';
            $username = 'root';
            $password = '';
            $this->db = new Database($connect, $username, $password);
        }
    }

?>