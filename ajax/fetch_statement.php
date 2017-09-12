<?php
//Include database configuration file
include('../includes/config.php');

if(isset($_POST["property_id"]) && !empty($_POST["property_id"])){
    //Get all state data
	$search_id=$_POST["property_id"];
    $query = $mysqli->query("SELECT * FROM tenants WHERE property = '$search_id'");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select Tenant</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['tenant_id'].'">'.$row['fname'].'&nbsp'.$row['lname'].'</option>';
        }
    }else{
        echo '<option value="">No Tenant Attached</option>';
    }
}

if(isset($_POST["state_id"]) && !empty($_POST["state_id"])){
    //Get all city data
    $query = $db->query("SELECT * FROM cities WHERE state_id = ".$_POST['state_id']." AND status = '0' ORDER BY city_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}
?>