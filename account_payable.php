<?php include ('includes/header_reports.php'); 
$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;

}
$pageid=345;
?>
  

<div class="ch-container">
<div class="row">
 <?php include('includes/left_sidebar.php');  ?>
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
    $query = "SELECT  *  FROM meter_numbers ";

	// mysqli select query
	$results = $con->query($query);

	// mysqli select query
	?>

<table id="example" class="display" cellspacing="0" width="100%">

<thead>
<tr>
<th>Expense ID</th>
<th>Property</th>
<th>Unit</th>
<th>Amount</th>
<th>Due Date</th>
<th>Status</th>

 </tr>
</thead>
<tbody>
<?php
		while($row = $results->fetch_assoc()) {

			?>
			<?php $wishID = $row["id"]; ?>
				<tr>
				 
					<td> <?php echo$row["site_id"]; ?></td>
					<td><?php echo $row["meter_number"];?></td>
				    <td><?php echo $row["serial_number"];?></td>
					<td><?php echo $row["current_reading"];?></td>
					<td><?php echo $row["date"];?></td>
					
					<td><?php echo $row["old_reading"];?></td>

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

  
<div class="modal fade" id="payexpense" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">Exit</button>
</div>

<div class="modal-body">
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Payee</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="responsible" disabled>
  </div>
</div>
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Amount</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="amount" disabled>
  </div>
</div>
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Property</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="property" disabled>
  </div>
</div>
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label"> ID</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="expense_id" disabled>
  </div>
</div>

<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Paid Ammount</label>
  <div class="col-xs-8">
    <input class="form-control" type="text" value="" id="payee">
  </div>
</div>
<div class="form-group row">
<label class="control-label col-xs-4" for="fname">Payment Mode:</label>
  <div class="col-xs-8">
  
 <select class="form-control " name="mode" id="mode">
        <option value="Cash">Cash</option>
        <option value="Bank Deposit">Bank Deposit</option>
        <option value="Mpesa">Mpesa</option>
        <option value="Cheque">Cheque</option>
      </select>
</div>
</div>

<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label"> Payment Ref </label>
  <div class="col-xs-8">
    <input class="form-control" type="text" value="" id="payment_ref" >
  </div>
</div>
<input type="hidden" id="responsible" value="<?php echo  $_id; ?> "/>



<button type="button" class=" btn-warning" data-dismiss="modal">Cancel</button>
<button type="submit" class=" btn-success" data-dismiss="modal" id="payexpenses">PAY</button>


</div>
</div>
</div>
</div>	
		
		
		
		</div>
		</div>
 
 </div>
 </div>
 </div>
 </div>
  <style>

 </style>

<?php  include ('includes/footer.php'); ?>