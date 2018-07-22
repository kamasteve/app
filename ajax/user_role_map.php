<?php
//Include database configuration file
include('../includes/config.php');

if(isset($_POST["menu_id"]) && !empty($_POST["menu_id"])){
    //Get all state data
    $query = $mysqli->query("SELECT * FROM menu_details WHERE parent_menu_id = ".$_POST['menu_id']." ORDER BY menu_id ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select Role</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['menu_id'].'">'.$row['DISPLAY_STRING'].'</option>';
        }
    }else{
        echo '<option value="">No Role Attached</option>';
    }
}
function makeJsonResponse($my_result){
  		// initialize array
  		$arr=[];

	    /* fetch associative array */
	    while ($row = $my_result->fetch_assoc()) {
	  			// push row to array
    			array_push($arr,$row);
		  }

  		// return result
  		return json_encode($arr);
	}

if(isset($_POST["state_id"]) && !empty($_POST["state_id"])){
	$unit=$_POST["state_id"];
	
    //Get all city data
    $query = $mysqli->query("SELECT tenant_id,concat(fname,' ',lname) as name FROM tenants WHERE unit = '$unit' and status='active' ");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
         echo makeJsonResponse($query);
    }else{
        echo '<option value="">City not available</option>';
    }
}
?>