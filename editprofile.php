<?php include ('includes/header.php');
$result = mysqli_query($con,"SELECT * FROM register WHERE username ='$_id'");
while($row = mysqli_fetch_array($result)):
$pageid=1;
$result = mysqli_query($con,"SELECT * FROM register WHERE username ='$_id'");

if($result) {
	while ($row = mysqli_fetch_assoc($result)) {
		$fname = $row['fname']; // customer name
		$lname = $row['lname']; // last name
		$nationality = $row['nationality']; // Nationality
		$email = $row['email']; // customer email
		$phone = $row['phone']; // Phone Number
		$username = $row['username']; // Username
		$adress= $row['role'];
		$company = $row['company'];
		}
		}
		
 ?>
<script type="text/javascript">
$(function () {
    $('#update_profile').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://localhost/app/ajax/update_profile.php";
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    var messageAlert = 'alert-' + data;
                    var messageText = data;
                    //alert(data);
                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#update_profile').find('.messages').html(alertBox);
                        $('#update_profile')[0].reset();
						//window.location.reload();
                    }
                }
            });
            return false;
        }
    })
});
</script>

<div class="ch-container">
	<div class="row">
 <?php include ('includes/left_sidebar.php');  ?>
 <div id="content" class="col-md-10">
 
    <div class="box col-md-12">
        <div class="box-inner">
		<form id="update_profile" action="update_profile.php" method="post">
  <div class="form-group" >
         <div class='messages alert '> </div>
	<div class="form-group ">
<label class="control-label col-xs-3" for="text">First Name:</label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
  <input class="form-control" name="fname" value="<?php echo $fname;?>" type="text" placeholder=" First Name"  required>
  <span class="help-block" id="error"></span> 
</div>
</div>	  
<div class="form-group ">
<label class="control-label col-xs-3" for="text">Last Name:</label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
  <input class="form-control" name="lname" type="text" value="<?php echo $lname; ?>" placeholder=" Last Name"  required>
  <span class="help-block" id="error"></span> 
</div>
</div>

<div class="form-group ">
<label class="control-label col-xs-3" for="text">Username:</label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
 <input class="form-control" name="username" type="text" placeholder="Username" value="<?php echo $username; ?>" readonly>
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group ">
<label class="control-label col-xs-3" for="text">Email:</label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
  <input class="form-control" name="email" type="text" placeholder="Email" value="<?php echo $email; ?>"  readonly>
  <span class="help-block" id="error"></span> 
</div>
</div>

<div class="form-group ">
<label class="control-label col-xs-3" for="text">Phone:</label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
  <input class="form-control" name="phone_number" type="text" placeholder=" Phone Number" value="<?php echo $phone; ?>" required>
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group ">
<label class="control-label col-xs-3" for="text">Nationality:</label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
   <input class="form-control" name="country" type="text" placeholder=" Country" value="<?php echo $nationality; ?>" required>
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group ">
<label class="control-label col-xs-3" for="text">Company:</label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
   <input class="form-control" name="company" type="text" placeholder=" Company"value="<?php echo $company; ?>" required>
  <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group ">
	
		<label class="control-label col-xs-3" for="fname">Select Property:</label>
		<div class=" input-group  col-xs-5">
	<?php
    //Include database configuration file
    
    
    //Get all country data
    $query = $con->query("SELECT * FROM user_types  ORDER BY id ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
    <select class='form-control' name="role" id="role">
        <option value="">Select Role</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
            }
        }else{
            echo '<option value="">Roles Not created</option>';
        }
        ?>
    </select>
</div>
 
 
<div class="row">
		<div class="col-xs-4">
		<button type="submit" class="button "   name='submit'>Update Profile</button>
		</div>
		</div>
          <!-- .vd_content-section --> 
          </div>
        </div>
		</div>
		</form>
	
		</div>
		</div>
		
<?php  
  endwhile;
    mysqli_free_result($result);
mysqli_close($con);
 include ('includes/footer.php'); ?>