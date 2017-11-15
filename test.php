<?php
include_once("includes/config.php");
function getpropertyid() {

	// Connect to the database
	

	// output any connection error
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	$query = "SELECT payment_id FROM rent_payments ORDER BY `payment_id` DESC LIMIT 1";
$results = $mysqli->query($query);

	// mysqli select query
	if(!$results) {

		$row_cnt = $results->num_rows;

	    $row = mysqli_fetch_assoc($results);

	    //var_dump($row);

	    if($row_cnt == 0){
			echo '101';
		} else {
			echo $row['payment_id'] + 1; 
		}

	    // Frees the memory associated with a result
		$results->free();

		// close connection 
		$mysqli->close();
	}
	
}
	?>