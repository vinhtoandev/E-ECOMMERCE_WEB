<?php
    require("includes/headershop.php");
?>
<?php 
    spl_autoload_register(function($class){
        include_once("libs/".$class.".php");
      }); 
      // require("libs/main.php");
      // require("libs/Load.php");
      // require("libs/DController.php");
      // require("libs/Database.php");
      // require("libs/DModel.php");
      
  
  
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
<?php
                                include_once("models/categorymodel.php");
                                $categorymodel = new categorymodel();
                                $result1 = $categorymodel->getAllCategory('categories');   
                                include_once("models/productmodel.php");
                                $productmodel = new productmodel();
                                $result2 = $productmodel->getAllProduct("products");                                
                            ?> 
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <!-- <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Department</h4>
                            <ul>
                            
                            <?php 
                                foreach ($result1 as $value) {
                                    ?>
                                    <li><a href="#"><?php echo $value['name'] ?></a></li>

                            <?php        
                                }
                                    ?>
                            </ul>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-12 col-md-7">
                <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>16</span> Products found</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php 
                    foreach ($result2 as $value) {
                        ?>                                        
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg= "<?= $value['images'] ?>">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#"><?=$value['name'] ?></a></h6>
                                    <h5><?= $value['price']?></h5>
                                </div>
                            </div>
                        </div>
                    

        <?php        
            }
                ?>  
                    </div>
                    <!-- saleOFF -->
                     <!-- saleOFF -->
                      <!-- saleOFF -->                
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    
    <!-- Footer Section End -->

    <!-- Js Plugins -->
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