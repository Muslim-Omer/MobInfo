<style media="screen">
a{
  text-decoration: none;
  color: black;
}
</style>

<?php
  include('connection.php');

  $id = intval($_GET['id']);

  $sql = "DELETE FROM mobiles_info_tb WHERE id = $id";

  if ($conn->query($sql) === TRUE) {
      $message = "Record deleted successfully";
      echo "<script type='text/javascript'>alert('$message');</script>";
  } else {
      echo "Error deleting record: " . $conn->error;
  }
?>

<h1><a href='products_list.php'>Back To Products List</a></h1>
