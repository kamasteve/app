<?php
  // establish connection to database and select DB
//include_once('../database_connection.php');
  include_once("../includes/config.php");
    $fname = $_REQUEST['fname'];
	$invoice_date = $_REQUEST['invoice_date'];
	$property = $_REQUEST['property'];
	$unit = $_REQUEST['unit'];
	$tenant_id = $_REQUEST['tenant_id'];
	$period = $_REQUEST['period'];
	$amount = $_REQUEST['amount'];
	$responsible = $_REQUEST['responsible'];
	$mode =$_REQUEST['mode'];
	$compcode = "RCPT-";
	$runningnumber=rand(1000,9999);
	//uniqid(prefix,more_entropy)
$result = $compcode.date('y').str_pad($runningnumber, 5, "0", STR_PAD_LEFT);
echo $result;
	//$photo = $_REQUEST['input-b3[]'];
 $query = "INSERT INTO rent_payments (type,last_name,first_name,payment_mode, serial,ammount,date,particulars,tenant_id,property,rental_period,house_number) VALUES ('$mode','$fname','$fname','$mode','$result','$amount','$invoice_date','$result','$tenant_id','$property','$period','$invoice_date')";
//$query1 = "INSERT INTO accounts (debit,date,invoice_id,customercode,responsible) VALUES ('$amount','$date','$id_','$tenant_id','$responsible')";
  // execute query
  $result_rent_payments = mysqli_query($mysqli,$query) or die('Server error = '.mysqli_error($mysqli));
  //$result2 = mysqli_query($mysqli,$query1) or die('Server error = '.mysqli_error($mysqli));
 // if ($amount >= $total){
	//  $update = "UPDATE invoices SET status='closed' WHERE invoice='$id_'";
	//  $result3 = mysqli_query($mysqli,$update) or die('Server error = '.mysqli_error($mysqli));
 // }

//$add_unit ="INSERT into meter_numbers(Station,site_id,date,old_reading,current_reading,meter_number,serial_number,photo_evidence,username,file_extension,file_name) VALUES('$region','$site_id','$date','$previous_reading','$reading','$meter_number','$serial_number','$image','$ADDEB_BY','$file_ext','$file_basename')";
 //$result_addunits = mysqli_query($mysqli, $add_unit);

            if (!$result_rent_payments ) {
             print "Error: " . $add_unit . "<br>" . mysqli_error($mysqli);
			}
			else{
$html = '
<html>
<head>
<style>
body {font-family: sans-serif;
	font-size: 10pt;
}
p {	margin: 0pt; }
table.items {
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
<table width="100%" ><tr>
<td width="50%" style="color:#0000BB; "> <img style="vertical-align: top" src="../img/techisoft.png" width="50%" /></td>
<td width="50%" style="text-align: right;"><h1>Receipt No.</h1><br /><span style="font-weight: bold; font-size: 12pt;">'.htmlspecialchars($result).'</span></td>
</tr></table>

<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />
mpdf-->
<table width="100%" style="font-family: serif;" cellpadding="10"><tr>
<td width="45%" style="border: 0.1mm solid #888888; "><span style="font-size: 7pt; color: #555555; font-family: sans;">Paid By:</span><br /><br />NAME : '.htmlspecialchars($fname).'<br />PROPERTY: '.htmlspecialchars($property).'<br />UNIT  :'.htmlspecialchars($unit).'<br />DATE : '.htmlspecialchars($invoice_date).'</td>
<td width="10%">&nbsp;</td>
<td width="45%" style="border: 0.1mm solid #888888;"><span style="font-size: 7pt; color: #555555; font-family: sans;">PAID TO:</span><br /><br />Crest Park Apartments<br />Address: Denis Pritt Rd, Kilimani<br />TEL :+254 701 903333 / +254 729 601111<br />Received By  :'.htmlspecialchars($responsible).'</td>
</tr></table>

<br />

<table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">
<thead>
<tr>
<td width="25%">Ref. No.</td>
<td width="25%">Payment For</td>
<td width="25%">Payment Mode</td>
<td width="25%">Amount</td>
</tr>
</thead>
<tbody>
<!-- ITEMS HERE -->
<tr>
<td align="center">'.htmlspecialchars($result).'</td>
<td align="center">'.htmlspecialchars($period).'</td>
<td>'.htmlspecialchars($mode).'</td>
<td class="cost">'.htmlspecialchars($amount).'</td>
</tr>

<tr>
<td class="blanktotal" colspan="2" rowspan="6"></td>
<td class="totals">Subtotal:</td>
<td class="totals cost">KSH '.htmlspecialchars($amount).'</td>
</tr>
<tr>
<td class="totals"><b>Total:</b></td>
<td class="totals cost"><b>KSH '.htmlspecialchars($amount).'</b></td>
</tr>
</tbody>
</table>


<div style="text-align: center; font-style: italic;">RESPECTFUL . FRIENDLY . HARMONIOUS</div>


</body>
</html>
';
//==============================================================
//==============================================================
//==============================================================
//==============================================================
//==============================================================
//==============================================================

define('_MPDF_PATH','');
include("../mpdf60/mpdf.php");

$mpdf=new mPDF('c','A4','','',20,15,48,25,10,10); 
$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("Acme Trading Co. - Invoice");
$mpdf->SetAuthor("Acme Trading Co.");
$mpdf->SetWatermarkText("Paid");
$mpdf->showWatermarkText = true;
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->watermarkTextAlpha = 0.1;
$mpdf->SetDisplayMode('fullpage');



$mpdf->WriteHTML($html);


$mpdf->Output('../receipts/'.$result.'.pdf', 'f');

exit;



}
?>