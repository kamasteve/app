
<?php 
include_once('../database_connection.php');

// show PHP errors


// output any connection error
if ($con->connect_error) {
    die('Error : ('. $con->connect_errno .') '. $con->connect_error);
	
}

$startdate= $_REQUEST['start_date'];
$enddate= $_REQUEST['end_date'];
$date = new DateTime($startdate);
$date2 = new DateTime($enddate);
$date->format('Y-m-d'); // 31.07.2012
$date2->format('Y-m-d'); // 31-07-2012
//WHERE date between '$startdate' and '$enddate' order by date desc


$result = mysqli_query($con,"SELECT * FROM rent_payments WHERE date between $date and $date2 order by date desc ");


print '<table id="example" class="display" cellspacing="0" width="100%">
 <thead>
<td>Firstname</td>
<td>Lastname</td>
<td>Age</td>
<td>Hometown</td>
<td>Job</td>
 </thead> <tbody>';
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['payment_id'] . "</td>";
    echo "<td>" . $row['payment_mode'] . "</td>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "</tr>";
}
echo "</tbody></table>";
mysqli_close($con);

?>