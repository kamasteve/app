
<?php
/*******************************************************************************
* Simplified PHP Invoice System                                                *
*                                                                              *
* Version: 1.1.1	                                                               *
* Author:  James Brandon                                    				   *
*******************************************************************************/

include_once("includes/config.php");

// get invoice list
function getInvoices() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
    $query = "SELECT  invoice_date,invoice,status,responsible,invoice_due_date,unit,subtotal,total, name,fname,lname FROM invoices AS T1 LEFT JOIN properties AS T2 on T1.property=T2.property_id LEFT JOIN tenants AS T3 ON T1.id_unit=T3.unit";

	// mysqli select query
	$results = $mysqli->query($query);

	// mysqli select query
	if($results) {

		print '<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
				<td>Invoice</td>
				<td>Customer</td>
				<td>property Date</td>
				<td>Unit</td>
				<td>Print</td>
				<td>SMS</td>
				<td>Delete</td>

			  </thead><tbody>';

		while($row = $results->fetch_assoc()) {

			print '
				<tr>
					<td>'.$row["invoice"].'</td>
					<td>'. $row['fname'].'&nbsp'.$row['lname'] .' </td>
				    <td>'.$row["name"].'</td>
				    <td>'.$row["unit"].'</td>
				    <td>'.$row["name"].'</td>
					<td>'.$row["fname"].'</td>
				';

				if($row['status'] == "open"){
					print '<td><span class="label label-info">'.$row['status'].'</span></td>';
				} elseif ($row['status'] == "closed"){
					print '<td><span class="label label-success">'.$row['status'].'</span></td>';
				}

			//print '
				  // <td><a href="invoice-edit.php?id='.$row["invoice"].'" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="'.$row['invoice'].'" data-email="'.$row['email'].'" data-invoice-type="'.$row['invoice_type'].'" data-custom-email="'.$row['custom_email'].'" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="/invoices/'.$row["invoice"].'.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="'.$row['invoice'].'" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    
			//';

		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no invoices to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();

}

// Initial invoice number
function getInvoiceId() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	$query = "SELECT invoice FROM invoices ORDER BY invoice DESC LIMIT 1";

	if ($result = $mysqli->query($query)) {

		$row_cnt = $result->num_rows;

	    $row = mysqli_fetch_assoc($result);

	    //var_dump($row);

	    if($row_cnt == 0){
			echo INVOICE_INITIAL_VALUE;
		} else {
			echo $row['invoice'] + 1; 
		}

	    // Frees the memory associated with a result
		$result->free();

		// close connection 
		$mysqli->close();
	}
	
}

// populate product dropdown for invoice creation
function popProductsList() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM products ORDER BY product_name ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {
		echo '<select class="form-control item-select">';
		while($row = $results->fetch_assoc()) {

		    print '<option value="'.$row['product_price'].'">'.$row["product_name"].' - '.$row["product_desc"].'</option>';
		}
		echo '</select>';

	} else {

		echo "<p>There are no products, please add a product.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();

}

// populate product dropdown for invoice creation
function popCustomersList() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM  tenants ORDER BY name ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-bordered" id="data-table"><thead><tr>

				<th><h4>Name</h4></th>
				<th><h4>Email</h4></th>
				<th><h4>Phone</h4></th>
				<th><h4>Action</h4></th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
					<td>'.$row["name"].'</td>
				    <td>'.$row["email"].'</td>
				    <td>'.$row["phone"].'</td>
				    <td><a href="#" class="btn btn-primary btn-xs customer-select" data-customer-name="'.$row['name'].'" data-customer-email="'.$row['email'].'" data-customer-phone="'.$row['phone'].'" data-customer-address-1="'.$row['address_1'].'" data-customer-address_2="'.$row['address_2'].'" data-customer-town="'.$row['town'].'" data-customer-county="'.$row['county'].'" data-customer-postcode="'.$row['postcode'].'" data-customer-name-ship="'.$row['name_ship'].'" data-customer-address-1-ship="'.$row['address_1_ship'].'" data-customer-address-2-ship="'.$row['address_2_ship'].'" data-customer-town-ship="'.$row['town_ship'].'" data-customer-county-ship="'.$row['county_ship'].'" data-customer-postcode-ship="'.$row['postcode_ship'].'">Select</a></td>
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no customers to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();

}

// get products list
function getProducts() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM products ORDER BY product_name ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-bordered" id="data-table"><thead><tr>

				<th><h4>Product</h4></th>
				<th><h4>Description</h4></th>
				<th><h4>Price</h4></th>
				<th><h4>Action</h4></th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
					<td>'.$row["product_name"].'</td>
				    <td>'.$row["product_desc"].'</td>
				    <td>'.$row["product_price"].'</td>
				    <td><a href="product-edit.php?id='.$row["product_id"].'" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a data-product-id="'.$row['product_id'].'" class="btn btn-danger btn-xs delete-product"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no products to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}

// get user list
function getUsers() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM users ORDER BY username ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-bordered" id="data-table"><thead><tr>

				<th><h4>Name</h4></th>
				<th><h4>Username</h4></th>
				<th><h4>Email</h4></th>
				<th><h4>Phone</h4></th>
				<th><h4>Action</h4></th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
					<td>'.$row["username"].'</td>
				    <td>'.$row["email"].'</td>
				    <td>'.$row["phone"].'</td>
				    <td><a href="user-edit.php?id='.$row["id"].'" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a data-user-id="'.$row['id'].'" class="btn btn-danger btn-xs delete-user"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no users to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}

// get user list
function getCustomers() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM store_customers ORDER BY name ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table id="example" class="display"><thead><tr>

				<th><h4>Name</h4></th>
				<th><h4>Email</h4></th>
				<th><h4>Phone</h4></th>
				<th><h4>Action</h4></th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
					<td>'.$row["name"].'</td>
				    <td>'.$row["email"].'</td>
				    <td>'.$row["phone"].'</td>
				    <td><a href="customer-edit.php?id='.$row["id"].'" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a data-customer-id="'.$row['id'].'" class="btn btn-danger btn-xs delete-customer"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no customers to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}

?>

