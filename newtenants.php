<?php
include_once('database_connection.php');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = $con->query("SELECT name FROM properties WHERE property_id = ".$_POST['property']."");
$row = mysqli_fetch_array($query);
$pname=$row["name"];
$property=$_POST['property'];
$unit=$_POST['unit'];
//$type=$_POST['type'];
$fname=$_POST['fname'];      
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$idnumber=$_POST['idnumber'];
$email = $_POST['email'];
$gender=$_POST['tax_details'];
$address = $_POST['address'];
$bank = $_POST['bank'];
$acountnumber = $_POST['acountnumber'];

$query_insert_user = "INSERT INTO tenants(property,unit,fname,lname,phone,idnumber,email,tax_id ,adress,bank,acountnumber)VALUES('$pname','$unit','$fname','$lname','$phone','$idnumber', '$email','$gender','$address','$bank','$acountnumber')";


            $result_insert_user = mysqli_query($con, $query_insert_user);
			if($result_insert_user) {
                 $assign_unit= "UPDATE rental_units SET status='1' WHERE unit_id='$unit'";
				 $taken_unit = mysqli_query($con, $assign_unit);
            }
			
            if (!$result_insert_user) {
                 echo("Error description: " . mysqli_error($con));
            }
			else{
				
				echo"tenant added sucessfully";
			}
   ?>