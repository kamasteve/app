<?php
/*******************************************************************************
* Simplified PHP Invoice System                                                *
*                                                                              *
* Version: 1.1.1	                                                               *
* Author:  James Brandon                                    				   *
*******************************************************************************/

include_once("includes/config.php");

// get invoice list


	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	$log_query= "INSERT INTO invoices_backup SELECT * FROM invoices WHERE invoice=1006";
	//$result =mysqli_query($mysqli,$log_query);
	//if(!$result){
		//echo "database duplication failed";
		//echo("Error description: " . mysqli_error($mysqli));
	