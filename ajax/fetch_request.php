<?php
  // establish connection to database and select DB
  include('../includes/config.php');

  // get record ID
  $id_ = $_REQUEST['id'];

  // prepare query
  $query ="SELECT  * FROM maintenance WHERE id ='$id_'";

  // execute query
  $result = mysqli_query($mysqli,$query) or die('Server error = '.mysqli_error($mysqli));

  // get number of rows
  $rows = mysqli_num_rows($result);

  // check if there are rows
  if($rows>0){
    // return Json
    echo makeJsonResponse($result);
  }

  // close DB
  mysqli_close($mysqli);

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
