<?php include ('includes/header.php');
$sql = mysqli_query($con,"SELECT * FROM owner");
while($row = mysqli_fetch_array($sql)) {
$owner_arr[]=$row;
$pageid=206;
}

$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
}

?>
<script type="text/javascript">
$(function () {
    $('#add_landlord').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://localhost/app/ajax/new_landlord.php";
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
                        $('#add_landlord').find('.messages').html(alertBox);
                        //$('#edit_tentant')[0].reset();
						
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
 <div id="content" class="col-lg-10 col-sm-10">
  
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
		<div class="box-content row">
           
 <form class="form-horizontal" method='POST'  id='add_landlord' name='add_landlord'>
 <div class='messages alert'>
 </div>
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
	<label class="control-label col-xs-4" for="fname">First Name:</label>
	<div class=" col-xs-8">  
  <input class="form-control col-xs-8" id="fname" name="fname" type="text" placeholder=" First Name">
</div>
</div>

<div class=" form-group col-md-6">
	<label class="control-label col-xs-4" for="fname">Middle Name:</label>
	<div class=" col-xs-8"> 
  
  <input class="form-control" name="mname" type="text" placeholder=" Middle Name">
</div>
</div>
<div class=" form-group col-md-6">
	<label class="control-label col-xs-4" for="fname">Last Name:</label>
	<div class=" col-xs-8"> 
  
  <input class="form-control" name="lname" type="text" placeholder=" Last Name">
</div>
</div>
<div class=" form-group col-md-6">
	<label class="control-label col-xs-4" for="id_number">ID Number:</label>
	<div class=" col-xs-8"> 

<input class="form-control" name="id_number" type="text" placeholder=" ID Number/Passport No">
</div>
</div>
<div class=" form-group col-md-6">
	<label class="control-label col-xs-4" for="Adress">Adress:</label>
	<div class=" col-xs-8"> 
  
  <input class="form-control" name="adress" type="text" placeholder=" Adress">
</div>
</div>

<div class=" form-group col-md-6">
	<label class="control-label col-xs-4" for="fname">Email:</label>
	<div class=" col-xs-8"> 
  
  <input class="form-control" name="email" type="text" placeholder="Email">
</div>
</div>
<div class=" form-group col-md-6">
	<label class="control-label col-xs-4" for="mnumber">Mobile Number:</label>
	<div class=" col-xs-8"> 
  
  <input class="form-control" name="mobile" type="text" placeholder=" Mobile Number">
</div>
</div>
<div class=" form-group col-md-6">
	<label class="control-label col-xs-4" for="bank">Bank A/c No:</label>
	<div class=" col-xs-8"> 
  
  <input class="form-control" name="bank" type="text" placeholder=" Bank Account Number">
</div>
</div>
<div class=" form-group col-md-6">
	<label class="control-label col-xs-4" for="branch">Bank Branch:</label>
	<div class=" col-xs-8"> 
  
  <input class="form-control" name="branch" type="text" placeholder="Bank Branch">
</div>
</div>
<div class=" form-group col-md-6">
	<label class="control-label col-xs-4" for="acount_name">Account Name:</label>
	<div class=" col-xs-8"> 
  
  <input class="form-control" name="account_name" type="text" placeholder=" Account Name">
</div>
</div>
<div class=" form-group col-md-6">
	<label class="control-label col-xs-4" for="Nationality">Nationality:</label>
	<div class=" col-xs-8"> 
  
  <input class="form-control" name="nationality" type="text" placeholder=" Nationality">
</div>
</div>


<div class="col-md-6">
<label class="control-label col-xs-4" for="fname"> </label>
<button type="submit" class="button btn-default "   name='submit'>Save</button>
</div>
		
</form>	
	
</div>
</div>
    </div>
</div>




    </div>




</div>



<!--/row-->
    <!-- content ends -->
    
       




<?php  include ('includes/footer.php'); ?>