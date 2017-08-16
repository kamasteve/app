<?php include ('includes/header.php'); 
$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
}
$pageid=201;
?>

<div class="ch-container">
<div class="row">
<?php include ('includes/left_sidebar.php'); ?>
 <div id="content" class="col-lg-10 col-sm-10">
 <div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
		<div class="box-content row">
		<script type="text/javascript">
$(function () {
    $('#update_profile').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://localhost/app/ajax/update_tenant.php";
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    var messageAlert = 'alert-' + data;
                    var messageText = data;
                    //alert(data);
                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#edit_tentant').find('.messages').html(alertBox);
                        $('#edit_tentant')[0].reset();
						
                    }
                }
            });
            return false;
        }
    })
});
</script>
		
	<?php 
	$var_value = $_GET['wishID'];

	?>	
<?php 
if (isset($_POST['submit'])) {
$tenant_id  = $_POST['varname']; }
$sql1=mysqli_query($con,"SELECT * FROM tenants WHERE tenant_id='$var_value'");
$tenant_arr = mysqli_fetch_array($sql1);
?>
<form class="form-horizontal" method='POST'  id='edit_tentant' name='edit_tentant'>
<div class='messages alert '> </div>
<div class="row">
  

<div class="alert_msg" id='alert_msg_<?php echo $tenant_arr['tenant_id']; ?>' style='display:none;'></div><br />

	
	
	<div class="form-group col-md-6">
	
		<label class="control-label col-xs-3" for="fname">Property :</label>
		<div class=" col-xs-9">
			<input type="text" class="form-control col-xs-8" name="property" id="fname" placeholder="First Name" value='<?php echo $tenant_arr['property']; ?> 'readonly>
		</div>
	
	</div>
	<div class="form-group col-md-6">
	
		<label class="control-label col-xs-3" for="fname">Unit:</label>
		<div class=" col-xs-9">
			<input type="text" class="form-control col-xs-8" name="fname" id="unit" placeholder="First Name" value='<?php echo $tenant_arr['unit']; ?> 'readonly>
		</div>
	
	</div>
	<div class="form-group col-md-6">
	
		<label class="control-label col-xs-3" for="fname">First Name:</label>
		<div class=" col-xs-9">
			<input type="text" class="form-control col-xs-8" name="fname" id="fname" placeholder="First Name" value='<?php echo $tenant_arr['fname']; ?>'>
		</div>
	
	</div>
	<div class="form-group col-md-6">
		<label class="control-label col-xs-3" for="lame">Last Name:</label>
		<div class="col-xs-9">
			<input type="text" class="form-control" name="lname" value='<?php  echo  $tenant_arr['lname']; ?>' placeholder="Last Name">
		</div>
	</div>
	
	
	<div class="form-group col-md-6">
	
	<label class="control-label col-xs-3" for="email">Email:</label>
	
	<div class="col-xs-9">
	<input type="email" class="form-control" value='<?php echo $tenant_arr['email']; ?>'  name="email" placeholder="Email">
	</div>
		</div>
	
	<div class="form-group col-xs-6">
	
		<label class="control-label col-xs-3" for="email">Phone:</label>
		
		<div class="col-xs-9">
			<input type="tel" class="form-control" value='<?php echo $tenant_arr['phone']; ?>'   name="phone" placeholder="Phone Number">
		</div>
		</div>
	<div class="form-group col-md-6">
		<label class=" col-xs-3 control-label " for="addres">Address:</label>
		<div class="col-xs-9">
			<input type="text" class="form-control" value ='<?php echo $tenant_arr['adress']; ?>' name="addres" placeholder="Postal Address"> 
		</div>
	</div>
	<div class="form-group col-md-6">
		<label class="control-label col-xs-3" for="Deposit">Deposit:</label>
		<div class="col-xs-9">
			<input type="text" class="form-control" value='<?php echo $tenant_arr['acountnumber']; ?>'   name="deposit" placeholder="Deposit ">
		</div>
	</div>
	
	
	<div class="form-group col-md-6">
		<label class="control-label col-xs-3" for="confirmPassword">Monthly Rent:</label>
		<div class="col-xs-9">
			<input type="rent" class="form-control" value='<?php echo $tenant_arr['unit']; ?>' name="rent" placeholder="Monthly Rent">
		</div>
	</div>
	<div class="form-group col-md-6">
		<label class="control-label col-xs-3">Satus</label>
		
  <div class="col-xs-9">
  
 <select class="form-control " name="mode" id="mode">
        <option value="1">Active</option>
        <option value="2">Deactivate</option>
        <option value="3">Suspended</option>       
      </select>
</div>
</div>
	</div>
	<div class="form-group col-md-6">
		<div class="col-xs-3">
		</div>
		<div class="col-xs-9">
			
		<input class=" button " type="submit" name="button" >
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

 <?php  include ('includes/footer.php'); ?>
 