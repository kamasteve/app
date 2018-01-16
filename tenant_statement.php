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

<?php
$html = '
<html>
<head>
<style>
body {font-family: sans-serif;
	font-size: 10pt;
}
p {	margin: 0pt; }
table.items {
	border: 0.1mm solid #000000;
}
td { vertical-align: top; }
.items td {
	border-left: 0.1mm solid #000000;
	border-right: 0.1mm solid #000000;
}
table thead td { background-color: #EEEEEE;
	text-align: center;
	border: 0.1mm solid #000000;
	font-variant: small-caps;
}
.items td.blanktotal {
	background-color: #EEEEEE;
	border: 0.1mm solid #000000;
	background-color: #FFFFFF;
	border: 0mm none #000000;
	border-top: 0.1mm solid #000000;
	border-right: 0.1mm solid #000000;
}
.items td.totals {
	text-align: right;
	border: 0.1mm solid #000000;
}
.items td.cost {
	text-align: "." center;
}
</style>
</head>
<body>

<!--mpdf
<htmlpageheader name="myheader">
<table width="100%"><tr>
<td width="50%" style="color:#0000BB; "><span style="font-weight: bold; font-size: 14pt;">Techisoft Solutions Limited.</span><br />123 Anystreet<br />Your City<br />GD12 4LP<br /><span style="font-family:dejavusanscondensed;">&#9742;</span> 01777 123 567</td>
<td width="50%" style="text-align: right;">Invoice No.<br /><span style="font-weight: bold; font-size: 12pt;">0012345</span></td>
</tr></table>
</htmlpageheader>

<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />
mpdf-->

<div style="text-align: right">Date: 13th November 2008</div>

<table width="100%" style="font-family: serif;" cellpadding="10"><tr>
<td width="45%" style="border: 0.1mm solid #888888; "><span style="font-size: 7pt; color: #555555; font-family: sans;">SOLD TO:</span><br /><br />345 Anotherstreet<br />Little Village<br />Their City<br />CB22 6SO</td>
<td width="10%">&nbsp;</td>
<td width="45%" style="border: 0.1mm solid #888888;"><span style="font-size: 7pt; color: #555555; font-family: sans;">SHIP TO:</span><br /><br />345 Anotherstreet<br />Little Village<br />Their City<br />CB22 6SO</td>
</tr></table>

<br />

