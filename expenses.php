<?php include ('includes/header.php');
$sql = mysqli_query($con,"SELECT * FROM owner");
while($row = mysqli_fetch_array($sql)) {
$owner_arr[]=$row;
$pageid=109;
}

$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
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
    $query = "SELECT  property, unit,id,due_date,credit,status FROM expenses ";

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
<th>Expense ID</th>
<th>Property</th>
<th>Unit</th>
<th>Amount</th>
<th>Due Date</th>
<th>Status</th>
<th>Print</th>
<th>Pay</th>
<th>Delete</th>
 </tr>
</thead>
<tbody>
<?php
		while($row = $results->fetch_assoc()) {

			?>
			<?php $wishID = $row["id"]; ?>
				<tr>
				 <td> <?php echo$row["id"]; ?></td>
					<td> <?php echo$row["property"]; ?></td>
					<td><?php echo $row["unit"];?></td>
				    <td><?php echo $row["credit"];?></td>
					<td><?php echo $row["due_date"];?></td>
					<?php if($row['status'] == "0"){
					print '<td><span class="label label-info">Open</span></td>';
				} elseif ($row['status'] == "1"){
					print '<td><span class="label label-success">Closed</span></td>';
				}elseif ($row['status'] == "2"){
					print '<td><span class="label label-danger">Canceled</span></td>';
				}
				?>

				  <td>
        <form name="editWish" action="expenseedit.php" method="GET">
            <input type="hidden" name="wishID" value="<?php echo $wishID; ?> "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
	<td>
	<?php
	echo '<a class="xyz btn " data-toggle="modal" data-target="#myModal" data-my-id="'.$row["invoice"].'">
													<i class="glyphicon glyphicon-euro icon-white"></i>
													Pay
											</a>'
		
		?>
	<td>
	<?php
	echo '<a class=" btn-danger btn-xs " data-toggle="modal" data-target="#modalDelete" data-my-id="'.$row["id"].'">
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
<div id="modalDelete" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Are You Sure You Want to Delete This Record</h4>
      </div>
     <div class="modal-body">
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Expense ID</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="id_" disabled>
  </div>
</div>
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Payee</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="payee" disabled>
  </div>
</div>
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Due Date</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="due_date" disabled>
  </div>
</div>
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Amount</label>
  <div class="col-xs-8">
    <input class="form-control" type="text" value="" id="credit" disabled>
  </div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class=" btn-warning" data-dismiss="modal">Cancel</button>
		<button type="submit" class=" btn-success" data-dismiss="modal" id="delete_expense">Delete</button>
      </div>
    </div>

  </div>
</div>
</div> -->
  
		
		
		
		<div class="form-group col-xs-6">
		<label class="control-label col-xs-4" for="fname">Payer/Payee:</label>
		<div class="col-xs-8">
  
  <input class="form-control" name="payee" type="text" placeholder="Payer/Payee " required>
</div>
</div>
<div class="form-group col-xs-6">
<label class="control-label col-xs-4" for="date">Due On:</label>
 <div class="input-group  col-xs-8" id="invoice_due_date">
				            
				                <input type="text" class="form-control required" name="due_date" placeholder="Select due date" data-date-format="" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
</div>
  

	

<div class="form-group col-xs-6">
<label class="control-label col-xs-4" for="fname">Category:</label>
  <div class=" col-xs-8">
			<select class='form-control' name="category" id="state">
        <option value="">Repairs and Maintenance</option>
		<option value="">Advertising</option>
		<option value="">Office Expenses</option>
		<option value="">Legal and Proffesional fees</option>
		<option value="">Electircity</option>
		<option value="">Cleaning</option>
		<option value="">Management Fee</option>
		<option value="">Other Expenses(specify)</option>
    </select>
	</div>
</div>
<div class="form-group col-xs-6">
  <label class="control-label col-xs-4" for="fname">Ammount:</label>
    <div class="col-xs-8">
		<input class="form-control" name="amount" type="text" placeholder=" Amount" required>
	</div>
</div>

<div class="form-group col-xs-6">
  <label class="control-label col-xs-4" for="fname">Expense Details:</label>
    <div class="col-xs-8">
		<textarea  class="form-control" name="details" type="text" placeholder=" details" required></textarea>
	</div>
</div>
<div class="col-xs-6">
<input type="hidden" name="responsible" value="<?php echo  $_id; ?> "/>
</div>
<div class="row">
<div class="col-xs-6">
<button type="submit" class="btn btn-default "   name='submit'>Save</button>
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
  <style>

 </style>

<?php  include ('includes/footer.php'); ?>