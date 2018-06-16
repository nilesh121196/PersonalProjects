<?php
session_start();
if(!isset($_SESSION['useremail'])){
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

	<title>Manage Users</title>
	
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

	<div class="navbar navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">e-governance</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="admin_page.php">Home</a></li>
				<li><a href="complain_admin.php">Manage Complains</a></li>
				<li><a href="#">Manage Users</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<!-- <li><a href="register_form.php">Admin</a></li> -->
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#" style="color: black;">My Profile</a></li>
						<li><a href="logout.php" style="color: black;">Logout</a></li>
					</ul>
			</ul>
		</div>
	</div>

	<br /><br /><br />
	<div class="container">
	<?php
	include('includes/conn.php');

	$sql = "SELECT * FROM users";
	$run = mysqli_query($conn, $sql);

	echo "
	
		<table class='table table-hover table-striped'>
			<thead>
				<tr>
					<th>S.No.</th>
					<th>Name</th>
					<th>Username</th>
					<th>Email</th>
					<th>Mobile No.</th>
					<th>Age</th>
					<th>State</th>
					<th>PIN</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
	";
	$count=1;
	while($rows = mysqli_fetch_assoc($run))
	{
		echo "
			<tr>
				<td>$count</td>
				<td>$rows[name]</td>
				<td>$rows[username]</td>
				<td>$rows[email]</td>
				<td>$rows[mobile_no]</td>
				<td>$rows[age]</td>
				<td>$rows[state]</td>
				<td>$rows[pin]</td>
				<td><p data-placement='top' data-toggle='tooltip' title='Delete'><a href='admin_page.php?del_id=$rows[uid]' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></a></p></td>
				
			</tr>
		";
		$count++;
	}
		
		echo "</tbody>
		</table>";
?>

	</div>
	
</body>
</html>

<?php
	if(isset($_GET['del_id']))
	{
		$del = "DELETE FROM users WHERE uid = '$_GET[del_id]' ";
		if(mysqli_query($conn, $del))
		{
			?>
			<script>window.location = "admin_page.php";</script>
		<?php }
	}
?>