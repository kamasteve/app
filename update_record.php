<?php
  // establish connection to database and select DB
  $link = mysqli_connect("localhost", "root", "", "hill_rental");

  // get record
  $id_ = $_REQUEST['id_'];
  $mode = $_REQUEST['mode'];
  $amount = $_REQUEST['amount'];
  $tenant_id = $_REQUEST['tenant_id'];
  $payment_ref = $_REQUEST['payment_ref'];
  $responsible = $_REQUEST['responsible'];
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
	$query.= "INSERT INTO accounts (
					debit,
					date, 
					invoice_id,
					tenant_id,
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
  $result = mysqli_query($link,$query) or die('Server error = '.mysqli_error($link));

  // check if successful
  if($result){	
				echo 1;
  }else{
    // return failed
    echo 0;
  }

  // close DB
  mysqli_close($link);
?>