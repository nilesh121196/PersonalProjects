<?php
session_start();
if(!isset($_SESSION['useremail'])){
	echo "<div align='center' style='font-family : calibri; color:white; background:#D20D0D; padding:15px;'>Access Denied ! </div>";
}elseif($_SESSION['type'] == "user")
{
	echo "<div align='center' style='font-family : calibri; color:white; background:#D20D0D; padding:15px;'>Access Denied ! </div>";
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

	<link type="text/css" rel="stylesheet" href="css/mystyle.css" />

	<style type="text/css">
		body
	  	{
	  		font-size: 14px;
	  	}
	</style>
</head>
<body>
	
	<!-- Navigation Bar -->

	<div class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">e-governance</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#">Home</a></li>
				<li><a href="complain_admin.php">Manage Complains</a></li>
				<li><a href="manage_users.php">Manage Users</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<!-- <li><a href="register_form.php">Admin</a></li> -->
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#" style="color: black;">My Profile</a></li>
						<li><a href="logout.php" style="color: black;">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>

	<div class="container col-md-5">
		<div class="panel panel-primary">
		  <div class="panel-heading"><span class="glyphicon glyphicon-signal"></span> Website Statics</div>
		  <div class="panel-body">
		  <?php
		$conn = mysqli_connect("localhost", "root", "",'egov');
		$usercount = mysqli_query($conn,"SELECT COUNT(*) as count FROM users");
	
		$res = mysqli_fetch_array($usercount);
		$user = $res ['count'];

		$comp_count = mysqli_query($conn,"SELECT COUNT(*) as count FROM complain");
		//$res = mysqli_fetch_array($comp_count);
		$total_comp = $res ['count'];

		$comp_open = mysqli_query($conn,"SELECT COUNT(*) as count FROM complain where status='open'");
		//$res = mysqli_fetch_array($comp_open);
		$open_comp = $res ['count'];

		$comp_close = mysqli_query($conn,"SELECT COUNT(*) as count FROM complain where status='Closed'");
		//$res = mysqli_fetch_array($comp_close);
		$close_comp = $res ['count'];
		  ?>
		    <table width="400px" cellpadding="2" border="0">
			<tr><td style="padding:5px;">Total Users Registered :  </td><td style="padding:5px;"><span class="badge"><?php echo $user;?></span></td></tr>
		    <tr><td style="padding:5px;">Total Complaints :  </td><td style="padding:5px;"><span class="badge"><?php echo $total_comp;?></span></td></tr>
		    <tr><td style="padding:5px;">Open Complaints :</td><td style="padding:5px;">  <span class="badge"><?php echo $open_comp;?></span></td></tr>
		    <tr><td style="padding:5px;">Closed Complaints : </td><td style="padding:5px;"> <span class="badge"><?php echo $close_comp;?></span></td></tr>
			</table>
		  </div>
		</div>
	</div>

	<div class="panel panel-default col-md-5 col-md-offset-1" style="padding-top: 20px; background-color: #f5f5f5;">
			<div class="panel-header"><h4>Information</h4></div>
			<div class="panel-body" style="max-height: 300px;overflow-y: scroll; background-color: white;">
					<p><i class="fa fa-angle-double-right"></i><a href="#" style="text-decoration: none; color: black;"> Guidelines for central schemes by Soil and Water...</a></p>
					<p><i class="fa fa-angle-double-right"></i><a href="#" style="text-decoration: none; color: black;"> Website of Jawaharlal Nehru Centre for Advanced Scientific...</a></p>
					<p><i class="fa fa-angle-double-right"></i><a href="#" style="text-decoration: none; color: black;"> Micro Small and Medium Enterprises Development Institute of...</a></p>
					<p><i class="fa fa-angle-double-right"></i><a href="#" style="text-decoration: none; color: black;"> Information on persons excluded from reservations of...</a></p>
					<p><i class="fa fa-angle-double-right"></i><a href="#" style="text-decoration: none; color: black;"> Bihar State Commission for Backward Classes</a></p>
					<p><i class="fa fa-angle-double-right"></i><a href="#" style="text-decoration: none; color: black;"> Website of Department of Renewable Energy of Haryana</a></p>
					<p><i class="fa fa-angle-double-right"></i><a href="#" style="text-decoration: none; color: black;"> Website of Embassy of India in Kabul</a></p>
					<p><i class="fa fa-angle-double-right"></i><a href="#" style="text-decoration: none; color: black;"> Exercise Gaganshakti-2018</a></p>
					<p><i class="fa fa-angle-double-right"></i><a href="#" style="text-decoration: none; color: black;"> Performance of PMSBY and PMJJBY</a></p>
					<p><i class="fa fa-angle-double-right"></i><a href="#" style="text-decoration: none; color: black;"> Gram Swaraj Abhiyan on Ambedkar Jayanti</a>
			</div>
		</div></p>
	</div>


	</body>
	</html>