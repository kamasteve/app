<?php
include ('database_connection.php');
$con=mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_POST['type_val']) && $_POST['type_val']=='change'){
		$owner_id = $_POST['id'];
		$str='';
		if($owner_id>0){
			$sql = mysqli_query($con,"SELECT * FROM properties where landlord='$owner_id'");
		}else{
			$sql = mysqli_query($con,"SELECT * FROM properties");
		}
		while($row = mysqli_fetch_array($sql)) {
			$str .='<option value="'.$row['id'].'">'.$row['name'].'</option>';
		}
		echo $str;
		//return ;
		exit();
}



if(isset($_POST['type_val']) && $_POST['type_val']=='delete'){
	$tenant_id=$_POST['id'];
	$query = "DELETE FROM tenants WHERE tenant_id = '$tenant_id'";
	$result = mysqli_query($con, $query);
	if ($result) {
		echo '1';
	}else{
		echo '0';
	}
	return;

}

if(isset($_POST['type_val']) && $_POST['type_val']=='edit_tentant'){

	$property=$_POST['property'];
	$tenant_id=$_POST['tenant_id'];
	$type=$_POST['type'];
	$fname=$_POST['fname'];      
	$lname=$_POST['lname'];
	$email = $_POST['email'];
	$phone=$_POST['phone'];
	$address = $_POST['addres'];
	$rent = $_POST['rent'];
	$deposit = $_POST['deposit'];

	$query = "UPDATE tenants SET fname='$fname',lname='$lname',phone='$phone',monthly_rent='$rent',deposit='$deposit',adress='$address',property='$property',type='$type' WHERE tenant_id='$tenant_id'";

	$result_update_user = mysqli_query($con, $query);
	if ($result_update_user) {
		echo '1';
	}else{
		echo '0';
	}
	return;

}



if(isset($_POST['type_val']) && $_POST['type_val']=='add_tentant'){

	$property=$_POST['property'];
	if(isset($_POST['type']) && $_POST['type']=''){
	$type=$_POST['type'];
	}else{
	$type='';
	}
	$fname=$_POST['fname'];      
	$lname=$_POST['lname'];
	$email = $_POST['email'];
	$phone=$_POST['phone'];
	$address = $_POST['addres'];
	$rent = $_POST['rent'];
	$deposit = $_POST['deposit'];

	$query_insert_user = "INSERT INTO tenants(fname,lname,email,phone,monthly_rent,deposit,adress,property,type)VALUES('$fname','$lname','$email','$phone', '$rent','$deposit','$address','$property','$type')";

	$result_insert_user = mysqli_query($con, $query_insert_user);
	if ($result_insert_user) {
		echo '1';
	}else{
		echo '0';
	}
return;
}
?>