<?php include ('includes/header.php');
//include ('includes/config.php');
$pageid=7;
?>
<style>
.form-control{
width:500px;

}
</style>

   
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/register.js"></script>



<div class="ch-container">
<div class="row">

 <?php include ('includes/left_sidebar.php');  ?>
 <div id="content" class="col-lg-10 ">
 <div class="row ">
    <div class="box col-md-12">
        <div class="box-inner">
		<div class="box-content row ">
		<div class="form-body">
    <form  method='POST' id="new_company" action="signup.php" >
	 <div id="errorDiv"></div>
	<div class="form-group col-md-6">
<label class="control-label " for="text">Company Name:</label>
 <div class="input-group  " id="invoice_due_text">
  <input class="form-control" name="fname" type="text" placeholder=" First Name" required>
  <span class="help-block" id="error"></span> 
</div>
   
</div>
	<div class="form-group col-md-6">
<label class="control-label col-xs-3" for="text">COMPANY_ADDRESS_1:</label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
 <input class="form-control" name="lname" type="text" placeholder=" Last Name" required>
</div>
 <span class="help-block" id="error"></span>   
</div>    
 <div class="form-group ">
<label class="control-label col-xs-3" for="text">COMPANY_ADDRESS_2:</label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
 <input class="form-control" name="email" id="email" type="text" placeholder=" Email" required> 
 <span class="help-block" id="error"></span> 
</div> 
</div>      
<div class="form-group ">
<label class="control-label col-xs-3" for="text">COMPANY_ADDRESS:</label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
 <input class="form-control" name="username" type="text" placeholder=" Username" required>
  <span class="help-block" id="error"></span>   
</div>
</div> 
<div class="form-group ">
<label class="control-label col-xs-3" for="text">Email:</label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
 <input type="text" class="form-control" name="password" id="password" placeholder="Password">
 <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group ">
<label class="control-label col-xs-3" for="text">Registration Number:</label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
 <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
 <span class="help-block" id="error"></span> 
</div>
</div> 	 
 <div class="form-group ">
<label class="control-label col-xs-3" for="text">Tax Information:</label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
 <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
</div>
</div> 
<div class="form-group ">
<label class="control-label col-xs-3" for="text">User Role:</label>
  <div class="input-group col-xs-5">
		<select class='form-control' name="role" id="state">
        <option value="admin">Administrator</option>
		<option value="user">Normal User</option>
    </select>
	</div>
</div>
<div class="form-group ">
<label class="control-label col-xs-3" for="text"></label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
 <button class="button" id="btn-signup" type="submit" name="button" value='submit'>REGISTER</button>
		
</div>
</div>  
          
    </form>
</div>
</div>
</div>
</div>
</div>

<?php  include ('includes/footer.php'); ?>
