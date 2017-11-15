<?php
/*******************************************************************************
* Module for editing payments                                            *
*                                                                              *
* Version: 1.1.1	                                                               *
* Author:  Kamau Ngugi                                   				   *
*******************************************************************************/
include('includes/header.php');
//include('includes/config.php');


$pageid=101;
// Connect to the database
//$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
// output any connection error

$paymentid=$_GET['wishID'];
// the query
$query_edit = "SELECT * from rent_payments  WHERE  id=$paymentid";
$result = mysqli_query($con, $query_edit);

// mysqli select query
if($result) {
	while ($row = mysqli_fetch_assoc($result)) {
		
		// invoice details
		
		$property = $row['property']; // invoice number
		$unit = $row['unit']; // invoice custom email body
		$payee = $row['payee']; // invoice date
		$due_date = $row['due_date']; // invoice due date
		$ammount = $row['credit']; // invoice sub-total
		$details = $row['details']; // invoice shipping amount
	}
}
/* close connection */
$con->close();
?>

<div class="ch-container">
<div class="row">
<?php include ('includes/left_sidebar.php'); ?>
 <div id="content" class="col-lg-10 col-sm-10">
 <div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
		<div class="box-content row">
		
	<?php 
	$var_value = $_GET['wishID'];

	
	?>	
<?php 
/**
if (isset($_POST['submit'])) {
$tenant_id  = $_POST['varname']; }
$sql1=mysqli_query($con,"SELECT * FROM tenants WHERE tenant_id='$paymentid'");
$tenant_arr = mysqli_fetch_array($sql1);
*/
?>
<form class="form-horizontal" method='POST'  id='edit_tentant' name='edit_tentant'>
<div class="row">
  

<div class="alert_msg" id='alert_msg_<?php echo $tenant_arr['tenant_id']; ?>' style='display:none;'></div><br />

	<div class="form-group col-md-6">
		
		<label class="control-label col-xs-4" for="fname">Select Property:</label>
		<div class=" col-xs-8">
	<?php
    //Include database configuration file
    
    
    //Get all country data
    $query = $con->query("SELECT * FROM properties  ORDER BY property_id ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
    <select class='form-control ' name="property" id="property" placeholder="<?php echo $tenant_arr['tenant_id']; ?>">
        <option value="">Select Property</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['property_id'].'">'.$row['name'].'</option>';
            }
        }else{
            echo '<option value="">Property not available</option>';
        }
        ?>
    </select>
	</div>
</div>
	<div class=" form-group col-md-6">
	<label class="control-label col-xs-4" for="fname">Select Unit:</label>
	<div class=" col-xs-8">
			<select class='form-control' name="unit" id="state">
        <option value="">Select Property first</option>
    </select>
	</div>
</div>
	
	
	<div class="form-group col-md-6">
	
		<label class="control-label col-xs-4" for="fname">First Name:</label>
		<div class=" col-xs-8">
			<input type="text" class="form-control col-xs-8" name="fname" id="fname" placeholder="First Name" value='<?php echo $tenant_arr['fname']; ?>'>
		</div>
	
	</div>
	<div class="form-group col-md-6">
		<label class="control-label col-xs-4" for="lame">Last Name:</label>
		<div class="col-xs-8">
			<input type="text" class="form-control" name="lname" value='<?php  echo  $tenant_arr['lname']; ?>' placeholder="Last Name">
		</div>
	</div>
	
	
	<div class="form-group col-md-6">
	
	<label class="control-label col-xs-4" for="email">Email:</label>
	
	<div class="col-xs-8">
	<input type="email" class="form-control" value='<?php echo $tenant_arr['email']; ?>'  name="email" placeholder="Email">
	</div>
		</div>
	
	<div class="form-group col-xs-6">
	
		<label class="control-label col-xs-4" for="email">Phone:</label>
		
		<div class="col-xs-8">
			<input type="tel" class="form-control" value='<?php echo $tenant_arr['phone']; ?>'   name="phone" placeholder="Phone Number">
		</div>
		</div>
	<div class="form-group col-md-6">
		<label class=" col-xs-4 control-label " for="addres">Address:</label>
		<div class="col-xs-8">
			<input type="text" class="form-control" value ='<?php echo $tenant_arr['adress']; ?>' name="addres" placeholder="Postal Address"> 
		</div>
	</div>
	<div class="form-group col-md-6">
		<label class="control-label col-xs-4" for="Deposit">Deposit:</label>
		<div class="col-xs-8">
			<input type="text" class="form-control" value='<?php echo $tenant_arr['acountnumber']; ?>'   name="deposit" placeholder="Deposit ">
		</div>
	</div>
	
	
	<div class="form-group col-md-6">
		<label class="control-label col-xs-4" for="confirmPassword">Monthly Rent:</label>
		<div class="col-xs-8">
			<input type="rent" class="form-control" value='<?php echo $tenant_arr['unit']; ?>' name="rent" placeholder="Monthly Rent">
		</div>
	</div>
	<div class="form-group col-md-6">
		<label class="control-label col-xs-4">gender:</label>
		<div class="col-xs-2">
			<label class="radio-inline">
			<input type="radio" checked='checked' <?php if($tenant_arr['gender']=='male'){ echo "checked='checked'"; } ?> name="genderRadios" value="male"> Male </label>
		</div>
		<div class="col-xs-2">
			<label class="radio-inline">
			<input type="radio" name="genderRadios" <?php if($tenant_arr['gender']=='female'){ echo "checked='checked'"; } ?> value="female"> Female </label>
		</div>
	</div>
	<div class="form-group ">
		<br>
		<div class="form-group ">
			<div class="col-xs-offset-3 col-xs-9 tentant_footer_cls">
		<input class=" btn button  btn-default" type="submit" name="button" value='Update changes'>
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
 