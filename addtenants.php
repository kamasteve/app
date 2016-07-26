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
	   <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

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
	body{
	
	 background-size: 100% 100%;
    background-repeat: no-repeat;
	font-size:14px;
font-weight:bold;


	}
	.content1{
	border:1px;
		margin-top:60px;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	border-radius: 2px;
	padding: 10px;
	border-color: #FFF;
	width:500px;
	float: left;
	margin-left: 10px;
	box-shadow: 1px 1px 2px 1px #B6EE65;
	-webkit-box-shadow: 1px 1px 2px 1px #B6EE65;
	-moz-box-shadow: 0 1px 20px 0 rgba(0,0,0,0.4);
	

	
	opacity:1;
	}
	h5 {
    color: rgb(255,0,0);
	font-family:verdana;
font-size:14px;
font-weight:bold;
}
#col-md-4{
background:transparent;
}

#image-responsive {

font-size:14px;
font-weight:bold;

opacity:0.4;

}

	</style>
<?php
//Step1
 $db = mysql_connect("localhost","hill_rental","kamah4778"); 
 if (!$db) {
 die("Database connection failed miserably: " . mysql_error());
 }
//Step2
 $db_select = mysql_select_db("hill_rental",$db);
 if (!$db_select) {
 die("Database selection also failed miserably: " . mysql_error());
 }
?>
</head>

<div class="navbar navbar-default navbar-fixed-top">
<div class="container">
<a href="#" class="navbar-brand">KENYA WRITERS</a>
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
</div>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                     <form class="form-horizontal" method='POST' action="signup.php">
        <div class="form-group">
            <label class="control-label col-xs-3" for="username">Property :</label>
            <div class="col-xs-9">
                <select class="form-control" >
                            <?php
$con = mysql_connect("localhost","root","");
 $db = mysql_select_db("landlord",$con);
 $get=mysql_query("SELECT name FROM properties ORDER BY id ASC");
$option = '';
 while($row = mysql_fetch_assoc($get))
{
  $option .= '<option> value = "'.$row['name'].'">'.$row['name'].'</option>';
}
?>
                            
                        </select>
            </div>
        </div>
		<div class="form-group">
		  <label class="control-label col-xs-3" for="username">Property Type :</label>
            <div class="col-xs-9">
                <select class="form-control" >
                            <option>Bedsitter</option>
                            <option>One Bed Room</option>
                            <option>Two Bed Room</option>
                            <option>Three Bed Rooms</option>
                            <option>Bungalow</option>
							<option>Self Contained</option>
                        </select>
            </div>
        </div>
		 <div class="form-group">
            <label class="control-label col-xs-3" for="fname">First Name:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="lame">Last Name:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="lname" placeholder="Last Name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="email">Email:</label>
            <div class="col-xs-9">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
        </div>
		 <div class="form-group">
            <label class="control-label col-xs-3" for="phoneNumber">Phone:</label>
            <div class="col-xs-9">
                <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
            </div>
        </div>
		<div class="form-group">
            <label class="control-label col-xs-3" for="address">Address:</label>
            <div class="col-xs-9">
                <textarea rows="3" class="form-control" id="address" placeholder="Postal Address"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="Deposit">Deposit:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="Deposit" placeholder="Deposit ">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="confirmPassword">Monthly Rent:</label>
            <div class="col-xs-9">
                <input type="rent" class="form-control" id="rent" placeholder="Monthly Rent">
            </div>
        </div>
       
       
      
        <div class="form-group">
            <label class="control-label col-xs-3">gender:</label>
            <div class="col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="genderRadios" value="male"> Male
                </label>
            </div>
            <div class="col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="genderRadios" value="female"> Female
                </label>
            </div>
        </div>
        
        <div class="form-group">
         
        <br>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <button class="submit" type="submit" name="button" value='submit'>Submit</button>
            </div>
        </div>
		
                
				
    </form>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>
</div>
   
</div>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>
</html>
