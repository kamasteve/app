

 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Landlord Digital</title>

<!-- The styles -->
 <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

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
	<link href=" css/css_theme.min.css" rel='stylesheet'>

<style type="text/css" class="init">
</style>

<script type="text/javascript" charset="utf-8" src="js/new/jquery-1.11.1.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/jquery.dataTables.js"></script>



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
   <a class="navbar-brand" href="main.php"> <img alt="Techisoft Logo" src="img/techisoft.png" class="hidden-xs"/>
                <span></span></a>
<ul class="collapse navbar-collapse nav navbar-nav top-menu">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Acounting</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Property Management</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Reports</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="#">Tenant portal</a>
    </li>
	<li class=" pull-right dropdown">
      <a href="#" data-toggle="dropdown" ><i class="glyphicon glyphicon-user"></i> kamasteve <span class="caret"></span> </a> 
	  <ul class="dropdown-menu" role="menu">
				<li><a href="profile.php">Profile</a></li>
				<li class="divider"></li>
				<li><a href="logout.php">Logout</a></li>
	 </ul>
	 </li>
	 </ul>
   
  
</div>
</div>

<!-- topbar ends --><style>

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
		
<div class="col-sm-2 col-lg-2">
	<div class="sidebar-nav">
		<div class="nav-canvas">
			<div class="nav-sm nav nav-stacked">
			</div>
			<ul class="nav nav-pills nav-stacked main-menu">
				<li class="nav-header">Main</li>
				<li><a class="ajax-link" href="profile.php"><i class="glyphicon glyphicon-home"></i><span> Home</span></a>
				</li>
				<li><a class="ajax-link" href="tenants1.php"><i class="glyphicon glyphicon-eye-open"></i><span> Tenants</span></a>
				</li>
				<li><a class="ajax-link" href="apartments.php"><i class="glyphicon glyphicon-edit"></i><span> Apartments</span></a></li>
				<li><a class="ajax-link" href="payments.php"><i class="glyphicon glyphicon-list-alt"></i><span> Payments</span></a></li>
				<li><a class="ajax-link" href="edit_payments.php"><i class="glyphicon glyphicon-list-alt"></i><span>Edit Payments</span></a></li>
				<li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Accounts</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Charts Of Accounts</a></li>
                                <li><a href="invoice.php">Invoices</a></li>
                            </ul>
                        </li>
				
				<li><a class="ajax-link" href="landlord.php"><i class="glyphicon glyphicon-font"></i><span> Property Owners</span></a>
				</li>
				<li><a class="ajax-link" href="expenses.php"><i class="glyphicon glyphicon-picture"></i><span> Expenses</span></a>
				</li>
				<li class="nav-header hidden-md">Reports</li>
				<li><a class="ajax-link" href="#"><i class="glyphicon glyphicon-align-justify"></i><span> Monthly Report</span></a></li>
				<li><a class="ajax-link" href="#"><i class="glyphicon glyphicon-calendar"></i><span> Agency Commission</span></a>
				</li>
			</ul>
		</div>
	</div>
</div>


		<!--/span-->
		<!-- left menu ends -->
		
