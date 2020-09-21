<!doctype html>
<html lang="en">
  <head>
      <style>
  #divc{
      margin-top:20px;
  }


          </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>ADMIN DASHBOARD</title>
  </head>
  <body> 
      
<?php// echo $error;?>
 
  
<div class="container">
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
     
      

      

    </ul>
  </div>
</nav>


  <div class="alert alert-danger"  role="alert">
 <strong> <h3 class="text-center">ADMIN PANEL </h3> </strong>
</div>

<form class="needs-validation" action=" <?php echo site_url('logic/studentdata')  ?>" novalidate  
 method="POST" enctype="multipart/form-data" >
 
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01"> <strong>Student Id </strong></label>
      <input type="text" name="studentid" class="form-control" id="validationCustom01" placeholder="Student Id" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02"> <strong>Name </strong></label>
      <input type="text" name="name" class="form-control" id="validationCustom02"  placeholder="Student Name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  <div class="form-row">
 
  <div class="col-md-3 mb-3">
      <label for="validationCustom04"> <strong>Class</strong></label>
      <select class="custom-select"  name="class" id="validationCustom04" required>
        <option selected disabled value="">Choose </option>
        <option> Nursery</option>
        <option> L.K.G</option>
        <option> U.K.G</option>
        <option> I</option>
        <option>II</option>
        <option> III</option>
        <option>IV</option>
        <option> V</option>
        <option> VI</option>
        <option> VII</option>
        <option> VIII</option> 
        <option> IX</option>
        <option> X</option>
        <option> XI</option>
        <option> XII</option>
      </select>
      <div class="invalid-feedback">
     Select your class
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom03"> <strong>Section </strong></label>
      <input type="text" class="form-control"  name="section"style="width:100%;" placeholder ="  Student Section" id="validationCustom03" required>
      <div class="invalid-feedback">
        Please provide a valid section.
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationCustom03"> <strong>Guardian Name </strong></label>
      <input type="text" class="form-control" name="guardian"  placeholder =" Guardian" id="validationCustom03" required>
      <div class="invalid-feedback">
        Please provide a Guardian name
      </div>
    </div>

 
  
  

    
    <div class="col-md-3 mb-3">

    <label for="exampleFormControlFile1"> <strong>Choose your tc </strong></label>
    <?php  echo form_upload([   'name'=>'userfile']); ?>
    <!--<input type="file" class="form-control-file"size="20" name="userfile" id="exampleFormControlFile1">
--> <div class="col-md-6 mb-3" style="margin-top:40px;">
<?php  if(isset($upload_error)) {echo $upload_error; }  ?>
  </div>
    <div class="invalid-feedback">
      Upload TC
      </div>
    </div>

     
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
     <strong>   Kindly check once again </strong>
      </label>
      <div class="invalid-feedback">
        You must check again while submitting
      </div>
    </div>
  </div> <?php 
echo form_submit('submit', 'Save'); ?>
  <!--<button class="btn btn-primary" type="submit">Save</button>-->
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</div>



</div>  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>