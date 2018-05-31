<?php
  // establish connection to database and select DB
  $link = mysqli_connect("localhost", "root", "kamah4778", "hill_rental");

  // get record ID
  $id_ = $_REQUEST['id'];

  // prepare query
  $query ="SELECT invoice,invoice_date,T3.property,period,invoice_due_date,id_unit,T3.tenant_id,subtotal,shipping,discount,vat,total,notes,responsible,T1.status,Period name,fname,lname FROM invoices AS T1 LEFT JOIN properties AS T2 on T1.property=T2.property_id LEFT JOIN tenants AS T3 ON T1.id_unit=T3.unit WHERE T1.invoice='$id_'";

  // execute query
  $result = mysqli_query($link,$query) or die('Server error = '.mysqli_error($link));

  // get number of rows
  $rows = mysqli_num_rows($result);

  // check if there are rows
  if($rows>0){
    // return Json
    echo makeJsonResponse($result);
  }

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
