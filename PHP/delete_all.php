<?php
  include('connection.php');
  $sql = "DELETE FROM mobiles_info_tb";

  if ($conn->query($sql) === TRUE) {
    $message = "All Records Was Deleted";
echo "<script type='text/javascript'>alert('$message');</script>";
  } else {
      echo "Error deleting record: " . $conn->error;
  }
?>
