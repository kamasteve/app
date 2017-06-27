<?php include ('includes/header.php'); 


$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
$pageid=301;
}

?>
<style>

.tentant_footer_cls .box-icon a{
width:auto !important;
height:35px !important;
}
</style>


<script type="text/javascript">
$(function () {
    $('#account_reports').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://localhost/app/reports/payment_summary.php";
            $.ajax({
                type: "GET",
                url: url,
                data    : {},
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
	
    <script>
  $( function() {
    $( "#datepicker1" ).datepicker();
  } );
  </script>
  
  <form class="form-horizontal" action="/reports/payment_summary.php"  id="account_reports" method="post">
  <div class="form-group col-md-4">
  
<label class="control-label col-xs-4" for="fname">Start Date:</label>
  <div class="col-xs-8">
  
  <input type="text" class="form-control" name="start_date" id="datepicker1">

</div>
</div>

<div class="form-group col-md-4">
<label class="control-label col-xs-4" for="fname">End Date:</label>
  <div class="col-xs-8">
  
  <input type="text" class="form-control" name="end_date" id="datepicker">

</div>
</div>
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
  } );
  </script>
		
	</form>	

</div>
</div>
<div class="box-inner">
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
		