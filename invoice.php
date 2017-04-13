<?php include ('includes/header.php'); 
$pageid=108;
?>

<style>
.tentant_footer_cls .box-icon a{
width:auto !important;
height:35px !important;
}

#myModal {

outline: none;
overflow-x: hidden;
overflow-y: auto;
}
</style>
<script type="text/javascript" src="js/my_js.js"></script>
<div class="ch-container">
<div class="row">
<?php include ('includes/left_sidebar.php'); ?>

<!-- content starts -->
<div id="content" class="col-lg-10 col-sm-10">
<div class="row">
	<div class="box col-md-12">
		<div class="box-inner">

<table id="example" class="display" cellspacing="0" width="100%">
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
<th>Customer Name</th>
<th>Property Name</th>
<th> Invoice Date</th>
<th>Number</th>
<th>Resposible</th>
<th>Due Date</th>
<th>Status</th>
<th>Total</th>
<th>Edit</th>
<th>PAY</th>

</tr>
</thead>
<tbody>
<?php

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT  invoice_date,invoice,responsible,invoice_due_date,status,total, name,fname,lname FROM invoices AS T1 LEFT JOIN properties AS T2 on T1.property=T2.property_id LEFT JOIN tenants AS T3 ON T1.id_unit=T3.unit");

while($row = mysqli_fetch_array($result)) {
?>

 <tr>
 <?php $wishID = $row["invoice"]; ?>
<td> <?php echo $row['fname'].'&nbsp'.$row['lname'] ?> </td>
<td> <?php echo $row['name']; ?> </td>
<td> <?php echo $row['invoice_date']; ?> </td>
<td> <?php echo $row['invoice']; ?> </td>
<td> <?php echo $row['responsible']; ?> </td>
<td> <?php echo $row['invoice_due_date']; ?> </td>
<?php if($row['status'] == "open"){
					print '<td><span class="label label-info">'.$row['status'].'</span></td>';
				} elseif ($row['status'] == "closed"){
					print '<td><span class="label label-success">'.$row['status'].'</span></td>';
				}elseif ($row['status'] == "deleted"){
					print '<td><span class="label label-danger">'.$row['status'].'</span></td>';
				}
				?>
<td> <?php echo $row['total']; ?> </td>
<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="<?php echo $wishID; ?> "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<a type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</a>
        </form>
    </td>
	<td>
	<?php
	echo '<a class="xyz btn " data-toggle="modal" data-target="#myModal" data-my-id="'.$row["invoice"].'">
													<i class="glyphicon glyphicon-euro icon-white"></i>
													Pay
											</a>'
		
		?>									
	
    </td>
	
 
  </tr>

<?php }
mysqli_close($con);
	?>
	</tbody>
	</table>


</div>
</div>
</div>

</div>
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
        <option value="Bank Deposit">>Bank Deposit</option>
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

<?php include ('includes/footer.php');  ?>
