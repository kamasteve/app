<?php include ('includes/header.php'); 
$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;
}
$pageid=101;
?>
<script type="text/javascript" src="js/my_js.js"></script>

<div class="ch-container">
<div class="row">
<?php include ('includes/left_sidebar.php'); ?>
 <div id="content" class="col-lg-10 col-sm-10">
 <div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
		<div class="box-content row">
		<style>

.tentant_footer_cls .box-icon a{
width:auto !important;
height:35px !important;
}
#example{
border: 1px solid #f4f4f4;
}
.table-striped>tbody>tr:nth-child(odd)>td,
.table-striped>tbody>tr:nth-child(odd)>th {
	background-color:#EAEAEA; 
}

.reports{	
 border-top: 2px solid #509111;
}
.table.dataTable thead th, table.dataTable thead td {
    padding: 10px 18px;
    border-bottom: 1px solid #111;
}
</style>
		<script type="text/javascript">
$(function () {
    $('#edit_apartment').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://ec2-18-130-16-81.eu-west-2.compute.amazonaws.com/app/ajax/add_bank.php";
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
                        $('#edit_apartment').find('.messages').html(alertBox);
                        //$('#edit_tentant')[0].reset();
						
                    }
                }
            });
            return false;
        }
    })
});
</script>
		

<div class="row property_edit">
 <fieldset >
    <legend class='legend'><i class="glyphicon glyphicon-plus"></i> New Bank Account</legend>
<form class="form-horizontal" method='POST'  id='edit_apartment' name='edit_apartment'>
<div class=' alert messages '> </div>
	<div class="form-group col-md-6">
		<label class="control-label col-xs-4" for="name">Bank Name:</label>
		<div class=" col-xs-8">
			<input type="text" class="form-control " name="bname" id="bname" placeholder="Bank Name" >
		</div>
		</div>
	<div class="form-group col-md-6">
		<label class="control-label col-xs-4" for="unit">Bank Identifier Code:</label>
		<div class=" col-xs-8">
			<input type="text" class="form-control " name="Identifier" id="Identifier" placeholder="Bank Identifier Code" >
		</div>
	</div>
	<div class="form-group col-md-6">
		<label class="control-label col-xs-4" for="year">Bank Account Number:</label>
		<div class=" col-xs-8">
			<input type="text" class="form-control " name="number" placeholder="Account Number" >
		</div>
	</div>
	<div class="form-group col-md-6">
		<label class="control-label col-xs-4" for="adress">Bank Adress</label>
		<div class="col-xs-8">
			<input type="text" class="form-control" name="adress"  placeholder="Bank Adress">
		</div>
	</div>
	<div class="form-group col-md-6">
	<label class="control-label col-xs-4" for="country">Email:</label>
	<div class="col-xs-8">
	<input type="text" class="form-control"  name="email" placeholder="Email Address">
	</div>
	</div>
	<div class="form-group col-md-6">
	<label class="control-label col-xs-4" for="phone">Phone:</label>
	<div class="col-xs-8">
	<input type="tel" class="form-control"  name="phone" placeholder="Phone Number">
	</div>
	</div>	
	<div class="form-group col-md-6">
	<label class=" col-xs-4 control-label " for="addres">Branch Location:</label>
	<div class="col-xs-8">
	<input type="text" class="form-control"  name="location" placeholder="Branch Location:"> 
	</div>
	</div>
	<div class="form-group col-md-6">
	<label class=" col-xs-4 control-label " for="addres">Country:</label>
	<div class="col-xs-8">
	<input type="text" class="form-control"  name="Country" placeholder="Country"> 
	</div>
	</div>
	<input type="hidden" name="responsible" >
	<div class="form-group col-md-6">
	<div class="col-xs-3">
	</div>
	<div class="col-xs-9">
	<button type="submit" class="button ">
<i class="glyphicon glyphicon-floppy-save"></i> 
 Add Account
  
</button>
			</div>
		</div>

</form>

 </fieldset>
<div class="row property_edit ">
 <fieldset>
    
		<div class="rowadd1">
		<fieldset>
    <legend class='legend'><i class="glyphicon glyphicon-edit icon-white"></i> Edit Units</legend>
		<table id="example" class="display table-striped" cellspacing="0" width="100%">

<thead>
<tr>
<th>Bank Id</th>
<th>Bank Name</th>
<th>
 Bank Code
</th>
<th>Account Number</th>
<th>
 Branch
</th>
<th>Phone Number</th>

<th>Edit</th>
</tr>
</thead>
<tbody>
<?php

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM bank_accounts ");

while($row = mysqli_fetch_array($result)) {
	$wishID = $row["id"];
?>

 <tr>
<td> <?php echo  $row['id']  ?> </td>
<td> <?php echo $row['bank_name']; ?> </td>
<td> <?php echo $row['code']; ?> </td>
<td> <?php echo $row['account_number']; ?> </td>
<td> <?php echo $row['location'] ;?> </td>
<td> <?php echo $row['phone'] ;?> </td>
<td>
        <form name="editWish" action="edit_apartment.php" method="GET">
            <input type="hidden" name="wishID" value="<?php echo $wishID; ?> "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<a class="xyz btn " data-toggle="modal" data-target="#myModal" data-my-id="<?php echo $wishID ;?>">
													<i class="glyphicon glyphicon-edit icon-white"></i>
													Edit
											</a>
        </form>
    </td>
  </tr>

<?php }
mysqli_close($con);
	?>
	</tbody>
	</table>
		</div
		</div>
 </fieldset>
 </div>

 
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">Exit</button>
</div>

<div class="modal-body">
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Unit Id</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="id_" disabled>
  </div>
</div>
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Unit Type</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" name="type" id="type" >
  </div>
</div>
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Bedrooms</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" value="" id="beds" >
  </div>
</div>
<div class="form-group row">
  <label for="external-id" class="col-xs-4 col-form-label">Monthly Rent</label>
  <div class="col-xs-8">
     <input class="form-control" type="text" id="rent" value=""  >
  </div>
  </div>
  <div class="form-group row">
<label class="control-label col-xs-4" for="fname">Unit Status:</label>
   <div class="col-xs-8">
  
 <select class="form-control " name="mode" id="mode">
        <option value="active">Active</option>
        <option value="vacant">Vacant</option><input type="hidden" id="responsible" value="<?php echo  $_id; ?> "/>
		</div>
		</div>
  <input type="hidden" id="responsible" value="<?php echo  $_id; ?> "/>



<button type="button" class="  btn-warning" data-dismiss="modal">Cancel</button>
<button type="submit" class=" btn-success" data-dismiss="modal" id="update_unit">Update</button>


</div>
</div>
</div>
</div>
</div>
 </div>
 </div>
 </div>
 </div>

 <?php  include ('includes/footer.php'); ?>
 