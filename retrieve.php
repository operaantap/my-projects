<?php
include_once 'database.php';

mysqli_autocommit($conn, FALSE);

$result = mysqli_query($conn,"SELECT * FROM todolist");
?>

<!DOCTYPE html>
<html>
 <head>
 <title> Retrieve data</title>
 <link rel="stylesheet" href="index.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>DateTime</th>
    <th>List</th>
  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["ID"]; ?></td>
    <td><?php echo $row["Name"]; ?></td>
    <td><?php echo $row["DateTime"]; ?></td>
    <td><?php echo $row["List"]; ?></td>
</tr>

<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}

        mysqli_commit($conn);
        mysqli_rollback($conn);
        
        // Close connection
        mysqli_close($conn);

?>
 </body>
</html>