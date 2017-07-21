
<?php include ('includes/header.php'); 
$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
$pageid=75;
}
?>
<div class="ch-container">
<div class="row">

 <?php include ('includes/left_sidebar.php');  ?>
 <div id="content" class="col-lg-10 col-sm-10">
 <div class="row">
    <div class="box col-md-12">
<div class="box-inner">

			
			
				<?php 

$con = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,
    DATABASE_NAME);
	// output any connection error
	if ($con->connect_error) {
		die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
    $query = "SELECT  fname,user_id,status,lname,phone,username, email,role,nationality from register";

	// mysqli select query
	$results = $con->query($query);

	// mysqli select query
	?>

<table id="example" class="display" cellspacing="0" width="100%">
<script type="text/javascript" src="js/my_js.js"></script>
<script type="text/javascript" language="javascript" class="init">
$(document).ready(function() {
	$('#example').DataTable( {
	dom: 'T<"clear">lfrtip',
	tableTools: {
        "sSwfPath": "/swf/copy_csv_xls_pdf.swf"
    }
	} );
} );
</script>
<thead>
<tr>
<th>User ID</th>
<th>Name</th>
<th>Username</th>
<th>Email</th>
<th>Role</th>
<th>Nationality</th>
<th>Status</th>
<th>Edit</th>
<th>Delete</th>
 </tr>
</thead>
<tbody>
<?php
		while($row = $results->fetch_assoc()) {

			?>
				<tr>
				<?php $wishID = $row["user_id"]; ?>
				 <?php $wishID = $row["fname"]; ?>
				  
				    <td><?php echo $row["user_id"];?></td>
					<td> <?php echo $row['fname'].'&nbsp'.$row['lname']; ?></td>
					<td> <?php echo $row['username']; ?> </td>
				    <td><?php echo $row["email"];?></td>
					<td><?php echo $row["role"];?></td>
					<td><?php echo $row["nationality"];?></td>
					<td><?php echo $row["status"];?></span></td>
				
<td>
 <form name="editWish" action="invoice-edit.php" method="GET">
            <input type="hidden" name="wishID" value="<?php echo $wishID; ?> "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
</td>
				   
			
				   
	<td>
	<?php
	echo '<a class=" btn-danger btn-xs " data-toggle="modal" data-target="#modalDelete_user" data-my-id="'.$row["username"].'">
													<i class="glyphicon glyphicon-trash icon-white"></i>
													
											</a>'
		
		?>									
	
    </td>
				    
					
	
				
			    
			
		        </tr>
		<?php } ?>
</tbody>
</table>
			
</div>
</div>
</div>
<div id="modalDelete_user" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Are You Sure You Want to Delete This User</h4>
      </div>
     <div class="modal-body">
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Invoice Number</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="id_" disabled>
  </div>
</div>
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Customer</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="fname" disabled>
  </div>
</div>
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Tenant ID</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="tenant_id" disabled>
  </div>
</div>
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Invoiced Ammount</label>
  <div class="col-xs-8">
    <input class="form-control" type="text" value="" id="total" disabled>
  </div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class=" btn-warning" data-dismiss="modal">Cancel</button>
		<button type="submit" class=" btn-success" data-dismiss="modal" id="delete_record">Delete</button>
      </div>
    </div>

  </div>
</div>

<?php
include('includes/footer.php');
?>