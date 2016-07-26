<?php include ('includes/header.php'); 
$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
}
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
if (isset($_POST['submit'])) {
$tenant_id  = $_POST['varname']; }
$sql1=mysqli_query($dbc,"SELECT t.*,o.*,p.* FROM tenants as t
left join owner as o ON t.property = o.owner_id
left join  properties as p ON t.type = p.id WHERE t.tenant_id='$tenant_id'");
$tenant_arr = mysqli_fetch_array($sql1);
?>
<form class="form-horizontal tentant_cls" method='POST'  id='edit_tentant_<?php echo $tenant_id; ?>' name='edit_tentant'>

<input type="hidden"  name="tenant_id" id="tenant_id"  value='<?php echo $tenant_arr['tenant_id']; ?>'>
<div class="alert_msg" id='alert_msg_<?php echo $tenant_arr['tenant_id']; ?>' style='display:none;'></div><br />
	<div class="form-group">
		<label class="control-label col-xs-3" for="property">Property :</label>
		<div class="col-xs-9">
			<select class="form-control" name="property"  onchange='get_owner_edit_property(this.value);'>
			<option value='0'>Select Property owner</option>
				<?php 
				if(!empty($owner_arr)){
				foreach($owner_arr as $owner){ ?>
			<option <?php if($tenant_arr['property']==$owner['owner_id']){ echo 'selected="selected"'; } ?>  value='<?php  echo $owner['owner_id']; ?>'><?php echo $owner['owner_name']; ?></option>	
			<?php	}} ?>
				
			</select>
		</div>
	</div>
	<div class="form-group" >
		<label class="control-label col-xs-3" for="username">Property Type :</label>
		<div class="col-xs-9">
			<select class="form-control" name="type" id='type_edit_id'>
				
				<?php 
				if(!empty($pro_arr)){
				foreach($pro_arr as $pro){ ?>
					<option <?php if($tenant_arr['type']==$pro['id']){ echo 'selected="selected"'; } ?>  value='<?php  echo $pro['id']; ?>'><?php echo $pro['name']; ?></option>	
				<?php	}} ?>
				
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-3" for="fname">First Name:</label>
		<div class="col-xs-9">
			<input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" value='<?php echo $tenant_arr['fname']; ?>'>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-3" for="lame">Last Name:</label>
		<div class="col-xs-9">
			<input type="text" class="form-control" name="lname" value='<?php  echo  $tenant_arr['lname']; ?>' placeholder="Last Name">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-3" for="email">Email:</label>
		<div class="col-xs-9">
			<input type="email" class="form-control" value='<?php echo $tenant_arr['email']; ?>'  name="email" placeholder="Email">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-3"  for="phoneNumber">Phone:</label>
		<div class="col-xs-9">
			<input type="tel" class="form-control" value='<?php echo $tenant_arr['phone']; ?>'   name="phone" placeholder="Phone Number">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-3" for="address">Address:</label>
		<div class="col-xs-9">
			<textarea rows="3" class="form-control"  name="addres" placeholder="Postal Address"><?php echo $tenant_arr['adress']; ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-3" for="Deposit">Deposit:</label>
		<div class="col-xs-9">
			<input type="text" class="form-control" value='<?php echo $tenant_arr['deposit']; ?>'   name="deposit" placeholder="Deposit ">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-3" for="confirmPassword">Monthly Rent:</label>
		<div class="col-xs-9">
			<input type="rent" class="form-control" value='<?php echo $tenant_arr['monthly_rent']; ?>' name="rent" placeholder="Monthly Rent">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-3">gender:</label>
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
		<input class="submit" type="submit" name="button" value='Update changes'>
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
 