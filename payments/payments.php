<?php include ('/../includes/header.php');
$sql = mysqli_query($con,"SELECT * FROM owner");
while($row = mysqli_fetch_array($sql)) {
$owner_arr[]=$row;
}

$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
}

?>
<style>
.tentant_footer_cls .box-icon a{
width:auto !important;
height:35px !important;

}
.form-control {
background-color:#FFCC99;
}
.btn{
background: #B6EE65;
width:300px;
height:45px
margin:50px;
padding:15px;
}
input{
margin-top:35px;
margin-bottom:10px;
}

</style>
<div class="ch-container">
<div class="row">
<?php include ('left_sidebar.php');  ?>
 <div id="content" class="col-lg-10 col-sm-10">
  
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
		<div class="box-content row">
            <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Rent Payment</a></li>
  <li><a data-toggle="tab" href="#deposit">Deposit</a></li>
  <li><a data-toggle="tab" href="#water">Water and electricity</a></li>
  <li><a data-toggle="tab" href="#others">Others</a></li>
</ul>
<div class="tab-content">
<div id="home" class="tab-pane fade in active">
         <form action="verify_payments.php" method="post">
  <div class="form-group home" >
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
  
  <label for="sel1">Select Month:</label>
      <select class="form-control" name="period">
        <option>January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
		<option>May</option>
		<option>June</option>
		<option>July</option>
		<option>August</option>
		<option>September</option>
		<option>October</option>
		<option>November</option>
		<option>December</option>
      </select>
</div>
<div class="col-xs-4">
  
    <label for="sel1">Select Payment Mode:</label>
      <select class="form-control" name="mode">
        <option>Cash</option>
        <option>Mpesa</option>
        <option>Bank</option>
        <option>Bank Agency</option>
      </select>
</div> 
</div>
<div class="row">
<div class="col-xs-4">
  
  <input class="form-control" name="fname" type="text" placeholder=" First Name" required >
</div>
<div class="col-xs-4">
  
  <input class="form-control" name="lname" type="text" placeholder=" Last Name" required>
</div>
<div class="col-xs-4">
  
  <input class="form-control" name="hnumber" type="text" placeholder=" House Number" required>
</div>
</div>
<div class="row">

<div class="col-xs-6">
<input class="form-control" name="idnumber" type="text" placeholder=" ID Number/Passport No" required>
</div>
<div class="col-xs-6">
  
  <input class="form-control" name="adress" type="text" placeholder=" Adress" required>
</div>
</div>
<div class="row">

<div class="col-xs-6">
  
  <input class="form-control" name="email" type="text" placeholder=" Email" required>
</div>
<div class="col-xs-6">
  
  <input class="form-control" name="phone" type="text" placeholder=" Mobile Number" required>
</div>
</div>
 
<div class="row">
<div class="col-xs-3">
  
  <input class="form-control" name="ammount" type="text" placeholder=" Ammount" required>
</div>

<div class="col-xs-6">
  
  <input class="form-control"  type="datetime-local" name="bdaytime">
</div>
		</div>
		<div class="row">
		<div class="col-xs-3">
		<button type="submit" class="btn btn-default"   name='submit'>Save</button>
		</div>
		</div>
</form>	
</div>
	
</div>
<div id="deposit" class="tab-pane fade ">
<div class="row"> 
<div class="form-group deposit" > 
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
  
  <label for="sel1">Select Month:</label>
      <select class="form-control" name="period">
        <option>January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
		<option>May</option>
		<option>June</option>
		<option>July</option>
		<option>August</option>
		<option>September</option>
		<option>October</option>
		<option>November</option>
		<option>December</option>
      </select>
</div>
<div class="col-xs-4">
  
    <label for="sel1">Select Payment Mode:</label>
      <select class="form-control" name="mode">
        <option>Cash</option>
        <option>Mpesa</option>
        <option>Bank</option>
        <option>Bank Agency</option>
      </select>
</div> 
</div>
</div>
<div class="row">
<div class="col-xs-4">
  
  <input class="form-control" name="fname" type="text" placeholder=" First Name" required>
</div>
<div class="col-xs-4">
  
  <input class="form-control" name="lname" type="text" placeholder=" Last Name" required>
</div>
<div class="col-xs-4">
  
  <input class="form-control" name="hnumber" type="text" placeholder=" House Number" required>
</div>
</div>
<div class="row">
<div class="col-xs-6">
  
  <input class="form-control" name="idnumber" type="text" placeholder="ID Number" required>
</div>
<div class="col-xs-6">
  
  <input class="form-control" name="Phonenumber" type="text" placeholder=" Phone Number" required>
</div>

</div>
<div class="row">
<div class="col-xs-6">
  
  <input class="form-control" name="dammount" type="text" placeholder="Deposit Ammount" required>
</div>
<div class="col-xs-6">
  
  <input class="form-control" name="code" type="text" placeholder="Bank/Mpesa authorisation Code" required>
</div>

</div>
<div class="row">
		<div class="col-xs-4">
		<button type="submit" class="btn btn-default"   name='submit'>Save</button>
		</div>
		</div>
</div>

<div id="water" class="tab-pane fade">
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
  
  <label for="sel1">Select Month:</label>
      <select class="form-control" name="period">
        <option>January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
		<option>May</option>
		<option>June</option>
		<option>July</option>
		<option>August</option>
		<option>September</option>
		<option>October</option>
		<option>November</option>
		<option>December</option>
      </select>
</div>
<div class="col-xs-4">
  
    <label for="sel1">Select Payment Mode:</label>
      <select class="form-control" name="mode">
        <option>Cash</option>
        <option>Mpesa</option>
        <option>Bank</option>
        <option>Bank Agency</option>
      </select>
</div> 
</div>
</div>
<div id="others" class="tab-pane fade">
I love this
</div>
</div>
<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>
</div>
    </div>
</div>




    </div>




</div>



<!--/row-->
    <!-- content ends -->
    
       




<?php  include ('../includes/footer.php'); ?>