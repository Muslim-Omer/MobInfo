<?php
  include('connection.php');

  if(isset($_POST['submit'])){

    $product_name = $_POST['product_name'];
    $year = $_POST['year'];

    $size = $_POST['size'];

    $cpu = $_POST['cpu'];
    $gpu = $_POST['gpu'];

    $internal_memory = $_POST['internal_memory'];

    $dual_camera = $_POST['dual_camera'];
    $video_camera = $_POST['video_camera'];

    $single_selfie = $_POST['single_selfie'];
    $video_selfie = $_POST['video_selfie'];

    $type_battery = $_POST['type_battery'];

    $image_link = $_POST['image_link'];

     $sql = "INSERT INTO mobiles_info_tb (product_name, year, size, cpu, gpu, internal_memory, dual_camera, video_camera,
                                          single_selfie, video_selfie, type_battery, image_link)
             VALUES ('$product_name', $year, '$size', '$cpu', '$gpu', '$internal_memory', '$dual_camera', '$video_camera',
                     '$single_selfie', '$video_selfie', '$type_battery', '$image_link')";

     if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
     } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
     }

  } else {
      header('location: ../add_product.html');
  }

?>
