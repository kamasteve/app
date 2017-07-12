
	<?php
include ('database_connection.php');
 $fname=$_REQUEST['fname'];
 $mname='Kenyan';
 $gender=$_REQUEST['lname'];
 $username1 = $_REQUEST['username'];
 $email = $_REQUEST['email'];
 $password = $_REQUEST['password'];
 $pnumber=$_REQUEST['phone'];
 $role=$_REQUEST['role'];
 $activation=md5($email.time());
            $query = "INSERT INTO register(fname,nationality,lname,email,username,password,phone,activation,role)VALUES('$fname','$mname','$gender','$email','$username1', '$password','$pnumber','$activation','$role')";

 $result = mysqli_query($con,$query) or die('Server error = '.mysqli_error($con));
           

            if (mysqli_affected_rows($con) == 1) { //If the Insert Query was successfull.

include 'send_Mail.php';
$to=$email;
$subject="Email verification";
$body='Hi, <br/> <br/> We need to make sure you are human. Please verify your email and get started using your Website account. <br/> <br/> <a href="'.$base_url.'activation/'.$activation.'">'.$base_url.'activation/'.$activation.'</a>';

Send_Mail($to,$subject,$body);
$msg= "Registration successful, please activate email."; 



                // Flush the buffered output.



                // Finish the page:
                print 'Thank you for
registering! A confirmation email
has been sent to '.$email.' Please click on the Activation Link to Activate your account ';


            } else { // If it did not run OK.
                print 'You could not be registered due to a system
error. We apologize for any
inconvenience.';
            }


    
  
mysqli_close($con);//Close the DB Connection

 // End of the main Submit conditional.



?>

   

