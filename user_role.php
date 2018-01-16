<?php include ('includes/header.php');

$pageid=1;

		
 ?>
 <script type="text/javascript">
$(document).ready(function(){
    $('#category_role').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'http://localhost/app/ajax/user_role_map.php',
                data:'menu_id='+countryID,
                success:function(html){
                    $('#role_name').html(html);
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
<script type="text/javascript">
$(function () {
    $('#update_profile').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://localhost/app/ajax/new_role.php";
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
<script type="text/javascript">
$(function () {
    $('#add_role_map').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://localhost/app/ajax/new_role_map.php";
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
                        $('#add_role_map').find('.messages').html(alertBox);
                        $('#add_role_map')[0].reset();
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
	<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Role Name:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
  <input class="form-control" name="rname" id="rname" type="text" placeholder=" Role Name"  required>
</div>
</div>	  
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Role Description:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
  <input class="form-control" name="rdescription" id="rdescription" type="text"  placeholder="Role Description"  required>
</div>
</div>

<div class="form-group col-md-6 ">
<label class="control-label col-xs-4" for="text">Unique ID:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
 <input class="form-control" name="unique_id" id="unique_id" type="text" placeholder="unique_id" >
  
</div>
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">Select Parent Role:</label>
		<div class=" input-group  col-xs-8">
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
  
</div>


<div class="form-group ">
<label class="control-label col-xs-2" for="text"></label>
		<div class="col-xs-">
		<button type="submit" class="button "   name='submit'>Create Role</button>
		</div>
		</div>
		</div>
		</form>
		

 <fieldset>
    <legend class='legend'><i class="glyphicon glyphicon-plus"></i>Add Previldges to Role</legend>
	
<form class="form-horizontal" method='POST'  id='add_role_map' name='add_role_map'>
<div class='alert messages'> </div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">Select User Type</label>
		<div class=" input-group  col-xs-8">
	<?php
    //Include database configuration file
    
    
    //Get all country data
    $query = $con->query("SELECT * FROM user_types  ORDER BY id ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
    <select class='form-control' name="parent_role" id="parent_role">
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
  

</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="fname">Select Role Category:</label>
		<div class=" input-group  col-xs-8">
	<?php
    //Include database configuration file
    
    
    //Get all country data
    $query = $con->query("SELECT * FROM parent_menu  ORDER BY menu_id ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
    <select class='form-control' name="category_role" id="category_role">
        <option value="">Select Role</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['menu_id'].'">'.$row['name'].'</option>';
            }
        }else{
            echo '<option value="">Roles Not created</option>';
        }
        ?>
    </select>
	
</div>
</div>
<div class="form-group col-md-6">
	<label class="control-label col-xs-4" for="fname">Select Role:</label>
	<div class=" input-group  col-xs-8">
			<select class='form-control' name="role_name" id="role_name">
        <option value="">Select Category First</option>
    </select>
	</div>
</div>

<div class="form-group col-md-6 ">
<label class="control-label col-xs-4" for="text">Unique ID:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
 <input class="form-control" name="unique_id" id="unique_id" type="text" placeholder="unique_id" >
  
</div>
</div>
<!-- <input type="hidden" name="property_id" value="<?php // echo  $var_value; ?> "/> -->
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text"></label>
<div class="input-group  col-xs-8" id="invoice_due_text">
<button type="submit" class="button ">
<i class="glyphicon glyphicon-floppy-save"></i> 
 Save
  
</button>

</div>
</div>

</form>
	</fieldset>
	
          <!-- .vd_content-section --> 
          </div>
        </div>
		</div>
		
	
		</div>
		</div>
		
<?php  

 include ('includes/footer.php'); ?>