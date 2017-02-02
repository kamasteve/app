<?php include ('includes/header.php');
$result = mysqli_query($con,"SELECT * FROM register WHERE username ='$_id'");
while($row = mysqli_fetch_array($result)):
$pageid=1;
$result = mysqli_query($con,"SELECT * FROM register WHERE username ='$_id'");

if($result) {
	while ($row = mysqli_fetch_assoc($result)) {
		$fname = $row['fname']; // customer name
		$lname = $row['lname']; // last name
		$nationality = $row['nationality']; // Nationality
		$email = $row['email']; // customer email
		$phone = $row['phone']; // Phone Number
		$username = $row['username']; // Username
		$adress= $row['adress'];
		$company = $row['company'];
		}
		}
		
 ?>
<style>
.tentant_footer_cls .box-icon a{
width:auto !important;
height:35px !important;

}
.form-control {

}
.btn{
background: #B6EE65;
width:300px;
height:45px
margin:50px;
padding:15px;
}
input{
margin-top:35px;
margin-bottom:10px;
}

</style>

<div class="ch-container">
	<div class="row">
 <?php include ('includes/left_sidebar.php');  ?>
 <div id="content" class="col-md-10">
 
    <div class="box col-md-12">
        <div class="box-inner">
		<form action="verify_payments.php" method="post">
  <div class="form-group home basicinfo" >
          <div class="row">

<div class="col-md-6">
<input class="form-control" name="fname" value="<?php echo $fname;?>" type="text" placeholder=" First Name"  required>
</div>
<div class="col-md-6">
  
  <input class="form-control" name="lname" type="text" value="<?php echo $lname; ?>" placeholder=" Last Name"  required>
</div>
</div>
 <div class="row">

<div class="col-md-6">
<input class="form-control" name="username" type="text" placeholder="Username" value="<?php echo $username; ?>" required>
</div>
<div class="col-md-6">
  
  <input class="form-control" name="email" type="text" placeholder="Email" value="<?php echo $email; ?>"  required>
</div>
</div>
 <div class="row">

<div class="col-md-6">
<input class="form-control" name="phone_numer" type="text" placeholder=" Phone Number" value="<?php echo $phone; ?>" required>
</div>
<div class="col-md-6">
  
  <input class="form-control" name="country" type="text" placeholder=" Country" value="<?php echo $nationality; ?>" required>
</div>
</div>
 <div class="row">

<div class="col-md-6">
<input class="form-control" name="company" type="text" placeholder=" Company"value="<?php echo $company; ?>" required>
</div>
<div class="col-md-6">
  
  <input class="form-control" name="adress" type="text" placeholder=" Adress" value="<?php echo $adress; ?>"required>
</div>
</div>
<div class="row">
		<div class="col-xs-4">
		<button type="submit" class="btn "   name='submit'>Update Profile</button>
		</div>
		</div>
          <!-- .vd_content-section --> 
          </div>
        </div>
		</div>
		</form>
	
		</div>
		</div>
		
<?php  
  endwhile;
    mysqli_free_result($result);
mysqli_close($con);
 include ('includes/footer.php'); ?>