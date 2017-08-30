<?php include ('includes/header.php');
$sql = mysqli_query($con,"SELECT * FROM owner");
while($row = mysqli_fetch_array($sql)) {
$owner_arr[]=$row;
$pageid=107;
}

$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
}

?>
<script type="text/javascript" src="js/my_js.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#property').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'http://localhost/app/ajax/ajaxPayments.php',
                data:'property_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
$(function () {
    $('#addpayments').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://localhost/app/verify_payments.php";
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    $("#alert").html(data);
                }
				
            });
            return false;
        }
    })
});

</script>


<div class="ch-container">
<div class="row">
<?php include ('includes/left_sidebar.php');  ?>
 <div id="content" class="col-lg-10 col-sm-10">
  
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
		<div class="box-content row">
            

<div class="row">

<form class="form-horizontal" action="verify_payments.php" id="addpayments" method="post">
 
  <div class="form-group col-md-4">
<div class="col-xs-offset-3 col-xs-9 tentant_footer_cls">
  <input class="form-control" name="invoice" type="text" placeholder=" Invoice Number" >
  </div>
</div>
<div class="form-group col-md-4">
<div class="col-xs-offset-3 col-xs-9 tentant_footer_cls">
  <input class="form-control" name="unit" type="text" placeholder=" House Number" >
</div>
</div>
<div class="form-group col-md-2 ">

		<div class="col-xs-offset-3 col-xs-9 tentant_footer_cls">
		<input class=" btn button  btn-default" type="submit" name="button" value='Search'>
			</div>
</div>
</div>
<div class="box-inner reports">

<div class='messages' id="alert"> </div>
</form>
</div>

</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">Exit</button>
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
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Paid Ammount</label>
  <div class="col-xs-8">
    <input class="form-control" type="text" value="" id="amount">
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
<button type="submit" class=" btn-success" data-dismiss="modal" id="update_record">PAY</button>


</div>
</div>
</div>
</div>
 <!--
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
    <select class='form-control ' name="property" id="property">
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
  
  <label class="control-label col-xs-4"  for="sel1">Rental Period:</label>
  <div class="col-xs-8">
      <select class="form-control " name="period">
        <option>January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
		<option>May</option>
		<option>June</option>
		<option>July</option>
		<option>August</option>
		<option>September</option>
		<option>October</option>
		<option>November</option>
		<option>December</option>
      </select>
</div>
</div>
<div class="form-group col-md-6">
  
  <label class="control-label col-xs-4"  for="sel1">Payment For:</label>
  <div class="col-xs-8">
      <select class="form-control " name="type">
        <option>Monthly Rent</option>
        <option>Deposit</option>
        <option>Electricity</option>
        <option>Water</option>
		<option>Garbage Collection</option>
		<option>Legal Fees</option>
		<option>Security</option>
      </select>
</div>
</div>
 
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">First Name:</label>
  <div class="col-xs-8">
  <input class="form-control" name="fname" type="text" placeholder=" First Name" required >
  
</div>
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="lname">Last Name:</label>
  <div class="col-xs-8">
  
  <input class="form-control" name="lname" type="text" placeholder=" Last Name" required>
</div>
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">Payment Mode:</label>
  <div class="col-xs-8">
  
 <select class="form-control " name="mode">
        <option>Cash</option>
        <option>Bank Deposit</option>
        <option>Mpesa</option>
        <option>Cheque</option>
      </select>
</div>
</div>


<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">Payment Id:</label>
  <div class="col-xs-8">
<input class="form-control" name="serial" type="text" placeholder=" Payment ID" required>
</div>
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">Phone No:</label>
  <div class="col-xs-8">
  
  <input class="form-control" name="phone" type="text" placeholder="Phone Number" required>
</div>
</div>



 
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">Ammount:</label>
  <div class="col-xs-8">
  
  <input class="form-control" name="ammount" type="text" placeholder=" Ammount" required>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="col-xs-4">
</div>
<div class="col-xs-8">
<button type="submit" class="btn button btn-lng "   name='submit'>Save</button>
</div>

</div>
</div>

</form>
-->	
</div>
</div>
	


</div>
    </div>
</div>




    </div>




</div>



<!--/row-->
    <!-- content ends -->
    
       




<?php  include ('includes/footer.php'); ?>