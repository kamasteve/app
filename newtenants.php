<?php
include_once('database_connection.php');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = $con->query("SELECT name FROM properties WHERE property_id = ".$_POST['property']."");
$row = mysqli_fetch_array($query);
$pname=$row["name"];
$property=$_POST['property'];
$unit=$_POST['unit'];
//$type=$_POST['type'];
$fname=$_POST['fname'];      
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$idnumber=$_POST['idnumber'];
$email = $_POST['email'];
$gender=$_POST['tax_details'];
$address = $_POST['address'];
$bank = $_POST['bank'];
$acountnumber = $_POST['acountnumber'];

$query_insert_user = "INSERT INTO tenants(property,unit,fname,lname,phone,idnumber,email,tax_id ,adress,bank,acountnumber)VALUES('$pname','$unit','$fname','$lname','$phone','$idnumber', '$email','$gender','$address','$bank','$acountnumber')";


            $result_insert_user = mysqli_query($con, $query_insert_user);
			if($result_insert_user) {
                 $assign_unit= "UPDATE rental_units SET status='1' WHERE unit_id='$unit'";
				 $taken_unit = mysqli_query($con, $assign_unit);

				/** $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		**/
   
			
	} if (!$result_insert_user) {
                 echo("Error description: " . mysqli_error($con));
            }
			else{
				
				echo"tenant added sucessfully";
			}
   ?>