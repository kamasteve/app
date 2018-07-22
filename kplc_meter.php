<?php include ('includes/header.php'); 
$pageid=205;
define('DATE_FORMAT', 'YYYY/MM/DD'); // DD/MM/YYYY or MM/DD/YYYY

?>
<div class="ch-container">
<div class="row">
 <?php include('includes/left_sidebar.php');  ?>

 <div id="content" class="col-lg-10 col-sm-10">
 <div class="row">
    <div class="box col-md-12">
<div class="box-inner">
<script type="text/javascript">
$(document).ready(function(){
    $('#property').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'http://ec2-18-130-16-81.eu-west-2.compute.amazonaws.com/app/ajax/ajaxDataall.php',
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
				dataType: 'json',
                url:'http://ec2-18-130-16-81.eu-west-2.compute.amazonaws.com/app/ajax/ajaxDataall.php',
                data:'state_id='+stateID,
                success:function(html){
                    for(var i = 0; i < html.length; i++) {
          var obj = html[i];

          $("#meter_number").val(obj.meter_number);
          $("#serial_number").val(obj.serial_number);
          $("#current_reading").val(obj.current_reading);
                }
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
            url: 'ajax/add_kplc.php',
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

</script>		
				<?php 


	?>


			


<form enctype="multipart/form-data" id="fupForm" >
  <div class="form-group" >
         <div class='statusMsg alert '> </div>
	
<div class="form-group col-md-6">
		
		<label class="control-label col-xs-4" for="fname">Select Property:</label>
		<div class="input-group   col-xs-8">
	<?php
    //Include database configuration file
    
    
    //Get all country data
    $query = $con->query("SELECT * FROM properties  ORDER BY property_id ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
    <select class="form-control col-xs-8" name="property" id="property">
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
	<div class="form-group col-md-6">
	<label class="control-label col-xs-4" for="fname">Select Unit:</label>
	<div class="input-group  col-xs-8">
			<select class='form-control' name="unit" id="state">
        <option value="">Select Property first</option>
    </select>
	</div>
</div>
	

<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Meter Number:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
  <input class="form-control" name="meter_number" type="text" placeholder="Meter Number" value="" id='meter_number' >
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Serial Number:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
  <input class="form-control" name="serial_number" type="text" placeholder="Serial Number" value="" id='serial_number' >
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class=" form-group col-md-6 ">
				        <label class="control-label col-xs-4" for="fname">Capture Date:</label>
				            <div class="input-group  col-xs-8" id="invoice_due_date">
				            
				                <input type="text" class="form-control required" name="capture_date" placeholder="Capture Date" data-date-format="<?php echo DATE_FORMAT ?> " />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Previous Reading:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
  <input class="form-control" name="current_reading" type="text" placeholder="Previous" value="" id='current_reading' required>
  <span class="help-block" id="error"></span> 
</div>
</div>

<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Current Reading:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
  <input class="form-control" name="reading" type="text" placeholder=" Current Reading" value="" id='reading' required>
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group col-md-6 ">
<label class="control-label col-xs-4" for="text">Screen Capture:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
       <input id="image" name="image" type="file" class="file" multiple 
        data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload..." required>
  <span class="help-block" id="error"></span> 
</div>
</div>
<input type="hidden" name="ADDEB_BY" value="<?php echo $_SESSION['USERNAME']; ?> "/>
<div class="form-group col-md-6">
<div class="control-label col-xs-4" for="text"></div>
 <div class="input-group  col-xs-8" id="invoice_due_text">
<input type="submit" name="submit" class="btn btn-danger submitBtn" value="SAVE"/>
  <span class="help-block" id="error"></span> 
</div>
</div>

 
 
<div class="row">
		<div class="col-xs-4">
		
		</div>
		</div>
          <!-- .vd_content-section --> 
        
        </div>
		</form>
		</div>
	</div>
</div>
</div>	
		</div>
		</div>
		



<?php
include('footer.php');
?>