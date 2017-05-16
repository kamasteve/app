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
	echo '<a class="xyz btn " data-toggle="modal" data-target="#payexpense" data-my-id="'.$row["id"].'">
													<i class="glyphicon glyphicon-euro icon-white"></i> 
													Pay
											</a>'
		
		?>
	<td>
	<?php
	echo '<a class=" btn-danger btn-xs " data-toggle="modal" data-target="#modalDelete" data-my-id="'.$row["id"].'" >
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