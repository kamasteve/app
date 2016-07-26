 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Landlord Digital</title>

<!-- The styles -->
<link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">
<link href="css/charisma-app.css" rel="stylesheet">
<link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
<link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
<link href='css/new/style.css' rel='stylesheet'>
<link href="css/dataTables.tableTools.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
<link href="css/TableTools.css" rel="stylesheet">
<link href='css/animate.min.css' rel='stylesheet'>
<link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href="bower_components/responsive-tables/responsive-tables.css" rel='stylesheet'>
    <link href="bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css" rel='stylesheet'>
    <link href=" css/jquery.noty.css" rel='stylesheet'>

<style type="text/css" class="init">
</style>

<script type="text/javascript" charset="utf-8" src="js/new/jquery-1.11.1.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="js/dataTables.tableTools1.js"></script>


<script type="text/javascript" charset="utf-8" src="media/ZeroClipboard/ZeroClipboard.js"></script>
<script type="text/javascript" charset="utf-8" src="js/TableTools.js"></script>

<script type="text/javascript" language="javascript" src="js/dataTables.bootstrap.js"></script>
<script type="text/javascript" language="javascript" class="init"></script>
<!-- jQuery -->

<script src="js/new/general.js"></script>
<script src="js/new/jquery.validate.js"></script>

<script>
var base_url= 'http://www.hilleconomicgroup.com';
</script>

<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- The fav icon -->
<link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
<!-- topbar starts -->
<div class="navbar navbar-default" role="navigation">
	<div class="navbar-inner">
		<button type="button" class="navbar-toggle pull-left animated flip">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#"><img class="hidden-xs"/>
		<span>Landlord1</span></a>
		<!-- user dropdown starts -->
		<div class="btn-group pull-right">
			<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			<i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs">kamasteve			</span>
			<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a href="profile.php">Profile</a></li>
				<li class="divider"></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		<!-- user dropdown ends -->
		<!-- theme selector starts -->
		<!-- theme selector ends -->
	</div>
</div>
<!-- topbar ends --><div class="col-sm-2 col-lg-2">
	<div class="sidebar-nav">
		<div class="nav-canvas">
			<div class="nav-sm nav nav-stacked">
			</div>
			<ul class="nav nav-pills nav-stacked main-menu">
				<li class="nav-header">Main</li>
				<li><a class="ajax-link" href="main.php"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
				</li>
				<li><a class="ajax-link" href="tenants1.php"><i class="glyphicon glyphicon-eye-open"></i><span> Tenants</span></a>
				</li>
				<li><a class="ajax-link" href="apartments.php"><i class="glyphicon glyphicon-edit"></i><span> Apartments</span></a></li>
				<li><a class="ajax-link" href="payments.php"><i class="glyphicon glyphicon-list-alt"></i><span> Payments</span></a>
				<li><a class="ajax-link" href="edit_payments.php"><i class="glyphicon glyphicon-list-alt"></i><span>Edit Payments</span></a>
				<li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Accounts</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Charts Of Accounts</a></li>
                                <li><a href="#">Invoices</a></li>
                            </ul>
                        </li>
				</li>
				<li><a class="ajax-link" href="landlord.php"><i class="glyphicon glyphicon-font"></i><span> Property Owners</span></a>
				</li>
				<li><a class="ajax-link" href="expenses.php"><i class="glyphicon glyphicon-picture"></i><span> Expenses</span></a>
				</li>
				<li class="nav-header hidden-md">Reports</li>
				<li><a class="ajax-link" href="montlyreports.php"><i class="glyphicon glyphicon-align-justify"></i><span> Monthly Report</span></a></li>
				<li><a class="ajax-link" href="commission.php"><i class="glyphicon glyphicon-calendar"></i><span> Agency Commission</span></a>
				</li>
			</ul>
		</div>
	</div>
</div>


<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>


<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->

<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->

<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>
<div id="content" class="col-lg-10 col-sm-10">
<!-- content starts -->
<div class="row">
	<div class="box col-md-12">



<table id="example" class=" display table table-striped table-bordered " cellspacing="0" width="100%">
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
<thead>
<tr>
<th>Property</th>
<th> Period</th>

