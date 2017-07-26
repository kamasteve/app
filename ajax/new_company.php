<?php 
include_once('../database_connection.php');

// show PHP errors


// output any connection error
if ($con->connect_error) {
    die('Error : ('. $con->connect_errno .') '. $con->connect_error);
	
}


//$query = $con->query("SELECT name FROM properties WHERE property_id = ".$_POST['property']."");

 $cname=$_REQUEST['cname'];
 $cadress=$_REQUEST['cadress'];
 $zip=$_REQUEST['zip'];
 $address2=$_REQUEST['address2'];
 $phone_number = $_REQUEST['phone_number'];
 $country=$_REQUEST['country'];
 $email=$_REQUEST['email'];
 $reg_no=$_REQUEST['reg_no'];
 $tax_info=$_REQUEST['tax_info'];
 $role=$_REQUEST['role'];
 
	$Query_add_company="INSERT into company_data(company_name,address_1,adress_2,phone,email,zip,country,reg_no,tax_info) VALUES ('$cname','$cadress','$address2','$phone_number','$email','$zip','$country','$reg_no','$tax_info')";		
//$query_add_expense ="INSERT into expenses (property,responsible,unit,payee,due_date,credit,details,date) VALUES('$pname','$responsible','$unit','$payee','$due_date','$amount','$details','$date')";
$result = mysqli_query($con, $Query_add_company);


if (!$result) {
                 echo("Error description: " . mysqli_error($con));
            }
			else if($result){
				echo 'Company added sucessfully';
				
			}
			
?>