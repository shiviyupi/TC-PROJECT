<?php 
	$adata= $this->session->userdata('a');
	$slink="http://[::1]/tc/";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Student Data!</title>
  </head>
  <body> <div class="container" style="margin-top:5px;">

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
        <a class="nav-link" href="<?php echo base_url('index.php/logic/edit');?>" style="color:black;"> <strong>Edit </strong></a>
      </li>


     
     
    </ul>
  </div>
</nav>
    <div class="alert alert-danger" role="alert">
  <h1 class="text-center">Your Data</h1>
</div>



  
<table class="table table-striped" align="center">
	<tr>
		<td>Student Id</td>
		<td><?php echo $adata['sid'];?></td>
		<?php $this->session->set_userdata('id',$adata['sid']);?>
	</tr>
	<tr>
		<td>Student Name</td>
		<td><?php echo $adata['sname'];?></td>
	</tr>
	<tr>
		<td>Student Class</td>
		<td><?php echo $adata['sclass'];?></td>
	</tr>
	<tr>
		<td>Student Section</td>
		<td><?php echo $adata['ssection'];?></td>
	</tr>
	<tr>
		<td>Student Guardian</td>
		<td><?php echo $adata['sg'];?></td>
	</tr>
	<tr>
		<?php
		$slink.=$adata['fo'];
		?>
		<td colspan="2" align="center">
			<a href="<?php echo $slink?>" target="_blank" class= "btn btn-success"> View Transfer Certificate</a> <br> <br>
			
		</td>
</table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
<?php

if(isset($POST['s2']))
{
	$this->load->view('frontpart');
}
?>