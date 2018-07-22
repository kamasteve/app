<?php
/*******************************************************************************
* Simplified PHP Invoice System                                                *
*                                                                              *
* Version: 1.1.1	                                                               *
* Author:  James Brandon                                    				   *
*******************************************************************************/
include('includes/header_invoice.php');
include('functions.php');
$pageid=101;
// Connect to the database
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
// output any connection error
if ($mysqli->connect_error) {
	die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
}
$invoiceid=$_GET['wishID'];
// the query
$query_edit = "SELECT * from expenses  WHERE  id=$invoiceid";
$result = mysqli_query($mysqli, $query_edit);

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
$mysqli->close();
?>
<div class="ch-container">
<div class="row">
<?php include ('includes/left_sidebar.php'); ?>
 <div id="content" class="col-lg-10 col-sm-10">
 <div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
		<div class="box-content row">
		
		
      <form class="form-horizontal" action="new_expense.php"  id="new_expense" method="post">
		<div class="row">
		<div class='messages alert '> </div>
		
  		<div class="form-group col-xs-6">
		<label class="control-label col-xs-4" for="fname">Property:</label>
		<div class="col-xs-8">
  
  <input class="form-control" name="payee" type="text" value="<?php echo $property; ?> "required>
</div>
</div>
	<div class="form-group col-xs-6">
		<label class="control-label col-xs-4" for="fname">Unit:</label>
		<div class="col-xs-8">
  
  <input class="form-control" name="payee" type="text" value="<?php echo $unit; ?> " required>
</div>
</div> 
  
		<div class="form-group col-xs-6">
		<label class="control-label col-xs-4" for="fname">Payer/Payee:</label>
		<div class="col-xs-8">
  
  <input class="form-control" name="payee" type="text" value="<?php echo $payee; ?> " required>
</div>
</div>
<div class="form-group col-xs-6">
<label class="control-label col-xs-4" for="date">Due On:</label>
 <div class="input-group  col-xs-8" id="invoice_due_date">
				            
				                <input type="text" class="form-control required" name="due_date" value="<?php echo $due_date; ?> " data-date-format="" />
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
		<input class="form-control" name="amount" type="text" value="<?php echo $ammount; ?> " required>
	</div>
</div>

<div class="form-group col-xs-6">
  <label class="control-label col-xs-4" for="fname">Expense Details:</label>
    <div class="col-xs-8">
		<textarea  class="form-control" name="details" type="text" value="<?php echo $details; ?> " required></textarea>
	</div>
</div>
<div class="col-xs-6">
<input type="hidden" name="responsible" value="<?php echo  $_id; ?> "/>
</div>



</div>
<div class="row">
<div class="col-xs-6">
<div class="col-xs-4">
</div>
<div class="col-xs-8">
<button type="button" class="btn  btn-block">
          <span class="glyphicon glyphicon-floppy-save"></span> Update
        </button>
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

<?php  
 
 include ('includes/footer.php'); ?>