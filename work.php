<?php
session_start();
if (!isset($_SESSION['username'])) {
header("location:index.php");
}
 else{
 $_id=$_SESSION['username'];
 }
 ?>
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
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
	 h1{
        margin: 30px 0;
        padding: 0 200px 15px 0;
        border-bottom: 1px solid #E5E5E5;
		color:#317EAC;
    }
	 h2{
        margin: 10px 0;
        padding: 0 30px 15px 0;
        border-bottom: 1px solid #E5E5E5;
		color:#317EAC;
    }
	.bs-example{
    	margin: 20px;
		width:600px;
		font:#000;
		border:1px;
		margin-top:10px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	padding: 10px;
	border-color: #FFF;
	width: 750px;
	float: left;
	margin-left: 10px;
	box-shadow: 1px 1px 2px 1px #B6EE65;
	-webkit-box-shadow: 1px 1px 2px 1px #B6EE65;
	-moz-box-shadow: 0 1px 20px 0 rgba(0,0,0,0.4);
	background: #fff;
	border-width: 0px;
    }
	</style>
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
<div class="bs-example">
<div class="alert alert-info">
<?php
if (isset($_POST['button'])) {
    $error = array();
$con=mysqli_connect("localhost","root","","writer");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$select = mysqli_real_escape_string($con, $_POST['select']);
$description=mysqli_real_escape_string($con, $_POST['description']);
$keywords = mysqli_real_escape_string($con, $_POST['keywords']);
$length = mysqli_real_escape_string($con, $_POST['length']);
$language = mysqli_real_escape_string($con, $_POST['keywords']);
$tone = mysqli_real_escape_string($con, $_POST['tone']);
$payment = mysqli_real_escape_string($con, $_POST['payment']);
$purpose = mysqli_real_escape_string($con, $_POST['purpose']);
$category = mysqli_real_escape_string($con, $_POST['category']);
$sql="INSERT INTO new_orders (description,keywords,length,language,tone,payment,purpose,category)
VALUES ('$description','$keywords' ,'$length', '$language','$tone','$payment','$purpose','$category')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
}
?>

 </div>
    <h1>Get Content Written </h1>
    <form class="form-horizontal" method='POST' action="work.php">
       
<div class="form-group">
        <label class="control-label col-xs-3" for="select">Project Type:</label>
		<div class="col-xs-9">
		<select class="form-control" name="select">
                <option value='new' onclick='update_form_project_type()'>Have articles written</option>
                <option value='rewrite' onclick='update_form_project_type()'>Have articles re-written</option>
                <option value='kindle'  onclick='update_form_project_type()'>Have a Kindle book written</option>
                <option value='ebook'   onclick='update_form_project_type()'>Have an eBook written</option>
            </select>
  </div>
</select>
</div>
       <div class="form-group">
            <label class="control-label col-xs-3" for="project description">project description:</label>
            <div class="col-xs-9">
                <textarea rows="3" class="form-control" name="description" placeholder="project description"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="category">Category:</label>
            <div class="col-xs-9">
                <input type="text" required class="form-control" name="category" placeholder="Category">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="Article length:">Article length:</label>
            <div class="col-xs-9">
                <input type="number" required  class="form-control" name="length" id="confirmPassword" placeholder="Article length">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="Article language:">Article language:</label>
            <div class="col-xs-9">
                <input type="text" required class="form-control" name="language"  placeholder="Article language">
            </div>
        </div>
         <div class="form-group">
            <label class="control-label col-xs-3" for="Keywords">Keywords:</label>
            <div class="col-xs-9">
                <textarea rows="3" required class="form-control" name="keywords" placeholder="Article Keywords"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="writing tone">Writng tone:</label>
            <div class="col-xs-9">
                <input type="tel" required class="form-control" name="tone" placeholder="Writing Tone">
            </div>
        </div>
      <div class="form-group">
            <label class="control-label col-xs-3" for="payment">Payment</label>
            <div class="col-xs-9">
                <input type="number" required class="form-control" name="payment" placeholder="payment">
            </div>
        </div>
        
      <div class="form-group">
            <label class="control-label col-xs-3" for="Article purpose">Article purpose:</label>
            <div class="col-xs-9">
                <textarea required  rows="3" class="form-control" name="purpose" placeholder="Article purpose"></textarea>
            </div>
        </div>
        
     
       
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <label class="checkbox-inline">
                    <input type="checkbox" value="agree">  I agree to the <a href="#">Terms and Conditions</a>.
                </label>
				<div class="col-xs-offset-3 col-xs-9">
                
                     <a href="index.php">Back to login</a>.
                
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                
            </div>
        </div>
		<button class="submit" type="submit" name="button" value='submit'>Submit</button>
                <input type="reset" class="submit" value="Reset">
    </form>
</div>