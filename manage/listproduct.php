
<?php
  function getImage($arrstr,$height){
    $arr = explode(';', $arrstr);
    return "<img src='$arr[0]' height='$height' />";
  }
  function getNameBrand($id){
    include_once("models/brandmodel.php");
    $brandmodel = new brandmodel();
    $result1['name'] = $brandmodel->getBrandById('brands', $id);
    return $result1['name'];
  }
  function getNameCategory($id){
    include_once("models/categorymodel.php");
    $category = new categorymodel();
    $result2['name'] = $category->getCategoryById('categories', $id);
    return $result2['name'];
  }
?>

<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>images</th>
                            <th>category</th>
                            <th>brand</th>
                            <th>status</th>
                            <th>hanhdong</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach($data['product'] as $key => $value) {
                        
                    ?>
                                <tr>
                                    <td><?=$value['name']?></td>
                                    <td><?=getImage($value['images'], "50px")?></td>
                                    <td><?php foreach(getNameCategory($value['category_id']) as $k => $v){
                                        echo $v['name'];
                                    }?> 
                                    <td><?php foreach(getNameBrand($value['brand_id']) as $k => $v){
                                        echo $v['name'];
                                    }?> 
                                    </td>
                                    <td><?=$value['status']?></td>
                                    <td>dell/edit</td>
                                </tr>
                    <?php
                        }
                    ?>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        