<th>Payment Mode</th>
<th>First Name</th>

<th>
 Adress
</th>
<th>Email</th>
<th>Phone</th>
<th>Ammount</th>
<th>Date</th>
</tr>
</thead>
<tbody>

 <tr>
<td> Manoj </td>
<td> January </td>
<td> Cash </td>
<td>  </td>
<td>  </td>
<td>  </td>
<td> 0 </td>
<td> 0 </td>
<td> </td>
  </tr>


 <tr>
<td> Manoj </td>
<td> January </td>
<td> Cash </td>
<td>  </td>
<td>  </td>
<td>  </td>
<td> 0 </td>
<td> 0 </td>
<td> </td>
  </tr>


 <tr>
<td> Manoj </td>
<td> January </td>
<td> Cash </td>
<td>  </td>
<td>  </td>
<td>  </td>
<td> 0 </td>
<td> 0 </td>
<td> </td>
  </tr>


 <tr>
<td> Stephen Kamau </td>
<td> February </td>
<td> Cash </td>
<td> Stephen </td>
<td> 970 Thika </td>
<td> kamasteve13@gmail.com </td>
<td> 2147483647 </td>
<td> 6500 </td>
<td> 12-07-2016</td>
  </tr>


 <tr>
<td> moreen </td>
<td> June </td>
<td> Cash </td>
<td> Moreen </td>
<td> 970 Thika </td>
<td> kamasteve13@gmail.com </td>
<td> 2147483647 </td>
<td> 6500 </td>
<td> 12-07-2016</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> May </td>
<td> Cash </td>
<td> Stephen </td>
<td> 970 Thika </td>
<td> kamasteve13@gmail.com </td>
<td> 729377334 </td>
<td> 6500 </td>
<td> </td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> May </td>
<td> Cash </td>
<td> Stephen </td>
<td> 970 Thika </td>
<td> kamasteve13@gmail.com </td>
<td> 729377334 </td>
<td> 6500 </td>
<td> </td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> May </td>
<td> Cash </td>
<td> Stephen </td>
<td> 970 Thika </td>
<td> kamasteve13@gmail.com </td>
<td> 729377334 </td>
<td> 6500 </td>
<td> </td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> May </td>
<td> Cash </td>
<td> Stephen </td>
<td> 970 Thika </td>
<td> kamasteve13@gmail.com </td>
<td> 729377334 </td>
<td> 6500 </td>
<td> 3680-90</td>
  </tr>


 <tr>
