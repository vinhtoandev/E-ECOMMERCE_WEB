<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Thêm mới sản phẩm</h1>
                    </div>
                    <form class="user" method="post" action="http://localhost:8080/e-commerce_web/manage/index.php?url=products/insertProduct" enctype="multipart/form-data">                        
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="name" name="name" aria-describedby="emailHelp"
                            placeholder="Tên sản phẩm">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Các hình ảnh cho sản phẩm</label>
                        <input type="file" class="form-control form-control-user"
                            id="anhs" name="anhs[]" multiple>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tóm tắt sản phẩm:</label>
                        <textarea name="summary" class="form-control" placeholder="Nhập...">

                        </textarea>
                    </div>
                    <div class="form-group">
                    <label class="form-label">Mô tả sản phẩm:</label>
                        <textarea name="description" class="form-control" placeholder="Nhập...">

                        </textarea>
                    </div>
                    
                   
                    <div class="form-group row">
                        <div class="col-sm-4 mb-sm-0">
                        <input type="text" class="form-control form-control-user"
                            id="stock" name="stock" aria-describedby="emailHelp"
                            placeholder="Số lượng nhập:"> 
                        </div>
                        <div class="col-sm-4 mb-sm-0">
                        <input type="text" class="form-control form-control-user"
                            id="price" name="price" aria-describedby="emailHelp"
                            placeholder="Giá gốc">
                        </div>
                        <div class="col-sm-4 mb-sm-0">
                        <input type="text" class="form-control form-control-user"
                            id="discounted_price" name="discounted_price" aria-describedby="emailHelp"
                            placeholder="Giá bán:">
                        </div>
                    </div>
                    <?php
                                    include("models/brandmodel.php");
                                    include("models/categorymodel.php");
                                    $brandmodel = new brandmodel();
                                    $categorymodel = new categorymodel();
                                    $result1 = $categorymodel->getAllCategory('categories');
                                    $result2 = $brandmodel->getAllBrand('brands');
                                                                        
                    ?> 
                    <div class="form-group">
                        <label class="form-label">Danh mục:</label>
                        <select class="form-control" name="category">
                            <option>Chọn danh mục</option>
                            <?php 
                                foreach ($result1 as $value) {
                                    ?>
                                    <option value="<?php echo $value['id'];?>"><?php echo $value['name']  ?></option>

                            <?php        
                                }
                                    ?>
                        </select>
                    </div>
                    <div class="form-group">
                    <label class="form-label">Thương hiệu:</label>
                                
                        <select class="form-control" name="brand">
                            <option>Chọn thương hiệu</option>
                                
                            <option>Chọn thương</option>
                            <?php 
                                foreach ($result2 as $value) {
                                    ?>
                                    <option value="<?php echo $value['id'];?>"><?php echo $value['name']  ?></option>

                            <?php        
                                }
                                    ?>
                        
                        </select>
                    </div>
                    <button class="btn btn-primary">Tạo mới</button>
                    </form>
                    <hr>
                    
                </div>
            </div>
        </div>
    </div>
</div>