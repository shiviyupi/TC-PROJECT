<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title> TRANSFER CERTIFICATE SEARCH SYSTEM</title>
  </head> <div class="container">

    <nav class="navbar navbar-expand-lg navbar-danger bg-danger">
  <a class="navbar-brand" href="<?php echo site_url('logic/frontend'); ?>" style="color:black;"><strong>ABC SCHOOL </strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('logic/frontend'); ?>" style="color:black;"> <strong>Home </strong><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('logic/adminlogin'); ?>" style="color:black;"> <strong>Administration </strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:black;"> <strong>StudentsCorner </strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:black;"> <strong>Fees </strong></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#" style="color:black;"> <strong>Admissions </strong></a>
      </li>
    </ul>
  </div>
</nav>
  <body style="background-color:white; ">
    <img src="<?php echo base_url('images/skool.jpg'); ?> " width="1110px" height="400px" >
      <div class="container-fluid">
  <div class="alert alert-danger"style="margin-top:5px;" role="alert">
  <h3 class="text-center"> SEARCH YOUR DATA </h3>
</div>
   <div class="container">

   <form  method="post" action=<?php echo site_url('logic/frontdata')  ?>>
  <div class="form-group">
    <label for="exampleInputEmail1"><strong>Enter your Student Id </strong></label>
    <input type="text"  name="studentid" style="width:75%;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your Student Id with anyone else.</small>
  </div>
 <?php echo form_submit('submit', 'Search'); ?>
  
</form>
   </div> 






</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>