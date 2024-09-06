


    <div>brand</div>
    <?php
      require("../db/connect.php");
      $querry = "select * from brands order by name";
      $result = mysqli_query($conn, $querry);
      while ($row = mysqli_fetch_assoc($result)){
        echo $row['name'];
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
                            <th>id</th>
                            <th>name</th>
                            <th>slug</th>
                            <th>status</th>
                            <th>created_at</th>
                            <th>updated_ad</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>slug</th>
                            <th>status</th>
                            <th>created_at</th>
                            <th>updated_ad</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php
                        require("../db/connect.php");
                        $querry = "select * from brands order by name";
                        $result = mysqli_query($conn, $querry);
                        while ($row = mysqli_fetch_assoc($result)){
                    ?>
                                <tr>
                                    <td><?=$row['id']?></td>
                                    <td><?=$row['name']?></td>
                                    <td><?=$row['slug']?></td>
                                    <td><?=$row['status']?></td>
                                    <td><?=$row['create_at']?></td>
                                    <td><?=$row['updated_at']?></td>
                                </tr>
                    <?php
                        }
                    ?>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        

