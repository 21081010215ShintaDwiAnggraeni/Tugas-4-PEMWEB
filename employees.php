<?php
include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>EMPLOYEES</title>
</head>
<body>
    <h2 align="center">DATA EMPLOYEES</h2>
    <table border="1" align="center" >
        <thead>
        <tr bgcolor="cream" >
            <th>employeeNumber</th>
            <th>lastName</th>
            <th>firstName</th>
            <th>extension</th>
            <th>email</th>
            <th>officeCode</th>
            <th>reportsTo</th>
            <th>jobTitle</th>
        </tr>
        </thead>
        <tbody>
                <?php 
                  $query = "SELECT * FROM employees";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $data['employeeNumber'];  ?></td>
                    <td><?php echo $data['lastName'];  ?></td>
                    <td><?php echo $data['firstName'];  ?></td>
                    <td><?php echo $data['extension'];  ?></td>
                    <td><?php echo $data['email'];  ?></td>
                    <td><?php echo $data['officeCode'];  ?></td>
                    <td><?php echo $data['reportsTo'];  ?></td>
                    <td><?php echo $data['jobTitle'];  ?></td>
                  </tr>
                 <?php endwhile ?>
              </tbody>
    </table>
</body>
</html>