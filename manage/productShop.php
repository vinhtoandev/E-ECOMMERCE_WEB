
<section>
    
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                <div class="input-group" style="width: 500px; margin-bottom: 20px; margin-left: 600px;margin-top: 50px;">
                      <input
                        type="text"
                        class="form-control bg-light border-0 small"
                        placeholder="Search for..."
                        aria-label="Search"
                        aria-describedby="basic-addon2"
                      />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          Search
                        </button>
                      </div>
                </div>
                
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
                                    <h6><span>6</span> Products found</h6>
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
                    function getImage($arrstr){
                        $arr = explode(';', $arrstr);
                        return $arr[0];
                      }
                    foreach ($data['product'] as $value) {
        ?>                                        
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg= "<?=getImage($value['images'])?>">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <?php
                                       
                                        $id = $value['id'];
                                        $link = "http://localhost:8080/e-commerce_web/manage/nhap.php?url=products/getProductById/".$id;
                                    ?>
                                    <h6><a href="<?=$link?>"><?=$value['name'] ?></a></h6>
                                    <h5><?= $value['price']?></h5>
                                </div>
                            </div>
                        </div>
        <?php        
            }
        ?> 
    </div>
