

<?php include ('includes/header.php'); 


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
</style>

<script type="text/javascript" language="javascript" class="init">
$(document).ready(function() {

	$('#example').DataTable( {
	dom: 'T<"clear">lfrtip',
	tableTools: {
        "sSwfPath": "/swf/copy_csv_xls_pdf.swf"
    }
	} );
} );
</script>
<div class="ch-container">
	<div class="row">
		<!-- left menu starts -->
		<?php include ('includes/left_sidebar.php'); ?>
		<!--/span-->
		<!-- left menu ends -->
		
<div id="content" class="col-lg-10 col-sm-10">
<!-- content starts -->
<div class="row">
	<div class="box col-md-12">
		<div class="box-inner">
		<div class="">
		<div class="alert_msg" id='alert_msg1' style='display:none;'></div>
			
			
			<div class="box-icon">
				
				<button type="button" class="btn gglyphicon glyphicon-plus btn-default" data-toggle="modal" data-target="#myModal">Add Tenants</button>
				<br />
				
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">×</button>
							</div>
							<!---Add Tentants Dive Start-->
							<div class="modal-body">
								
								<form class="form-horizontal tentant_cls" method='POST'  id='add_tentant' name='add_tentant'>
								<div id='alert_msg' style='display:none;'></div><br />
									<div class="form-group">
										<label class="control-label col-xs-3" for="property">Property :</label>
										<div class="col-xs-9">
											<select class="form-control" name="property"  onchange='get_owner_property(this.value);'>
											<option value='0'>Select Property owner</option>
												<?php 
												if(!empty($owner_arr)){
												foreach($owner_arr as $owner){ ?>
											<option value='<?php  echo $owner['owner_id']; ?>'><?php echo $owner['owner_name']; ?></option>	
											<?php	}} ?>
												
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3" for="username">Property Type :</label>
										<div class="col-xs-9">
											<select class="form-control" name="type" id='type_id'>
												
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
											<textarea rows="3" class="form-control" name="addres" placeholder="Postal Address"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3" for="Deposit">Deposit:</label>
										<div class="col-xs-9">
											<input type="text" class="form-control" name="deposit" placeholder="Deposit ">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3" for="confirmPassword">Monthly Rent:</label>
										<div class="col-xs-9">
											<input type="rent" class="form-control" name="rent" placeholder="Monthly Rent">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3">gender:</label>
										<div class="col-xs-2">
											<label class="radio-inline">
											<input type="radio" checked='checked' name="genderRadios" value="male"> Male </label>
										</div>
										<div class="col-xs-2">
											<label class="radio-inline">
											<input type="radio" name="genderRadios" value="female"> Female </label>
										</div>
									</div>
									<div class="form-group ">
										<br>
										<div class="form-group ">
											<div class="col-xs-offset-3 col-xs-9 tentant_footer_cls">
										<button class="submit" type="submit" name="button" value='submit'>Save changes</button>
											</div>
										</div>
									</form>
								</div>
								
							</div>
							<!---Add Tentants Dive End-->
						</div>
					</div>
				</div>
			</div>
		</div>
