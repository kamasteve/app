<?php
  // establish connection to database and select DB
  

  // get record
  $id_ = $_REQUEST['id_'];
  $mode = $_REQUEST['mode'];
  $amount = $_REQUEST['amount'];
  $payment_ref = $_REQUEST['payment_ref'];
  $responsible = $_REQUEST['responsible'];
  $property = $_REQUEST['property'];
  $type = 'Expense Payment';
  $date = date("Y-m-d");
  $paymentid = "EXP".$id_;
  // prepare query
  
  
 
	$query = "INSERT INTO accounts (
					credit,
					date, 
					invoice_id,
					customercode,
					property_id,
					responsible
				) VALUES (
				  	'".$amount."',
				  	'".$date."',
				  	'".$paymentid."',
					'".$responsible."',
					'".$property."',
					'".$responsible."'
			    );
			";
  // execute query
  $result = mysqli_query($mysqli,$query) or die('Server error = '.mysqli_error($mysqli));
  if ($amount >= 0){
	  $update = "UPDATE expenses SET status='1' WHERE id='$id_'";
	  $result = mysqli_query($mysqli,$update) or die('Server error = '.mysqli_error($mysqli));
  }

  // check if successful
  if($result ){	
				
  }else{
    // return failed
    echo 0;
  }

  // close DB
  mysqli_close($mysqli);
?>