<div id="content" class="col-lg-10 col-sm-10">
<!-- content starts -->
<div class="row">
	<div class="box col-md-12">
		<div class="box-inner">
		<div class="">
		<div class="alert_msg" id='alert_msg1' style='display:none;'></div>
			
			
			<div class="box-icon">
				
				<button type="button" class="btn gglyphicon glyphicon-plus btn-default" data-toggle="modal" data-target="#myModal">Add Tenants</button>
				<br />
				
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">×</button>
							</div>
							<!---Add Tentants Dive Start-->
							<div class="modal-body">
								
								<form class="form-horizontal tentant_cls" method='POST'  id='add_tentant' name='add_tentant'>
								<div id='alert_msg' style='display:none;'></div><br />
									<div class="form-group">
										<label class="control-label col-xs-3" for="property">Property :</label>
										<div class="col-xs-9">
											<select class="form-control" name="property"  onchange='get_owner_property(this.value);'>
											<option value='0'>Select Property owner</option>
																								
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3" for="username">Property Type :</label>
										<div class="col-xs-9">
											<select class="form-control" name="type" id='type_id'>
												
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3" for="fname">First Name:</label>
										<div class="col-xs-9">
											<input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3" for="lame">Last Name:</label>
										<div class="col-xs-9">
											<input type="text" class="form-control" name="lname" placeholder="Last Name">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3" for="email">Email:</label>
										<div class="col-xs-9">
											<input type="email" class="form-control" name="email" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3" for="phoneNumber">Phone:</label>
										<div class="col-xs-9">
											<input type="tel" class="form-control" name="phone" placeholder="Phone Number">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3" for="address">Address:</label>
										<div class="col-xs-9">
											<textarea rows="3" class="form-control" name="addres" placeholder="Postal Address"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3" for="Deposit">Deposit:</label>
										<div class="col-xs-9">
											<input type="text" class="form-control" name="deposit" placeholder="Deposit ">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3" for="confirmPassword">Monthly Rent:</label>
										<div class="col-xs-9">
											<input type="rent" class="form-control" name="rent" placeholder="Monthly Rent">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3">gender:</label>
										<div class="col-xs-2">
											<label class="radio-inline">
											<input type="radio" checked='checked' name="genderRadios" value="male"> Male </label>
										</div>
										<div class="col-xs-2">
											<label class="radio-inline">
											<input type="radio" name="genderRadios" value="female"> Female </label>
										</div>
									</div>
									<div class="form-group ">
										<br>
										<div class="form-group ">
											<div class="col-xs-offset-3 col-xs-9 tentant_footer_cls">
										<button class="submit" type="submit" name="button" value='submit'>Save changes</button>
											</div>
										</div>
									</form>
								</div>
								
							</div>
							<!---Add Tentants Dive End-->
						</div>
					</div>
				</div>
			</div>
		</div>
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
			 Monthly Rent
		</th>
		<th>
			 Deposit
		</th>
		<th>
			 Adress
		</th>
		<th>
			 Property
		</th>
		<th >
			 Action 
		</th>
    </thead>
 
    <tbody>
	<tr><td>1</td><td>stephen</td><td>ngugi</td><td>kamasteve13@gmail.com</td><td>729477334</td><td>6000</td><td>14500</td><td>970 Thika</td><td>Stephen Kamau</td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="1 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>2</td><td>James</td><td>Mwangi</td><td>jmcontractor@gmail.com</td><td>7345623</td><td>7000</td><td>18000</td><td>88 ruiru</td><td>Stephen Kamau</td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="2 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>3</td><td>Brenda</td><td>Mutheu</td><td>bmutheu@gmail.com</td><td>124</td><td>7000</td><td>14500</td><td>970 Thika</td><td></td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="3 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>4</td><td>James</td><td>Kimani</td><td>jkimani@gmail.com</td><td>756243</td><td>9088</td><td>18000</td><td>970 Thika</td><td></td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="4 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>5</td><td>Brenda</td><td>Mutheu</td><td>bmutheu@gmail.com</td><td>0</td><td>7000</td><td>14500</td><td>970 Thika</td><td></td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="5 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>6</td><td>James</td><td>Kimani</td><td>jkimani@gmail.com</td><td>756243</td><td>9088</td><td>18000</td><td>970 Thika</td><td></td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="6 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>8</td><td>Stephen</td><td>Ngugi</td><td>emmwirichia@africapsfirm.com</td><td>2147483647</td><td>20000</td><td>800000</td><td>77 kariungu</td><td></td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="8 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>9</td><td>Alex</td><td>Nganga</td><td>kandesteve@gmail.com</td><td>734567893</td><td>20000</td><td>7900</td><td>78 Limuru</td><td></td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="9 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>10</td><td>Maina</td><td>Githinji</td><td>mgithinji@rinasystems.com</td><td>734567893</td><td>13000</td><td>25000</td><td>90 Nyayo Stadium</td><td></td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="10 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>11</td><td>Emily</td><td>Ntara</td><td>mgithinji@rinasystems.com</td><td>734567893</td><td>13000</td><td>25000</td><td>38 ruai</td><td></td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="11 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>12</td><td>james</td><td>Nganga</td><td>mgithinji@rinasystems.com</td><td>734567893</td><td>20000</td><td>800000</td><td>83 yukina</td><td></td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="12 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>13</td><td>Stephen</td><td>Nganga</td><td>mgithinji@rinasystems.com</td><td>729477334</td><td>20000</td><td>800000</td><td>9300</td><td></td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="13 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>14</td><td>Stephen</td><td>Nganga</td><td>mgithinji@rinasystems.com</td><td>734567893</td><td>11000</td><td>8000</td><td>66 kanjata</td><td>Stephen Kamau</td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="14 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>15</td><td>Stephen</td><td>Nganga</td><td>mgithinji@rinasystems.com</td><td>734567893</td><td>11000</td><td>8000</td><td>66 kanjata</td><td>Stephen Kamau</td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="15 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>16</td><td>james</td><td>Githinji</td><td>kandesteve@gmail.com</td><td>45</td><td>20000</td><td>800000</td><td>3r4fvgh</td><td>Stephen Kamau</td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="16 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>17</td><td>james</td><td>Githinji</td><td>kandesteve@gmail.com</td><td>45</td><td>20000</td><td>800000</td><td>3r4fvgh</td><td>Stephen Kamau</td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="17 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>18</td><td>Eve </td><td>Kuchenga</td><td>kamasteve13@gmail.com</td><td>734678987</td><td>9000</td><td>3000</td><td>eri</td><td></td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="18 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>19</td><td>Eve </td><td>Kuchenga</td><td>kamasteve13@gmail.com</td><td>734678987</td><td>9000</td><td>3000</td><td>eri</td><td></td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="19 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>20</td><td>Eve </td><td>Kuchenga</td><td>kamasteve13@gmail.com</td><td>734678987</td><td>9000</td><td>3000</td><td>eri</td><td></td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="20 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>21</td><td>Eve </td><td>Kuchenga</td><td>kamasteve13@gmail.com</td><td>734678987</td><td>9000</td><td>3000</td><td>eri</td><td></td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="21 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>22</td><td>Eve</td><td>Kuchenga</td><td>kamasteve13@gmail.com</td><td>734678987</td><td>9000</td><td>3000</td><td>68 kanjata</td><td>Manoj</td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="22 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>23</td><td>Eve</td><td>Kuchenga</td><td>kamasteve13@gmail.com</td><td>734678987</td><td>9000</td><td>3000</td><td>68 kanjata</td><td>Manoj</td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="23 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>24</td><td>john</td><td>kariuki</td><td>jkariuki@bituls.com</td><td>72</td><td>6000</td><td>3000</td><td>w</td><td>Manoj</td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="24 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>25</td><td>stephen</td><td>ngugi</td><td>kamasteve13@gmail.com</td><td>729477334</td><td>70000</td><td>6000</td><td>0890-0</td><td></td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="25 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>26</td><td>manoj</td><td>kumar</td><td>websmartsol383@gmail.com</td><td>123456789</td><td>12</td><td>12</td><td>Mohali</td><td>Stephen Kamau</td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="26 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>27</td><td>test</td><td>test</td><td>test@gmail.com</td><td>123456789</td><td>12</td><td>324324</td><td>sad</td><td>Stephen Kamau</td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="27 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>28</td><td>test</td><td>test</td><td>test@gmail.com</td><td>123456789</td><td>12</td><td>324324</td><td>hvj</td><td>Stephen Kamau</td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="28 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>29</td><td>nhjbvkj</td><td>mkn</td><td>test@gmail.com</td><td>123456789</td><td>12</td><td>324324</td><td>hbjv j</td><td>Verma</td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="29 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>30</td><td>khgv</td><td>,</td><td>test@gmail.com</td><td>123456789</td><td>12</td><td>324324</td><td>mk </td><td>Verma</td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="30 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>31</td><td>khgv</td><td>test</td><td>ajay.verma131@gmail.com</td><td>123456789</td><td>12</td><td>324324</td><td>asdx</td><td>Verma</td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="31 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
