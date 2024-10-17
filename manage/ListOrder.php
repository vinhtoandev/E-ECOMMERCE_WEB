<div class="card shadow mb-4">
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Order_id</th>
                            <th>Create_at</th>
                            <th>Status</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $stt = 0;
                        foreach($data['order'] as $key => $value) {
                        $stt++;
                    ?>
                                <tr>
                                    <td><?=$stt?></td>
                                    <td><?=$value['id']?></td>
                                    <td><?=$value['created_at']?> 
                                    <td><?=$value['status']?></td>
                                    <td>
                                        <a class="btn btn-danger" href="http://localhost:8080/e-commerce_web/manage/index.php?url=orders/getOrderDetail/2">VIEW</a> 
                                    </td>
                                    
                                </tr>
                    <?php
                        }
                    ?>
                    
                    </tbody>
                </table>
            </div>
        </div>
</div>