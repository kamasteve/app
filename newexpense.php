<?php include ('includes/header.php'); 
$pageid=105;
?>
<script type="text/javascript">
$(document).ready(function(){
    $('#property').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'http://ec2-54-186-105-222.us-west-2.compute.amazonaws.com/app/ajax/ajaxData.php',
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
</script>
<script type="text/javascript">
$(function () {
    $('#new_expense').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://ec2-54-186-105-222.us-west-2.compute.amazonaws.com/app/new_expense.php";
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
                        $('#new_expense').find('.messages').html(alertBox);
                        $('#new_expense')[0].reset();
						//window.location.reload();
                    }
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
 <div id="content" class="col-lg-10 ">
 <div class="row ">
    <div class="box col-md-12">
        <div class="box-inner">
		<div class="box-content row ">
		<div class="invoice_content">

	
		<form class="form-horizontal" action="new_expense.php"  id="new_expense" method="post">
		<div class="row">
		<div class='messages alert '> </div>
		
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
	<div class=" form-group col-xs-6">
	<label class="control-label col-xs-4" for="fname">Select Unit:</label>
	<div class=" col-xs-8">
			<select class='form-control' name="unit" id="state">
        <option value="">Select Property first</option>
    </select>
	</div>
</div>
	<!-- <div class="col-xs-4">
			
  
   <?php
/**$result= mysqli_query($con, "SELECT name FROM properties");
   
echo "<select class='form-control' name='type' placeholder='Select property'>";
while ($row = $result->fetch_assoc()){
    echo "<option value=\"owner1\">" . $row['name'] . "</option>";
}
echo "</select>";

**/?>
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
<div class="row">
<div class="form-group col-xs-6">
  <label class="control-label col-xs-4" for="fname">Expense Details:</label>
    <div class="col-xs-8">
		<textarea  class="form-control" name="details" type="text" placeholder=" details" required></textarea>
	</div>
</div>
<div class=" form-group col-xs-6">
<div class="col-xs-4">
</div>
<div class="col-xs-8">

</div>
</div>
</div>
<input type="hidden" name="responsible" value="<?php echo  $_id; ?> "/>


<div class="row">

<div class="col-xs-6">
<div class="col-xs-4">
</div>
<div class="col-xs-8">
<button type="submit" class="btn button "   name='submit'>Save</button>
</div>
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