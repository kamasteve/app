<?php 
include_once('../database_connection.php');

// show PHP errors


// output any connection error
if ($con->connect_error) {
    die('Error : ('. $con->connect_errno .') '. $con->connect_error);
	
}


//$query = $con->query("SELECT name FROM properties WHERE property_id = ".$_POST['property']."");
$tenant_id=$_REQUEST['id'];
 $fname=$_REQUEST['fname'];
 $unit=$_REQUEST['unit'];
 $email=$_REQUEST['email'];
 $adress=$_REQUEST['addres'];
 $lname=$_REQUEST['lname'];
 $phone=$_REQUEST['phone'];
 $bank = $_REQUEST['bank'];
 $idnumber=$_REQUEST['idnumber'];
 $tax=$_REQUEST['tax'];
 $status=$_REQUEST['status'];
 $account_number=$_REQUEST['bank_ac'];
	$update_profile="UPDATE tenants SET fname='$fname', lname='$lname',email='$email',phone='$phone',adress='$adress',bank='$bank',idnumber='$idnumber',acountnumber='$account_number',tax_id='$tax',status='$status' where tenant_id =$tenant_id"; //$tenant_id		
//$query_add_expense ="INSERT into expenses (property,responsible,unit,payee,due_date,credit,details,date) VALUES('$pname','$responsible','$unit','$payee','$due_date','$amount','$details','$date')";
$result_update_profile = mysqli_query($con, $update_profile);



if (!$result_update_profile) {
                 echo("Error description: " . mysqli_error($con));
				 
            }
			else if ($result_update_profile && $status='Deactivate'){
				echo 'Profile updated sucessfully weeerg';
				$update_unit="UPDATE rental_units SET status=0 where unit_id='$unit'";
				$result_update_unit=mysqli_query($con, $update_unit);
				if (!$result_update_unit) {
                 echo("Error description: " . mysqli_error($con));
				}
			}
			else if ($result_update_profile){
				echo 'Profile updated sucessfully';
				
				
			}
			
			
?>