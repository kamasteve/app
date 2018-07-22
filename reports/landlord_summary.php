
<?php 
include_once('../database_connection.php');

// show PHP errors


// output any connection error
if ($con->connect_error) {
    die('Error : ('. $con->connect_errno .') '. $con->connect_error);
	
}
//$startdate= '2017/05/08';
//$enddate = '2017/06/28';
$property= $_REQUEST['property1'];
$period= $_REQUEST['period'];
//$date = new DateTime($startdate);
//$date2 = new DateTime($enddate);
//$date->format(\DateTime::ISO8601); // 31.07.2012
//$date2->format(\DateTime::ISO8601); // 31-07-2012
//WHERE date between '$startdate' and '$enddate' order by date desc


$result = mysqli_query($con,"SELECT * FROM rent_payments WHERE property='" . $property . "' and rental_period='" . $period . "' order by date desc ");
$result2 = mysqli_query($con, "SELECT COUNT(unit_id) AS total,
   (SELECT COUNT(unit_id) FROM `rental_units` WHERE status = 1 and property_id = '103') as occupied,(SELECT COUNT(unit_id) FROM `rental_units` WHERE status = 0 and property_id = '103') as vacant , (SELECT sum(rent) FROM `rental_units` WHERE status = 0 and property_id = '103') as expected_pay
   from `rental_units` where property_id = '103'");
while($row = mysqli_fetch_array($result2)) {
  //echo $result1['personnel_name'];
  //$pdfname=$result2['orders_id'];
   
  print ' 
  <style>
render td, .render th {
    padding: 5px;
}
table {
    border-collapse: separate;
    border-spacing: 0 1em;
}
.render table, .render td, .render th {
    
}
table th, table td {
    font-family: inherit;
    font-size: inherit;
    padding: 2px;
    vertical-align: middle;
	    border: 1px solid #ccc;
}
 tr { line-height: 5px; 
 border-spacing: 5px;
 }
th, td {
    border-bottom: 1px solid rgba(0,0,0,0.05);
    padding: .4375em .875em;
}
td, th {
    padding: 0;
	height:15px;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.render table {
    border-collapse: collapse;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}
.post-single {
    font-size: 14px;
    line-height: 1.75em;
}
.wrapper {
    text-align: left;
}
.row1{
margin-bottom:15px;
}
#container {
    font-size: 12px;
    line-height: 1.4em;
    text-align: center;
}
body {
   
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
}
</style>
  <table width="100%" ><tr>
<td width="50%" style="color:#0000BB; "> <img style="vertical-align: top" src="images/logo.png" width="50%" /></td>
<td width="50%" style="text-align: right;"><h1>Order No.</h1><br /><span style="font-weight: bold; font-size: 12pt;">test</span></td>
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
<div style="text-align: right">Date: '. date('Y/m/d').'</div>

<br />
<table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">
<thead>
</thead>
<div>TELKOM STAFF OFFER ORDERING FORM</div>

 <tr class="row1">
  <th rowspan="3">Staff details</th>
  <td>Name</td>
 <td style="width:40%">'.$row['occupied'].'</td>
 </tr>
 <tr>
  <td>PF number</td>
  <td>'.$row['occupied'].'</td>
 </tr>
 <tr>
  <td>Department/Region</td>
  <td>'.$row['expected_pay'].'</td> 
 </tr>

 <tr>
  <th rowspan="5">Order details </th>
  <td>Device description </td>
  <td>'.$row['total'].'</td>
 </tr>
 <tr>
  <td>Device cost</td>
  <td style="width:130px">'.$row['vacant'].'</td>
 </tr>
 <tr>
  <td>Order number</td>
  <td>'.$row['expected_pay'].'</td>
 </tr>
  <tr>
  <td>Payment mode</td>
  <td>'.$row['expected_pay'].'</td>
 </tr>';
	}
print '<table id="example" class="display table table-striped" cellspacing="0" width="100%">
 <thead>
 <tr>
<th>Payment Id</th>
<th>Payment Mode</th>
<th>First Name</th>
<th>Last Name</th>
<th>Payment Date</th>
<th>Amount</th>

</tr>
 </thead> <tbody>';
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['payment_id'] . "</td>";
    echo "<td>" . $row['payment_mode'] . "</td>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
	echo "<td>" . $row['ammount'] . "</td>";
    echo "</tr>";
}
echo "</tbody></table>";
mysqli_close($con);

?>