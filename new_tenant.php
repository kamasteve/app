<?php include ('includes/header.php'); 
$pageid=205;
?>
<script type="text/javascript">
$(document).ready(function(){
    $('#property').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'http://localhost:6060/app/ajax/ajaxData.php',
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
    $('#new_tenant').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://localhost:6060/app/newtenants.php";
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
                        $('#new_tenant').find('.messages').html(alertBox);
                        $('#new_tenant')[0].reset();
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
		<form class="form-horizontal" id="new_tenant" action="newtenants.php"  method="post">
		<div class="row">
		
		
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
		<label class="control-label col-xs-4" for="fname">First Name:</label>
		<div class="col-xs-8">
  
  <input class="form-control" name="fname" type="text" placeholder=" First Name" required>
</div>
</div>
<div class="form-group col-xs-6">
<label class="control-label col-xs-4" for="fname">Last Name:</label>
  <div class="col-xs-8">
  <input class="form-control" name="lname" type="text" placeholder=" Last Name" required>
  </div>
</div>
	

<div class="form-group col-xs-6">
<label class="control-label col-xs-4" for="fname">Phone Number:</label>
  <div class="col-xs-8">
  <input class="form-control" name="phone" type="text" placeholder=" Phone Number" required>
  </div>
</div>
<div class="form-group col-xs-6">
  <label class="control-label col-xs-4" for="fname">Id Number:</label>
    <div class="col-xs-8">
		<input class="form-control" name="idnumber" type="text" placeholder=" Id Number" required>
	</div>
</div>


<div class="form-group col-xs-6">
  <label class="control-label col-xs-4" for="fname">Email:</label>
    <div class="col-xs-8">
  <input class="form-control" name="email" type="text" placeholder="Email" required>
</div>
</div>
<div class="form-group col-xs-6">
  <label class="control-label col-xs-4" for="fname">KRA PIN:</label>
    <div class="col-xs-8">
  <input class="form-control" name="gender" type="text" placeholder=" KRA PIN" required>
</div>
</div>

	<div class="form-group col-xs-6">
  <label class="control-label col-xs-4" for="fname">Address :</label>
    <div class="col-xs-8">
  <input class="form-control" name="address" id="ex2" type="text" placeholder=" Address " required>
  </div>
</div>
<div class="form-group col-xs-6">
  <label class="control-label col-xs-4" for="fname">Bank Name:</label>
    <div class="col-xs-8">
  <input class="form-control" name="bank" type="text" placeholder="Bank Name" required>
</div>
</div>
<div class="form-group col-xs-6">
<label class="control-label col-xs-4" for="fname">Account Number:</label>
    <div class="col-xs-8">
  <input class="form-control" name="acountnumber" type="text" placeholder="Bank Account Number" required>
</div>
</div>

<div class="form-group col-xs-6">
<label class="control-label col-xs-4" for="fname">First Name:</label>
    <div class="col-xs-8">
  <input class="form-control" name="acountnumber" type="text" placeholder="Bank Account Number" required>
</div>
</div>
<div class="col-md-4">
<button type="submit" class="btn btn-default "   name='submit'>Save</button>
</div>
<div class="col-md-4">
<span id="fileselector">
        <label class="btn btn-default" for="upload-file-selector">
            <input id="upload-file-selector" type="file">
            <i class="fa_icon icon-upload-alt margin-correction"></i>Upload Lease Agrement
        </label>
    </span>
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