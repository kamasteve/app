<?php
  // establish connection to database and select DB
  include_once("includes/config.php");
  // get record
  $id_ = $_REQUEST['id_'];
  $mode = $_REQUEST['mode'];
  $amount = $_REQUEST['amount'];
  $tenant_id = $_REQUEST['tenant_id'];
  $payment_ref = $_REQUEST['payment_ref'];
  $responsible = $_REQUEST['responsible'];
  $total = $_REQUEST['total'];
  $type = 'Invoice Payment';
   $date = date("Y-m-d");
  // prepare query
  
  
  $query = "INSERT INTO rent_payments (
					type,
					payment_mode, 
					serial,
					ammount,
					date,
					particulars, 
					tenant_id
				) VALUES (
				  	'".$type."',
				  	'".$mode."',
				  	'".$id_."',
					'".$amount."',
					'".$date."',
				  	'".$payment_ref."',
				  	'".$tenant_id."'
			    );
			";
	$query = "INSERT INTO accounts (
					debit,
					date, 
					invoice_id,
					customercode,
					responsible
				) VALUES (
				  	'".$amount."',
				  	'".$date."',
				  	'".$id_."',
					'".$tenant_id."',
					'".$responsible."'
			    );
			";
  // execute query
  $result = mysqli_query($mysqli,$query) or die('Server error = '.mysqli_error($mysqli));
  if ($amount >= $total){
	  $update = "UPDATE invoices SET status='closed' WHERE invoice='$id_'";
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
