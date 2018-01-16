<?php 
include_once('../database_connection.php');

// show PHP errors


// output any connection error
if ($con->connect_error) {
    die('Error : ('. $con->connect_errno .') '. $con->connect_error);
	
}


//$query = $con->query("SELECT name FROM properties WHERE property_id = ".$_POST['property']."");

 $parent_role=$_REQUEST['parent_role'];
 $category_role=$_REQUEST['category_role'];
 $role_name=$_REQUEST['role_name'];
 $unique_id= $_REQUEST['unique_id'];
 
	//$update_unit="UPDATE rental_units SET unit_id='$unit_id', unit_type='$unit_type',bed='$beds',rent='$rent' where unit_id ='$unit_id'"; //$tenant_id		
$add_role_map ="INSERT into menu_role_map(user_role,role_id,munu_id ,parent) VALUES('$parent_role','$role_name','$unique_id','$category_role')";
$result_update_profile = mysqli_query($con, $add_role_map);



if (!$result_update_profile) {
                 echo("Error description: " . mysqli_error($con));
				 
            }
			else if ($result_update_profile){
				echo 'Role Added Sucessfully';
			}
			?>