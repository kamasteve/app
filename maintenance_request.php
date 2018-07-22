<?php include ('includes/header.php'); 


$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
$pageid=201;
}
define('DATE_FORMAT', 'YYYY/MM/DD'); // DD/MM/YYYY or MM/DD/YYYY
?>
<style>

.tentant_footer_cls .box-icon a{
width:auto !important;
height:35px !important;
}
</style>

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
<div class="ch-container">
	<div class="row">
		<!-- left menu starts -->
		<?php include ('includes/left_sidebar.php'); ?>
		<!--/span-->
		<!-- left menu ends -->
		
<div id="content" class="col-lg-10 col-sm-10">
<script type="text/javascript">
$(function () {
    $('#new_request').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://ec2-18-130-16-81.eu-west-2.compute.amazonaws.com/app/ajax/new_request.php";
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
                        $('#new_request').find('.messages').html(alertBox);
                        $('#new_request')[0].reset();
						//window.location.reload();
                    }
                }
            });
            return false;
        }
    })
});
</script>
<!-- content starts -->
<div class="row">
	<div class="box col-md-12">
		<div class="box-inner">
		<div class="box-content row">
		<form class="form-horizontal" action="new_request.php"  id="new_request" method="post">
		
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
	<div class="form-group col-md-6">
	
	<label class="control-label col-xs-4" for="email">Requested By:</label>
	
	<div class="col-xs-8">
	<input type="text" class="form-control"  name="requester" placeholder="Requested By">
	</div>
		</div>
		<div class="form-group col-md-6">
	
	<label class="control-label col-xs-4" for="email">Payee:</label>
	
	<div class="col-xs-8">
	<input type="text" class="form-control"   name="payee" placeholder="payee">
	</div>
		</div>
		<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">Start Date:</label>
 
   <div class="input-group  col-xs-8" id="invoice_due_date">
				            
				                <input type="text" class="form-control" name="start_date" placeholder="Select due date" data-date-format="<?php echo DATE_FORMAT ?>" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
</div>
<div class="form-group col-xs-6">
<label class="control-label col-xs-4" for="fname">Priority:</label>
  <div class=" col-xs-8">
			<select class='form-control' name="priority" id="priority">
        <option value="Critical">Critical</option>
		<option value="Normal">Normal</option>
		<option value="High">High</option>
		<option value="Low">Low</option>
		
    </select>
	</div>
</div>
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
<input type="hidden" name="responsible" value="<?php echo  $_id; ?> "/>
</div>
</div>
<div class="col-xs-6">
<div class="col-xs-4">
</div>
<div class="col-xs-8">
<button type="submit" class="btn button "   name='submit'>Save</button>
</div>
</div>
</div>
	</div>
</div>	
</div>



<?php include ('includes/footer.php');  ?>