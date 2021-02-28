<?php
  include('PHP/connection.php');

  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Result</title>
    <link rel="stylesheet" href="CSS/result.css">
  </head>

  <body>

    <div class="container">
    	<table>
        <?PHP
          $sql = "SELECT * FROM mobiles_info_tb WHERE id = $id limit 1";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<thead>
                      <tr>
                        <th>NAME</th>".
                        "<td>".$row['product_name']."</td>".
                				"<td>".$row['year']."</td>".
                      "</tr>".
                   "</thead>";

                echo "<tbody>
                        <tr>
                          <th>DISPLAY</th>".
                          "<td>Size</td>".
                  				"<td>".$row['size']."</td>".
                        "</tr>";

                echo "<tr>
                          <th>PLATFORM</th>".
                          "<td>CPU</td>".
                  				"<td>".$row['cpu']."</td>".
                      "</tr>";

                echo "<tr>
                          <th></th>".
                          "<td>GPU</td>".
                  				"<td>".$row['gpu']."</td>".
                      "</tr>";

                echo "<tr>
                          <th>MEMORY</th>".
                          "<td>Internal</td>".
                  				"<td>".$row['internal_memory']."</td>".
                      "</tr>";

                echo "<tr>
                          <th>MAIN CAMERA</th>".
                          "<td>Dual</td>".
                  	 			"<td>".$row['dual_camera']."</td>".
                     "</tr>";

                echo "<tr>
                          <th></th>".
                          "<td>Video</td>".
                  				"<td>".$row['video_camera']."</td>".
                     "</tr>";

                echo "<tr>
                          <th>SELFIE CAMERA</th>".
                          "<td>Single</td>".
                  				"<td>".$row['single_selfie']."</td>".
                     "</tr>";

                echo "<tr>
                          <th></th>".
                          "<td>Video</td>".
                  				"<td>".$row['video_selfie']."</td>".
                     "</tr>";

                echo "<tr>
                          <th>BATTERY</th>".
                          "<td>Type</td>".
                  				"<td>".$row['type_battery']."</td>".
                     "</tr>";

                echo "<tr>
                          <th>Image</th>".
                          "<td>View Image In this Link</td>".
                  				"<td>"."<a href=\"".$row['image_link']."\" target=\"_blank\" a>Click Here</a>"."</td>".
                     "</tr>";

                echo "</tbody>";

              }

            } else{
              echo "0 results";
            }
        ?>
    	</table>
    </div>

  </body>

</html>
