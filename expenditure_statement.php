<?php include ('includes/header.php'); 
define('DATE_FORMAT', 'YYYY/MM/DD'); // DD/MM/YYYY or MM/DD/YYYY
$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
$pageid=301;
}

?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<style>

.tentant_footer_cls .box-icon a{
width:auto !important;
height:35px !important;
}
#example{
border: 1px solid #f4f4f4;
}
.table-striped>tbody>tr:nth-child(odd)>td,
.table-striped>tbody>tr:nth-child(odd)>th {
	background-color:#EAEAEA; 
}

.reports{	
 border-top: 2px solid #509111;
}
.table.dataTable thead th, table.dataTable thead td {
    padding: 10px 18px;
    border-bottom: 1px solid #111;
}
</style>


<script type="text/javascript">
    
    // Load the Visualization API and the piechart package.
    google.charts.load('current', {'packages':['corechart']});
      
    // Set a callback to run when the Google Visualization API is loaded.
    
    google.charts.setOnLoadCallback(column_chart);
   
      
   

    function column_chart() {
		
		var jsonData = $.ajax({
			url: 'column_chart.php',
    		dataType:"json",
    		async: false,
			success: function(jsonData)
				{
					var data = new google.visualization.arrayToDataTable(jsonData);	
        			var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));
					chart.draw(data);
					
				}	
			}).responseText;
  }
      
  
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
	
      <script>
  $( function() {
    $( "#datepicker1" ).datepicker();
    $( "#format" ).on( "change", function() {
      $( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
    });
  } );
  </script>
  
  <form class="form-horizontal" action=""  id="account_reports" method="post">
  <div class="form-group col-md-6">
  
<label class="control-label col-xs-4" for="fname">Start Date:</label>
 
  
   <div class="input-group  col-xs-8" id="invoice_due_date">
				            
				                <input type="text" class="form-control required" name="start_date" placeholder="Select due date" data-date-format="<?php echo DATE_FORMAT ?>" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>


</div>

<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">End Date:</label>
  
  
  <div class="input-group  col-xs-8" id="invoice_due_date">
				            
				                <input type="text" class="form-control required" name="end_date" placeholder="Select due date" data-date-format="<?php echo DATE_FORMAT ?>" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>


</div>
<div class="row">
<div class="form-group col-md-4 ">
		
		<div class="form-group ">
			<div class="col-xs-offset-3 col-xs-9 tentant_footer_cls">
		<input class=" btn button  btn-default" type="submit" name="button" value='submit'>
			</div>
		</div>
</div>
 
     <script>
  $( function() {
    $( "#datepicker" ).datepicker();
    $( "#format" ).on( "change", function() {
      $( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
    });
  } );
  </script>
		<script>
		$("#btnExport").click(function (e) {
    window.open('data:application/vnd.ms-excel,' + $('#example').html());
    e.preventDefault();
});
		</script>
	</form>	

</div>
</div>
<div class="box-inner reports">

<div class='messages' id="alert"> </div>


</div>
</div>
</div>
</div>
</div>
</div>
<?php
include ('includes/footer.php')
?>
		