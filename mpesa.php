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

<th>Account Id</th>
<th> Receipt</th>

<th>Receipt Time</th>
<th>Phone Number</th>

<th>
 Tenant Name
</th>
<th>House Number</th>
<th>Amount</th>
<th>Post Balance</th>
<th>Edit</th>

</thead>
<tbody>
<?php

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM pesapi_payment");

while($row = mysqli_fetch_array($result)) {

$wishID = $row["id"];
 echo "<tr>";
echo "<td>" . htmlentities  ($row['account_id ']) . "</td>";
echo "<td>" . htmlentities ($row['receipt']). "</td>";
echo "<td>" . htmlentities ($row['time']) . "</td>";
echo "<td>" . htmlentities ($row['phonenumber']) . "</td>";
echo "<td>" . htmlentities ($row['name']) . "</td>";
echo "<td>" . htmlentities ($row['account']) . "</td>";
echo "<td>" . htmlentities ($row['amount']). "</td>";
echo "<td>" . htmlentities ($row['post_balance ']) ."</td>";
print ' <td>
        <form name="editWish" action="paymentsedit.php" method="GET">
            <input type="hidden" name="wishID" value="<?php echo $wishID; ?> "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>';

}
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

<?php include ('includes/footer.php');  ?>
