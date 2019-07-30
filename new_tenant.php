<?php include ('includes/header.php'); 
$pageid=205;
define('DATE_FORMAT', 'YYYY/MM/DD'); // DD/MM/YYYY or MM/DD/YYYY

?>
<script type="text/javascript">
$(document).ready(function(){
    $('#property').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'http://ec2-18-130-109-60.eu-west-2.compute.amazonaws.com/app/ajax/ajaxData.php',
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

$(document).ready(function(e){
    $("#fupForm").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'newtenants.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
                $('#fupForm').css("opacity",".5");
            },
            success: function(msg){
                $('.statusMsg').html('');
                if(msg == 'ok'){
                    $('#fupForm')[0].reset();
                    $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Form data submitted successfully.</span>');
                }else{
                    $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Some problem occurred, please try again.</span>');
                }
                $('#fupForm').css("opacity","");
                $(".submitBtn").removeAttr("disabled");
            }
        });
    });
    
    //file type validation
    $("#file").change(function() {
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
            alert('Please select a valid image file (JPEG/JPG/PNG).');
            $("#file").val('');
            return false;
        }
    });
});

$(function () {
    $('#new_tenant').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://ec2-18-130-109-60.eu-west-2.compute.amazonaws.com/app/newtenants.php";
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
		<form enctype="multipart/form-data" class="form-horizontal tentant_cls" id="fupForm" >
		 <div class="form-group" >
         <div class='statusMsg alert '> </div>
	
		
		
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
  <input class="form-control" name="tax_details" type="text" placeholder=" KRA PIN" required>
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


   <script>
  $( function() {
    $( "#datepicker1" ).datepicker();
    $( "#format" ).on( "change", function() {
      $( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
    });
  } );
  </script>
  
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">Start Date:</label>
 
   <div class="input-group  col-xs-7" id="invoice_due_date">
				            
				                <input type="text" class="form-control required" name="start_date" placeholder="Select due date" data-date-format="<?php echo DATE_FORMAT ?>" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
</div>
<div class="form-group col-md-6 ">
<label class="control-label col-xs-4" for="text">Lease Agrement:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
       <input id="image" name="image" type="file" class="file" multiple 
        data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload..." required>
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="col-md-6">
<label class="control-label col-xs-4" for="fname"> </label>
<input type="submit" name="submit" class="btn btn-danger submitBtn" value="SAVE"/>
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