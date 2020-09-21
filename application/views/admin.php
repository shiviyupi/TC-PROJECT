<?php



 ?>
<!doctype html>
<html lang="en">
  <head>
      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Admin Panel</title>
  </head>
  <body style="background-image: "<?php echo base_url('images/admin.jpg'); ?>"> 

   <div class="container">
    <div class="alert alert-info" style="margin-top:5px;"role="alert">
 <h1 class="text-center"> ADMIN PANEL</h1>
</div>
   
    <!-- Default form login --> 
 
<form class="text-center border border-light p-5" method="post" action=<?php echo site_url('logic/adminlogin')  ?>>    <center>
<p class="h4 mb-4">Sign in</p>

<!-- Email -->
<input type="email" name="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

<!-- Password -->
<input type="password" name="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

<div class="d-flex justify-content-around">
    <div>
        <!-- Remember me -->
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
            <label class="custom-control-label" for="defaultLoginFormRemember">
              Check me
            </label>
        </div>
    </div>
    <!-- <div>
        Forgot password -->
     <!--   <a href="">Forgot password?</a>
    </div>-->
</div>

<!-- Sign in button --> 

<?php 



echo form_submit('submit','Signin'); ?>
<!--
<button class="btn btn-info btn-block my-4" type="submit">Sign in</button>
-->
<!-- Register 
<p>Not a member?
    <a href="">Register</a>
</p>-->


</form>
</center>
</div>





































































<!-- Default form login -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
