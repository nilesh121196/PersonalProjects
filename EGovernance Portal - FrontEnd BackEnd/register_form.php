<!DOCTYPE html>
<html>
<head>
	<title>Register|e-governance portal</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

	<link type="text/css" rel="stylesheet" href="css/mystyle.css" />

	<style type="text/css">
		.panel{
			border: 15px solid #EDEDED;
		}
		body
	  	{
	  		font-size: 16px;
	  	}

		.icon-bar
  		{
	    	color: #fff;
	    	border-color: #fff;
	    	background-color: #fff;
	  	}
	</style>
</head>
<body>
	
	<!-- Navigation Bar -->

	<div class="navbar navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span> 
			    </button>
			<a href="#" class="navbar-brand">e-governance</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="projects.php">Projects</a></li>
				<li><a href="know_your_leaders.php">Know Your Leaders</a></li>
				<li><a href="contact_us.php">Contact Us</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="register_form.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div>
	</div>
	</div>
	<br /><br /><br />
	<div class="container">

		<div class="panel panel-default">
			<div class="panel-body">
		<form class="form-horizontal col-md-8 col-md-offset-3" action="registration.php" method="POST">
			<h3>Account Information</h3>
		<hr>
			<div class="form-group">
				<label class="col-md-3 control-label">Username</label>
				<div class="col-md-6">
					<input type="text" name="username"  class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label">Email address</label>
				<div class="col-md-6">
					<input type="email" name="email" class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label">Password</label>
				<div class="col-md-6">
					<input type="password" name="password"  class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3		 control-label">Confirm Password</label>
				<div class="col-md-6">
					<input type="password" name="cpassword" class="form-control">
				</div>
			</div>
			
			<hr>
			<h3>Personal Information</h3>
			<hr>

			<div class="form-group">
				<label class="col-md-3 control-label">Name</label>
				<div class="col-md-6">
					<input type="text" name="name" class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label">Country</label>
				<div class="col-md-6">
					<input type="text" name="country" class="form-control" value="India" disabled>
				</div>
			</div>			

			<div class="form-group">
				<label class="col-md-3 control-label">State</label>
				<div class="col-md-6">
					<select name="state" class="form-control">
						<!--<option value="">------------Select State------------</option>-->
						<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
						<option value="Andhra Pradesh">Andhra Pradesh</option>
						<option value="Arunachal Pradesh">Arunachal Pradesh</option>
						<option value="Assam">Assam</option>
						<option value="Bihar">Bihar</option>
						<option value="Chandigarh">Chandigarh</option>
						<option value="Chhattisgarh">Chhattisgarh</option>
						<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
						<option value="Daman and Diu">Daman and Diu</option>
						<option value="Delhi">Delhi</option>
						<option value="Goa">Goa</option>
						<option value="Gujarat">Gujarat</option>
						<option value="Haryana">Haryana</option>
						<option value="Himachal Pradesh">Himachal Pradesh</option>
						<option value="Jammu and Kashmir">Jammu and Kashmir</option>
						<option value="Jharkhand">Jharkhand</option>
						<option value="Karnataka">Karnataka</option>
						<option value="Kerala">Kerala</option>
						<option value="Lakshadweep">Lakshadweep</option>
						<option value="Madhya Pradesh">Madhya Pradesh</option>
						<option value="Maharashtra">Maharashtra</option>
						<option value="Manipur">Manipur</option>
						<option value="Meghalaya">Meghalaya</option>
						<option value="Mizoram">Mizoram</option>
						<option value="Nagaland">Nagaland</option>
						<option value="Orissa">Orissa</option>
						<option value="Pondicherry">Pondicherry</option>
						<option value="Punjab">Punjab</option>
						<option value="Rajasthan">Rajasthan</option>
						<option value="Sikkim">Sikkim</option>
						<option value="Tamil Nadu">Tamil Nadu</option>
						<option value="Tripura">Tripura</option>
						<option value="Uttaranchal">Uttaranchal</option>
						<option value="Uttar Pradesh">Uttar Pradesh</option>
						<option value="West Bengal">West Bengal</option>
						</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label">PIN Code</label>
				<div class="col-md-6">
					<input type="number" name="pin"  class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label">Age Category</label>
				<div class="col-md-6">
					<select name="age" class="form-control">
						<option>Below 20 years</option>
						<option>20-35 years</option>
						<option>35-50 years</option>
						<option>Above 50 years</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label">Gender</label>
				<div class="col-md-6">
					<div class="radio">
						<label><input type="radio" name="gender" value="N/A">N/A</label>
						<label><input type="radio" name="gender" value="Male" checked="checked">Male</label>
						<label><input type="radio" name="gender" value="Female">Femle</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label">Education</label>
				<div class="col-md-6">
					<select name="education" class="form-control">
						<option>Graduate/Post Graduate-Professional</option>
						<option>Graduate/Post Graduate-General</option>
						<option>Higher Secondary Education</option>
						<option>Secondary Education</option>
						<option>Elementary Education</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label">Mobile No.</label>
				<div class="col-md-6">
					<input type="number" name="mobile"  class="form-control">
				</div>
			</div>
		<br />
		<div class="col-md-6 col-md-offset-3">
			<button type="submit" name="submit_user" class="btn btn-warning">Create new account</button>
			<button type="reset" name="reset" class="btn btn-danger">Reset</button>

		</div>

		</form>
		</div>
	</div>
	</div>

