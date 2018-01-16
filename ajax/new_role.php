<?php 
include_once('../database_connection.php');

// show PHP errors


// output any connection error
if ($con->connect_error) {
    die('Error : ('. $con->connect_errno .') '. $con->connect_error);
	
}


//$query = $con->query("SELECT name FROM properties WHERE property_id = ".$_POST['property']."");

 $rname=$_REQUEST['rname'];
 $rdescription=$_REQUEST['rdescription'];
 $unique_id=$_REQUEST['unique_id'];
 $role = $_REQUEST['role'];
 
	//$update_unit="UPDATE rental_units SET unit_id='$unit_id', unit_type='$unit_type',bed='$beds',rent='$rent' where unit_id ='$unit_id'"; //$tenant_id		
$add_role ="INSERT into user_types(name,description,unique_id,parent) VALUES('$rname','$rdescription','$unique_id','$role')";
$result_update_profile = mysqli_query($con, $add_role);



if (!$result_update_profile) {
                 echo("Error description: " . mysqli_error($con));
				 
            }
			else if ($result_update_profile){
				echo 'Profile updated sucessfully';
			}
			?>