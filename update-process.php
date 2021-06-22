<?php
include_once 'database.php';

mysqli_autocommit($conn, FALSE);

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE todolist set ID ='" . $_POST['ID'] . "', Name='" . $_POST['Name'] . "', DateTime='" . $_POST['DateTime'] . "', List='" . $_POST['List'] . "' WHERE ID='" . $_POST['ID'] . "'");
$message = "<h4>Record Edited Successfully!<h4/>";
}
$result = mysqli_query($conn,"SELECT * FROM todolist WHERE ID ='" . $_GET['ID'] . "'");
$row= mysqli_fetch_array($result);
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4822215481.js" crossorigin="anonymous"></script>
    <title>Update To-do Lists</title>
    <!-- Latest compiled and minified CSS -->
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>

  <body>
    <section id="contact-form">
      <div class="container">        
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <div class="form-area mt-5 p-lg-4 p-3">
              <form name="frmUser" method="post" action="">
              <div><?php if(isset($message)) { echo $message; } 
              
              mysqli_commit($conn);
              mysqli_rollback($conn);
              
              // Close connection
              mysqli_close($conn);
              ?>
              
              </div>
               </div>
                <div class="row">
                  <div class="col-sm-12 text-center text-danger mb-3 font-secondary">
                    <h3>UPDATE YOUR LISTS!</h3>
                  </div>
                </div>
 
             <div style="padding-bottom:5px;">
             <a href="retrieve.php">Back to To-do Lists</a>
              </div>

                 <dl class="row">
                  <dt class="col-sm-8 text-danger font-secondary">ID*</dt>
                  <dd class="col-sm-12"><input type="hidden" id="ID" name="ID" value="<?php echo $row['ID']; ?>" class="form-control" placeholder="ID"></dd>
                  <dd class="col-sm-12"><input type="text" id="ID" name="ID" value="<?php echo $row['ID']; ?>" class="form-control" placeholder="ID"></dd>

                <dl class="row">
                  <dt class="col-sm-8 text-danger font-secondary">Name*</dt>
                  <dd class="col-sm-12"><input type="text" id="Name" name="Name" value="<?php echo $row['Name']; ?>" class="form-control" placeholder="Name"></dd>

                  <dt class="col-sm-8 text-danger font-secondary">DateTime*</dt>
                  <dd class="col-sm-12">
                    <input type="datetime-local" id="DateTime" name="DateTime" value="<?php echo $row['DateTime']; ?>";  class="form-control text-info" placeholder="DateTime">
                  </dd>

                  <dt class="col-sm-8 text-danger font-secondary">List*</dt>
                  <dd class="col-sm-12"><input type="text" id="List" name="List"  value="<?php echo $row['List']; ?>" class="form-control" placeholder="List"></dd>
                </dl>
                <div class="row">
                  <div class="col-sm-12">
                    <input type="submit" class="form-control bg-danger text-light font-secondary" value="Submit" >
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>
    
<section id="footer" class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="">© 2021 <a target="_blank" href="">Opera Dev</a> All Rights Reserved </p>
            </div>
        </div>
    </div>
</section>
    <!-- jQuery library -->
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    
  </body>
</html>