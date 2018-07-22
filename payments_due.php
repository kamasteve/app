<?php include ('includes/header.php'); 
define('DATE_FORMAT', 'YYYY/MM/DD'); // DD/MM/YYYY or MM/DD/YYYY
$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
$pageid=301;
}

?>
<style>

.tentant_footer_cls .box-icon a{
width:auto !important;
height:35px !important;
}
#example{
border: 1px solid #f4f4f4;
}
.table-striped>tbody>tr:nth-child(odd)>td,
.table-striped>tbody>tr:nth-child(odd)>th {
	background-color:#EAEAEA; 
}

.reports{	
 border-top: 2px solid #509111;
}
.table.dataTable thead th, table.dataTable thead td {
    padding: 10px 18px;
    border-bottom: 1px solid #111;
}
</style>


<script type="text/javascript">
$(function () {
    $('#account_reports').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://ec2-18-130-16-81.eu-west-2.compute.amazonaws.com/app/reports/payments_due.php";
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
		<!-- left menu starts -->
		<?php include ('includes/left_sidebar.php'); ?>
		<!--/span-->
		<!-- left menu ends -->
		
<div id="content" class="col-lg-10 col-sm-10">
<!-- content starts -->
<div class="row">
	<div class="box col-md-12">
		<div class="box-inner">
			<div class="row">
	
      <script>
  $( function() {
    $( "#datepicker1" ).datepicker();
    $( "#format" ).on( "change", function() {
      $( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
    });
  } );
  </script>
  
 <form class="form-horizontal" action=""  id="account_reports" method="post">
 <div class="form-group col-xs-5">
		
		<label class="control-label col-xs-4" for="fname">Select Property:</label>
		<div class=" col-xs-8">
	<?php
    //Include database configuration file
    
    
    //Get all country data
    $query = $con->query("SELECT * FROM properties  ORDER BY property_id ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
	
    <select class='form-control input-group' name="property1" id="property1">
        <option value="">Select Property</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
            }
        }else{
            echo '<option value="">Property not available</option>';
        }
        ?>
    </select>
	</div>
	</div>

<div class=" form-group col-xs-5">
	<label class="control-label col-xs-4" for="fname">Select Period:</label>
	<div class=" col-xs-8">
			<select class='form-control' name="period" id="period" required>
			<option value=''>Select Period</option>
			<option value='January' >January</option>
			<option value='February'>February</option>
			<option value='March'>March</option>
			<option value='April'>April</option>
			<option value='May'>May</option>
			<option value='June'>June</option>
			<option value='July'>July</option>
			<option value='August'>August</option>
			<option value='September'>September</option>
			<option value='October'>October</option>
			<option value='November'>November</option>
			<option value='December'>December</option>
			<option value='December'>1st Quarter</option>
			<option value='December'>2nd Quarter</option>
			<option value='December'>3rd Quarter</option>
			<option value='December'>4th Quarter</option>
    </select>
	</div>
</div>
<div class="form-group col-md-2 ">
<label class="control-label col-xs-5" for="fname"></label>		
		<div class="form-group ">
			<div class="col-xs-offset-3 col-xs-9 tentant_footer_cls">
		<input class=" btn button  btn-default" type="submit" name="button" value='submit'>
			</div>
		</div>
</div>
 
     <script>
  $( function() {
    $( "#datepicker" ).datepicker();
    $( "#format" ).on( "change", function() {
      $( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
    });
  } );
  </script>
		<script>
		$("#btnExport").click(function (e) {
    window.open('data:application/vnd.ms-excel,' + $('#example').html());
    e.preventDefault();
});
		</script>
	</form>	

</div>
</div>
<div class="box-inner reports">

<div class='messages' id="alert"> </div>


</div>
</div>
</div>
</div>
</div>
</div>
<?php
include ('includes/footer.php')
?>
		