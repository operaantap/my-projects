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
        ?>