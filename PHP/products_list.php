<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products List</title>
    <style>
        tr th, tr td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Products List</h1>
    <h2><a href='add_product.php'>Add product</a></h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Year</th>

                <th>Size</th>

                <th>CPU</th>
                <th>GPU</th>

                <th>Internal_Memorry</th>

                <th>Dual_Camera</th>
                <th>Video_Camera</th>

                <th>Single_Selfie</th>
                <th>Video_Selfie</th>

                <th>Battry_Type</th>

                <th>Image</th>

                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

<?php
$sql = "SELECT * FROM mobiles_info_tb";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ///
        echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['product_name']."</td>";
            echo "<td>".$row['year']."</td>";
            echo "<td>".$row['size']."</td>";
            echo "<td>".$row['cpu']."</td>";
            echo "<td>".$row['gpu']."</td>";
            echo "<td>".$row['internal_memory']."</td>";
            echo "<td>".$row['dual_camera']."</td>";
            echo "<td>".$row['video_camera']."</td>";
            echo "<td>".$row['single_selfie']."</td>";
            echo "<td>".$row['video_selfie']."</td>";
            echo "<td>".$row['type_battery']."</td>";
            echo "<td>".$row['image_link']."</td>";
            echo "<td><a href=\"edit_product.php?id=".$row['id']."\">EDIT</a></td>";
            echo "<td><a href=\"edit_product.php?id=".$row['id']."\">X</a></td>";
        echo "<tr/>";
    }
} else {
    echo "0 results";
}
?>
        </tbody>
    </table>
</body>
</html>
