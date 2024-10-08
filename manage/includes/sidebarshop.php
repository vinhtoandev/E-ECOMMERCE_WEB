<div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Department</h4>
                            <ul>
                            <?php
                                include_once("models/categorymodel.php");
                                $categorymodel = new categorymodel();
                                $result1 = $categorymodel->getAllCategory('categories');   
                                include_once("models/productmodel.php");
                                $productmodel = new productmodel();
                                $result2 = $productmodel->getAllProduct("products");                                
                            ?> 
                            <?php 
                                foreach ($result1 as $value) {
                                    ?>
                                    <li><a href="#"><?php echo $value['name'] ?></a></li>

                            <?php        
                                }
                                    ?>
                            </ul>
                        </div>
                    </div>