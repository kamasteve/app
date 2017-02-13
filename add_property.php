<?php include ('includes/header.php');
include ('includes/config.php');
$pageid=209;
function getpropertyid() {

	// Connect to the database
	//$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	$query = "SELECT property_id FROM properties ORDER BY property_id DESC LIMIT 1";

	if ($result = $mysqli->query($query)) {

		$row_cnt = $result->num_rows;

	    $row = mysqli_fetch_assoc($result);

	    //var_dump($row);

	    if($row_cnt == 0){
			echo '101';
		} else {
			echo $row['property_id'] + 1; 
		}

	    // Frees the memory associated with a result
		$result->free();

		// close connection 
		$mysqli->close();
	}
	
}
?>
<script type="text/javascript">
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
   
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row rowadd"><div class="col-xs-3"><input class="form-control" name="unit_id[]" type="text" placeholder="Unit ID" required></div><div class="col-xs-3"><input class="form-control" name="unit_type[]" type="text" placeholder="Unit Type" required></div><div class="col-xs-3"><input class="form-control" name="unit_bed[]" type="text" placeholder="Beds" required></div><div class="col-xs-3"><input class="form-control" name="unit_rent[]" type="text" placeholder="Rent (KSH)" required></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
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
		
		<div class="box col-md-3">
		
		</div>
		<div class="box col-md-9">
  
 <form action="addproperty.php" method="post" onsubmit="return confirm('Do you really want to submit the form?');">
		<div class="form-group">
		<div class="row basicinfo">
       <div class="row">

<div class="col-xs-6">
  
  <input class="form-control" name="name" type="text" placeholder=" Property Name" required>
</div>
<div class="col-xs-3">
  
  <input class="form-control" name="year" type="text" placeholder=" Year Built" required>
</div>
<div class="col-xs-3">
  
  <input class="form-control" name="type" type="text" placeholder=" Property Type" required>
</div>
</div>
<div class="row">
<div class="col-xs-4">
  <input class="form-control" name="property_id" type="text"  placeholder="Property ID" value="<?php getpropertyid(); ?>" >
</div>

<div class="col-xs-4">
  
  <input class="form-control" name="adress" type="text" placeholder=" Street Adress" required>
</div>
<div class="col-xs-4">
  
  <input class="form-control" name="city" type="text" placeholder=" City" required>
</div>
</div>

<div class="row">

<div class="col-xs-3">
  
  <input class="form-control" name="county" type="text" placeholder=" County" required>
</div>
<div class="col-xs-3">
  
  <input class="form-control" name="location" type="text" placeholder="Location" required>
</div>
<div class="col-xs-3">
  
  <input class="form-control" name="zip" type="text" placeholder="Zip" required>
</div>
<div class="col-xs-3">
  
  <input class="form-control" name="country" type="text" placeholder="Country" required>
</div>
</div>

</div>
<button class="add_field_button btn">Add Rental Units</button>

<div class="row rowadd input_fields_wrap">

<div class="col-md-3">
  
  <input class="form-control" name="unit_id[]" type="text" placeholder="Unit ID" required>
</div>
<div class="col-md-3">
  
  <input class="form-control" name="unit_type[]" type="text" placeholder="Unit Type" required>
</div>
<div class="col-md-3">
  <input class="form-control" name="unit_bed[]" type="text" placeholder="Beds" required>
 </div>
<div class="col-md-3">
   <input class="form-control" name="unit_rent[]" type="text" placeholder="Rent (KSH) " required>
</div>
</div>
</div>
<div class="row">
		<div class="col-xs-4">
		<button type="submit" class="btn btn-default" name="submit">Save</button>
		</div>
</div>

		</div>
		</form>
		</div>
		</div>
 
 </div>
 </div>
 </div>
 </div>
 </div>
 <style>
input{
margin-top:35px;
margin-bottom:10px;
}

 </style>
 <?php  include ('includes/footer.php'); ?>