<!-- 	<?php 
		$sql = "SELECT * FROM users";
		$run = mysqli_query($conn, $sql);

		while($rows = mysqli_fetch_assoc($run))
		{
			echo $rows['username'];
			echo "<br>";

			echo $rows['email'];
			echo "<br>";

			echo $rows['password'];
			echo "<br>";

			echo $rows['name'];
			echo "<br>";

			echo $rows['state'];
			echo "<br>";

			echo $rows['pin'];
			echo "<br>";

			echo $rows['age'];
			echo "<br>";

			echo $rows['gender'];
			echo "<br>";

			echo $rows['education'];
			echo "<br>";

			echo $rows['mobile_no'];
			echo "<br>";
		}
	?> -->

	<!-- Login modal -->
	<div class="container">
		<div class="modal fade" id="login">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" style="background-color: #2872C7;">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>&times;</span></button>
						<h4 class="modal-title" style="color: white;"><span class="glyphicon glyphicon-user"></span> Login</h4>
      				</div>					
					<div class="modal-body">
						<br>
				        <form action="login.php" name="lfrom" method="POST">
						<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-envelope"></span></span>
						<input type="email" class="form-control" required name="useremail" placeholder="Enter your email" aria-describedby="sizing-addon2">
						</div><br>
						<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" required class="form-control" name="userpass" placeholder="Enter your password" aria-describedby="sizing-addon2">
						</div>
						<div class="modal-footer">
				        <center><input type="submit" value="Login" name="btn_login" class="btn btn-success"></center>
				      </div>
					  <center><input type="checkbox" name="remember"/> Remember me? </center>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>

<!-- <?php
	if(isset($_POST['submit_user']))
	{

	$password1 = $_POST['password'];
	$cpassword1 = $_POST['cpassword'];

	if($password1 == $cpassword1)
	{

	$username = mysqli_real_escape_string($conn, strip_tags($_POST['username']));

	$email = mysqli_real_escape_string($conn, strip_tags($_POST['email']));		

	$password = mysqli_real_escape_string($conn, strip_tags($_POST['password']));

	$name = mysqli_real_escape_string($conn, strip_tags($_POST['name']));

	$state = mysqli_real_escape_string($conn, strip_tags($_POST['state']));

	$pin = mysqli_real_escape_string($conn, strip_tags($_POST['pin']));

	$age = mysqli_real_escape_string($conn, strip_tags($_POST['age']));

	$gender = mysqli_real_escape_string($conn, strip_tags($_POST['gender']));

	$education = mysqli_real_escape_string($conn, strip_tags($_POST['education']));

	$mobile = mysqli_real_escape_string($conn, strip_tags($_POST['mobile']));

	$date = date('Y-m-d');
	}

	$ins_sql = "INSERT INTO users (username, email, password, name, state, pin, age, gender, education, mobile_no, date) VALUES ('$username', '$email', '$password', '$name', '$state', '$pin', '$age', '$gender', '$education', '$mobile', '$date')";

	if(mysqli_query($conn, $ins_sql))
	{
		?>
		<script>window.location="register.php";</script>
		<?php }


	}
?> -->