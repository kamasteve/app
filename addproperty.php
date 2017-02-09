<?php

        foreach($_POST as $key => $value){
            // check if $var is an array. If yes, it will start another ExtendedAddslash() function to loop to each key inside.
            

        }


			
     // Initialize ExtendedAddslash() function for every $_POST variable
     

if (isset($_POST['submit'])) {
$property_id=$_POST['property_id'];	
$name=$_POST['name'];
$year=$_POST['year'];
$type=$_POST['type'];      
$adress=$_POST['adress'];
$city=$_POST['city'];
$county = $_POST['county'];
$location = $_POST['location'];
$zip=$_POST['zip'];
$country=$_POST['country'];
$today = date("Y-m-d H:i:s");

			
include ('database_connection.php');


$query_insert_user = "INSERT INTO properties(property_id,name,year,type,address,city,county,location,zip,country,add_date)VALUES('$property_id','$name','$year','$type','$adress','$city','$county','$location','$zip','$country','$today')";

            $result_insert_user = mysqli_query($con, $query_insert_user);
            if (!$result_insert_user) {
             echo "Error: " . $query_insert_user . "<br>" . mysqli_error($con);
			}
			else{
			echo " Property Added Successfully";
}
}
foreach($_POST['unit_id'] as $key => $value) {
	$unitid = $_POST['unit_id'][$key];
	$unit_type = $_POST['unit_type'][$key];
	$bed = $_POST['unit_bed'][$key];
	$rent = $_POST['unit_rent'][$key];
$add_unit ="INSERT into rental_units(property_id,unit_id,unit_type,bed,rent) VALUES('$property_id','$unitid','$unit_type','$bed','$rent')";
 $result_addunits = mysqli_query($con, $add_unit);
}
            if (!$result_addunits) {
             echo "Error: " . $add_unit . "<br>" . mysqli_error($con);
			}
			else{
			echo " Property Added Successfully";

}
?>