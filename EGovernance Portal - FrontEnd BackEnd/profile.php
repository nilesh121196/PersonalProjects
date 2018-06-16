<?php
session_start();
if(!isset($_SESSION['useremail'])){
	echo "<div align='center' style='font-family : calibri; color:white; background:#D20D0D; padding:15px;'>Access Denied ! </div>";
	exit();
}else{
if(isset($_SESSION['useremail'])||isset($_COOKIE['egov'])){
$email = $_SESSION['useremail'];
include('includes/conn.php');
$query = "SELECT * FROM users WHERE email ='".$email."'";
$rec = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($rec))
{
	$id = $row['uid'];
	$username = $row['username'];
	$email = $row['email'];
	$newname=$row['name'];
	$state = $row['state'];
	$pin = $row['pin'];
	$age= $row['age'];
	$sex = $row['gender'];
	$edu = $row['education'];
	$mobile= $row['mobile_no'];
	$date = $row['date'];
}
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>User Profile</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/mystyle.css" />

	<style type="text/css">
		.icon-bar
  		{
	    	color: #fff;
	    	border-color: #fff;
	    	background-color: #fff;
	  	}
	  	body
	  	{
	  		font-size: 14px;
	  	}
	</style>

</head>
<body>
	
	<!-- Navigation Bar -->

		<?php
		include('includes/conn.php');
		@$eml = $_SESSION['useremail'];

		$qry = "SELECT * FROM users where email = '$eml'";
		$qry2 = "SELECT * FROM admin where email = '$eml'";

		$h = mysqli_query($conn, $qry);
		$h2 = mysqli_query($conn, $qry2);

		while($row = mysqli_fetch_assoc($h))
		{
			$id = $row['uid'];
			$username = $row['username'];
			$email = $row['email'];
			$name=$row['name'];
			$state = $row['state'];
			$pin = $row['pin'];
			$age= $row['age'];
			$sex = $row['gender'];
			$edu = $row['education'];
			$mobile= $row['mobile_no'];
			$date = $row['date'];
		}
?>
<div class="navbar">
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
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Complain <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="complaint.php" style="color: black;">Log Complain</a></li>
						<li><a href="check_complain_status.php" style="color: black;">View complaint status</a></li>
					</ul>
				</li>
				<li><a href="projects.php">Projects</a></li>
				<li><a href="know_your_leaders.php">Know Your Leaders</a></li>
				<li><a href="contact_us.php">Contact Us</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi, <?php echo $name; ?> <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="profile.php" style="color: black;">My Profile</a></li>
						<li><a href="logout.php" style="color: black;">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
		</div>
	</div>

	
	<div class="container" style="background-color: #EEEEEE;">
		<br><br><br>
		<div class="row">
			<div class="col-md-6">
				<div class="well">
					<b><i><span class="glyphicon glyphicon-user"></span> Your Current Profile</i></b>
					<br /><br />
					<label>Name : </label> <?php echo $name;?><hr style="border-color:#BCBCBC; margin-top:-0.2%;">
					<label>Username : </label> <?php echo $username;?><hr style="border-color:#BCBCBC; margin-top:-0.2%;">
					<label>Email : </label> <?php echo $email;?><hr style="border-color:#BCBCBC; margin-top:-0.2%;">
					<label>Gender : </label> <?php echo $sex;?><hr style="border-color:#BCBCBC; margin-top:-0.2%;">
					<label>Age : </label> <?php echo $age;?><hr style="border-color:#BCBCBC; margin-top:-0.2%;">
					<label>State : </label> <?php echo $state;?><br><hr style="border-color:#BCBCBC; margin-top:-0.2%;">
					<label>PIN : </label> <?php echo $pin;?><hr style="border-color:#BCBCBC; margin-top:-0.2%;">
					<label>Education : </label> <?php echo $edu;?><hr style="border-color:#BCBCBC; margin-top:-0.2%;">
					<label>Mobile No. : </label> <?php echo $mobile;?><hr style="border-color:#BCBCBC; margin-top:-0.2%;">
					<label>Date of joining : </label> <?php echo $date;?>
				</div>
			</div>

			<div class="col-md-6" >
			<div class="well">
				<b><i><span class="glyphicon glyphicon-pencil"></span> Edit Current Profile</i></b>
			<br /><br />

				<form action="" method="POST"> 
					<?php require_once('includes/update.php');?>
					<input type="hidden" name="id" value="<?php echo $id;?>"/>
					<label>Name: </label><input type="text" class="form-control" onkeyup="letters(this)" name="newname" placeholder="<?php echo $name;?>"/><br>
					<label>Email : </label><input type="text" class="form-control" name="newemail" placeholder="<?php echo $email;?>"/><br>
					<label>Password : </label><input type="password" class="form-control" name="newpass" placeholder="Leave blank if you dont want to change" /><br>

					<label>Age Category : </label><select name="newage" class="form-control">
						<option value="Below 20 years"<?=$age == 'Below 20 years' ? ' selected="selected"' : '';?>>Below 20 years</option>
						<option value="20-35 years"<?=$age == '20-35 years' ? ' selected="selected"' : '';?>>20-35 years</option>
						<option value="35-50 years"<?=$age == '35-50 years' ? ' selected="selected"' : '';?>>35-50 years</option>
						<option value="Above 50 years"<?=$age == 'Above 50 years' ? ' selected="selected"' : '';?>>Above 50 years</option>
					</select><br>

					<label>Gender : </label>
						<label><input type="radio" name="newgender" value="N/A" <?php echo ($sex=='N/A')?'checked':'' ?>>N/A</label>
						<label><input type="radio" name="newgender" value="Male" <?php echo ($sex=='Male')?'checked':'' ?>>Male</label>
						<label><input type="radio" name="newgender" value="Female" <?php echo ($sex=='Female')?'checked':'' ?>>Femle</label>
						<br><br>

					<label>State : </label>
					<select name="newstate" class="form-control">
						<option value="Andaman and Nicobar Islands" <?=$state == 'Andaman and Nicobar Islands' ? ' selected="selected"' : '';?>>Andaman and Nicobar Islands</option>
						<option value="Andhra Pradesh" <?=$state == 'Andhra Pradesh' ? ' selected="selected"' : '';?>>Andhra Pradesh</option>
						<option value="Arunachal Pradesh" <?=$state == 'Arunachal Pradesh' ? ' selected="selected"' : '';?>>Arunachal Pradesh</option>
						<option value="Assam" <?=$state == 'Assam' ? ' selected="selected"' : '';?>>Assam</option>
						<option value="Bihar" <?=$state == 'Bihar' ? ' selected="selected"' : '';?>>Bihar</option>
						<option value="Chandigarh" <?=$state == 'Chandigarh' ? ' selected="selected"' : '';?>>Chandigarh</option>
						<option value="Chhattisgarh" <?=$state == 'Chhattisgarh' ? ' selected="selected"' : '';?>>Chhattisgarh</option>
						<option value="Dadra and Nagar Haveli" <?=$state == 'Dadra and Nagar Haveli' ? ' selected="selected"' : '';?>>Dadra and Nagar Haveli</option>
						<option value="Daman and Diu" <?=$state == 'Daman and Diu' ? ' selected="selected"' : '';?>>Daman and Diu</option>
						<option value="Delhi" <?=$state == 'Delhi' ? ' selected="selected"' : '';?>>Delhi</option>
						<option value="Goa" <?=$state == 'Goa' ? ' selected="selected"' : '';?>>Goa</option>
						<option value="Gujarat" <?=$state == 'Gujarat' ? ' selected="selected"' : '';?>>Gujarat</option>
						<option value="Haryana" <?=$state == 'Haryana' ? ' selected="selected"' : '';?>>Haryana</option>
						<option value="Himachal Pradesh" <?=$state == 'Himachal Pradesh' ? ' selected="selected"' : '';?>>Himachal Pradesh</option>
						<option value="Jammu and Kashmir" <?=$state == 'Jammu and Kashmir' ? ' selected="selected"' : '';?>>Jammu and Kashmir</option>
						<option value="Jharkhand" <?=$state == 'Jharkhand' ? ' selected="selected"' : '';?>>Jharkhand</option>
						<option value="Karnataka" <?=$state == 'Karnataka' ? ' selected="selected"' : '';?>>Karnataka</option>
						<option value="Kerala" <?=$state == 'Kerala' ? ' selected="selected"' : '';?>>Kerala</option>
						<option value="Lakshadweep" <?=$state == 'Lakshadweep' ? ' selected="selected"' : '';?>>Lakshadweep</option>
						<option value="Madhya Pradesh" <?=$state == 'Madhya Pradesh' ? ' selected="selected"' : '';?>>Madhya Pradesh</option>
						<option value="Maharashtra" <?=$state == 'Maharashtra' ? ' selected="selected"' : '';?>>Maharashtra</option>
						<option value="Manipur" <?=$state == 'Manipur' ? ' selected="selected"' : '';?>>Manipur</option>
						<option value="Meghalaya" <?=$state == 'Meghalaya' ? ' selected="selected"' : '';?>>Meghalaya</option>
						<option value="Mizoram" <?=$state == 'Mizoram' ? ' selected="selected"' : '';?>>Mizoram</option>
						<option value="Nagaland" <?=$state == 'Nagaland' ? ' selected="selected"' : '';?>>Nagaland</option>
						<option value="Orissa" <?=$state == 'Orissa' ? ' selected="selected"' : '';?>>Orissa</option>
						<option value="Pondicherry" <?=$state == 'Pondicherry' ? ' selected="selected"' : '';?>>Pondicherry</option>
						<option value="Punjab" <?=$state == 'Punjab' ? ' selected="selected"' : '';?>>Punjab</option>
						<option value="Rajasthan" <?=$state == 'Rajasthan' ? ' selected="selected"' : '';?>>Rajasthan</option>
						<option value="Sikkim" <?=$state == 'Sikkim' ? ' selected="selected"' : '';?>>Sikkim</option>
						<option value="Tamil Nadu" <?=$state == 'Tamil Nadu' ? ' selected="selected"' : '';?>>Tamil Nadu</option>
						<option value="Tripura" <?=$state == 'Tripura' ? ' selected="selected"' : '';?>>Tripura</option>
						<option value="Uttaranchal" <?=$state == 'Uttaranchal' ? ' selected="selected"' : '';?>>Uttaranchal</option>
						<option value="Uttar Pradesh" <?=$state == 'Uttar Pradesh' ? ' selected="selected"' : '';?>>Uttar Pradesh</option>
						<option value="West Bengal" <?=$state == 'West Bengal	' ? ' selected="selected"' : '';?>>West Bengal</option>
						</select><br>

						<label>PIN : </label><input type="text" class="form-control" name="newpin" placeholder="<?php echo $pin;?>"/><br>

						<label>Education : </label>
						<select name="neweducation" class="form-control">
						<option value="Graduate/Post Graduate-Professional" <?=$edu == 'Graduate/Post Graduate-Professional' ? ' selected="selected"' : '';?>>Graduate/Post Graduate-Professional</option>

						<option value="Graduate/Post Graduate-General" <?=$edu == 'Graduate/Post Graduate-General' ? ' selected="selected"' : '';?>>Graduate/Post Graduate-General</option>
						
						<option value="Higher Secondary Education" <?=$edu == 'Higher Secondary Education' ? ' selected="selected"' : '';?>>Higher Secondary Education</option>
						
						<option value="Secondary Education" <?=$edu == 'Secondary Education' ? ' selected="selected"' : '';?>>Secondary Education</option>
						
						<option value="Elementary Education" <?=$edu == 'Elementary Education' ? ' selected="selected"' : '';?>>Elementary Education</option>
					</select><br>

						<label>Mobile No. : </label><input type="text" class="form-control" name="newmob" placeholder="<?php echo $mobile;?>"/><br>

						<button type="submit" name="btn_edit" class="btn btn-success">Update Profile</button>
						<button type="reset" name="reset" class="btn btn-danger">Reset</button>
					
				</form>
			</div>
		</div>
		</div>
	</div>




	</body>
</html>