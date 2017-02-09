
<?php




include ('database_connection.php');

if (isset($_POST['button'])) {
    $error = array();
$fname=$_POST['keywords'];
 $mname=$_POST['description'];
 $lname=$_POST['length'];
  $username1 = $_POST['language'];
 $date=$_POST['tone'];
 $email = $_POST['payment'];
 $password1 = $_POST['category'];
 $purpose = $_POST['purpose'];
try{
            $query_insert_user = "INSERT INTO articles(keywords,purpose,description,length,tone,payment,category,language) VALUES ('$fname',$purpose,'$mname','$lname','$date','$email','$username1', '$password1')";
}catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
} 

            $result_insert_user = mysqli_query($dbc, $query_insert_user);
            if (!$result_insert_user) {
                echo  'query failed';
            }
else{
echo 'article submited';
}
}   
 

?>
