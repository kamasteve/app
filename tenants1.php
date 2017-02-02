

<?php include ('includes/header.php'); 


$sql1 = mysqli_query($con,"SELECT * FROM properties");
while($row1 = mysqli_fetch_array($sql1)) {
$pro_arr[]=$row1;

}
$pageid=201;
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
			 Property
		</th>
		<th>
			Rental Unit
		</th>
		<th>
			 Bank
		</th>
		<th>
			 Account Number
		</th>
		<th >
			 Action 
		</th>
    </thead>
 
    <tbody>
	<?php
	$result = mysqli_query($con,"SELECT * FROM tenants ");
	while($row = mysqli_fetch_array($result)): 
	$wishID = $row["tenant_id"];
          echo  "<tr><td>" . htmlentities($row["tenant_id"]) . "</td>";
           echo "<td>" . htmlentities ($row['fname']) . "</td>";
           echo "<td>" . htmlentities ($row['lname']) . "</td>";
           echo "<td>" . htmlentities ($row['email']) . "</td>";
           echo "<td>" . htmlentities ($row['phone']) . "</td>";
           echo "<td>" . htmlentities ($row['property']) . "</td>";
           echo "<td>". htmlentities ($row['unit']) . "</td>";
           echo "<td>" . htmlentities ($row['bank']) . "</td>";
           echo "<td>" . htmlentities ($row['acountnumber']). "</td>" ;
		   
			?>
			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="<?php echo $wishID; ?> "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			<?php	
          echo  "</tr>\n";
        endwhile;
    mysqli_free_result($result);
mysqli_close($con);
?>	
    </tbody>
</table>
</div>

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

