<?php
include_once 'database.php';
mysqli_autocommit($conn, FALSE);
$result = mysqli_query($conn,"SELECT * FROM todolist");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrieve data</title>
   <link rel="stylesheet" href="table.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
	    <td>ID</td>
		<td>Name</td>
		<td>DateTime</td>
		<td>List</td>
		<td>Edit</td>
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
		<td><a href="update-process.php?ID=<?php echo $row["ID"]; ?>">Edit</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
        mysqli_commit($conn);
        mysqli_rollback($conn);
        
        // Close connection
        mysqli_close($conn);
?>
 </body>
</html>