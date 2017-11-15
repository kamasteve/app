<?php include ('includes/header.php');
$result1 = mysqli_query($con,"SELECT * FROM company_data");
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
$result = mysqli_query($con,"SELECT * FROM register WHERE username ='$_id'");
while($row = mysqli_fetch_array($result)):
$pageid=1;
 ?>

<div class="ch-container">
	<div class="row">
 <?php include ('includes/left_sidebar.php'); 

 ?>
 <div id="content" class="col-md-10">
 
    <div class="box col-md-12">
        <div class="box-inner">
          <div class="vd_content-section clearfix">
            <div class="row">
              
              <div class="col-md-12 profile1">
                <div class="tabs widget">
  <ul class="nav nav-tabs widget">
    <li class="active"> <a data-toggle="tab" href="#profile-tab"> Profile <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
    
  </ul>
  <div class="tab-content">
    <div id="profile-tab" class="tab-pane active">
      <div class="pd-20">
<div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="glyphicon glyphicon-edit"></i> Edit </a> </div>      
        <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="glyphicon glyphicon-user"></i> ABOUT</h3>
        <div class="row">
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">First Name:</label>
              <div class="col-xs-7 controls"><?php echo ($row['fname']); ?>
</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Last Name:</label>
              <div class="col-xs-7 controls"><?php echo ($row['lname']); ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">User Name:</label>
              <div class="col-xs-7 controls"><?php echo ($row['username']); ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Email:</label>
              <div class="col-xs-7 controls"><?php echo ($row['email']); ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Phone:</label>
              <div class="col-xs-7 controls"><?php echo ($row['phone']); ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Country:</label>
              <div class="col-xs-7 controls"><?php echo ($row['nationality']); ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Address:</label>
              <div class="col-xs-7 controls"> </div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Company:</label>
              <div class="col-xs-7 controls"><?php echo $name; ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          
         
        </div>
        <hr class="pd-10">
        <div class="row">
          <div class="col-sm-7 mgbt-xs-20">
            <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-file-text-o mgr-10 profile-icon"></i>Billing Info</h3>
            <div class="content-list content-menu">
              <ul class="list-wrapper">
                <li class="mgbt-xs-10"> <span class="menu-icon vd_green"><i class="fa  fa-circle-o"></i></span> <span class="menu-text"> Company</a> Adress  <span class="menu-info"><span class="menu-date"><?php echo $Adress ?></span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Mobile</a> Number</a> <span class="menu-info"><span class="menu-date"><?php echo $phone ?></span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Location </a> </a> <span class="menu-info"><span class="menu-date"> <?php echo $Adress1 ?></span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Email</a> <span class="menu-info"><span class="menu-date"> <?php echo $email?></span></span> </span> </li>
				<li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Website </a> <span class="menu-info"><span class="menu-date"> <?php echo $website?></span></span> </span> </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-5">
            <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-trophy mgr-10 profile-icon"></i> Properties</h3>
            <div class="content-list content-menu">
              <ul class="list-wrapper">
                <li class="mgbt-xs-10"> <span class="menu-icon vd_green"><i class="fa  fa-circle-o"></i></span> <span class="menu-text"> Physical</a> Location  <span class="menu-info"><span class="menu-date"><?php echo $Adress1 ?></span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Postal</a> Code</a> <span class="menu-info"><span class="menu-date"><?php echo $code ?></span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Location </a> </a> <span class="menu-info"><span class="menu-date"> <?php echo $Adress1 ?></span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Email</a> <span class="menu-info"><span class="menu-date"> <?php echo $email?></span></span> </span> </li>
				<li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Website </a> <span class="menu-info"><span class="menu-date"> <?php echo $website?></span></span> </span> </li>
              </ul>
            </div>            
          </div>
        </div>
        <!-- row -->
        <hr class="pd-10">
        
        <!-- row --> 
      </div>
      <!-- pd-20 --> 
    </div>
    <!-- home-tab -->
    
    
    
     <!-- photos tab -->
     <!-- photos tab -->  
     <!-- groups tab -->   
    
  </div>
  <!-- tab-content --> 
</div>
<!-- tabs-widget -->              </div>
            </div>
            <!-- row --> 
            
          </div>
          <!-- .vd_content-section --> 
          </div>
        </div>
	
		</div>
		</div>
		
		
 <?php  
  endwhile;
    mysqli_free_result($result);
mysqli_close($con);
 include ('includes/footer.php'); ?>