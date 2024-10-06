
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>slug</th>
                            <th>status</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <!-- <tfoot>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>slug</th>
                            <th>status</th>
                            <th>Operation</th>
                        </tr>
                    </tfoot> -->
                    <tbody>
                    <?php
                        foreach($data['brand'] as $key => $value) {
                        
                    ?>
                                <tr>
                                    <td><?=$value['id']?></td>
                                    <td><?=$value['name']?></td>
                                    <td><?=$value['slug']?></td>
                                    <td><?=$value['status']?></td>
                                    <td><a class="btn btn-danger">EDIT</a> 
                                    <a class="btn btn-danger" href="http://localhost:8080/e-commerce_web/manage/index.php?url=brands/delete/<?=$value['id']?>"> DELETE</a></td>
                                </tr>
                    <?php
                        }
                    ?>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        

