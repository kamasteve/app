
<?php include ('includes/header.php');
$sql = mysqli_query($con,"SELECT * FROM owner");
while($row = mysqli_fetch_array($sql)) {
$owner_arr[]=$row;
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
<div id="leased" class="tab-pane fade ">
<div class="row">
  <div class="col-md-4"> 
  </div>
  <div class="col-md-4"> 
  </div>
  <div class="col-md-4"> 
  <button type="button" class="btn1  ">Add New Apartment</button>
  </div>
  
</div>

</div>
<div id="vacant" class="tab-pane fade ">
<div class="row">
  <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
</div>

</div>
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
<th>landlord</th>
<th>
 Adress
</th>
<th>
 Contact
</th>
<th>Units</th>
<th>Status</th>
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
<td> <?php echo  $row['id']  ?> </td>
<td> <?php echo $row['name']; ?> </td>
<td> <?php echo $row['landlord']; ?> </td>
<td> <?php echo $row['address']; ?> </td>
<td> <?php echo $row['contact']; ?> </td>
<td> <?php echo $row['units'] ;?> </td>
<td> <?php 
 $status = $row['status'] ;
 if ($status ==1) {
echo 'Not Vacant';
} 
else {
echo 'Vacctant';
}
?> </td>
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

</div>
</div>
<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>
<script type="text/javascript" language="javascript" class="init">
	$(document).ready(function() {
		var table = $('#example').DataTable();
		var tt = new $.fn.dataTable.TableTools( table );
		$( tt.fnContainer() ).insertBefore('div.dataTables_wrapper');
		
	} );
</script>
<?php  include ('includes/footer.php'); ?>