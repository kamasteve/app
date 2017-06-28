
<?php 
include_once('../database_connection.php');

// show PHP errors


// output any connection error
if ($con->connect_error) {
    die('Error : ('. $con->connect_errno .') '. $con->connect_error);
	
}
$startdate= '2017-05-08';
$enddate = '2017-06-28';
//$startdate= $_REQUEST['start_date'];2017-05-08
//$enddate= $_REQUEST['end_date'];
//$date = new DateTime($startdate);
//$date2 = new DateTime($enddate);
//$date->format(\DateTime::ISO8601); // 31.07.2012
//$date2->format(\DateTime::ISO8601); // 31-07-2012
//WHERE date between '$startdate' and '$enddate' order by date desc


$result = mysqli_query($con,"SELECT * FROM rent_payments WHERE date between '2017-05-08' and '2017-06-28' order by date desc ");

print '<input type="button" id="btnExport" value=" Export Table data into Excel " />';
print '<table id="example" class="display table table-striped" cellspacing="0" width="100%">
 <thead>
 <tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>
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