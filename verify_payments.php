
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
$house_number=$_REQUEST['unit'];
//$date = new DateTime($startdate);
//$date2 = new DateTime($enddate);
//$date->format(\DateTime::ISO8601); // 31.07.2012
//$date2->format(\DateTime::ISO8601); // 31-07-2012
//WHERE date between '$startdate' and '$enddate' order by date desc


//$result = mysqli_query($con,"SELECT * FROM invoice_items WHERE invoice='$invoice' order by invoice desc");


  //$sql = "SELECT * FROM invoice_items WHERE invoice=1048 order by invoice desc";
  //$result = mysql_query($sql, $con) or die(mysql_error($con));
  //$query = $con->query("SELECT * FROM invoice_items WHERE invoice=1048 order by invoice desc");
  
  
  //$query ="SELECT * FROM invoice_items WHERE invoice='$invoice' order by invoice desc";
  
  $result = mysqli_query($con,"SELECT * FROM invoice_items WHERE invoice='$invoice' order by invoice desc");

  print '<table id="statement" class="table table-bordered " cellspacing="0" width="100%">
 <thead>
 <tr>
<th>Reference</th>
<th>Date</th>
<th>Credit</th>
<th>Debit</th>
</tr>
 </thead> <tbody>';
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td id='col1'>" . $row['invoice'] . "</td>";
    echo "<td>" . $row['product'] . "</td>";
    echo "<td>" . $row['qty'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "</tr>";
}
echo "</tbody></table>";
mysqli_close($con);
  
 

?>