<?php
ob_start();
session_start();
include ('database_connection.php');
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if (!isset($_SESSION['username'])) {
header("location:index.php");

}
 else{
 $_id=$_SESSION['username'];
 $user_id=$_SESSION['role'];
 } 
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Landlord Digital</title>

<!-- The styles -->
 <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>
<link rel="stylesheet" href="css/bootstrap.datetimepicker.css">
<link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">
<link href="css/charisma-app.css" rel="stylesheet">

<link href='css/new/style.css' rel='stylesheet'>
<link href='css/priventive.css' rel='stylesheet'>
<link href="css/dataTables.tableTools.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
<link href="css/TableTools.css" rel="stylesheet">
<link href='css/animate.min.css' rel='stylesheet'>
    <link href=" css/jquery.noty.css" rel='stylesheet'>
	<link href=" css/css_theme.min.css" rel='stylesheet'>

<style type="text/css" class="init">
</style>
<!--
<script src="js/scripts.js"></script>
<script src="js/jquery.js"></script>
<script type="text/javascript" charset="utf-8" src="js/new/jquery-1.11.1.min.js"></script>
<script src="js/moment.js"></script>
	<script src="js/bootstrap.datetime.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/jquery.dataTables.js"></script>
<script src="js/bootstrap.min.js"></script>


<script type="text/javascript" charset="utf-8" src="media/ZeroClipboard/ZeroClipboard.js"></script>
<script type="text/javascript" charset="utf-8" src="js/TableTools.js"></script>

<script type="text/javascript" language="javascript" src="js/dataTables.bootstrap.js"></script>
<script type="text/javascript" language="javascript" class="init"></script>
-->
<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/moment.js"></script>
	<script src="js/scripts.js"></script>
	<script type="text/javascript" charset="utf-8" src="js/new/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="js/dataTables.tableTools1.js"></script>
	<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
	<script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<script src="js/bootstrap.datetime.js"></script>
	<script src="js/bootstrap.password.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="js/new/general.js"></script>
<script src="js/new/jquery.validate.js"></script>

<script>
var base_url= 'http://www.hilleconomicgroup.com';
</script>

<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- The fav icon -->
<link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
<!-- topbar starts -->
<div class="navbar navbar-default" role="navigation">
<div class="navbar-inner">
<button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
  <a class="navbar-brand" href="main.php"> <img alt="Techisoft Logo" src="img/techisoft.png" class="hidden-xs"/>
                <span></span></a>
<ul class=" nav navbar-nav ">
<?php
$query = $con->query("SELECT * FROM parent_menu  ORDER BY menu_id ASC");
				$rowCount = $query->num_rows;
				if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
			echo '<li><a class="ajax-link" href="'.$row['url'].'"><i class="'.$row['menu_icon'].'"></i><span> '.$row['name'].'</span></a></li>';
                //echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
            }
				}
			?>
   
	<li class=" pull-right dropdown">
      <a href="#" data-toggle="dropdown" ><i class="glyphicon glyphicon-user"></i> <?php echo $_id;?> <span class="caret"></span> </a> 
	  <ul class="dropdown-menu" role="menu">
				<li><a href="profile.php">Profile</a></li>
				<li class="divider"></li>
				<li><a href="logout.php">Logout</a></li>
	 </ul>
	 </li>
	 </ul>
   
  
</div>
</div>

<!-- topbar ends -->