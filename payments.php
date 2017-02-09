<?php include ('includes/header.php');
$sql = mysqli_query($con,"SELECT * FROM owner");
while($row = mysqli_fetch_array($sql)) {
$owner_arr[]=$row;
$pageid=107;
}

$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
}

?>
<script type="text/javascript">
$(document).ready(function(){
    $('#property').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'http://localhost/app/ajax/ajaxPayments.php',
                data:'property_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>

<div class="ch-container">
<div class="row">
<?php include ('includes/left_sidebar.php');  ?>
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
<div class="row">
<form class="form-horizontal" action="verify_payments.php" method="post">
  <div class="form-group " >
 
<div class="form-group col-md-6">
		
		<label class="control-label col-xs-4" for="fname">Select Property:</label>
		<div class=" col-xs-8">
	<?php
    //Include database configuration file
    
    
    //Get all country data
    $query = $con->query("SELECT * FROM properties  ORDER BY property_id ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
    <select class='form-control ' name="property" id="property">
        <option value="">Select Property</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['property_id'].'">'.$row['name'].'</option>';
            }
        }else{
            echo '<option value="">Property not available</option>';
        }
        ?>
    </select>
	</div>
</div>
	<div class=" form-group col-md-6">
	<label class="control-label col-xs-4" for="fname">Select Unit:</label>
	<div class=" col-xs-8">
			<select class='form-control' name="unit" id="state">
        <option value="">Select Property first</option>
    </select>
	</div>
</div>

<div class="form-group col-md-6">
  
  <label class="control-label col-xs-4"  for="sel1">Rental Period:</label>
  <div class="col-xs-8">
      <select class="form-control " name="period">
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
</div>
<div class="form-group col-md-6">
  
  <label class="control-label col-xs-4"  for="sel1">Payment For:</label>
  <div class="col-xs-8">
      <select class="form-control " name="type">
        <option>Monthly Rent</option>
        <option>Deposit</option>
        <option>Electricity</option>
        <option>Water</option>
		<option>Garbage Collection</option>
		<option>Legal Fees</option>
		<option>Security</option>
      </select>
</div>
</div>
 
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">First Name:</label>
  <div class="col-xs-8">
  <input class="form-control" name="fname" type="text" placeholder=" First Name" required >
  
</div>
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="lname">Last Name:</label>
  <div class="col-xs-8">
  
  <input class="form-control" name="lname" type="text" placeholder=" Last Name" required>
</div>
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">Payment Mode:</label>
  <div class="col-xs-8">
  
 <select class="form-control " name="mode">
        <option>Cash</option>
        <option>Bank Deposit</option>
        <option>Mpesa</option>
        <option>Cheque</option>
      </select>
</div>
</div>


<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">Payment Id:</label>
  <div class="col-xs-8">
<input class="form-control" name="serial" type="text" placeholder=" Payment ID" required>
</div>
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">Phone No:</label>
  <div class="col-xs-8">
  
  <input class="form-control" name="phone" type="text" placeholder="Phone Number" required>
</div>
</div>


<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">Email:</label>
  <div class="col-xs-8">
  
  <input class="form-control" name="email" type="text" placeholder=" Email" required>
</div>
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">ID Number:</label>
  <div class="col-xs-8">
  
  <input class="form-control" name="idnumber" type="text" placeholder=" Mobile Number" required>
</div>
</div>
 
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">Ammount:</label>
  <div class="col-xs-8">
  
  <input class="form-control" name="ammount" type="text" placeholder=" Ammount" required>
</div>
</div>
<div class="row">
<div class="col-md-1">
<button type="submit" class="btn btn-default "   name='submit'>Save</button>
</div>
</div>

</form>	
</div>
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
    
       




<?php  include ('includes/footer.php'); ?>