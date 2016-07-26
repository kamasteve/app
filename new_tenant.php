<?php include ('includes/header.php'); ?>

<div class="ch-container">
<div class="row">

 <?php include ('includes/left_sidebar.php');  ?>
 <div id="content" class="col-lg-10 col-sm-10">
 <div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
		<div class="box-content row">
		<div class="row">
		
  		<div class="col-xs-4">
			<label for="sel1">Select property:</label>
  
   <?php

mysql_connect('localhost', 'root', '');
mysql_select_db('hill_rental');

$sql = "SELECT name FROM properties";
$result = mysql_query($sql);

echo "<select class='form-control' name='property' placeholder='Select property'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
}
echo "</select>";

?>
</div>
	<div class="col-xs-4">
			<label for="sel1">Select property:</label>
  
   <?php

mysql_connect('localhost', 'root', '');
mysql_select_db('hill_rental');

$sql = "SELECT name FROM properties";
$result = mysql_query($sql);

echo "<select class='form-control' name='property' placeholder='Select property'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
}
echo "</select>";

?>
</div>
	<div class="col-xs-4">
			<label for="sel1">Select property:</label>
  
   <?php

mysql_connect('localhost', 'root', '');
mysql_select_db('hill_rental');

$sql = "SELECT name FROM properties";
$result = mysql_query($sql);

echo "<select class='form-control' name='property' placeholder='Select property'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
}
echo "</select>";

?>
</div>
  
		
		</div>
		<div class="row">
		<div class="col-xs-4">
  
  <input class="form-control" name="lname" type="text" placeholder=" Last Name" required>
</div>
<div class="col-xs-4">
  
  <input class="form-control" name="lname" type="text" placeholder=" Last Name" required>
</div>
<div class="col-xs-4">
  
  <input class="form-control" name="lname" type="text" placeholder=" Last Name" required>
</div>
		</div>
		</div>
		</div>
 
 </div>
 </div>
 <?php  include ('includes/footer.php'); ?>