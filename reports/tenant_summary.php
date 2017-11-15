
<?php 
include_once('../database_connection.php');

// show PHP errors


// output any connection error
if ($con->connect_error) {
    die('Error : ('. $con->connect_errno .') '. $con->connect_error);
	
}
//$startdate= '2017/05/08';
//$enddate = '2017/06/28';
$tenant_id= $_REQUEST['unit'];
//$enddate= $_REQUEST['end_date'];
//$date = new DateTime($startdate);
//$date2 = new DateTime($enddate);
//$date->format(\DateTime::ISO8601); // 31.07.2012
//$date2->format(\DateTime::ISO8601); // 31-07-2012
//WHERE date between '$startdate' and '$enddate' order by date desc


$result = mysqli_query($con,"SELECT ammount as debit,0 as credit , serial as Invoice_number,date FROM `rent_payments` WHERE tenant_id=$tenant_id
UNION
SELECT 0 as debit, total*(-1) as credit, invoice as invoice_id , invoice_date as date FROM `invoices` WHERE tenant_id =$tenant_id
order by date desc ");


print '<table id="statement" class="display " cellspacing="0" width="100%">
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
    echo "<td id='col1'>" . $row['Invoice_number'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "<td>" . $row['credit'] . "</td>";
    echo "<td>" . $row['debit'] . "</td>";
    echo "</tr>";
}
echo "<tr id='row1'>";
echo '<td align="center" valign="middle" style="font-weight:bold; border-bottom: 2px solid #68B12F"" colspan="2">Total</th>';
echo '<td style="font-weight:bold; border-bottom: 2px solid #68B12F">6990</th>';
echo '<td style="font-weight:bold; border-bottom: 2px solid #68B12F">7899</th>';
echo "</tr>";
echo "<tr>";
echo '<td align="center" valign="middle" style="font-weight:bold" colspan="2">Balance</th>';
echo '<td colspan="2" align="center"  style="font-weight:bold" >7899</th>';
echo "</tr>";
echo "</tbody></table>";
mysqli_close($con);

?>