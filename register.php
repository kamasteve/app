<?php include ('includes/header.php');
//include ('includes/config.php');
$pageid=7;
?>
<style>
.form-control{
width:500px;

}
</style>
<script type="text/javascript">
$(function () {
    $('#new_user').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://localhost:6060/app/signup.php";
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    $("#alert").html(data);
                }
				
            });
            return false;
        }
    })
});
</script>

<div class="ch-container">
<div class="row">

 <?php include ('includes/left_sidebar.php');  ?>
 <div id="content" class="col-lg-10 ">
 <div class="row ">
    <div class="box col-md-12">
        <div class="box-inner">
		<div class="box-content row ">
    <form  method='POST' id="new_user" action="signup.php">
	<div class='messages alert '> </div>
	<div class="form-group col-xs-6">
<label class="control-label col-xs-4" for="text">First Name:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
  <input class="form-control" name="fname" type="text" placeholder=" First Name" required>
</div>
</div>
	<div class="form-group col-xs-6">
<label class="control-label col-xs-4" for="text">Last Name:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
 <input class="form-control" name="lname" type="text" placeholder=" Last Name" required>
</div>
</div>    
 <div class="form-group col-xs-6">
<label class="control-label col-xs-4" for="text">Email:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
 <input class="form-control" name="email" type="text" placeholder=" Email" required> 
</div>
</div>      
<div class="form-group col-xs-6">
<label class="control-label col-xs-4" for="text">Username:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
 <input class="form-control" name="username" type="text" placeholder=" Username" required>
</div>
</div> 
<div class="form-group col-xs-6">
<label class="control-label col-xs-4" for="text">Password:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
 <input type="password" class="form-control" name="password" placeholder="Password">
</div>
</div>
<div class="form-group col-xs-6">
<label class="control-label col-xs-4" for="text">Password Confirm:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
 <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password">
</div>
</div> 	 
 <div class="form-group col-xs-6">
<label class="control-label col-xs-4" for="text">Password Confirm:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
 <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
</div>
</div> 
<div class="form-group col-xs-6">
<label class="control-label col-xs-4" for="text">User Role:</label>
  <div class="input-group col-xs-8">
		<select class='form-control' name="role" id="state">
        <option value="admin">Administrator</option>
		<option value="user">Normal User</option>
    </select>
	</div>
</div>
<div class="form-group col-xs-6">
<label class="control-label col-xs-4" for="text"></label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
 <button class="button " type="submit" name="button" value='submit'>REGISTER</button>
		
</div>
</div>  
          
    </form>
</div>
</div>
</div>
</div>
</div>

<?php  include ('includes/footer.php'); ?>