<td> West Points </td>
<td> March </td>
<td> Bank Agency </td>
<td> Moreen </td>
<td> 970 Thika </td>
<td> kandesteve@gmail.com </td>
<td> 729377334 </td>
<td> 6500 </td>
<td> 3680-90</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> Kelvin </td>
<td> 970 Thika </td>
<td> kamasteve10@yahoo.com </td>
<td> 0 </td>
<td> 0 </td>
<td> etghyh</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> Stephen </td>
<td> 970 Thika </td>
<td> kamasteve13@gmail.com </td>
<td> 729377334 </td>
<td> 6500 </td>
<td> 3680-90</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> Stephen </td>
<td> 970 Thika </td>
<td> kamasteve13@gmail.com </td>
<td> 729377334 </td>
<td> 6500 </td>
<td> 3680-90</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> Stephen </td>
<td> 970 Thika </td>
<td> kamasteve13@gmail.com </td>
<td> 729377334 </td>
<td> 6500 </td>
<td> 3680-90</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> Stephen </td>
<td> 970 Thika </td>
<td> kamasteve13@gmail.com </td>
<td> 729377334 </td>
<td> 6500 </td>
<td> 3680-90</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> Stephen </td>
<td> 970 Thika </td>
<td> kamasteve13@gmail.com </td>
<td> 729377334 </td>
<td> 6500 </td>
<td> 3680-90</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> moreen </td>
<td> 970 Thika </td>
<td> kamasteve13@gmail.com </td>
<td> 729377334 </td>
<td> 6500 </td>
<td> 3680-90</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> moreen </td>
<td> 970 Thika </td>
<td> kamasteve13@gmail.com </td>
<td> 729377334 </td>
<td> 6500 </td>
<td> 3680-90</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> moreen </td>
<td> 970 Thika </td>
<td> kamasteve13@gmail.com </td>
<td> 729377334 </td>
<td> 6500 </td>
<td> 3680-90</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> Stephen </td>
<td> 970 Thika </td>
<td> kandesteve@gmail.com </td>
<td> 729377334 </td>
<td> 6500 </td>
<td> 3680-90</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> fr </td>
<td> vfr </td>
<td> vfer </td>
<td> 0 </td>
<td> 0 </td>
<td> fe</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> Stephen </td>
<td> ethryhj </td>
<td> erhtrh </td>
<td> 0 </td>
<td> 23534 </td>
<td> y53634</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> efnr </td>
<td> wgqrw </td>
<td> wr </td>
<td> 0 </td>
<td> 0 </td>
<td> g</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> dew </td>
<td> wrget </td>
<td> gret </td>
<td> 0 </td>
<td> 0 </td>
<td> reghet</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> moreen </td>
<td> 970 Thika </td>
<td> kandesteve@gmail.com </td>
<td> 729377334 </td>
<td> 0 </td>
<td> 3680-90</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> dacvdafs </td>
<td> fsbdg </td>
<td> sbdfg </td>
<td> 0 </td>
<td> 0 </td>
<td> dafbd</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> Evedwc </td>
<td> sd </td>
<td> dsv </td>
<td> 0 </td>
<td> 132456 </td>
<td> 3r5454</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> ac </td>
<td> cdsc </td>
<td> dc </td>
<td> 0 </td>
<td> 0 </td>
<td> DV</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> dacvdafs </td>
<td> vfr </td>
<td> kamasteve13@gmail.com </td>
<td> 729377334 </td>
<td> 6500 </td>
<td> 3680-90</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> moreen </td>
<td> 970 Thika </td>
<td> kandesteve@gmail.com </td>
<td> 729377334 </td>
<td> 6500 </td>
<td> 06-02-2016</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> fwef </td>
<td> ewf </td>
<td> efw </td>
<td> 0 </td>
<td> 0 </td>
<td> ewf</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> fwef </td>
<td> ewf </td>
<td> efw </td>
<td> 0 </td>
<td> 0 </td>
<td> ewf</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> james </td>
<td> 89 Kimbo </td>
<td> kamasteve13@gmail.com </td>
<td> 729477356 </td>
<td> 7800 </td>
<td> 20-07-2016</td>
  </tr>


 <tr>
<td> Mt Villas </td>
<td> January </td>
<td> Cash </td>
<td> Kelvin </td>
<td> 970 Thika </td>
<td> kamasteve </td>
<td> 734678234 </td>
<td> 9000 </td>
<td> 01-24-2016</td>
  </tr>


 <tr>
<td> West Points </td>
<td> June </td>
<td> Bank </td>
<td> James </td>
<td> 970 Thika </td>
<td> kamasteve10@yahoo.com </td>
<td> 734678234 </td>
<td> 9000 </td>
<td> 01-24-2016</td>
  </tr>


 <tr>
<td> West Points </td>
<td> June </td>
<td> Mpesa </td>
<td> Moreen </td>
<td> 109 Kandara </td>
<td> mwkush.kush@gmail.com </td>
<td> 720422910 </td>
<td> 8800 </td>
<td> 02-04-2016</td>
  </tr>

	</tbody>
	</table>


</div>
</div>
</div>

<script type="text/javascript" language="javascript" class="init">
	$(document).ready(function() {
		var table = $('#example').DataTable();
		var tt = new $.fn.dataTable.TableTools( table );
		$( tt.fnContainer() ).insertBefore('div.dataTables_wrapper');
		
	} );
</script>
 <link href="css/footer.css" rel="stylesheet">
 
 <div navbar class="navnar  navbar-fixed-bottom navbar-default footer1">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Techisoft
                </a> 2012 - 2014</p>
				

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
    </div>

<!--/.fluid-container-->
<!-- external javascript -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<script src="js/charisma.js"></script>
</body>
</html>