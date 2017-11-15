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
<th>Last Name</th>
<th>
 House Number
</th>

<th>Amount</th>
<th>Date</th>
<th>Edit</th>
<th>Print</th>

</thead>
<tbody>
<?php

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM rent_payments");

while($row = mysqli_fetch_array($result)) {

$wishID = $row["payment_id"];
 echo "<tr>";
echo "<td>" . htmlentities  ($row['property']) . "</td>";
echo "<td>" . htmlentities ($row['rental_period']). "</td>";
echo "<td>" . htmlentities ($row['payment_mode']) . "</td>";
echo "<td>" . htmlentities ($row['first_name']) . "</td>";
echo "<td>" . htmlentities ($row['last_name']) . "</td>";
echo "<td>" . htmlentities ($row['house_number']) . "</td>";

echo "<td>" . htmlentities ($row['ammount']). "</td>";
echo "<td>" . htmlentities ($row['date']) ."</td>";
print '<td>
        <form name="editWish" action="paymentsedit.php" method="GET">
            <input type="hidden" name="wishID" value="<?php echo $wishID; ?> "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>';
 print	'<td><a href="receipts/'.$row["particulars"].'.pdf " class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>';
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
