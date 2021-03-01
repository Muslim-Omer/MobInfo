<?php
  include('connection.php');

  if(isset($_POST['submit'])){

    $user_search = $_POST['search_box'];

    if(!empty($user_search)){

      $user = trim($user_search);
      $sql = "SELECT * FROM `mobiles_info_tb`WHERE  product_name =
      '$user_search'LIMIT 1";

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
          header("location: ../result.php?id=".$row['id']."");
        }

      } else{
        echo "<center> <h1> No Result Please Enter The Name Clearly<br>
        Example: (iphone 8 plus) - (galaxy a6)</h1> </center>";
      }

    }

  } else{
    echo "not submited";
  }

 ?>
