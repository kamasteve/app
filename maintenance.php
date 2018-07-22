<?php include ('includes/header.php'); 
$sql1 = mysqli_query($con,"SELECT * FROM maintenance");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;

}
$pageid=201;
?>
<style>
.tentant_footer_cls .box-icon a{
width:auto !important;
height:35px !important;
}
</style>
<script type="text/javascript" src="js/my_js.js"></script>
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
<!-- content starts -->
<div class="row">
	<div class="box col-md-12">
		<div class="box-inner">
		
<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <th>
			 Request Id
		</th>
		<th>
			 Property Name
		</th>
		<th>
			 Unit Id
		</th>
		<th>
			 Payee
		</th>
		<th>
			 Responsible
		</th>
		<th>
			 Details
		</th>
		<th>
			 Priority
		</th>
		<th>
			Capture Date
		</th>
		<th>
			 Status
		</th>
		
		<th >
			 Action 
		</th>
    </thead>
 
    <tbody>
	<?php
	$result = mysqli_query($con,"SELECT * FROM maintenance ");
	while($row = mysqli_fetch_array($result)): 
	$wishID = $row["id"];
          echo  "<tr><td>" . htmlentities($row["id"]) . "</td>";
           echo "<td>" . htmlentities ($row['property']) . "</td>";
           echo "<td>" . htmlentities ($row['unit']) . "</td>";
		   echo "<td>" . htmlentities ($row['requester']) . "</td>";
           echo "<td>" . htmlentities ($row['responsible']) . "</td>";
           echo "<td>" . htmlentities ($row['details']) . "</td>";
		   echo "<td>". htmlentities ($row['priority']) . "</td>";
           echo "<td>" . htmlentities ($row['date']) . "</td>";
           
           echo "<td>" . htmlentities ($row['status']) . "</td>";
           echo "<td>";
		   if($row['status'] == "0"){
	echo '<a class="xyz btn " data-toggle="modal" data-target="#myModal" data-my-id="'.$row["id"].'">
													<i class="glyphicon glyphicon-check"></i>
													Validate
											</a>';
	}else{
		echo '<a class="xyz btn " data-toggle="modal" data-target="#myModal34" data-my-id="'.$row["id"].'">
													<i class="glyphicon glyphicon-ok"></i>
													Validated
											</a>';
	}
		   echo "</td>";
			?>
		
			<?php	
          echo  "</tr>\n";
        endwhile;
    mysqli_free_result($result);
mysqli_close($con);
?>	
    </tbody>
</table>
</div>

<!--/row-->
<!-- content ends -->
</div>
<!--/#content.col-md-0-->
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">Exit</button>
</div>

<div class="modal-body">
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Request Id</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="id_" disabled>
  </div>
</div>
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Property</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="property" disabled>
  </div>
</div>
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Unit</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="unit" disabled>
  </div>
</div>
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Payee</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="payee" disabled>
  </div>
</div>
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Details</label>
  <div class="col-xs-8">
    <textarea class="form-control" type="text" value="" id="details" ></textarea>
  </div>
</div> 
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label"> Maintenance Cost</label>
  <div class="col-xs-8">
    <input class="form-control" type="text" value="" id="cost" >
  </div>
</div>
<div class="col-xs-8">
<input type="hidden" name="responsible" id="responsible"  value="<?php echo  $_id; ?> "/>
</div>
<button type="button" class="  btn-warning" data-dismiss="modal">Cancel</button>
<button type="submit" class="  btn-success " data-dismiss="modal" id="add_expenses">Make Expense</button>

</div>
</div> 
</div>
</div>
</div> 
</div>	
<?php include ('includes/footer.php'); ?>

