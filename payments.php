
<?php include ('includes/header_invoice.php'); 
include('functions.php');
$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
$pageid=101;
}
?>

<script src="js/invoice.js"></script>

   
<div class="ch-container">
<div class="row">
<?php include ('includes/left_sidebar.php'); ?>
 <div id="content" class="col-lg-10 col-sm-10">
 <div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
		<div class="box-content row">
		
	<form method="post" action="ajax/createinvoice.php" id="create_invoice1" role="form">	
      <div class="invoice_content">

	<div class=' messages alert'> </div>
		<hr>

		  


		
			<!--<input type="hidden" name="action" value="create_invoice"> -->
			
			<div class="row">
			
			<div class=" form-group col-xs-6">
				        <label class="control-label col-xs-4" for="fname">Payment Date:</label>
				            <div class="input-group col-xs-8" id="invoice_date">
				                <input type="text" class="form-control required" name="invoice_date" placeholder="Select payment date" data-date-format="<?php echo DATE_FORMAT ?>" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
			<div class="form-group col-xs-6">
		
		<label class="control-label col-xs-4" for="fname">Select Property:</label>
		<div class=" col-xs-8">
	<?php
    //Include database configuration file
    
    
    //Get all country data
    $query = $con->query("SELECT * FROM properties  ORDER BY property_id ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
	
    <select class='form-control input-group' name="property" id="property">
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
	<div class=" form-group col-xs-6">
	<label class="control-label col-xs-4" for="fname">Select Unit:</label>
	<div class=" col-xs-8">
			<select class='form-control' name="unit" id="state">
        <option value="">Select Property first</option>
    </select>
	</div>
</div>
<div class=" form-group col-xs-6">
  <label for="external-id" class="col-xs-4 col-form-label">Tenant ID</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="tenant_id"  name="tenant_id" >
  </div>
</div>
<div class=" form-group col-xs-6">
  <label for="external-id" class="col-xs-4 col-form-label">Tenant Name</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="fname" name="fname" >
  </div>
</div>
			
					
					
			<div class=" form-group col-xs-6">
	<label class="control-label col-xs-4" for="fname">Payement For:</label>
	<div class=" col-xs-8">
			<select class='form-control' name="period" id="period" required>
			<option value=''>Select Bill</option>
			<option value='Water' >Water</option>
			<option value='Electricity'>Electricity</option>
			<option value='Rent'>Rent</option>
			<option value='Service Charge'>Service Charge</option>
			
    </select>
	</div>
</div>
	<div class=" form-group col-xs-6">
	<label class="control-label col-xs-4" for="fname">Payement Mode:</label>
	<div class=" col-xs-8">
			<select class='form-control' name="mode" id="mode" required>
			<option value=''>Select Mode</option>
			<option value='Cash' >Cash</option>
			<option value='Bank'>Bank Deposit</option>
			<option value='M-pesa'>M-pesa</option>
			<option value='Cheque'>Cheque</option>
			
    </select>
	</div>
</div>
<div class=" form-group col-xs-6">
  <label for="external-id" class="col-xs-4 col-form-label">Ammount</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="amount" name="amount"  required>
  </div>
</div>
<input type="hidden" name="responsible" value="<?php echo  $_id; ?> "/>
 <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <button class="submit" type="submit" name="button" value='submit'>Submit</button>
            </div>
        </div>

			</div>
			<!-- / end client details section -->
			
			
			
			
		
		
		</div>
		
		</div>
		
		</div>
		</div>
 
 </div>
 </div>
 </div>
 
 
 
 
 <?php  include ('includes/footer.php'); ?>
 