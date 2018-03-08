<?php include ('includes/header.php'); 
define('DATE_FORMAT', 'YYYY/MM/DD'); // DD/MM/YYYY or MM/DD/YYYY
$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
$pageid=301;
}

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.tentant_footer_cls .box-icon a{
width:auto !important;
height:35px !important;
}
#statement{
width:85% !important;
 margin-left:auto; 
    margin-right:auto;
}
 

#statement thead {
    padding-top: 11px;
	height:30px;
	border-bottom: 2px solid #68B12F;
    padding-bottom: 11px;
    background-color: #FFF;
    
}
tr#row1 { border-top: 2px solid #68B12F }
tr#col1 { border: 3px solid blue }
td#total{text-align:left}
.reports{	
 border-top: 2px solid #509111;
}

</style>
<!-- 
.table-striped>tbody>tr:nth-child(odd)>td,
.table-striped>tbody>tr:nth-child(odd)>th {
	background-color:#EAEAEA;
 -->

<script type="text/javascript">
$(function () {
    $('#account_reports').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://localhost/app/reports/tenant_summary.php";
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
<div class="jquery-script-center">
<ul>
<li><a href="http://www.jqueryscript.net/table/Editable-Tables-jQuery-Bootstrap-Bootstable/">Download This Plugin</a></li>
<li><a href="http://www.jqueryscript.net/">Back To jQueryScript.Net</a></li>
</ul>
<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>

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
	
   
  
 <form class="form-horizontal" action=""  id="account_reports" method="post">
 <div class="form-group col-xs-5">
		
		<label class="control-label col-xs-4" for="fname">Select Property:</label>
		<div class=" col-xs-8">
	<?php
    //Include database configuration file
    
    
    //Get all country data
    $query = $con->query("SELECT * FROM properties  ORDER BY property_id ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
	
    <select class='form-control input-group' name="property1" id="property1" required>
        <option value="">Select Property</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
            }
        }else{
            echo '<option value="">Property not available</option>';
        }
        ?>
    </select>
	</div>
	</div>

<div class=" form-group col-xs-5">
	<label class="control-label col-xs-4" for="fname">Select Unit:</label>
	<div class=" col-xs-8">
			<select class='form-control' name="unit" id="state" required>
        <option value="">Select Property first</option>
    </select>
	</div>
</div>
<div class="form-group col-md-1 ">
<label class="control-label col-xs-4" for="fname"></label>	
<div class="form-group ">
<div class="col-xs-offset-3 col-xs-9 ">
<button type="submit" class="button btn-limited">
   <span class="fa fa-file-pdf-o" style="color:#fff"> PDF</span>
</button>
			</div>
		</div>
</div>
<div class="form-group col-md-2 ">
<label class="control-label col-xs-5" for="fname"></label>	
	
		<div class="form-group ">
			<div class="col-xs-offset-3 col-xs-9 ">
			
		<button type="submit" class=" button btn-limited">
  <span class="fa fa-file-pdf-o" style="color:#fff"> PDF</span>
</button>
			</div>
		</div>
</div>
 
    
	</form>	
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="bootstable.js"></script>
<script>
 $('table').SetEditable();
</script>
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
		