
	<?php
include ('database_connection.php');
 $fname=$_POST['fname'];
 $mname='Kenyan';
 $gender=$_POST['lname'];
 $username1 = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $pnumber=$_POST['phone'];
 $activation=md5($email.time());
            $query_insert_user = "INSERT INTO register(fname,nationality,lname,email,username,password,phone,activation)VALUES('$fname','$mname','$gender','$email','$username1', '$password','$pnumber','$activation')";


            $result_insert_user = mysqli_query($con, $query_insert_user);
            if (!$result_insert_user) {
                print 'Query Failed ';
            }

            if (mysqli_affected_rows($con) == 1) { //If the Insert Query was successfull.

include 'send_Mail.php';
$to=$email;
$subject="Email verification";
$body='Hi, <br/> <br/> We need to make sure you are human. Please verify your email and get started using your Website account. <br/> <br/> <a href="'.$base_url.'activation/'.$activation.'">'.$base_url.'activation/'.$activation.'</a>';

Send_Mail($to,$subject,$body);
$msg= "Registration successful, please activate email."; 



                // Flush the buffered output.



                // Finish the page:
                echo '<div >Thank you for
registering! A confirmation email
has been sent to '.$email.' Please click on the Activation Link to Activate your account </div>';


            } else { // If it did not run OK.
                echo '<div class="errormsgbox">You could not be registered due to a system
error. We apologize for any
inconvenience.</div>';
            }


    
  
mysqli_close($con);//Close the DB Connection

 // End of the main Submit conditional.



?>

   