<table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">
<thead>
<tr>
<td width="15%">Ref. No.</td>
<td width="10%">Quantity</td>
<td width="45%">Description</td>
<td width="15%">Unit Price</td>
<td width="15%">Amount</td>
</tr>
</thead>
<tbody>
<!-- ITEMS HERE -->
<tr>
<td align="center">MF1234567</td>
<td align="center">10</td>
<td>Large pack Hoover bags</td>
<td class="cost">&pound;2.56</td>
<td class="cost">&pound;25.60</td>
</tr>
<tr>
<td align="center">MX37801982</td>
<td align="center">1</td>
<td>Womans waterproof jacket<br />Options - Red and charcoal.</td>
<td class="cost">&pound;102.11</td>
<td class="cost">&pound;102.11</td>
</tr>
<tr>
<td align="center">MR7009298</td>
<td align="center">25</td>
<td>Steel nails; oval head; 30mm x 3mm. Packs of 1000.</td>
<td class="cost">&pound;12.26</td>
<td class="cost">&pound;325.60</td>
</tr>
<tr>
<td align="center">MF1234567</td>
<td align="center">10</td>
<td>Large pack Hoover bags</td>
<td class="cost">&pound;2.56</td>
<td class="cost">&pound;25.60</td>
</tr>
<tr>
<td align="center">MX37801982</td>
<td align="center">1</td>
<td>Womans waterproof jacket<br />Options - Red and charcoal.</td>
<td class="cost">&pound;102.11</td>
<td class="cost">&pound;102.11</td>
</tr>
<tr>
<td align="center">MR7009298</td>
<td align="center">25</td>
<td>Steel nails; oval head; 30mm x 3mm. Packs of 1000.</td>
<td class="cost">&pound;12.26</td>
<td class="cost">&pound;325.60</td>
</tr>
<tr>
<td align="center">MF1234567</td>
<td align="center">10</td>
<td>Large pack Hoover bags</td>
<td class="cost">&pound;2.56</td>
<td class="cost">&pound;25.60</td>
</tr>
<tr>
<td align="center">MX37801982</td>
<td align="center">1</td>
<td>Womans waterproof jacket<br />Options - Red and charcoal.</td>
<td class="cost">&pound;102.11</td>
<td class="cost">&pound;102.11</td>
</tr>
<tr>
<td align="center">MR7009298</td>
<td align="center">25</td>
<td>Steel nails; oval head; 30mm x 3mm. Packs of 1000.</td>
<td class="cost">&pound;12.26</td>
<td class="cost">&pound;325.60</td>
</tr>
<tr>
<td align="center">MF1234567</td>
<td align="center">10</td>
<td>Large pack Hoover bags</td>
<td class="cost">&pound;2.56</td>
<td class="cost">&pound;25.60</td>
</tr>
<tr>
<td align="center">MX37801982</td>
<td align="center">1</td>
<td>Womans waterproof jacket<br />Options - Red and charcoal.</td>
<td class="cost">&pound;102.11</td>
<td class="cost">&pound;102.11</td>
</tr>
<tr>
<td align="center">MR7009298</td>
<td align="center">25</td>
<td>Steel nails; oval head; 30mm x 3mm. Packs of 1000.</td>
<td class="cost">&pound;12.26</td>
<td class="cost">&pound;325.60</td>
</tr>
<tr>
<td align="center">MF1234567</td>
<td align="center">10</td>
<td>Large pack Hoover bags</td>
<td class="cost">&pound;2.56</td>
<td class="cost">&pound;25.60</td>
</tr>
<tr>
<td align="center">MX37801982</td>
<td align="center">1</td>
<td>Womans waterproof jacket<br />Options - Red and charcoal.</td>
<td class="cost">&pound;102.11</td>
<td class="cost">&pound;102.11</td>
</tr>
<tr>
<td align="center">MF1234567</td>
<td align="center">10</td>
<td>Large pack Hoover bags</td>
<td class="cost">&pound;2.56</td>
<td class="cost">&pound;25.60</td>
</tr>
<tr>
<td align="center">MX37801982</td>
<td align="center">1</td>
<td>Womans waterproof jacket<br />Options - Red and charcoal.</td>
<td class="cost">&pound;102.11</td>
<td class="cost">&pound;102.11</td>
</tr>
<tr>
<td align="center">MR7009298</td>
<td align="center">25</td>
<td>Steel nails; oval head; 30mm x 3mm. Packs of 1000.</td>
<td class="cost">&pound;12.26</td>
<td class="cost">&pound;325.60</td>
</tr>
<tr>
<td align="center">MR7009298</td>
<td align="center">25</td>
<td>Steel nails; oval head; 30mm x 3mm. Packs of 1000.</td>
<td class="cost">&pound;12.26</td>
<td class="cost">&pound;325.60</td>
</tr>
<tr>
<td align="center">MF1234567</td>
<td align="center">10</td>
<td>Large pack Hoover bags</td>
<td class="cost">&pound;2.56</td>
<td class="cost">&pound;25.60</td>
</tr>
<tr>
<td align="center">MX37801982</td>
<td align="center">1</td>
<td>Womans waterproof jacket<br />Options - Red and charcoal.</td>
<td class="cost">&pound;102.11</td>
<td class="cost">&pound;102.11</td>
</tr>
<tr>
<td align="center">MR7009298</td>
<td align="center">25</td>
<td>Steel nails; oval head; 30mm x 3mm. Packs of 1000.</td>
<td class="cost">&pound;12.26</td>
<td class="cost">&pound;325.60</td>
</tr>
<!-- END ITEMS HERE -->
<tr>
<td class="blanktotal" colspan="3" rowspan="6"></td>
<td class="totals">Subtotal:</td>
<td class="totals cost">&pound;1825.60</td>
</tr>
<tr>
<td class="totals">Tax:</td>
<td class="totals cost">&pound;18.25</td>
</tr>
<tr>
<td class="totals">Shipping:</td>
<td class="totals cost">&pound;42.56</td>
</tr>
<tr>
<td class="totals"><b>TOTAL:</b></td>
<td class="totals cost"><b>&pound;1882.56</b></td>
</tr>
<tr>
<td class="totals">Deposit:</td>
<td class="totals cost">&pound;100.00</td>
</tr>
<tr>
<td class="totals"><b>Balance due:</b></td>
<td class="totals cost"><b>&pound;1782.56</b></td>
</tr>
</tbody>
</table>


<div style="text-align: center; font-style: italic;">Payment terms: payment due in 30 days</div>


</body>
</html>
';
//==============================================================
//==============================================================
//==============================================================
//==============================================================
//==============================================================
//==============================================================

//define('_MPDF_PATH','../');
//include("../mpdf.php");
define('_MPDF_PATH','');
include("mpdf60/mpdf.php");
$mpdf=new mPDF('c','A4','','',20,15,48,25,10,10); 
$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("Acme Trading Co. - Invoice");
$mpdf->SetAuthor("Acme Trading Co.");
$mpdf->SetWatermarkText("Paid");
$mpdf->showWatermarkText = true;
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->watermarkTextAlpha = 0.1;
//$mpdf->SetDisplayMode('fullpage');



$mpdf->WriteHTML($html);

$mpdf->Output('reports/test.pdf', 'f');
//$mpdf->Output();
?>
</div>
</div>
</div>
</div>
<?php
include ('includes/footer.php')
?>
		