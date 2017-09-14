
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
//$enddate= $_REQUEST['end_date'];
//$date = new DateTime($startdate);
//$date2 = new DateTime($enddate);
//$date->format(\DateTime::ISO8601); // 31.07.2012
//$date2->format(\DateTime::ISO8601); // 31-07-2012
//WHERE date between '$startdate' and '$enddate' order by date desc


$result = mysqli_query($con,"SELECT * FROM `invoices` WHERE `invoice_due_date` <= curdate()");


print '<table id="example" class="display table table-striped" cellspacing="0" width="100%">
 <thead>
 <tr>
<th>Property Name</th>
<th>Invoice Id</th>
<th>Invoice Date</th>
<th>Amount Due</th>
<th>Date</th>
<th>Tenant Name</th>
<th>Unit Id</th>

</tr>
 </thead> <tbody>';
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['property'] . "</td>";
    echo "<td>" . $row['invoice'] . "</td>";
    echo "<td>" . $row['invoice_due_date'] . "</td>";
    echo "<td>" . $row['total'] . "</td>";
    echo "<td>" . $row['invoice_date'] . "</td>"; 
	echo "<td>" . $row['tenant_name'] . "</td>";
	echo "<td>" . $row['id_unit'] . "</td>";
    echo "</tr>";
}
echo "</tbody></table>";
mysqli_close($con);

?>