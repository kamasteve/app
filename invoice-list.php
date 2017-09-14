
<?php include ('includes/header.php'); 

$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
$pageid=101;
}
?>

<div class="ch-container">
<div class="row">

 <?php include ('includes/left_sidebar.php');  ?>
 <div id="content" class="col-lg-10 col-sm-10">
 <div class="row">
    <div class="box col-md-12">
<div class="box-inner">

			
			
				<?php 

$con = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,
    DATABASE_NAME);
	// output any connection error
	if ($con->connect_error) {
		die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
    $query = "SELECT  invoice_date,invoice,t1.responsible,invoice_due_date,T1.status,total, name,tenant_name,((SELECT SUM(ammount) AS paid
FROM rent_payments
WHERE serial= t1.invoice)-t1.total) as balance FROM invoices AS T1 INNER JOIN properties AS T2 on T1.property=T2.property_id ;";

	// mysqli select query
	$results = $con->query($query);

	// mysqli select query
	?>

<table id="example" class="display" cellspacing="0" width="100%">
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
<thead>
<tr>
<th>Invoice</th>
<th>Customer</th>
<th>property Date</th>
<th>Unit</th>
<th>Status</th>
<th>SMS</th>
<th>Print</th>
<th>Delete</th>
 </tr>
</thead>
<tbody>
<?php
		while($row = $results->fetch_assoc()) {

			?>
				<tr>
				 <?php $wishID = $row["invoice"]; ?>
					<td> <?php echo$row["invoice"]; ?></td>
					<td> <?php echo $row['tenant_name'];?> </td>
				    <td><?php echo $row["name"];?></td>
					<td><?php echo $row["name"];?></td>
					<?php if($row['status'] == "open"){
					print '<td><span class="label label-info">'.$row['status'].'</span></td>';
				} elseif ($row['status'] == "closed"){
					print '<td><span class="label label-success">'.$row['status'].'</span></td>';
				}elseif ($row['status'] == "deleted"){
					print '<td><span class="label label-danger">'.$row['status'].'</span></td>';
				}
				?>

				   <td><a href="#"  class=" btn-success btn-xs btn-lg email-invoice" data-toggle="modal" data-target="#modalsms"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a></td>
			<?php print	'<td><a href="invoices/'.$row["invoice"].'.pdf " class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>';?>
				   
	<td>
	<?php
	echo '<a class=" btn-danger btn-xs " data-toggle="modal" data-target="#modalDelete" data-my-id="'.$row["invoice"].'">
													<i class="glyphicon glyphicon-trash icon-white"></i>
													
											</a>'
		
		?>									
	
    </td>
				    
					
	
				
			    
			
		        </tr>
		<?php } ?>
</tbody>
</table>
			
</div>
</div>
</div>
<div id="modalsms" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>  
      </div>
     <div class="modal-body">




</div>
      <div class="modal-footer">
        <button type="button" class=" btn-warning" data-dismiss="modal">Cancel</button>
		<button type="submit" class=" btn-success" data-dismiss="modal" id="delete_record">Delete</button>
      </div>
    </div>

  </div>
</div>
<div id="modalDelete" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Are You Sure You Want to Delete This Invoice</h4>
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
</div>
      <div class="modal-footer">
        <button type="button" class=" btn-warning" data-dismiss="modal">Cancel</button>
		<button type="submit" class=" btn-success" data-dismiss="modal" id="delete_record">Delete</button>
      </div>
    </div>

  </div>
</div>

<?php
include('includes/footer.php');
?>