<?php include ('includes/header.php'); 
$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
}
$pageid=201;
?>
<script type="text/javascript" src="js/my_js.js"></script>

<div class="ch-container">
<div class="row">
<?php include ('includes/left_sidebar.php'); ?>
 <div id="content" class="col-lg-10 col-sm-10">
 <div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
		<div class="box-content row">
		<style>

.tentant_footer_cls .box-icon a{
width:auto !important;
height:35px !important;
}
#example{
border: 1px solid #f4f4f4;
}
.table-striped>tbody>tr:nth-child(odd)>td,
.table-striped>tbody>tr:nth-child(odd)>th {
	background-color:#EAEAEA; 
}

.reports{	
 border-top: 2px solid #509111;
}
.table.dataTable thead th, table.dataTable thead td {
    padding: 10px 18px;
    border-bottom: 1px solid #111;
}
</style>
		<script type="text/javascript">
$(function () {
    $('#edit_apartment').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://localhost/app/ajax/update_apartment.php";
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
                        $('#edit_apartment').find('.messages').html(alertBox);
                        //$('#edit_tentant')[0].reset();
						
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
$sql1=mysqli_query($con,"SELECT * FROM properties WHERE property_id='$var_value'");
$tenant_arr = mysqli_fetch_array($sql1);
?>
<div class="row property_edit">
 <fieldset >
    <legend class='legend'><i class="glyphicon glyphicon-edit icon-white"></i>Edit Property</legend>
<form class="form-horizontal" method='POST'  id='edit_apartment' name='edit_apartment'>
<div class=' alert messages '> </div>
	<div class="form-group col-md-6">
		<label class="control-label col-xs-3" for="name">Property Name :</label>
		<div class=" col-xs-9">
			<input type="text" class="form-control " name="name" id="name" placeholder="First Name" value='<?php echo $tenant_arr['name'];?>' readonly>
		</div>
		</div>
	<div class="form-group col-md-6">
		<label class="control-label col-xs-3" for="unit">Property Type:</label>
		<div class=" col-xs-9">
			<input type="text" class="form-control " name="unit" id="unit" placeholder="Property Type" value='<?php echo $tenant_arr['type'];?>' readonly>
		</div>
	</div>
	<div class="form-group col-md-6">
		<label class="control-label col-xs-3" for="year">Year Built:</label>
		<div class=" col-xs-9">
			<input type="text" class="form-control " name="year" id="year" placeholder="First Name" value='<?php echo $tenant_arr['year'];?>'>
		</div>
	</div>
	<div class="form-group col-md-6">
		<label class="control-label col-xs-3" for="adress">Property Adress</label>
		<div class="col-xs-9">
			<input type="text" class="form-control" name="adress" value='<?php  echo  $tenant_arr['address']; ?>' placeholder="Property Adress">
		</div>
	</div>

	<div class="form-group col-md-6">
	<label class="control-label col-xs-3" for="country">Country:</label>
	<div class="col-xs-9">
	<input type="text" class="form-control" value='<?php echo $tenant_arr['country']; ?>'  name="country" placeholder="country">
	</div>
		</div>
	
	<div class="form-group col-md-6">
		<label class="control-label col-xs-3" for="email">City:</label>
		<div class="col-xs-9">
			<input type="tel" class="form-control" value='<?php echo $tenant_arr['city']; ?>'   name="city" placeholder="City">
		</div>
		</div>
		<input type="hidden" name="responsible" value="<?php echo  $var_value; ?> "/>
	<div class="form-group col-md-6">
		<label class=" col-xs-3 control-label " for="addres">Location:</label>
		<div class="col-xs-9">
			<input type="text" class="form-control" value ='<?php echo $tenant_arr['location']; ?>' name="location" placeholder="Location"> 
		</div>
	</div>
	<div class="form-group col-md-6">
		<label class=" col-xs-3 control-label " for="addres">Contact:</label>
		<div class="col-xs-9">
			<input type="text" class="form-control" value ='<?php echo $tenant_arr['contact']; ?>' name="idnumber" placeholder="contact"> 
		</div>
	</div>
	
	<div class="form-group col-md-6">
		<div class="col-xs-3">
		</div>
		<div class="col-xs-9">
			
		<button type="submit" class="button ">
<i class="glyphicon glyphicon-floppy-save"></i> 
 Update property
  
</button>
			</div>
		</div>

</form>
</div>
 </fieldset>
<div class="row property_edit ">
 <fieldset>
    <legend class='legend'><i class="glyphicon glyphicon-plus"></i>Add New Unit</legend>
	<div class="row ">
<form class="form-horizontal" method='POST'  id='add_unit_edit' name='add_unit_edit'>
<div class="col-md-2">
  
  <input class="form-control" name="unit_id" type="text" placeholder="Unit ID" required>
</div>
<div class="col-md-3">
  
  <input class="form-control" name="unit_type" type="text" placeholder="Unit Type" required>
</div>
<div class="col-md-2">
  <input class="form-control" name="unit_bed" type="text" placeholder="Beds" required>
 </div>
<div class="col-md-3">
   <input class="form-control" name="unit_rent" type="text" placeholder="Rent (KSH) " required>
</div>
<div class="col-md-2">
<button type="submit" class="button btn-limited">
<i class="glyphicon glyphicon-floppy-save"></i> 
 Save
  
</button>
<div>
</div>
</div>
</form>
	</fieldset>
	</div>
		<div class="rowadd1">
		<fieldset>
    <legend class='legend'><i class="glyphicon glyphicon-edit icon-white"></i> Edit Units</legend>
		<table id="example" class="display table-striped" cellspacing="0" width="100%">

<thead>
<tr>
<th>Property Id</th>
<th>Unit Id</th>
<th>
 Unit Type
</th>
<th>Bedrooms</th>
<th>
 Monthly Rent
</th>
<th>Status</th>

<th>Edit</th>
</tr>
</thead>
<tbody>
<?php

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM rental_units where property_id=$var_value");

while($row = mysqli_fetch_array($result)) {
	$wishID = $row["unit_id"];
?>

 <tr>
<td> <?php echo  $row['property_id']  ?> </td>
<td> <?php echo $row['unit_id']; ?> </td>
<td> <?php echo $row['unit_type']; ?> </td>
<td> <?php echo $row['bed']; ?> </td>
<td> <?php echo $row['rent'] ;?> </td>
<td> <?php echo $row['status'] ;?> </td>
<td>
        <form name="editWish" action="edit_apartment.php" method="GET">
            <input type="hidden" name="wishID" value="<?php echo $wishID; ?> "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<a class="xyz btn " data-toggle="modal" data-target="#myModal" data-my-id="<?php echo $wishID ;?>">
													<i class="glyphicon glyphicon-edit icon-white"></i>
													Edit
											</a>
        </form>
    </td>
  </tr>

<?php }
mysqli_close($con);
	?>
	</tbody>
	</table>
		</div
		</div>
 </fieldset>
 </div>

 
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">Exit</button>
</div>

<div class="modal-body">
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Unit Id</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="id_" disabled>
  </div>
</div>
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Unit Type</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" name="type" id="type" >
  </div>
</div>
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Bedrooms</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="beds" >
  </div>
</div>
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Monthly Rent</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" id="rent" value=""  >
  </div>
  </div>
  <div class="form-group row">
<label class="control-label col-xs-4" for="fname">Unit Status:</label>
   <div class="col-xs-8">
  
 <select class="form-control " name="mode" id="mode">
        <option value="active">Active</option>
        <option value="vacant">Vacant</option><input type="hidden" id="responsible" value="<?php echo  $_id; ?> "/>
		</div>
		</div>
  <input type="hidden" id="responsible" value="<?php echo  $_id; ?> "/>



<button type="button" class="  btn-warning" data-dismiss="modal">Cancel</button>
<button type="submit" class=" btn-success" data-dismiss="modal" id="update_unit">Update</button>


</div>
</div>
</div>
</div>
</div>
 </div>
 </div>
 </div>
 </div>

 <?php  include ('includes/footer.php'); ?>
 