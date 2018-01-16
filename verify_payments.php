
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
  
  
  $query ="SELECT * FROM invoice_items WHERE invoice='$invoice' order by invoice desc";

  // execute query
  $result = mysqli_query($con,$query) or die('Server error = '.mysqli_error($con));

  // get number of rows
  $rows = mysqli_num_rows($result);

  // check if there are rows
  if($rows>0){
    // return Json
    echo makeJsonResponse($result);
  }

  // close DB
  mysqli_close($con);

  // generates json response
  function makeJsonResponse($my_result){
  		// initialize array
  		$arr=[];

	    /* fetch associative array */
	    while ($row = $my_result->fetch_assoc()) {
	  			// push row to array
    			array_push($arr,$row);
		  }

  		// return result
  		return json_encode($arr);
	}
  
  


//print '<input type="button" id="btnExport" value=" Export Table data into Excel " />';
/**
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
**/
//mysqli_close($con);

?>