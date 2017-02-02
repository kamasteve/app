<?php include ('includes/header.php'); 
$pageid=108;
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
<?php include ('includes/left_sidebar.php'); ?>

<!-- content starts -->
<div id="content" class="col-lg-10 col-sm-10">
<div class="row">
	<div class="box col-md-12">
		<div class="box-inner">

<table id="example" class="display" cellspacing="0" width="100%">

<thead>

<th>Property</th>
<th> Period</th>

<th>Payment Mode</th>
<th>First Name</th>

<th>
 House Number
</th>
<th>Phone</th>
<th>Ammount</th>
<th>Date</th>

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


 echo "<tr>";
echo "<td>" . htmlentities  ($row['property']) . "</td>";
echo "<td>" . htmlentities ($row['rental_period']). "</td>";
echo "<td>" . htmlentities ($row['payment_mode']) . "</td>";
echo "<td>" . htmlentities ($row['first_name']) . "</td>";
echo "<td>" . htmlentities ($row['house_number']) . "</td>";
echo "<td>" . htmlentities ($row['phone']) . "</td>";
echo "<td>" . htmlentities ($row['ammount']). "</td>";
echo "<td>" . htmlentities ($row['date']) ."</td>";
  echo "</tr> \n";

}
mysqli_close($con);
	?>
	</tbody>
	</table>


</div>
</div>
</div>

</div>

<?php include ('includes/footer.php');  ?>
