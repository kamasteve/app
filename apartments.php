
<?php include ('includes/header.php');
$sql = mysqli_query($con,"SELECT * FROM owner");
while($row = mysqli_fetch_array($sql)) {
$owner_arr[]=$row;
$pageid=203;
}

$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
}

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
		
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#all">Apartments</a></li>
<li><a data-toggle="tab" href="#leased">Leased</a></li>
 <li><a data-toggle="tab" href="#vacant">Vacant</a></li>
</ul>
<div class="tab-content">
<div id="all" class="tab-pane fade in active">
 <div class="col-md-4"> 
  </div>
  <div class="col-md-4"> 
  </div>
  <div class="col-md-4"> 
<!-- Button trigger modal -->

  </div>
  <div class="tablediv">
  
  <table id="example" class="display" cellspacing="0" width="100%">

<thead>
<tr>
<th>Id</th>
<th>Name</th>
<th>
 Type
</th>
<th>
 Adress
</th>
<th>Add Date</th>
<th>Location</th>
<th>Edit</th>
</tr>
</thead>
<tbody>
<?php
$con=mysqli_connect("localhost","root","","hill_rental");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM properties");

while($row = mysqli_fetch_array($result)) {
?>

 <tr>
<td> <?php echo  $row['property_id']  ?> </td>
<td> <?php echo $row['name']; ?> </td>
<td> <?php echo $row['type']; ?> </td>
<td> <?php echo $row['address']; ?> </td>
<td> <?php echo $row['add_date'] ;?> </td>
<td> <?php echo $row['location'] ;?> </td>
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