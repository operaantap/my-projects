<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4822215481.js" crossorigin="anonymous"></script>
    <title>Todo App</title>
    <!-- Latest compiled and minified CSS -->
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>
  
  <body>
    <section id="contact-form">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
<!--             project title area start -->
            <div class="title-area">
              <h1 class="font-primary text-success">Plan Your Activities</h1>
              <h2 class="font-secondary text-danger">"By Failing to prepare, you are preparing to fail." – Benjamin Franklin.</h2>
            </div>
<!--             project title area end -->
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <div class="form-area mt-5 p-lg-4 p-3">
<!--               main form start -->
              <form method="post" action="insert.php">
                <div class="row">
                  <div class="col-sm-12 text-center text-success mb-3 font-secondary">
                    <h3>GOODLUCK!</h3>
                  </div>
                </div>

                <dl class="row">;
                  <dt class="col-sm-8 text-info font-secondary">Name*</dt>
                  <dd class="col-sm-12"><input type="text" id="Name" name="Name" value="" class="form-control" placeholder="Name"></dd>

                  <dt class="col-sm-8 text-info font-secondary">Date and Time*</dt>
                  <dd class="col-sm-12">
                    <input type="datetime-local" id="DateTime" name="DateTime" value="";  class="form-control text-info" placeholder="DateTime">
                  </dd>

                  <dt class="col-sm-8 text-info font-secondary">List*</dt>
                  <dd class="col-sm-12"><input id="List" name="List" class="form-control" placeholder="List"></dd>
                </dl>
                <div class="row">
                  <div class="col-sm-12">
                    <input type="submit" class="form-control bg-info text-light font-secondary" value="Submit" >
                  </div>
                </div>
              </form>
<!--               main form end -->
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

</body>
</html>