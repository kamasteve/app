<?php include ('includes/header.php');
$sql = mysqli_query($con,"SELECT * FROM owner");
while($row = mysqli_fetch_array($sql)) {
$owner_arr[]=$row;
$pageid=206;
}

$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
}

?>
<style>
.tentant_footer_cls .box-icon a{
width:auto !important;
height:35px !important;
}
</style>
<div class="ch-container">
<div class="row">
<?php include ('includes/left_sidebar.php');  ?>
 <div id="content" class="col-lg-10 col-sm-10">
  
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
		<div class="box-content row">
            <ul class="nav nav-tabs">
  <li class="active"><a href="#">All Landlords</a></li>
  <li><a href="#">Add New Landlord</a></li>
  <li><a href="#">Menu 2</a></li>
  <li><a href="#">Menu 3</a></li>
</ul>
  <form>
  <div class="form-group">   
			<div class="col-xs-3">
  
  <input class="form-control" id="ex1" type="text" placeholder=" First Name">
</div>
<div class="col-xs-3">
  
  <input class="form-control" id="ex2" type="text" placeholder=" Middle Name">
</div>
<div class="col-xs-3">
  
  <input class="form-control" id="ex3" type="text" placeholder=" Last Name">
</div>

<div class="col-xs-6">
<input class="form-control" id="ex1" type="text" placeholder=" ID Number/Passport No">
</div>
<div class="col-xs-6">
  
  <input class="form-control" id="ex2" type="text" placeholder=" Adress">
</div>

<div class="col-xs-6">
  
  <input class="form-control" id="ex2" type="text" placeholder=" Email">
</div>
<div class="col-xs-6">
  
  <input class="form-control" id="ex3" type="text" placeholder=" Mobile Number">
</div>
<div class="col-xs-3">
  
  <input class="form-control" id="ex2" type="text" placeholder=" Bank Account Number">
</div>
<div class="col-xs-3">
  
  <input class="form-control" id="ex3" type="text" placeholder=" Bank Branch">
</div>
<div class="col-xs-6">
  
  <input class="form-control" id="ex3" type="text" placeholder=" Account Name">
</div>
<div class="col-xs-3">
  
  <input class="form-control" id="ex1" type="text" placeholder=" Nationality">
</div>
<div class="col-xs-3">
  
  <input class="form-control" id="ex2" type="text" placeholder=" County">
</div>
<div class="col-xs-6">
  
  <input class="form-control" id="ex3" type="text" placeholder=" City/Town">
</div>
		</div>
</form>	
<style>
input {
	 Margin-top:18px;
	 Margin-bottom:18px;
 }
</style>	
</div>
</div>
    </div>
</div>




    </div>




</div>



<!--/row-->
    <!-- content ends -->
    
       




<?php  include ('includes/footer.php'); ?>