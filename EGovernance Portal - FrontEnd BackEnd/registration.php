<?php

include('includes/conn.php');
	if(isset($_POST['submit_user']))
	{

	// $username = $_POST['username'];
	// $email = $_POST['email'];
	// $password = $_POST['password'];
	// $cpassword = $_POST['cpassword'];
	// $name = $_POST['name'];
	// $state = $_POST['state'];
	// $pin = $_POST['pin'];
	// $age = $_POST['age'];
	// $gender = $_POST['gender'];
	// $education = $_POST['education'];
	// $mobile = $_POST['mobile'];
	// $date = date('Y-m-d');

	$username = mysqli_real_escape_string($conn, strip_tags($_POST['username']));

	$email = mysqli_real_escape_string($conn, strip_tags($_POST['email']));		

	$password = mysqli_real_escape_string($conn, strip_tags($_POST['password']));

	$cpassword = mysqli_real_escape_string($conn, strip_tags($_POST['cpassword']));

	$name = mysqli_real_escape_string($conn, strip_tags($_POST['name']));

	$state = mysqli_real_escape_string($conn, strip_tags($_POST['state']));

	$pin = mysqli_real_escape_string($conn, strip_tags($_POST['pin']));

	$age = mysqli_real_escape_string($conn, strip_tags($_POST['age']));

	$gender = mysqli_real_escape_string($conn, strip_tags($_POST['gender']));

	$education = mysqli_real_escape_string($conn, strip_tags($_POST['education']));

	$mobile = mysqli_real_escape_string($conn, strip_tags($_POST['mobile']));

	$date = date('Y-m-d');

	$q1 = "SELECT * FROM users where username = '$username'";
	$q2 = "SELECT * FROM users where email = '$email'";
	$q3 = "SELECT * FROM users where mobile_no = '$mobile'";

	$r1 = mysqli_query($conn, $q1);
	$r2 = mysqli_query($conn, $q2);
	$r3 = mysqli_query($conn, $q3);

	if(mysqli_num_rows($r1)>0)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Username is already registered");'; 
		echo 'window.location.href = "register_form.php";';
		echo '</script>';
	}
	elseif(mysqli_num_rows($r2)>0)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Email id is already registered");'; 
		echo 'window.location.href = "register_form.php";';
		echo '</script>';
	}
	elseif(mysqli_num_rows($r3)>0)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Mobile number is already registered");'; 
		echo 'window.location.href = "register_form.php";';
		echo '</script>';
	}
	else
	{
		if((strlen($mobile)!=10))
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Length of mobile number must be 10!");'; 
			echo 'window.location.href = "register_form.php";';
			echo '</script>';
		}
		elseif((strlen($pin)!=6))
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Length of PIN number must be 6!");'; 
			echo 'window.location.href = "register_form.php";';
			echo '</script>';
		}
		elseif($password != $cpassword)
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Password should be same in both fields");'; 
			echo 'window.location.href = "register_form.php";';
			echo '</script>';
		}
		else
		{
			$ins_sql = "INSERT INTO users (username, email, password, name, state, pin, age, gender, education, mobile_no, date) VALUES ('$username', '$email', '$password', '$name', '$state', '$pin', '$age', '$gender', '$education', '$mobile', '$date')";

		if(mysqli_query($conn, $ins_sql))
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Registration successful");'; 
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}
		else
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Registration failed..");'; 
			echo 'window.location.href = "registration_form.php";';
			echo '</script>';
		}
		}
	}
	}	
?>