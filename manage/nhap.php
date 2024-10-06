<?php
                                include("models/categorymodel.php");
                                $categorymodel = new categorymodel();
                                $result1 = $categorymodel->getAllCategory('categories');                                    
                            ?> 
                            <?php 
                                foreach ($result1 as $value) {
                                    ?>
                                    <a href="#"><?php echo $value['name'] ?></a>

                            <?php        
                                }
                                    ?>