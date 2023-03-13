<?php
include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRODUCTLINES</title>
</head>
<body>
    <h2 align="center">DATA PRODUCTLINES</h2>
    <table border="1" align="center" >
        <thead>
        <tr bgcolor="cream" >
            <th>productLine</th>
            <th>textDescription</th>
            <th>htmlDescription</th>
            <th>image</th>
        </tr>
        </thead>
        <tbody>
                <?php 
                  $query = "SELECT * FROM productlines";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $data['productLine'];  ?></td>
                    <td><?php echo $data['textDescription'];  ?></td>
                    <td><?php echo $data['htmlDescription'];  ?></td>
                    <td><?php echo $data['image'];  ?></td>
                  </tr>
                 <?php endwhile ?>
              </tbody>
    </table>
</body>
</html>