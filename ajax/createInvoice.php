<?php 
include_once('../includes/config.php');

// show PHP errors


// output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$okMessage = 'Invoice Was Sussefully Created!!';
$errorMessage = 'There was an error while submitting the form. Please try again later';



	// invoice customer information
	// billing
	

	// invoice details
	$invoice_number = $_POST['invoice_id']; // invoice number
	//$custom_email = $_POST['custom_email']; // invoice custom email body
	$invoice_due_date = $_POST['invoice_due_date'];
	$invoice_date = $_POST['invoice_date']; // invoice date
	$property = $_POST['property'];
	$unit = $_POST['unit']; 
	$invoice_subtotal = $_POST['invoice_subtotal']; // invoice sub-total
	$invoice_shipping = $_POST['invoice_shipping']; // invoice shipping amount
	$invoice_discount = $_POST['invoice_discount']; // invoice discount
	$invoice_vat = $_POST['invoice_vat']; // invoice vat
	$invoice_total = $_POST['invoice_total']; // invoice total
	$invoice_notes = $_POST['invoice_notes']; // Invoice notes
	$username=$_POST['responsible'];

	// insert invoice into database
	$query = "INSERT INTO invoices (
					invoice,
					invoice_date, 
					invoice_due_date,
					property,
					id_unit,
					subtotal, 
					shipping, 
					discount, 
					vat, 
					total,
					notes,
					responsible
				) VALUES (
				  	'".$invoice_number."',
				  	'".$invoice_date."',
				  	'".$invoice_due_date."',
					'".$property."',
					'".$unit."',
				  	'".$invoice_subtotal."',
				  	'".$invoice_shipping."',
				  	'".$invoice_discount."',
				  	'".$invoice_vat."',
				  	'".$invoice_total."',
				  	'".$invoice_notes."',
					'".$username."'
			    );
			";
	// insert customer details into database
	

	// invoice product items
	foreach($_POST['invoice_product'] as $key => $value) {
	    $item_product = $value;
		$invoice_number = $_POST['invoice_id'] [$key];
	    // $item_description = $_POST['invoice_product_desc'][$key];
	    $item_qty = $_POST['invoice_product_qty'][$key];
	    $item_price = $_POST['invoice_product_price'][$key];
	    $item_discount = $_POST['invoice_product_discount'][$key];
	    $item_subtotal = $_POST['invoice_product_sub'][$key];

	    // insert invoice items into database
		$query .= "INSERT INTO invoice_items (
				invoice,
				product,
				qty,
				price,
				discount,
				subtotal
			) VALUES (
				'".$invoice_number."',
				'".$item_product."',
				'".$item_qty."',
				'".$item_price."',
				'".$item_discount."',
				'".$item_subtotal."'
			);
		";

	}
	if(!$mysqli -> multi_query($query)){
		$encoded = json_encode($responseArray);

    //header('Content-Type: application/json');

    echo $encoded;
		$responseArray = array('type' => 'success', 'message' => $okMessage);
	}
	else{
    $query_fetchtenant = "SELECT tenant_id FROM tenants WHERE unit = '$unit'";
	if(!$mysqli -> multi_query($query_fetchtenant)){
		 $responseArray = array('type' => 'danger', 'message' => $errorMessage);
	}
	}	 
	if ($result = $mysqli->query($query_fetchtenant)) {

		
	    $row = mysqli_fetch_assoc($result);
       $tenant_id =$row["tenant_id"];
	    //var_dump($row);

	    
		echo $tenant_id; 
		

	    // Frees the memory associated with a result
	
	} else{
		echo $errorMessage;
	}
	
		$date=date("Y-m-d H:i:s");
		$account = "INSERT INTO accounts(credit,date,transaction_id,tenant_id,property_id,responsible)VALUES('$invoice_total','$date','$invoice_number','$tenant_id','$property','$username')";
		$result_account = mysqli_query($mysqli, $account);
		if (!$result_account) {
         $responseArray = array('type' => 'danger', 'message' => $errorMessage);
			}
	
/**
	if($mysqli -> multi_query($query)){
		
	
		//if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message' => 'Invoice has been created successfully!'
		));

		//Set default date timezone
		date_default_timezone_set(TIMEZONE);
		//Include Invoicr class
		include('invoice.php');
		//Create a new instance
		$invoice = new invoicr("A4",CURRENCY,"en");
		//Set number formatting
		$invoice->setNumberFormat('.',',');
		//Set your logo
		$invoice->setLogo(COMPANY_LOGO,COMPANY_LOGO_WIDTH,COMPANY_LOGO_HEIGHT);
		//Set theme color
		$invoice->setColor(INVOICE_THEME);
		//Set type
		$invoice->setType($invoice_type);
		//Set reference
		$invoice->setReference($invoice_number);
		//Set date
		$invoice->setDate($invoice_date);
		//Set due date
		$invoice->setDue($invoice_due_date);
		//Set from
		$invoice->setFrom(array(COMPANY_NAME,COMPANY_ADDRESS_1,COMPANY_ADDRESS_2,COMPANY_COUNTY,COMPANY_POSTCODE,COMPANY_NUMBER,COMPANY_VAT));
		//Set to
		$invoice->setTo(array($customer_name,$customer_address_1,$customer_address_2,$customer_town,$customer_county,$customer_postcode,"Phone: ".$customer_phone));
		//Ship to
		$invoice->shipTo(array($customer_name_ship,$customer_address_1_ship,$customer_address_2_ship,$customer_town_ship,$customer_county_ship,$customer_postcode_ship,''));
		//Add items
		// invoice product items
		foreach($_POST['invoice_product'] as $key => $value) {
		    $item_product = $value;
		    // $item_description = $_POST['invoice_product_desc'][$key];
		    $item_qty = $_POST['invoice_product_qty'][$key];
		    $item_price = $_POST['invoice_product_price'][$key];
		    $item_discount = $_POST['invoice_product_discount'][$key];
		    $item_subtotal = $_POST['invoice_product_sub'][$key];

		   	if(ENABLE_VAT == true) {
		   		$item_vat = (VAT_RATE / 100) * $item_subtotal;
		   	}

		    $invoice->addItem($item_product,'',$item_qty,$item_vat,$item_price,$item_discount,$item_subtotal);
		}
		//Add totals
		$invoice->addTotal("Total",$invoice_subtotal);
		if(!empty($invoice_discount)) {
			$invoice->addTotal("Discount",$invoice_discount);
		}
		if(!empty($invoice_shipping)) {
			$invoice->addTotal("Delivery",$invoice_shipping);
		}
		if(ENABLE_VAT == true) {
			$invoice->addTotal("TAX/VAT ".VAT_RATE."%",$invoice_vat);
		}
		$invoice->addTotal("Total Due",$invoice_total,true);
		//Add Badge
		$invoice->addBadge($invoice_status);
		// Customer notes:
		if(!empty($invoice_notes)) {
			$invoice->addTitle("Cusatomer Notes");
			$invoice->addParagraph($invoice_notes);
		}
		//Add Title
		$invoice->addTitle("Payment information");
		//Add Paragraph
		$invoice->addParagraph(PAYMENT_DETAILS);
		//Set footer note
		$invoice->setFooternote(FOOTER_NOTE);
		//Render the PDF
		$invoice->render('invoices/'.$invoice_number.'.pdf','F');
	} else {
		// if unable to create invoice
		echo json_encode(array(
			'status' => 'Error',
			//'message' => 'There has been an error, please try again.'
			// debug
			'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>'
		));
	}

	//close database connection
	$mysqli->close();

 **/

?>