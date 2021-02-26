<?php
  include('connection.php');

  $id = intval($_GET['id']);

  $sql = "DELETE FROM mobiles_info_tb WHERE id = $id";

  if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
  } else {
      echo "Error deleting record: " . $conn->error;
  }
?>

<h1><a href='products_list.php'>Products List</a></h1>