<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <th>
			 Id
		</th>
		<th>
			 First Name
		</th>
		<th>
			 Last Name
		</th>
		<th>
			 Email
		</th>
		<th>
			 Phone
		</th>
		<th>
			 Monthly Rent
		</th>
		<th>
			 Deposit
		</th>
		<th>
			 Adress
		</th>
		<th>
			 Property
		</th>
		<th >
			 Action 
		</th>
    </thead>
 
    <tbody>
	<?php
	$result = mysqli_query($con,"SELECT t.*,o.*,p.* FROM tenants as t left join owner as o ON t.property = o.owner_id left join  properties as p ON t.type = p.id ");
	while($row = mysqli_fetch_array($result)) {
	?>
        <tr>
            <td><?php echo $row['tenant_id']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['lname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['monthly_rent']; ?></td>
            <td><?php echo $row['deposit']; ?></td>
            <td><?php echo $row['adress']; ?></td>
            <td><?php echo $row['owner_name']; ?></td>
            <td >
			<form action="edit_tenant.php" method="post">
		
			<button type="submit" class="btn "   name='submit' ><span class="glyphicon glyphicon-edit" aria-hidden="true" varname=<?php $row['tenant_id'] ?>></span> Edit</button>	
			<!-- <button style='margin-top:5px;' type='button' class='btn btn-default' onclick='delete_tenate("<?php echo $row['tenant_id']; ?>")'>Delete</button> -->
			</form>
			</td>
        </tr><!---Edit Tentants Dive Start-->

<div class="modal fade" id="model_<?php echo $row['tenant_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

<div class="modal-dialog">
<div class="modal-content" >
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
</div>

<div class="modal-body">
<style>
.form-group{
display:table;
clear:both;
width:100%;
}

</style>
<?php 
$tenant_id = $row['tenant_id'];
$sql1=mysqli_query($dbc,"SELECT t.*,o.*,p.* FROM tenants as t
left join owner as o ON t.property = o.owner_id
left join  properties as p ON t.type = p.id WHERE t.tenant_id='$tenant_id'");
$tenant_arr = mysqli_fetch_array($sql1);
?>
<form class="form-horizontal tentant_cls" method='POST'  id='edit_tentant_<?php echo $tenant_id; ?>' name='edit_tentant'>

<input type="hidden"  name="tenant_id" id="tenant_id"  value='<?php echo $tenant_arr['tenant_id']; ?>'>
<div class="alert_msg" id='alert_msg_<?php echo $tenant_arr['tenant_id']; ?>' style='display:none;'></div><br />
	<div class="form-group">
		<label class="control-label col-xs-3" for="property">Property :</label>
		<div class="col-xs-9">
			<select class="form-control" name="property"  onchange='get_owner_edit_property(this.value);'>
			<option value='0'>Select Property owner</option>
				<?php 
				if(!empty($owner_arr)){
				foreach($owner_arr as $owner){ ?>
			<option <?php if($tenant_arr['property']==$owner['owner_id']){ echo 'selected="selected"'; } ?>  value='<?php  echo $owner['owner_id']; ?>'><?php echo $owner['owner_name']; ?></option>	
			<?php	}} ?>
				
			</select>
		</div>
	</div>
	<div class="form-group" >
		<label class="control-label col-xs-3" for="username">Property Type :</label>
		<div class="col-xs-9">
			<select class="form-control" name="type" id='type_edit_id'>
				
				<?php 
				if(!empty($pro_arr)){
				foreach($pro_arr as $pro){ ?>
					<option <?php if($tenant_arr['type']==$pro['id']){ echo 'selected="selected"'; } ?>  value='<?php  echo $pro['id']; ?>'><?php echo $pro['name']; ?></option>	
				<?php	}} ?>
				
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-3" for="fname">First Name:</label>
		<div class="col-xs-9">
			<input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" value='<?php echo $tenant_arr['fname']; ?>'>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-3" for="lame">Last Name:</label>
		<div class="col-xs-9">
			<input type="text" class="form-control" name="lname" value='<?php  echo  $tenant_arr['lname']; ?>' placeholder="Last Name">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-3" for="email">Email:</label>
		<div class="col-xs-9">
			<input type="email" class="form-control" value='<?php echo $tenant_arr['email']; ?>'  name="email" placeholder="Email">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-3"  for="phoneNumber">Phone:</label>
		<div class="col-xs-9">
			<input type="tel" class="form-control" value='<?php echo $tenant_arr['phone']; ?>'   name="phone" placeholder="Phone Number">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-3" for="address">Address:</label>
		<div class="col-xs-9">
			<textarea rows="3" class="form-control"  name="addres" placeholder="Postal Address"><?php echo $tenant_arr['adress']; ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-3" for="Deposit">Deposit:</label>
		<div class="col-xs-9">
			<input type="text" class="form-control" value='<?php echo $tenant_arr['deposit']; ?>'   name="deposit" placeholder="Deposit ">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-3" for="confirmPassword">Monthly Rent:</label>
		<div class="col-xs-9">
			<input type="rent" class="form-control" value='<?php echo $tenant_arr['monthly_rent']; ?>' name="rent" placeholder="Monthly Rent">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-3">gender:</label>
		<div class="col-xs-2">
			<label class="radio-inline">
			<input type="radio" checked='checked' <?php if($tenant_arr['gender']=='male'){ echo "checked='checked'"; } ?> name="genderRadios" value="male"> Male </label>
		</div>
		<div class="col-xs-2">
			<label class="radio-inline">
			<input type="radio" name="genderRadios" <?php if($tenant_arr['gender']=='female'){ echo "checked='checked'"; } ?> value="female"> Female </label>
		</div>
	</div>
	<div class="form-group ">
		<br>
		<div class="form-group ">
			<div class="col-xs-offset-3 col-xs-9 tentant_footer_cls">
		<input class="submit" type="submit" name="button" value='Update changes'>
			</div>
		</div>
</div>
</form>
</div>

</div>
</div>
</div>

<script type="text/javascript">
var App1 = {
	show_loading1:function() {
		$("#model_<?php echo $tenant_id; ?>").append("<div class='ajax_overlay'></div><div class='ajax_load'><img src='"+base_url+"images/loadingAnimation.gif' /></div>");
		$('.ajax_overlay, .ajax_load').show();
	},
	hide_loading1:function() {
		$('.ajax_load, .ajax_overlay').hide();
	}
}

$( "#edit_tentant_<?php echo $tenant_id; ?>" ).validate({
		rules: {
			property: {
				required: true
			},
			fname: {
				required: true
			},
			lname: {
				required: true
			},
			email: {
				required: true,
				email:true
			},
			phone: {
				required: true,
				number: true
			},
			addres: {
				required: true
			},
			deposit: {
				required: true,
				number: true
			},
			rent: {
				required: true,
				number: true
			}
			
		},
		messages: {
				property: {
					required: "Please select your property."
				},
				fname: {
					required: "Please enter your first name"
				},
				lname: {
					required: "Please enter your last name."
				},
				email: {
					required: "Please enter your email."
				},
				phone: {
					required: "Please enter your phone number."
				},
				addres: {
					required: "Please enter your address."
				},
				deposit: {
					required: "Please enter your deposit amount."
				},
				rent: {
					required: "Please enter your rent."
				}
			},
			submitHandler: function(form) {
				var ajaxData = new FormData($('#edit_tentant_<?php echo $tenant_id; ?>')[0]);
				ajaxData.append('type_val', 'edit_tentant');
				$.ajax({
					beforeSend: function(){ 
						App1.show_loading1();
					},
					complete: function(){   
						App1.hide_loading1();
					},
					type: "POST",
					url: base_url+'/ajax_handler.php',
					data: ajaxData,
					contentType: false,
					processData: false,
					success: function(str){ //alert(str)
						if(str==1){
							$("#alert_msg_<?php echo $tenant_id; ?>").css('display','block');
							$("#alert_msg_<?php echo $tenant_id; ?>").html('Your have successfully edit your tentant.');
							$('#alert_msg_<?php echo $tenant_id; ?>').scrollTop();
							setTimeout(function(){
								$("#alert_msg_<?php echo $tenant_id; ?>").fadeOut("slow", function () {});
								location.reload();
							}, 3000);
							
						}else{
							$("#alert_msg_<?php echo $tenant_id; ?>").css('display','block');
							$("#alert_msg_<?php echo $tenant_id; ?>").html('Error ocurred to edit your tentant.');
							$('#alert_msg_<?php echo $tenant_id; ?>').scrollTop();
							setTimeout(function(){
								$("#alert_msg_<?php echo $tenant_id; ?>").fadeOut("slow", function () {});
								location.reload();
							}, 3000);
						}
					}
				 });
			}
});
</script>
<!---Edit Tentants Dive End-->
	<?php }
mysqli_close($con);
	?>	
    </tbody>
</table>
</div>
<script type="text/javascript" language="javascript" class="init">
	$(document).ready(function() {
		var table = $('#example').DataTable();
		var tt = new $.fn.dataTable.TableTools( table );
		$( tt.fnContainer() ).insertBefore('div.dataTables_wrapper');
		
	} );
</script>
<!--/row-->
<!-- content ends -->
</div>
<!--/#content.col-md-0-->
</div>

<script type="text/javascript">
$( "#add_tentant" ).validate({
		rules: {
			property: {
				required: true
			},
			fname: {
				required: true
			},
			lname: {
				required: true
			},
			email: {
				required: true,
				email:true
			},
			phone: {
				required: true,
				number: true
			},
			addres: {
				required: true
			},
			deposit: {
				required: true,
				number: true
			},
			rent: {
				required: true,
				number: true
			}
			
		},
		messages: {
				property: {
					required: "Please select your property."
				},
				fname: {
					required: "Please enter your first name"
				},
				lname: {
					required: "Please enter your last name."
				},
				email: {
					required: "Please enter your email."
				},
				phone: {
					required: "Please enter your phone number."
				},
				addres: {
					required: "Please enter your address."
				},
				deposit: {
					required: "Please enter your deposit amount."
				},
				rent: {
					required: "Please enter your rent."
				}
			},
			submitHandler: function(form) {
				ajax_submit_form();
			}
});
</script>
</div>			
<?php include ('includes/footer.php'); ?>
</body>
</html>
