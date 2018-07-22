<?php include ('includes/header_reports.php'); 


$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
$pageid=308;
}
define('DATE_FORMAT', 'YYYY/MM/DD'); // DD/MM/YYYY or MM/DD/YYYY
?>
<div class="ch-container">
<div class="row">
 <?php include('includes/left_sidebar.php');  ?>

 <div id="content" class="col-lg-10 col-sm-10">
 <div class="row">
    <div class="box col-md-12">
<div class="box-inner">



		

<table id="example" class="display nowrap" cellspacing="0" width="100%">


<thead>
<tr>
<th>ID</th>
<th>Site Name</th>
<th>Site ID</th>
<th>METER NUMBER</th>
<th>Serial Number</th>
<th>Meter Reading</th>
<th>Previous Reading</th>
<th>DATE</th>


 </tr>
</thead>
<tbody>
	<?php 

	if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT a.id,a.site_id,meter_number,username,photo_evidence,serial_number,date,current_reading,DATE,old_reading  
FROM meter_numbers a;");
while($row = mysqli_fetch_array($result)) {

	// mysqli select query
	?>
				<tr>
				<?php $wishID = $row["id"]; ?>
				 <?php $wishID = $row["id"]; ?>
				    <td><?php echo $row["id"];?></td>
					<td><?php echo $row["meter_number"];?></td>
				    <td><?php echo $row["site_id"];?></td>
					<td> <?php echo $row['meter_number']; ?></td>
					<td> <?php echo $row['serial_number']; ?> </td>
				    <td><?php echo $row["current_reading"];?></td>
					<td><?php echo $row["old_reading"];?></td>
					<td><?php echo $row["date"];?></td>
					
					
				
		        </tr>
	<?php }
mysqli_close($con);
	?>	
</tbody>
</table>
	
</div>
</div>
</div>
<div id="modaledit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit System User</h4>
      </div>
<form id="update_profile"  >
  <div class="form-group" >
         <div class='messages alert '> </div>
	<div class="form-group ">
<label class="control-label col-xs-3" for="text">First Name:</label>
 <div class="input-group  col-xs-7" id="invoice_due_text">
  <input class="form-control" name="fname" value="" id='fname' type="text" placeholder=" First Name"  required>
  <span class="help-block" id="error"></span> 
</div>
</div>	  
<div class="form-group ">
<label class="control-label col-xs-3" for="text">Last Name:</label>
 <div class="input-group  col-xs-7" id="invoice_due_text">
  <input class="form-control" name="lname" type="text" value="" id='lname' placeholder=" Last Name"  required>
  <span class="help-block" id="error"></span> 
</div>
</div>

<div class="form-group ">
<label class="control-label col-xs-3" for="text">Username:</label>
 <div class="input-group  col-xs-7" id="invoice_due_text">
 <input class="form-control" name="username" type="text" placeholder="Username" value="" id='id_' readonly>
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group ">
<label class="control-label col-xs-3" for="text">Email:</label>
 <div class="input-group  col-xs-7" id="invoice_due_text">
  <input class="form-control" name="email" type="text" placeholder="Email" value="" id='email' readonly>
  <span class="help-block" id="error"></span> 
</div>
</div>

<div class="form-group ">
<label class="control-label col-xs-3" for="text">Phone:</label>
 <div class="input-group  col-xs-7" id="invoice_due_text">
  <input class="form-control" name="phone_number" type="text" placeholder=" Phone Number" value="" id='phone_number' required>
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group ">
<label class="control-label col-xs-3" for="text">Nationality:</label>
 <div class="input-group  col-xs-7" id="invoice_due_text">
   <input class="form-control" name="country" type="text" placeholder=" Country" value="" id='country' required>
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group ">
<label class="control-label col-xs-3" for="text">Company:</label>
 <div class="input-group  col-xs-7" id="invoice_due_text">
   <input class="form-control" name="company" type="text" placeholder=" Company" value="" id='company' required>
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group ">
<label class="control-label col-xs-3" for="text">Role:</label>
 <div class="input-group  col-xs-7" id="invoice_due_text">
  <input class="form-control" name="role" type="text" placeholder="Role" value="" id='role' required>
  <span class="help-block" id="error"></span> 
</div>
</div>
 
 
<div class="row">
		<div class="col-xs-4">
		
		<button type="submit" class=" btn-success" data-dismiss="modal" id="update_user">Update Profile</button>
		</div>
		</div>
          <!-- .vd_content-section --> 
        
        </div>
		</form>
		</div>
		
		</div>
		</div>
		
<div id="modalDelete" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
     <div class="modal-body">
<h4 class="modal-title">Are You Sure You Want to Delete this user</h4>
</div>
      <div class="modal-footer">
        <button type="button" class=" btn-warning" data-dismiss="modal">Cancel</button>
		<button type="submit" class=" btn-success" data-dismiss="modal" id="delete_user">Delete</button>
      </div>
    </div>

  </div>
</div>


<?php
include('footer.php');
?>