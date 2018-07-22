<?php
include_once('../database_connection.php');
    $bank_name = $_REQUEST['bname'];
	$Identifier = $_REQUEST['Identifier'];
	$number = $_REQUEST['number'];
	$adress = $_REQUEST['adress'];
	$email = $_REQUEST['email'];
	$phone = $_REQUEST['phone'];
	$location = $_REQUEST['location'];
	$Country = $_REQUEST['Country'];
	
$add_bank ="INSERT into bank_accounts(bank_name,code, account_number ,address,email,phone,location,country) VALUES('$bank_name','$Identifier','$number','$adress','$email','$phone','$location','$Country')";
 $result_addbank = mysqli_query($con, $add_bank);

            if (!$result_addbank) {
             print "Error: " . $add_bank . "<br>" . mysqli_error($con);
			}
			else{
			print " Bank Added Successfully";

}
?>