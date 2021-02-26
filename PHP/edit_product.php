<style media="screen">
a{
  text-decoration: none;
  color: black;
}
</style>

<?php
  include('connection.php');
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

  // EDIT
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

    // TODO - VALIDATION

    $sql = "UPDATE mobiles_info_tb
            SET
            product_name = '$product_name',
            year = $year,
            size = '$size',
            cpu = '$cpu',
            gpu = '$gpu',
            internal_memory = '$internal_memory',
            dual_camera = '$dual_camera',
            video_camera = '$video_camera',
            single_selfie = '$single_selfie',
            video_selfie = '$video_selfie',
            type_battery = '$type_battery',
            image_link = '$image_link'
            WHERE id = $id
            ";

    if ($conn->query($sql) === TRUE) {
      $message = "Record updated successfully";
      echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    echo "<h1><a href='products_list.php'>Back To products List</a></h1>";

  } else {
      // SELECT
    $sql = "SELECT * FROM mobiles_info_tb WHERE id = $id limit 1";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Products</title>
    <link rel="stylesheet" href="../css/add_product.css">
</head>

<body>

  <div class="main-block">

  <center>
    <h1>Edit Product</h1>

    <form method="POST" action="edit_product.php?id=<?php echo $id; ?>">

      <div class="info">

        <input class="fname" type="text" name="product_name" value="<?PHP echo $row['product_name']; ?>">
        <input class="fname" type="text" name="year" value="<?PHP echo $row['year']; ?>">

        <input class="fname" type="text" name="size" value="<?PHP echo $row['size']; ?>">

        <input class="fname" type="text" name="cpu" value="<?PHP echo $row['cpu']; ?>">
        <input class="fname" type="text" name="gpu" value="<?PHP echo $row['gpu']; ?>">

        <input class="fname" type="text" name="internal_memory" value="<?PHP echo $row['internal_memory']; ?>">

        <input class="fname" type="text" name="dual_camera" value="<?PHP echo $row['dual_camera']; ?>">
        <input class="fname" type="text" name="video_camera" value="<?PHP echo $row['video_camera']; ?>">

        <input class="fname" type="text" name="single_selfie" value="<?PHP echo $row['single_selfie']; ?>">
        <input class="fname" type="text" name="video_selfie" value="<?PHP echo $row['video_selfie']; ?>">

        <input class="fname" type="text" name="type_battery" value="<?PHP echo $row['type_battery']; ?>">

        <input class="fname" type="text" name="image_link"  value="<?PHP echo $row['image_link']; ?>">

      </div>



      <button type="submit" name="submit">Edit Product</button>
    </form>

  </center>
  </div>

</body>

</html>

<?php
}
?>
