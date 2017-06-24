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
while($row = mysqli_fetch_array($result)) {

print makeJsonResponse($result);
}
//if($rows>0){
    // return Json
    
  //

  // close DB
  mysqli_close($link);

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
?>