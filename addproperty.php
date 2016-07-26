<?php
include ('database_connection.php');
if (isset($_POST['submit'])) {
$name=$_POST['name'];
$landlord=$_POST['landlord'];
$address=$_POST['address'];      
$contact=$_POST['contact'];
$units=$_POST['units'];
$location = $_POST['location'];
$status = $_POST['status'];
$today = date("Y-m-d H:i:s");
$type=$_POST['type'];


$query_insert_user = "INSERT INTO properties(name,landlord,address,contact,units,location,status,add_date,type)VALUES('$name','$landlord','$address','$contact','$units','$location','$status','$today','$type')";


            $result_insert_user = mysqli_query($dbc, $query_insert_user);
            if (!$result_insert_user) {
             echo "Error: " . $query_insert_user . "<br>" . mysqli_error($dbc);
			}
			else{
			echo " Property Added Successfully";
}
}
?>