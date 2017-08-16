<?php 
include_once('../database_connection.php');

// show PHP errors


// output any connection error
if ($con->connect_error) {
    die('Error : ('. $con->connect_errno .') '. $con->connect_error);
	
}


//$query = $con->query("SELECT name FROM properties WHERE property_id = ".$_POST['property']."");

 $fname=$_REQUEST['fname'];
 $username=$_REQUEST['username'];
 $lname=$_REQUEST['lname'];
 $phone=$_REQUEST['phone_number'];
 $nationality = $_REQUEST['country'];
 $company=$_REQUEST['company'];
 $role=$_REQUEST['role'];
	$update_profile="UPDATE register SET fname='$fname', lname='$lname',nationality='$nationality',phone='$phone',company='$company',role='$role' where username='$username'";		
//$query_add_expense ="INSERT into expenses (property,responsible,unit,payee,due_date,credit,details,date) VALUES('$pname','$responsible','$unit','$payee','$due_date','$amount','$details','$date')";
$result_update_profile = mysqli_query($con, $update_profile);


if (!$result_update_profile) {
                 echo("Error description: " . mysqli_error($con));
            }
			else if($result_update_profile){
				echo 'Profile updated sucessfully';
				
			}
			
?>