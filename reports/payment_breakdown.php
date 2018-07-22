
<?php 
include_once('../database_connection.php');

// show PHP errors


// output any connection error
if ($con->connect_error) {
    die('Error : ('. $con->connect_errno .') '. $con->connect_error);
	
}
//$startdate= '2017/05/08';
//$enddate = '2017/06/28';
$startdate= $_REQUEST['start_date'];
$enddate= $_REQUEST['end_date'];
//$date = new DateTime($startdate);
//$date2 = new DateTime($enddate);
//$date->format(\DateTime::ISO8601); // 31.07.2012
//$date2->format(\DateTime::ISO8601); // 31-07-2012
//WHERE date between '$startdate' and '$enddate' order by date desc


$result = mysqli_query($con,"SELECT sum(ammount) AS Total,'cash' AS Mode,CURDATE() AS Date, count(payment_id) AS Number FROM rent_payments WHERE payment_mode='cash'
UNION
SELECT sum(ammount) AS Total,'Cheque' AS Mode,CURDATE() AS Date,count(payment_id) AS Number FROM rent_payments WHERE payment_mode='cheque'
UNION
SELECT sum(ammount) AS Total,'Bank Deposit' AS Mode, CURDATE() AS Date,count(payment_id) AS Number FROM rent_payments WHERE payment_mode='Bank Deposit'
UNION
SELECT sum(ammount) AS Total,'Mpesa' AS Mode, CURDATE() as Date,count(payment_id) AS Number FROM rent_payments WHERE payment_mode='mpesa'");
//$result = mysqli_query($con,"SELECT * FROM rent_payments WHERE date between '" . $startdate . "' and '" . $enddate . "' order by date desc ");

print '<input type="button" id="btnExport" value=" Export Table data into Excel " />';
print '<table id="example" class="display table table-striped" cellspacing="0" width="100%">
 <thead>
 <tr>
<th>Payment Mode</th>
<th>Date</th>
<th>Number of Payments</th>
<th>Total Payments</th>
</tr>
 </thead> <tbody>';
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Mode'] . "</td>";
    echo "<td>" . $row['Date'] . "</td>";
    echo "<td>" . $row['Number'] . "</td>";
	echo "<td>" . $row['Total'] . "</td>";
    echo "</tr>";
}
echo "</tbody></table>";
mysqli_close($con);

?>