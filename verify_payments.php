
<?php 
include_once('database_connection.php');

// show PHP errors


// output any connection error
if ($con->connect_error) {
    die('Error : ('. $con->connect_errno .') '. $con->connect_error);
	
}
//$startdate= '2017/05/08';
//$enddate = '2017/06/28';
$invoice= $_REQUEST['invoice'];
$house_number= $_REQUEST['unit'];
//$date = new DateTime($startdate);
//$date2 = new DateTime($enddate);
//$date->format(\DateTime::ISO8601); // 31.07.2012
//$date2->format(\DateTime::ISO8601); // 31-07-2012
//WHERE date between '$startdate' and '$enddate' order by date desc


$result = mysqli_query($con,"SELECT * FROM invoices WHERE( id_unit='$house_number' or invoice='$invoice') AND status='open' order by invoice desc ");

print '<input type="button" id="btnExport" value=" Export Table data into Excel " />';
print '<table id="example" class="display table table-striped" cellspacing="0" width="100%">
 <thead>
 <tr>
<th>Invoice</th>
<th>Period</th>
<th>Invoice Date</th>
<th>Total</th>
<th>Property</th>
<th>Action</th>
</tr>
 </thead> <tbody>';
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['invoice'] . "</td>";
    echo "<td>" . $row['Period'] . "</td>";
    echo "<td>" . $row['invoice_date'] . "</td>";
    echo "<td>" . $row['total'] . "</td>";
    echo "<td>" . $row['property'] . "</td>";
	echo '<td> <a class="xyz btn " data-toggle="modal" data-target="#myModal" data-my-id="'.$row["invoice"].'">
													<i class="glyphicon glyphicon-euro icon-white"></i>
													Pay
											</a></td>';
    echo "</tr>";
}
echo "</tbody></table>";
mysqli_close($con);

?>