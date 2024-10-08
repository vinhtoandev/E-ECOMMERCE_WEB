
<?php 
                    foreach ($data['product'] as $value) {
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