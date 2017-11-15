<?php 
include_once('../database_connection.php');

// show PHP errors


// output any connection error
if ($con->connect_error) {
    die('Error : ('. $con->connect_errno .') '. $con->connect_error);
	
}
$date = date("Y-m-d");
$propety=$_POST['property'];
// $row = mysqli_fetch_array($query);
// $pname=$row["name"];
$responsible=$_POST['responsible'];
$unit=$_POST['unit'];
$payee=$_POST['payee'];
$id=$_POST['id_'];
$due_date=date("Y-m-d");
$category='Property maintenance';
$amount=$_POST['cost'];
$details=$_POST['details'];
$okMessage = 'Invoice Was Sussefully Created!!';
			
$query_add_expense ="INSERT into expenses (property,responsible,unit,payee,due_date,credit,details,date) VALUES('$propety','$responsible','$unit','$payee','$due_date','$amount','$details','$date')";
$result_addexpense = mysqli_query($con, $query_add_expense);


if ($result_addexpense) {
                echo "expense added sucessfully";
				$query_update= "UPDATE maintenance SET status=1 where id='$id'";
				$result_update = mysqli_query($con, $query_update);
            }
			else if($result_addexpense){
				
				 echo("Error description: " . mysqli_error($con));
				
			}
			
?>