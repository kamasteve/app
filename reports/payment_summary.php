
<?php 
include_once('../database_connection.php');

// show PHP errors


// output any connection error
if ($con->connect_error) {
    die('Error : ('. $con->connect_errno .') '. $con->connect_error);
	
}

$startdate=2017-05-01;
$enddate=2017-05-31;
//WHERE date between '$startdate' and '$enddate' order by date desc

$result = mysqli_query($con,"SELECT * FROM rent_payments ");


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
    echo "</tr></tbody>";
}
echo "</table>";
mysqli_close($con);

?>