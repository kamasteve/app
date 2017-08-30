<?php 
include_once('../database_connection.php');

// show PHP errors


// output any connection error
if ($con->connect_error) {
    die('Error : ('. $con->connect_errno .') '. $con->connect_error);
	
}


//$query = $con->query("SELECT name FROM properties WHERE property_id = ".$_POST['property']."");
$name=$_REQUEST['name'];
 $unit=$_REQUEST['unit'];
  $year=$_REQUEST['year'];
  $adress=$_REQUEST['adress'];
  $country=$_REQUEST['country'];
  $city=$_REQUEST['city'];
  $location=$_REQUEST['location'];
 $contact = $_REQUEST['idnumber'];
 $property_id = $_REQUEST['responsible'];
 
$update_unit="UPDATE properties SET name='$name', type='$unit',year='$year',address='$adress',country='$country',city='$city',location='$location',contact='$contact' where property_id ='$property_id'"; //$tenant_id		
//$query_add_expense ="INSERT into expenses (property,responsible,unit,payee,due_date,credit,details,date) VALUES('$pname','$responsible','$unit','$payee','$due_date','$amount','$details','$date')";
$result_update_profile = mysqli_query($con, $update_unit);



if (!$result_update_profile) {
                 echo("Error description: " . mysqli_error($con));
				 
            }
			else if ($result_update_profile){
				echo 'Profile updated sucessfully';
			}
			?>