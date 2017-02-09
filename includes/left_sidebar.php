<?php 
echo '<div class="col-md-2">';
echo '<div class="sidebar-nav">';
	echo '<div class="nav-canvas">';
		echo '<div class="nav-sm nav nav-stacked">';
		echo '</div>';
		echo '<ul class="nav nav-pills nav-stacked main-menu">';
			echo '<li class="nav-header">Main</li>';
			
	if ($pageid >=100 && $pageid<=200){
	echo '<li><a class="ajax-link" href="invoice.php"><i class="glyphicon glyphicon-list-alt"></i><span>Invoices</a></li>';
	echo '<li><a class="ajax-link" href="creat_invoice.php"><i class="glyphicon glyphicon-picture"></i><span> Create Inovice</span></a></li>';
	echo '<li><a class="ajax-link" href="invoice-list.php"><i class="glyphicon glyphicon-picture"></i><span> Manage Invoices</span></a></li>';
	echo '<li><a class="ajax-link" href="payments.php"><i class="glyphicon glyphicon-list-alt"></i><span> Payments</span></a></li>';
		echo '<li><a class="ajax-link" href="edit_payments.php"><i class="glyphicon glyphicon-list-alt"></i><span>Edit Payments</span></a></li>';
		
		echo '<li><a class="ajax-link" href="expenses.php"><i class="glyphicon glyphicon-picture"></i><span> Expenses</span></a></li>';
		echo '<li><a class="ajax-link" href="expenses.php"><i class="glyphicon glyphicon-picture"></i><span> Manage Invoices</span></a></li>';
		
	}
	elseif ($pageid >200 && $pageid<=300){
	echo '<li><a class="ajax-link" href="tenants1.php"><i class="glyphicon glyphicon-eye-open"></i><span> Tenants</span></a></li>';
				echo '<li><a class="ajax-link" href="apartments.php"><i class="glyphicon glyphicon-edit"></i><span> All Apartments</span></a></li>';
				echo '<li><a class="ajax-link" href="leased_apartments.php"><i class="glyphicon glyphicon-edit"></i><span> Leased Apartments</span></a></li>';
				echo '<li><a class="ajax-link" href="vacant_apartments.php"><i class="glyphicon glyphicon-edit"></i><span> Vacant Apartments</span></a></li>';
				
				echo '<li><a class="ajax-link" href="landlord.php"><i class="glyphicon glyphicon-font"></i><span> Property Owners</span></a></li>';
				echo '<li><a class="ajax-link" href="new_tenant.php"><i class="glyphicon glyphicon-list-alt"></i><span> Add New Tenants</span></a></li>';
				echo '<li><a class="ajax-link" href="add_property.php"><i class="glyphicon glyphicon-pencil"></i><span> Add New Property</span></a></li>';
				echo '<li><a class="ajax-link" href="leases.php"><i class="glyphicon glyphicon-file"></i><span> Lease Agreaments</span></a></li>';
				echo '<li><a class="ajax-link" href="maintenance_request.php"><i class="glyphicon glyphicon-th"></i><span> Maintenance Requests</span></a></li>';
				}
				elseif ($pageid >300 && $pageid<=400) {
				echo '<li><a class="ajax-link" href="#"><i class="glyphicon glyphicon-align-justify"></i><span> Monthly Report</span></a></li>';
				echo '<li><a class="ajax-link" href="#"><i class="glyphicon glyphicon-calendar"></i><span> Agency Commission</span></a></li>';
				}
				elseif ($pageid >0 && $pageid<=100){
				echo '<li><a class="ajax-link" href="profile.php"><i class="glyphicon glyphicon-calendar"></i><span> Profile</span></a></li>';
				echo '<li><a class="ajax-link" href="editprofile.php"><i class="glyphicon glyphicon-align-justify"></i><span> Edit profile</span></a></li>';
				echo '<li><a class="ajax-link" href="#"><i class="glyphicon glyphicon-calendar"></i><span> Edit Company Data</span></a></li>';
				echo '<li><a class="ajax-link" href="#"><i class="glyphicon glyphicon-calendar"></i><span> Edit SMS settings</span></a></li>';
				echo '<li><a class="ajax-link" href="#"><i class="glyphicon glyphicon-calendar"></i><span> Edit Billing info </span></a></li>';
				}
?>

				
				
				
			</ul>
		</div>
	</div>
</div>


