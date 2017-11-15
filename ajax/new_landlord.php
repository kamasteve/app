<?php
include_once('../database_connection.php');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = $con->query("SELECT name FROM properties WHERE property_id = ".$_POST['property']."");
$row = mysqli_fetch_array($query);
$pname=$row["name"];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
//$type=$_POST['type'];
$mname=$_POST['mname'];      
$id_number=$_POST['id_number'];
$adres=$_POST['adress'];
$email = $_POST['email'];
$mobile=$_POST['mobile'];
$bank = $_POST['bank'];
$branch = $_POST['branch'];
$account_name = $_POST['account_name'];
$nationality = $_POST['nationality'];

$query_insert_user = "INSERT INTO property_owners(property,fname,lname,mname,id_number,adres,email ,mobile,bank,branch,account_name,nationality)VALUES('$pname','$fname','$lname','$mname','$id_number', '$adres','$email','$mobile','$bank','$branch','$account_name','$nationality')";


            $result_insert_user = mysqli_query($con, $query_insert_user);
			if($result_insert_user) {
                 echo 'Property Owner added sucessfully';
            }
			
            if (!$result_insert_user) {
                 echo("Error description: " . mysqli_error($con));
            }
			
   ?>