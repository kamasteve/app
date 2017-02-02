<?php include ('includes/header.php'); 
$pageid=108;
?>

<style>
.tentant_footer_cls .box-icon a{
width:auto !important;
height:35px !important;
}
</style>

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
<th>Subtotal</th>
<th>Total</th>

</tr>
</thead>
<tbody>
<?php
$con=mysqli_connect("localhost","root","","hill_rental");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT  invoice_date,invoice,responsible,invoice_due_date,subtotal,total, name,fname,lname FROM invoices AS T1 LEFT JOIN properties AS T2 on T1.property=T2.property_id LEFT JOIN tenants AS T3 ON T1.id_unit=T3.unit");

while($row = mysqli_fetch_array($result)) {
?>

 <tr>
<td> <?php echo $row['fname'].'&nbsp'.$row['lname'] ?> </td>
<td> <?php echo $row['name']; ?> </td>
<td> <?php echo $row['invoice_date']; ?> </td>
<td> <?php echo $row['invoice']; ?> </td>
<td> <?php echo $row['responsible']; ?> </td>
<td> <?php echo $row['invoice_due_date']; ?> </td>
<td> <?php echo $row['subtotal'] ;?> </td>
<td> <?php echo $row['total']; ?> </td>

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
<?php include ('includes/footer.php');  ?>
