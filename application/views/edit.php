
<?php
  $id=$this->session->userdata('id');
  $q=$this->db->where('studentid',$id)->get('studentlist')->row();
    $slink="http://[::1]/tc/";
?>




<!doctype html>
<html lang="en">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Edit</title>
  </head>


  <body>


   <div class="container"    style="margin-top:5px;">
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




   <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong> Hey ! </strong> You need to     again fill all the contents inorder to edit it.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button> <br> <br>
  
      
</div>




<?php echo form_open_multipart('logic/edit');?>

   <div class="form-group">
    <label for="exampleInputEmail1">Student Id:</label>
    <input type="text" class="form-control" value="<?php echo $q->studentid;?>" name="sid"
     id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Student name:</label>
    <input type="text" value="<?php echo $q->name;?>" name="sn"

    class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Student class:</label>
    <input type="text" value="<?php echo $q->class;?>" name="sc" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Student Section:</label>
    <input type="text" value="<?php echo $q->section;?>" name="ss" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"> Guardian name:</label>
    <input type="text" value="<?php echo $q->Guardian;?>" name="sg" class="form-control" id="exampleInputPassword1">
  </div>

  <?php $slink.=$q->file?>
  <a href="<?php echo $slink?>" target="_blank" class= "btn btn-success"> Download your Current TC</a>

<Br> <br>
  <div class="form-group">
    <label for="exampleInputPassword1"> Select your new TC:
    <input type="file"name="userfile" size="20" >
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>



<br>







<!--

Studentid:  <input type="text" value="<?php// echo $q->studentid;?>" name="sid"> <br> <br>
 Student Name: <input type="text" value="<?php //echo $q->name;?>" name="sn"><br> <br>
   Student class:<input type="text" value="<?php// echo $q->class;?>" name="sc"><br><br>
 Student Section: <input type="text" value="<?php// echo $q->section;?>" name="ss"><br> <br>
   Guardian Name:<input type="text" value="<?php //echo $q->Guardian;?>" name="sg"><br><br>
  <?php// $slink.=$q->file?>
  <a href="<?php// echo $slink?>" target="_blank" class= "btn btn-success">Generate Transfer Certificate</a>
 TC:  <input type="file" name="userfile" size="20" />
  <input type= "submit" name="Submit">
</form>
-->
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

