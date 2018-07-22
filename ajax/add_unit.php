<?php
include_once('../database_connection.php');
    $unitid = $_REQUEST['unit_id'];
	$unit_type = $_REQUEST['unit_type'];
	$bed = $_REQUEST['unit_bed'];
	$rent = $_REQUEST['unit_rent'];
	$property_id = $_REQUEST['property_id'];
	
$add_unit ="INSERT into rental_units(property_id,unit_id,unit_type,bed,rent) VALUES('$property_id','$unitid','$unit_type','$bed','$rent')";
 $result_addunits = mysqli_query($con, $add_unit);

            if (!$result_addunits) {
             print "Error: " . $add_unit . "<br>" . mysqli_error($con);
			}
			else{
			print " Property Added Successfully";

}
?>