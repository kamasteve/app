<?php include ('includes/header.php');

$result1 = mysqli_query($con,"SELECT * FROM company_data ");
if($result1) {
	while ($row = mysqli_fetch_assoc($result1)) {
		$name = $row['company_name']; // customer name
		$Adress1 = $row['address_1']; // last name
		$Adress = $row['adress_2']; // Nationality
		$email = $row['email']; // customer email
		$phone = $row['phone']; // Phone Number
		$zip = $row['zip']; // Username
		$country= $row['country'];
		$tax = $row['tax_info'];
		$code = $row['code'];
		$website = $row['website'];
		$reg_no = $row['reg_no'];
		}
		}
//include ('includes/config.php');
$pageid=7;
?>
<style>
.form-control{
width:500px;

}
</style>

   
  
<script type="text/javascript">
$(function () {
    $('#new_company').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://localhost/app/ajax/new_company.php";
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
                        $('#new_company').find('.messages').html(alertBox);
                        $('#new_company')[0].reset();
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
 <div id="content" class="col-lg-10 ">
 <div class="row ">
    <div class="box col-md-12">
        <div class="box-inner">
		<div class="box-content row ">
		<div class="form-body">
    <form  method='POST' id="new_company" action="new_company.php" >
	 <div class='messages alert '> </div>
	<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Company Name:</label>
 <div class="input-group col-xs-8 " id="invoice_due_text">
  <input class="form-control" name="cname" type="text" placeholder=" Company Name" value="<?php echo $name; ?>" >
  <span class="help-block" id="error"></span> 
</div>
   
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Company Adress: </label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
 <input class="form-control" name="cadress" type="text" placeholder=" Last Name" value="<?php echo $Adress1;?>" >
</div> 
</div>    
 <div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Zip Code:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
 <input class="form-control" name="zip" id="zip" type="text" placeholder=" Zip Code" value="<?php echo $zip; ?>" > 
 <span class="help-block" id="error"></span> 
</div> 
</div>      
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Company Adress 1</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
 <input class="form-control" name="address2" type="text" placeholder=" Adress 1" value="<?php echo $email; ?>" >
  <span class="help-block" id="error"></span>   
</div>
</div> 
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Postal Code</label>
 <div class="input-group  col-xs-8" id="postal_code">
 <input class="form-control" name="code" type="text" placeholder=" Adress 1" value="<?php echo $code; ?> " >
  <span class="help-block" id="error"></span>   
</div>
</div> 
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Phone Number</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
 <input class="form-control" name="phone_number" type="text" placeholder=" Adress 1" required value="<?php echo $phone; ?>">
  <span class="help-block" id="error"></span>   
</div>
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Country</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
 <input class="form-control" name="country" type="text" placeholder=" Adress 1" value="<?php echo $country; ?>">
  <span class="help-block" id="error"></span>   
</div>
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Email:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
 <input type="text" class="form-control" name="email" id="email" placeholder="Email"  value="<?php echo $email; ?>">
 <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Website:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
 <input type="text" class="form-control" name="website" id="website" placeholder="Website" value="<?php echo $website; ?>">
 <span class="help-block" id="error"></span> 
</div>
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Registration Number:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
 <input type="text" class="form-control" id="reg_no" name="reg_no" placeholder="Registration Number" value="<?php echo $reg_no; ?>">
 
</div>
</div> 	 
 <div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">Tax Information:</label>
 <div class="input-group  col-xs-8" id="invoice_due_text">
 <input type="tel" class="form-control" name="tax_info" placeholder="Tax Information" value="<?php echo $tax; ?>">
</div>
</div> 
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text">User Role:</label>
  <div class="input-group col-xs-8">
		<select class='form-control' name="role" id="state">
        <option value="admin">Administrator</option>
		<option value="user">Normal User</option>
    </select>
	</div>
</div>
<div class="form-group col-md-6">
<label class="control-label col-xs-4" for="text"></label>
 <div class="input-group  col-xs-5" id="invoice_due_text">
 <button class="button" id="btn-signup" type="submit" name="button" value='submit'>REGISTER</button>
		
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


<?php  include ('includes/footer.php'); ?>
