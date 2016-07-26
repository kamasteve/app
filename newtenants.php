<?php
$con=mysqli_connect("localhost","root","","landlord");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$property=$_POST['property'];
$type=$_POST['type'];
$fname=$_POST['fname'];      
$lname=$_POST['lname'];
$email = $_POST['email'];
$phone=$_POST['phone'];
$address = $_POST['addres'];
$rent = $_POST['rent'];
$deposit = $_POST['deposit'];

$query_insert_user = "INSERT INTO tenants(fname,lname,email,phone,monthly_rent,deposit,adress,property,type)VALUES('$fname','$lname','$email','$phone', '$rent','$deposit','$address','$property','$type')";


            $result_insert_user = mysqli_query($con, $query_insert_user);
            if (!$result_insert_user) {
                echo 'Query Failed ';
            }
   ?>