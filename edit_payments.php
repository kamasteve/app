<?php include ('includes/header.php'); ?>
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

<thead>
<tr>
<th>Property</th>
<th> Period</th>

<th>Payment Mode</th>
<th>First Name</th>

<th>
 Adress
</th>
<th>Email</th>
<th>Phone</th>
<th>Ammount</th>
<th>Date</th>
</tr>
</thead>
<tbody>
<?php
$con=mysqli_connect("localhost","root","","hill_rental");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM rent_payments");

while($row = mysqli_fetch_array($result)) {
?>

 <tr>
<td> <?php echo  $row['property']  ?> </td>
<td> <?php echo $row['rental_period']; ?> </td>
<td> <?php echo $row['payment_mode']; ?> </td>
<td> <?php echo $row['first_name']; ?> </td>
<td> <?php echo $row['adress']; ?> </td>
<td> <?php echo $row['email']; ?> </td>
<td> <?php echo $row['phone'] ;?> </td>
<td> <?php echo $row['ammount']; ?> </td>
<td> <?php echo $row['date']; ?></td>
  </tr>

<?php }
mysqli_close($con);
	?>
	</tbody>
	</table>


</div>
</div>
</div>

<script type="text/javascript" language="javascript" class="init">
	$(document).ready(function() {
		var table = $('#example').DataTable();
		var tt = new $.fn.dataTable.TableTools( table );
		$( tt.fnContainer() ).insertBefore('div.dataTables_wrapper');
		
	} );
</script>
<?php include ('includes/footer.php');  ?>
</body>
</html>