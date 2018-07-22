<?php 
include_once('../database_connection.php');

// show PHP errors


// output any connection error
if ($con->connect_error) {
    die('Error : ('. $con->connect_errno .') '. $con->connect_error);
	
}


//$query = $con->query("SELECT name FROM properties WHERE property_id = ".$_POST['property']."");

 $unit_id=$_REQUEST['id'];
 $unit_type=$_REQUEST['type'];
 $beds=$_REQUEST['beds'];
 $rent = $_REQUEST['rent'];
 
	$update_unit="UPDATE rental_units SET unit_id='$unit_id', unit_type='$unit_type',bed='$beds',rent='$rent' where unit_id ='$unit_id'"; //$tenant_id		
//$query_add_expense ="INSERT into expenses (property,responsible,unit,payee,due_date,credit,details,date) VALUES('$pname','$responsible','$unit','$payee','$due_date','$amount','$details','$date')";
$result_update_profile = mysqli_query($con, $update_unit);



if (!$result_update_profile) {
                 echo("Error description: " . mysqli_error($con));
				 
            }
			else if ($result_update_profile){
				echo 'Profile updated sucessfully';
			}
			?>