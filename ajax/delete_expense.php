<?php
  // establish connection to database and select DB
  $link = mysqli_connect("localhost", "root", "", "hill_rental");

  // get record
  $id_ = $_REQUEST['id_'];
  //$responsible = $_REQUEST['responsible'];
   $date = date("Y-m-d");
  // prepare query
  //$query ="INSERT INTO invoice_logs (SELECT * FROM invoices WHERE invoice=$id_)";
  
  
	  //$result = mysqli_query($link,$query) or die('Server error = '.mysqli_error($link));

  // execute query
  

  // check if successful
  
		$logging = "DELETE FROM expenses WHERE id=$id_";	
 $result_log = mysqli_query($link,$logging) or die('Server error = '.mysqli_error($link));
		
  
  // close DB
  mysqli_close($link);
?>
