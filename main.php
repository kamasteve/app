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

    <div class=" col-md-12">
        
           
           <div class="row">
                   
       
    <div class="col-md-3 col-sm-3 col-xs-3">
        <a data-toggle="tooltip" title="Acounting." class="well top-block" href="invoice.php">
		Accounts
            <img alt="Add a New Apartment" src="images/Properties.png" class="image-responsive"/>
           
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
	
        <a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="account_statement.php">
		 Reports
            <img alt="Add a New Apartment" src="images/Statements.png" class="image-responsive"/>
			
        </a>
    </div>
	<div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="All Tenants." class="well top-block" href="tenants1.php">
		Tenants
            <img alt="Add a New Apartment" src="images/people.png" class="image-responsive"/>
            
        </a>
    </div>


    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Add a New Apartment" class="well top-block" href="apartments.php">
		Properties
             <img alt="Add a New Apartment" src="images/apartment.png" class="image-responsive "/>

          
            
        </a>
   
	</div>
	 </div>
	
	 <div class="box col-md-8">
        <div class="box-inner">
<?php

/* Include the fusioncharts.php file that contains functions to embed the charts. */

include("fusioncharts.php");

/* The following 4 code lines contain the database connection information. Alternatively, you can move these code lines to a separate file and include the file here. You can also modify this code based on your database connection. */

$hostdb = "localhost"; // MySQl host
$userdb = "root"; // MySQL username
$passdb = "kamah4778"; // MySQL password
$namedb = "hill_rental"; // MySQL database name

// Establish a connection to the database
$dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);

/*Render an error message, to avoid abrupt failure, if the database connection parameters are incorrect */
if ($dbhandle->connect_error) {
exit("There was an error with your connection: ".$dbhandle->connect_error);
}
?>


<!-- You need to include the following JS file to render the chart.
When you make your own charts, make sure that the path to this JS file is correct.
Else, you will get JavaScript errors. -->

<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>

<?php

    // Form the SQL query that returns the top 10 most populous countries
    $strQuery = "SELECT DATE_FORMAT(date, '%M') AS Month, SUM(ammount) as total
FROM rent_payments
GROUP BY DATE_FORMAT(date, '%M')";

    // Execute the query, or else return the error message.
    $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");

    // If the query returns a valid response, prepare the JSON string
    if ($result) {
        // The `$arrData` array holds the chart attributes and data
        $arrData = array(
            "chart" => array(
              "caption" => "Rent Collection Per Month",
              "paletteColors" => "#0075c2",
              "bgColor" => "#ffffff",
              "borderAlpha"=> "20",
              "canvasBorderAlpha"=> "0",
              "usePlotGradientColor"=> "0",
              "plotBorderAlpha"=> "10",
              "showXAxisLine"=> "1",
              "xAxisLineColor" => "#999999",
              "showValues" => "0",
              "divlineColor" => "#999999",
              "divLineIsDashed" => "1",
              "showAlternateHGridColor" => "0"
            )
        );

        $arrData["data"] = array();

// Push the data into the array
        while($row = mysqli_fetch_array($result)) {
        array_push($arrData["data"], array(
            "label" => $row["Month"],
            "value" => $row["total"]
            )
        );
        }

        /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

        $jsonEncodedData = json_encode($arrData);

/*Create an object for the column chart using the FusionCharts PHP class constructor. Syntax for the constructor is ` FusionCharts("type of chart", "unique chart id", width of the chart, height of the chart, "div id to render the chart", "data format", "data source")`. Because we are using JSON data to render the chart, the data format will be `json`. The variable `$jsonEncodeData` holds all the JSON data for the chart, and will be passed as the value for the data source parameter of the constructor.*/

        $columnChart = new FusionCharts("column2D", "myFirstChart" , 600, 300, "chart-1", "json", $jsonEncodedData);

        // Render the chart
        $columnChart->render();

        // Close the database connection
        $dbhandle->close();
    }

?>
<div id="chart-1"><!-- Fusion Charts will render here--></div>       
       
               
                
            </div>
			</div>
   



<!--/row-->
    <!-- content ends -->
    
    <!-- Ad, you can remove it -->
  
    <!-- Ad ends -->

   <div class="box col-md-4">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-list"></i> Weekly Stat</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <ul class="dashboard-list">
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-arrow-up"></i>
                            <span class="green">92</span>
                            New Comments
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-arrow-down"></i>
                            <span class="red">15</span>
                            New Registrations
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-minus"></i>
                            <span class="blue">36</span>
                            New Articles
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-comment"></i>
                            <span class="yellow">45</span>
                            User reviews
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-arrow-up"></i>
                            <span class="green">112</span>
                            New Comments
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-arrow-down"></i>
                            <span class="red">31</span>
                            New Registrations
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-minus"></i>
                            <span class="blue">93</span>
                            New Articles
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-comment"></i>
                            <span class="yellow">254</span>
                            User reviews
                        </a>
                    </li>
                </ul>
            </div>
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


