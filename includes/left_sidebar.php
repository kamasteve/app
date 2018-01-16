<?php 
//include ('database_connection.php');
echo '<div class="col-md-2">';
echo '<div class="sidebar-nav">';
	echo '<div class="nav-canvas">';
		echo '<div class="nav-sm nav nav-stacked">';
		echo '</div>';
		echo '<ul class="nav nav-pills nav-stacked main-menu">';
			echo '<li class="nav-header">Main</li>';
			
	
		$query = $con->query("SELECT * FROM menu_details where PARENT_MENU_ID='2' ORDER BY menu_id ASC");
				$rowCount = $query->num_rows;
				if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
			echo '<li><a class="ajax-link" href="'.$row['MENU_URL'].'"><i class="'.$row['MENU_ICON'].'"></i><span> '.$row['DISPLAY_STRING'].'</span></a></li>';
                //echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
            }
        }else{
            echo '<option value="">Roles Not created</option>';
        }
	
if ($pageid >200 && $pageid<=300){
		
	$query = $con->query("SELECT * FROM menu_details where PARENT_MENU_ID='3' ORDER BY menu_id ASC");
				$rowCount = $query->num_rows;
				if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
			echo '<li><a class="ajax-link" href="'.$row['MENU_URL'].'"><i class="'.$row['MENU_ICON'].'"></i><span> '.$row['DISPLAY_STRING'].'</span></a></li>';
                //echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
            }
        }else{
            echo '<option value="">Roles Not created</option>';
        }
				}
				elseif ($pageid >300 && $pageid<=400) {
				//$query ="SELECT * from menu_details where menu_id='2'";
				$query = $con->query("SELECT * FROM menu_details where PARENT_MENU_ID='4' ORDER BY menu_id ASC");
				$rowCount = $query->num_rows;
				if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
			echo '<li><a class="ajax-link" href="'.$row['MENU_URL'].'"><i class="'.$row['MENU_ICON'].'"></i><span> '.$row['DISPLAY_STRING'].'</span></a></li>';
                //echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
            }
        }else{
            echo '<option value="">Roles Not created</option>';
        }
				}
				elseif ($pageid >0 && $pageid<=100){
			    //$query ="SELECT * from menu_details where menu_id='2'";
				$query = $con->query("SELECT * FROM menu_details where PARENT_MENU_ID='1' ORDER BY menu_id ASC");
				$rowCount = $query->num_rows;
				if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
			echo '<li><a class="ajax-link" href="'.$row['MENU_URL'].'"><i class="'.$row['MENU_ICON'].'"></i><span> '.$row['DISPLAY_STRING'].'</span></a></li>';
                //echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
            }
        }else{
            echo '<option value="">Roles Not created</option>';
        }
        /**<!--
				echo '<li><a class="ajax-link" href="main.php"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a></li>';
				echo '<li><a class="ajax-link" href="profile.php"><i class="glyphicon glyphicon-user"></i><span> Profile</span></a></li>';
				echo '<li><a class="ajax-link" href="editprofile.php"><i class="glyphicon glyphicon-edit"></i><span> Edit profile</span></a></li>';
				echo '<li><a class="ajax-link" href="register.php"><i class="glyphicon glyphicon-plus"></i><span> Add User</span></a></li>';
				echo '<li><a class="ajax-link" href="manage_users.php"><i class="glyphicon glyphicon-edit"></i><span> Manage Users</span></a></li>';
				echo '<li><a class="ajax-link" href="company_data.php"><i class="glyphicon glyphicon-tower "></i><span> Edit Company Data</span></a></li>';
				echo '<li><a class="ajax-link" href="user_role.php"><i class="glyphicon glyphicon-envelope"></i><span>Create User Role</span></a></li>';
				echo '<li><a class="ajax-link" href="#"><i class="glyphicon glyphicon-calendar"></i><span> Edit Billing info </span></a></li>';
				--!> **/
				}
			
?>

				
				
				
			</ul>
		</div>
	</div>
</div>


