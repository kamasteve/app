<?php include ('includes/header.php'); 
define('DATE_FORMAT', 'YYYY/MM/DD'); // DD/MM/YYYY or MM/DD/YYYY
$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
$pageid=301;
}

?>
<style>
table.dataTable thead th,table.dataTable tr th, table.dataTable tr td,table.dataTable thead td {
    padding: 10px 18px;
    border: 1px solid #ccc;
	
}
table.dataTable thead th{
	height:35px;
	
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

<script type="text/javascript">
$(function () {
    $('#account_reports').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://localhost:6060/app/reports/payment_summary.php";
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    $("#alert").html(data);
                }
				
            });
            return false;
        }
    })
});
</script>

<div class="ch-container">
	<div class="row">
		<!-- left menu starts -->
		<?php include ('includes/left_sidebar.php'); ?>
		<!--/span-->
		<!-- left menu ends -->
		
<div id="content" class="col-lg-10 col-sm-10">
<!-- content starts -->
<div class="row">
	<div class="box col-md-12">
		<div class="box-inner">
			<div class="row">
	
     

 

</div>
</div>
<div class="box-inner ">

<div class='messages' id="alert"> </div>
<table id="example" class="display table-striped" cellspacing="0" width="100%">
<thead>
<tr>
 <th rowspan="2">Feb</th>
  <th colspan="2">January</th>
  <th colspan="2">Feb</th>
  </tr>
  <tr>
  <th>Debit</th>
  <th>Credt</th>
  <th>Debit</th>
  <th>Credit</th>
  </tr>
  </thead>
  <tbody>
  <tr>
  <td>Income</td>
  <td>600</td>
  <td>900</td>
  <td>987200</td>
  <td>987200</td>
  </tr>
  <tr>
  <td>Expense</td>
  <td>600</td>
  <td>900</td>
  <td>987200</td>
  <td>987200</td>
  </tr>
  </tbody>
  </table>

</div>
</div>
</div>
</div>

<?php
include ('includes/footer.php')
?>
		