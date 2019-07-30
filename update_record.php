<?php
  // establish connection to database and select DB
  include_once("includes/config.php");
  define('COMPANY_LOGO1', 'images/logo.png');
  // get record
  $id_ = $_REQUEST['id_'];
  $mode = $_REQUEST['mode'];
  $amount = $_REQUEST['amount'];
  $tenant_id = $_REQUEST['tenant_id'];
  $payment_ref = $_REQUEST['payment_ref'];
  $responsible = $_REQUEST['responsible'];
  $period = $_REQUEST['period'];
  //$property_name = $_REQUEST['name'];
  $total = $_REQUEST['total'];
  $type = 'Invoice Payment';
  $id_unit = $_REQUEST['id_unit'];
   $date = date("Y-m-d");
  
  // prepare query
  
  function getpropertyid() {

	// Connect to the database
	

	// output any connection error
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	$query = "SELECT payment_id FROM rent_payments ORDER BY `payment_id` DESC LIMIT 1";
$results = $mysqli->query($query);

	// mysqli select query
	if($results) {

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
		//$mysqli->close();
	}
	
}
$receipt_id=getpropertyid();
echo $receipt_id;
$uniqueId= time().'-'.mt_rand();
$query_fetchtenant = "SELECT tenant_id, fname,property, lname, CONCAT(fname,' ',lname)AS names,email,phone,property,adress FROM tenants WHERE tenant_id=$tenant_id";
	//$date=date("Y-m-d H:i:s");
if($result_fetch=mysqli_query($mysqli,$query_fetchtenant)){
  
	   $row = mysqli_fetch_assoc($result_fetch);
       $tenant_id = $row["tenant_id"];
	   $tenant_names= $row["names"];
	   $email =$row["email"];
	   $phone=$row["phone"];
	   $adress=$row["adress"];
	   $property=$row["property"];
	   $fname=$row["fname"];
	   $lname=$row["lname"];
	   $property=$row["property"];
	   
}
$query = "INSERT INTO rent_payments (type,last_name,first_name,payment_mode, serial,ammount,date,particulars,tenant_id,property,rental_period,house_number) VALUES ('$type','$lname','$fname','$mode','$id_','$amount','$date','$uniqueId','$tenant_id','$property','$period','$id_unit')";
$query1 = "INSERT INTO accounts (debit,date,invoice_id,customercode,responsible) VALUES ('$amount','$date','$id_','$tenant_id','$responsible')";
  // execute query
  $result_rent_payments = mysqli_query($mysqli,$query) or die('Server error = '.mysqli_error($mysqli));
  $result2 = mysqli_query($mysqli,$query1) or die('Server error = '.mysqli_error($mysqli));
  if ($amount >= $total){
	  $update = "UPDATE invoices SET status='closed' WHERE invoice='$id_'";
	  $result3 = mysqli_query($mysqli,$update) or die('Server error = '.mysqli_error($mysqli));
  }


  // check if successful
  if($query){	
  //include('receipt.php');
		//Set default date timezone
		date_default_timezone_set(TIMEZONE);
		//Include Invoicr class
		include('receipt.php');
		//Create a new instance
		$invoice = new invoicr("A4",CURRENCY,"en");
		//Set number formatting
		$invoice->setNumberFormat('.',',');
		//Set your logo
		$invoice->setLogo(COMPANY_LOGO1,COMPANY_LOGO_WIDTH,COMPANY_LOGO_HEIGHT);
		//Set theme color
		$invoice->setColor(INVOICE_THEME);
		//Set type
		$invoice->setType($tenant_id);
		//Set reference
		$invoice->setReference($uniqueId);
		//Set date
		$invoice->setDate($date);
		//Set due date
		$invoice->setDue($date);
		//Set from
		//$invoice->setFrom(array(COMPANY_NAME,COMPANY_ADDRESS_1,COMPANY_ADDRESS_2,COMPANY_COUNTY,COMPANY_POSTCODE,COMPANY_NUMBER,COMPANY_VAT));
		//Set to
		//$invoice->setTo(array($tenant_names,$email,$adress,$property,"Phone: ".$phone));
		//Ship to
		//$invoice->shipTo(array($tenant_names,$email,$adress,$property,$phone,$property,''));
		//Add items
		// invoice product items
		
		    $item_product = $type;
		    // $item_description = $_POST['invoice_product_desc'][$key];
		    $item_qty = '1';
		    $item_price = $amount;
		    $item_discount = '1';
		    $item_subtotal = $amount;
			$invoice_vat='1';

		   	if(ENABLE_VAT == true) {
		   		$item_vat = (VAT_RATE / 100) * $item_subtotal;
		   	}

		    $invoice->addItem($item_product,'',$item_qty,$item_vat,$item_price,$item_discount,$item_subtotal);
		
		//Add totals
		$invoice->addTotal("Total",$item_subtotal);
		if(!empty($invoice_discount)) {
			$invoice->addTotal("Discount",$invoice_discount);
		}
		if(!empty($invoice_shipping)) {
			$invoice->addTotal("Delivery",$invoice_shipping);
		}
		if(ENABLE_VAT == true) {
			$invoice->addTotal("TAX/VAT ".VAT_RATE."%",$invoice_vat);
		}
		$invoice->addTotal("Total Amount Paid",$item_subtotal,true);
		//Add Badge
		//$invoice->addBadge($invoice_status);
		// Customer notes:
		if(!empty($invoice_notes)) {
			$invoice->addTitle("Cusatomer Notes");
			$invoice->addParagraph($invoice_notes);
		
		//Add Title
		$invoice->addTitle("Payment information");
		//Add Paragraph
		$invoice->addParagraph(PAYMENT_DETAILS);
		//Set footer note
		$invoice->setFooternote(FOOTER_NOTE);
		//Render the PDF
	
	} else {
		// if unable to create invoice
		print 'there has been an error in creating the invoice';
		//print $email;
	}
	$invoice->render('receipts/'.$uniqueId.'.pdf','F');

		//$invoice->render('invoices/'.$invoice_number.'.pdf','F');
	 		
  }else{
    // return failed
    echo 0;
  }

  // close DB
  mysqli_close($mysqli);
?>
