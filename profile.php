<?php include ('includes/header.php');
$result = mysqli_query($con,"SELECT * FROM register WHERE username ='$_id'");
while($row = mysqli_fetch_array($result)):
$pageid=1;
 ?>

<div class="ch-container">
	<div class="row">
 <?php include ('includes/left_sidebar.php');  ?>
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
              <div class="col-xs-7 controls">Basketball, Web, Design, etc.</div>
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
                <li class="mgbt-xs-10"> <span class="menu-icon vd_green"><i class="fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com/">Owner</a> at <a href="http://www.venmond.com/">Vendroid Ltd.</a> <span class="menu-info"><span class="menu-date"> March 2013 ~ Now</span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com/">CEO</a> at <a href="http://www.venmond.com/">Mc. Dondon</a> <span class="menu-info"><span class="menu-date"> March 2011 ~ February 2013</span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com/">Web Designer</a> at <a href="http://www.venmond.com/">Web Design Company Ltd.</a> <span class="menu-info"><span class="menu-date"> March 2010 ~ February 2011</span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com/">Sales</a> at <a href="http://www.venmond.com/">Sales Company Ltd.</a> <span class="menu-info"><span class="menu-date"> March 2009 ~ February 2010</span></span> </span> </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-5">
            <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-trophy mgr-10 profile-icon"></i> Properties</h3>
            <div class="content-list content-menu">
              <ul class="list-wrapper">
                <li class="mgbt-xs-10"> <span class="menu-icon vd_green"><i class="fa  fa-circle-o"></i></span> <span class="menu-text"> Bachelor's degree, E-Commerce/Electronic Commerce at <a href="http://www.venmond.com/">UCLA</a> <span class="menu-info"><span class="menu-date"> August 2003 ~ July 2008</span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Student at <a href="http://www.venmond.com/">Web Design Education</a> <span class="menu-info"><span class="menu-date"> March 2006 ~ February 2007</span></span> </span> </li>                
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Student at <a href="http://www.venmond.com/">St. Louis High School</a> <span class="menu-info"><span class="menu-date"> August 2000 ~ July 2003 </span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Student at <a href="http://www.venmond.com/">St. Monica Junior High School</a> <span class="menu-info"><span class="menu-date"> August 1998 ~ July 2000</span></span> </span> </li>
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