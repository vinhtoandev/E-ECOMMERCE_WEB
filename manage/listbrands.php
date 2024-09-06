<?php 
  require("includes/header.php");

?>


    <div>brand</div>
    <?php
      require("../db/connect.php");
      $querry = "select * from brands order by name";
      $result = mysqli_query($conn, $querry);
      while ($row = mysqli_fetch_assoc($result)){
        echo $row['name'];
      }
    ?>
        

<?php
  require("includes/footer.php");
?>