<tr><td>32</td><td>khgv</td><td>,</td><td>ajay.verma131@gmail.com</td><td>123456789</td><td>12312</td><td>324324</td><td>ads</td><td>Manoj</td>			<td>
        <form name="editWish" action="edit_tenant.php" method="GET">
            <input type="hidden" name="wishID" value="32 "/>
           <!-- <input type="submit" class="glyphicon glyphicon-edit" name="editWish" value="Edit"/></span> -->
			<button type="submit" class="btn " name="editWish" value="Edit"   ><span class="glyphicon glyphicon-edit" aria-hidden="true" ></span> Edit</button>
        </form>
    </td>
			</tr>
	
    </tbody>
</table>
</div>
<script type="text/javascript" language="javascript" class="init">
	$(document).ready(function() {
		var table = $('#example').DataTable();
		var tt = new $.fn.dataTable.TableTools( table );
		$( tt.fnContainer() ).insertBefore('div.dataTables_wrapper');
		
	} );
</script>
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
</div>
</div>
</div>		
 <style>
 .footer{
border-top:2px solid #FF9900
 }
 </style>
 <footer class="footer">
      <div class="container">
<p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://techisoft.co.ke" target="_blank">Techisoft
                </a> 2012 - 2014</p>
				

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="http://usman.it/free-responsive-admin-template">Techisoft</a></p>
      </div>
    </footer>
 

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

</body>
</html>
