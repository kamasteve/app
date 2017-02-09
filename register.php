
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Signup</title>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Start Bootstrap - SB Admin Version 2.0 Demo</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
	

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" media="all" href="styles.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" href="main.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" href="signup.css">
<link rel="stylesheet" href="login.css">
</head>
<style type="text/css">
	.login1{
	float:right;
	}
.register11{
	float:left;
	}
	</style>



<div class="navbar navbar-default navbar-fixed-top">
<div class="container">
<a href="#" class="navbar-brand">Landlord #1</a>
<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<div class="collapse navbar-collapse navHeaderCollapse">
<ul class="nav navbar-nav navbar-right">
</ul>
</div>

</div>
<div id="shadow">

</div>
</div>


    
    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>
	
        <!-- Advert #1 -->
		<style type="text/css">
  
</style>
<script type="text/javascript">
$(document).ready(function()//When the dom is ready 
{
$("#username").change(function() 
{ //if theres a change in the username textbox

var username = $("#username").val();//Get the value in the username textbox
if(username.length > 3)//if the lenght greater than 3 characters
{
$("#availability_status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');
//Add a loading image in the span id="availability_status"

$.ajax({  //Make the Ajax Request
    type: "POST",  
    url:"ajax_check_username.php",  //file name
    data: "username="+ username,  //data
    success: function(server_response){  
   
   $("#availability_status").ajaxComplete(function(event, request){ 

	if(server_response == '0')//if ajax_check_username.php return value "0"
	{ 
	$("#availability_status").html('<img src="available.png" align="absmiddle"> <font color="Green"> Available </font>  ');
	//add this image to the span with id "availability_status"
	}  
	else  if(server_response == '1')//if it returns "1"
	{  
	 $("#availability_status").html('<img src="not_available.png" align="absmiddle"> <font color="red">Not Available </font>');
	}  
   
   });
   } 
   
  }); 

}
else
{

$("#availability_status").html('<font color="#cc0000">Username too short</font>');
//if in case the username is less than or equal 3 characters only 
}



return false;
});

});
</script>
<style type="text/css">

</style>
<div class="row">
		<div class=" col-md-7">
		<div class="bs-example">
		
    <h1>Sign Up</h1>
	<div class="alert alert-info">
	
</div>
    <form class="form-horizontal" class="form-group" method='POST' action="signup.php">
	    
       <input class="form-control" name="fname" type="text" placeholder=" First Name" required>
       <input class="form-control" name="lname" type="text" placeholder=" Last Name" required>
	   <input class="form-control" name="email" type="text" placeholder=" Email" required>   
       <input class="form-control" name="username" type="text" placeholder=" Username" required>
       <input type="password" class="form-control" name="password" placeholder="Password">
       <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password">
       <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
       <input type="tel" class="form-control" name="nationality" placeholder="nationality">
       <input  class="form-control" id="address" placeholder="Postal Address">
       <input type="text" class="form-control" id="zip" placeholder="Zip Code">
       <div class="form-group">
                     
		<button class="btn1 register11" type="submit" name="button" value='submit'>REGISTER</button>
		<a href="index.php"><button type="button" class="btn1"> LOGIN</button></a>
         </div>       
    </form>
</div>
</div>

<div class="col-md-5">
    
<div class="content1">
	
<h2><span class="glyphicon glyphicon-star"> What is Moodle?</span></h2>
        <p><span style="font-family: 'PT Sans', Arial, Helvetica, sans-serif; font-size: 12.727272033691406px;">Moodle is a Learning Management System.&nbsp; It is ideal for blended learning and fully online learning.</span><br></p>            <p align="right">
                <a href="http://docs.moodle.org/27/en/Philosophy" target="_blank" id="button">
                    Moodle Philosophy                </a></div>
					
					
					
	<div class="content1">

   <h2><span class="glyphicon glyphicon-star">Course Layout</span></h2>
            <p><span style="font-family: 'PT Sans', Arial, Helvetica, sans-serif; font-size: 12.727272033691406px;">The key to success with Moodle is understanding the course layout.&nbsp; Find out more about the course layout features of Moodle.</span><br></p>            <p align="right">
                <a href="http://docs.moodle.org/27/en/Course_homepage" target="_blank" id="button">
                    Course Homepage                </a>
            </p>
</div>
    
	
	<div class="content1">

   <h2><span class="glyphicon glyphicon-star"> Activities</span></h2>
            
            <p><span style="font-family: 'PT Sans', Arial, Helvetica, sans-serif; font-size: 12.727272033691406px;">Find out what activities you can use with students.&nbsp; This page explains what the activities are and how to use them. &nbsp;</span><br></p>            <p align="right">
                <a href="http://docs.moodle.org/27/en/Activities" target="_blank" id="button">
                    Course Activities                </a>
            </p>
</div>

</div>

</body>

</html>
