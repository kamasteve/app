<?php 
include_once('../database_connection.php');

// show PHP errors


// output any connection error
if ($con->connect_error) {
    die('Error : ('. $con->connect_errno .') '. $con->connect_error);
	
}


$query = $con->query("SELECT name FROM properties WHERE property_id = ".$_POST['property']."");
if (!$query) {
   printf("Error: %s\n", mysqli_error($con));
    exit();
}
//$date = date("Y-m-d");
$propety=$_POST['property'];
$row = mysqli_fetch_array($query);
$pname=$row["name"];
$responsible=$_POST['responsible'];
$unit=$_POST['unit'];
$payee=$_POST['payee'];
$requester=$_POST['requester'];
$start_date=$_POST['start_date'];
$priority=$_POST['priority'];
//$amount=$_POST['amount'];
$details=$_POST['details'];
$okMessage = 'Invoice Was Sussefully Created!!';
			
$query_add_expense ="INSERT into maintenance (property,responsible,unit,payee,date,requester,details,priority) VALUES('$pname','$responsible','$unit','$payee','$start_date','$requester','$details','$priority')";
$result_addexpense = mysqli_query($con, $query_add_expense);


if (!$result_addexpense) {
                 echo("Error description: " . mysqli_error($con));
            }
			else if($result_addexpense){
				echo "Maintenance Request Captured successfully";
				
			}
			
?>