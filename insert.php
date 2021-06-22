<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page</title>
    <link rel="stylesheet" href="index.css">
</head>
  
<body>
    <center>
        <?php

        // servername => localhost
        // username => store_admin
        // password => password1#
        // database name => store_data
        $conn = mysqli_connect("localhost", "store_admin", "password1#", "store_data");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        mysqli_autocommit($conn, FALSE);
        
         // Taking all 3 values from the form data(input)
         $name =  $_REQUEST['Name'];
         $date = $_REQUEST['DateTime'];
         $list =  $_REQUEST['List'];

        // Escape variables for security
        $name =  mysqli_real_escape_string($conn, $_REQUEST['Name']);
        $date = mysqli_real_escape_string($conn, $_REQUEST['DateTime']);
        $list =  mysqli_real_escape_string($conn, $_REQUEST['List']);


        // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($name)) { echo "Name is required. <br />"; }
    if (empty($date)) { echo "Date and Time are required. <br />"; }
    if (empty($list)) { echo "Todo List is required."; }
    
          
        // Performing insert query execution
        // here our table name is todolist
       
        $sql = "INSERT INTO todolist (Name, DateTime, List) VALUES ('$name', 
            '$date','$list')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>Data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$name\n $date\n "
                . "$list");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }

        mysqli_commit($conn);
        mysqli_rollback($conn);
        
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>