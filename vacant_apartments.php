<?php include ('includes/header.php'); 
$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;

}
$pageid=207;
?>
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
<?php include ('includes/left_sidebar.php');  ?>
<div id="content" class="col-lg-10 col-sm-10">
 <div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
	<div class="box-content row"> 
		

<div class="tab-content">
<div id="all" class="tab-pane fade in active">
 
  <div class="tablediv">
  
  <table id="example" class="display" cellspacing="0" width="100%">

<thead>
<tr>
<th>Property Id</th>
<th>Property Name</th>
<th>
 Vacant Unit
</th>
<th>
 Unit Type
</th>
<th>Monthly Rent</th>

<th>Edit</th>
</tr>
</thead>
<tbody>
<?php

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT T1.property_id, unit_id, unit_type,rent, T2.name FROM rental_units AS T1 INNER JOIN properties AS T2 ON T1.property_id=T2.property_id  WHERE STATUS='0'");

while($row = mysqli_fetch_array($result)) {
?>

 <tr>
 <td> <?php echo  $row['property_id']  ?> </td>
 <td> <?php echo $row['name']; ?> </td>
 <td> <?php echo $row['unit_id']; ?> </td>
 <td> <?php echo $row['unit_type']; ?> </td>
<td> <?php echo $row['rent'] ;?> </td>

<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value=" "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
  </tr>

<?php }
mysqli_close($con);
	?>
	</tbody>
	</table>
	</div>
  
  

</div>
<div id="leased" class="tab-pane fade ">
<div class="row">
  
  
</div>

</div>
<div id="vacant" class="tab-pane fade ">
<div class="row">
  <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
</div>

</div>
	</div>	
	
	</div>
		</div>
		</div>

</div>
</div>
<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>

<?php  include ('includes/footer.php'); ?>