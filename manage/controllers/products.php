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
            

            $table = 'products';
            $product = $this->load->model("productmodel");
            $name = $_POST["name"];
            $summary = $_POST["summary"];
            $description = $_POST["description"];
            $stock = $_POST["stock"];
            $price = $_POST["price"];
            $discounted_price = $_POST["discounted_price"];
            $category = $_POST["category"];
            $brand = $_POST["brand"];
            $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));
            
            $countfiles = count($_FILES['anhs']['name']);

            $imgs = '';
            for ($i = 0; $i < $countfiles; $i++) {
                $filename = $_FILES['anhs']['name'][$i];

                ## Location
                $location = "uploads/" . uniqid() . $filename;
                //pathinfo ( string $path [, int $options = PATHINFO_DIRNAME | PATHINFO_BASENAME | PATHINFO_EXTENSION | PATHINFO_FILENAME ] ) : mixed
                $extension = pathinfo($location, PATHINFO_EXTENSION);
                $extension = strtolower($extension);

                ## File upload allowed extensions
                $valid_extensions = array("jpg", "jpeg", "png");

                $response = 0;
                ## Check file extension
                if (in_array(strtolower($extension), $valid_extensions)) {

                    // them vao CSDL - them thah cong moi upload anh len
                    ## Upload file
                    //$_FILES['file']['tmp_name']: $_FILES['file']['tmp_name'] - The temporary filename of the file in which the uploaded file was stored on the server.
                    if (move_uploaded_file($_FILES['anhs']['tmp_name'][$i], $location)) {

                        $imgs .= $location . ";";
                    }
                }

            }
            $imgs = substr($imgs, 0, -1);
            echo $imgs;
            $data['brand'] = array(
                'name' => $name,
                'summary'=> $summary,
                'description'=> $description,
                'stock'=> $stock,
                'price'=> $price,
                'discounted_price' => $discounted_price,
                'category_id'=> $category,
                'brand_id' => $brand,
                'slug' => $slug,
                'images' => $imgs                
            );
            $product->insertProduct($table,$data);
            
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
        public function addProduct(){
            $this->load->view("addproducts");
        }
        public function delete($id){
            $table = "products";
            $productmodel = $this->load->model("productmodel");
            $cond = "id = $id";
            $productmodel->delete($table, $cond);
            $data['product'] = $productmodel->getAllProduct($table);
            $this->load->view('listproduct', $data);
        }
        public function getProductByCats($id = 1){
            $table = "products";
            $productmodel = $this->load->model("productmodel");
            $cond = "category_id = $id";
            $data['product'] = $productmodel->getProductByCats($table, $cond);
            // $data['product'] = $productmodel->getAllProduct($table);
            $this->load->view('productShop', $data);
            
        }
    }
?>