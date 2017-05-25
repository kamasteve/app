<?php
  // establish connection to database and select DB
  include('../includes/config.php');

  // get record
  $id_ = $_REQUEST['id_'];
  //$responsible = $_REQUEST['responsible'];
   $date = date("Y-m-d");
  // prepare query
  $query ="INSERT INTO invoice_logs (SELECT * FROM invoices WHERE invoice=$id_)";
  
  
	  $result = mysqli_query($mysqli,$query) or die('Server error = '.mysqli_error($link));

  // execute query
  

  // check if successful
  if($result ){	
		$logging = "DELETE FROM credit WHERE invoice_id=$id_";	
 $result_log = mysqli_query($mysqli,$logging) or die('Server error = '.mysqli_error($link));
		
  }else{
    // return failed
    echo 0;
  }
$update1 = "UPDATE invoices SET status='deleted' WHERE invoice='$id_'";
$result_update = mysqli_query($mysqli,$update1) or die('Server error = '.mysqli_error($link));
  // close DB
  mysqli_close($mysqli);
?>
