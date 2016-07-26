<?php include ('includes/header.php'); ?>

<div class="ch-container">
<div class="row">
 <?php include ('includes/left_sidebar.php');  ?>
 <div id="content" class="col-lg-10 col-sm-10">
 <div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
		<div class="box-content row">
		
		
  
 <form action="addproperty.php" method="post" onsubmit="return confirm('Do you really want to submit the form?');">
		<div class="form-group">
       <div class="row">

<div class="col-xs-6">
  
  <input class="form-control" name="name" type="text" placeholder=" Property Name" required>
</div>
<div class="col-xs-6">
  
  <input class="form-control" name="type" type="text" placeholder=" Property Type" required>
</div>
</div>
<div class="row">

<div class="col-xs-6">
  
  <input class="form-control" name="landlord" type="text" placeholder=" Property Owner" required>
</div>
<div class="col-xs-6">
  
  <input class="form-control" name="address" type="text" placeholder="Address" required>
</div>
</div>
<div class="row">

<div class="col-xs-6">
  
  <input class="form-control" name="contact" type="text" placeholder=" Phone Number" required>
</div>
<div class="col-xs-6">
  
  <input class="form-control" name="units" type="text" placeholder=" Number of Units" required>
</div>
</div>
<div class="row">

<div class="col-xs-6">
  
  <input class="form-control" name="location" type="text" placeholder=" Property Location" required>
</div>
<div class="col-xs-6">
  
  <input class="form-control" name="status" type="text" placeholder=" Rental Status" required>
</div>
</div>
<div class="row">
		<div class="col-xs-4">
		<button type="submit" class="btn btn-default"   name='submit'>Save</button>
		</div>
		</div>

		</div>
		</form>
		</div>
		</div>
 
 </div>
 </div>
 </div>
 </div>
 </div>
 <style>
input{
margin-top:35px;
margin-bottom:10px;
}

 </style>
 <?php  include ('includes/footer.php'); ?>