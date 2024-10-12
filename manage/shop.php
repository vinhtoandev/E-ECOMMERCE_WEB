<?php
    require("includes/headershop.php");
?>


    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->


<?php


    spl_autoload_register(function($class){
      include_once("libs/".$class.".php");
    }); 
   
    


    $url = isset($_GET['url']) ? $_GET['url'] : NULL;
    if ($url != NULL) {
       $url = rtrim($url,'/');
       $url = explode('/', filter_var($url, FILTER_SANITIZE_URL));
    }else{
      unset($url);
    }
    if (isset($url[0])) {
      // echo $url[0].'.php';
      include_once('controllers/'. $url[0] .'.php');
      $ctlr = new $url[0]();
      if(isset($url[2])) {
        $ctlr->{$url[1]}($url[2]);
      }else{
        if(isset($url[1])){
          $ctlr->{$url[1]}();
        }
        else{

        }
      }
    }
    else{
      
      
    }

    

    // require("controllers/index.php");
    // $index = new index();
    // $index->homepage();

    // $url = $_GET['url'];
    // $url = rtrim($url,'/');
    // $url = explode('/', $url);
    // echo $url[0];
    // require('libs/'.$url[0].'.php');
    // echo '<pre>';
    
?>  
<?php
    require("t2.php");
?>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>