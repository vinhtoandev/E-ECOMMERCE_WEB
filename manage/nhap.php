
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

    
    
?>
        

