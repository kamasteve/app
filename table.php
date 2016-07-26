
   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Expand table rows with jQuery - jExpand plugin - JankoAtWarpSpeed demos</title>
    <style type="text/css">
        body { font-family:Arial, Helvetica, Sans-Serif; font-size:0.8em;}
        #report { border-collapse:collapse;}
        #report h4 { margin:0px; padding:0px;}
        #report img { float:right;}
        #report ul { margin:10px 0 10px 40px; padding:0px;}
        #report th { background:#7CB8E2 url(header_bkg.png) repeat-x scroll center left; color:#fff; padding:7px 15px; text-align:left;}
        #report td { background:#C7DDEE none repeat-x scroll center left; color:#000; padding:7px 15px; }
        #report tr.odd td { background:#fff url(row_bkg.png) repeat-x scroll center left; cursor:pointer; }
        #report div.arrow { background:transparent url(arrows.png) no-repeat scroll 0px -16px; width:16px; height:16px; display:block;}
        #report div.up { background-position:0px 0px;}
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">  
        $(document).ready(function(){
            $("#report tr:odd").addClass("odd");
            $("#report tr:not(.odd)").hide();
            $("#report tr:first-child").show();
            
            $("#report tr.odd").click(function(){
                $(this).next("tr").toggle();
                $(this).find(".arrow").toggleClass("up");
            });
            //$("#report").jExpand();
        });
    </script>        
</head>
 <link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
	

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<div class="panel panel-default">
<div class="list-group">

                <?php
$con=mysqli_connect("localhost","root","","writer");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM new_orders");

echo "<table class='table table-striped table-bordered bootstrap-datatable datatable responsive' id='output' 'lenght:1000px;'>
<tr>
<th>Description</th>
<th>Keywords</th>

<th>Tone</th>
<th>Payment</th>

<th>Category</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td class='center'>" . $row['description'] . "</td>";
  echo "<td>" . $row['keywords'] . "</td>";
  
  echo "<td>" . $row['category'] . "</td>";
  echo "<td>" . $row['length'] . "</td>";
  echo "</tr>";
  echo "<tr>";
  
  echo "<td>" . $row['language'] . "</td>";
  echo "<td>" . $row['tone'] . "</td>";
  echo "<td>" . $row['payment'] . "</td>";
  echo "<td>" . $row['purpose'] . "</td>";
  echo"</tr>";
}

echo "</table>";

mysqli_close($con);
?>
</div>
</div>