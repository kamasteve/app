<?php include ('includes/header.php');
$result = mysqli_query($con,"SELECT * FROM register WHERE username ='$_id'");
while($row = mysqli_fetch_array($result)):
$pageid=45;

 ?>

    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
         <?php include ('includes/left_sidebar.php');  ?>
        <!-- left menu starts -->
        
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
       



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Apps</h2>

                
            </div>
            <div class="box-content row">
                <div class="col-lg-7 col-md-12">
                    <div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="6 new members." class="well top-block" href="#">
            <img alt="Add a New Apartment" src="images/properties.png" class="image-responsive"/>
           
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="#">
            <img alt="Add a New Apartment" src="images/statements.png" class="image-responsive"/>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title=" New Tenants." class="well top-block" href="new_tenant.php">
           <img alt="Add a New Apartment" src="images/users.png" class="image-responsive "/> 
            
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Add a New Apartment" class="well top-block" href="#">
             <img alt="Add a New Apartment" src="images/apartment.png" class="image-responsive "/>

          
            
        </a>
    </div>
</div>
                
                </div>
                
            </div>
			<div class="box-content row">
                <div class="col-lg-7 col-md-12">
                    <div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="6 new members." class="well top-block" href="#">
            <img alt="Add a New Apartment" src="images/payments.png" class="image-responsive"/>
            
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="#">
            <img alt="Add a New Apartment" src="images/reports.png" class="image-responsive"/>
            
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="$34 new sales." class="well top-block" href="#">
            <img alt="Add a New Apartment" src="images/tenants.png" class="image-responsive "/>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="12 new messages." class="well top-block" href="#">
            <img alt="Add a New Apartment" src="images/document_edit.png" class="image-responsive"/>
        </a>
    </div>
</div>
                
                </div>
                
            </div>
			<div class="box-content row">
                <div class="col-lg-7 col-md-12">
                    <div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="6 new members." class="well top-block" href="#">
           <img alt="Add a New Apartment" src="images/documents.png" class="image-responsive"/>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="#">
            <img alt="Add a New Apartment" src="images/pie_chart.png" class="image-responsive"/>
            
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="$34 new sales." class="well top-block" href="#">
            <img alt="Add a New Apartment" src="images/people.png" class="image-responsive"/>
            
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="12 new messages." class="well top-block" href="#">
         <img alt="Add a New Apartment" src="images/settings.png" class="image-responsive"/>
            
        </a>
    </div>
</div>
                
                </div>
                
            </div>
        </div>
    </div>
</div>



<!--/row-->
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
  
    <!-- Ad ends -->

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    

</div><!--/.fluid-container-->
<?php   
  endwhile;
    mysqli_free_result($result);
mysqli_close($con);
 include ('includes/footer.php');  ?>


