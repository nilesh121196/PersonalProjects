<?php
if(!isset($_SESSION['useremail'])){
	echo "Access Denied !";
}else{
if(isset($_POST['btn_edit']))	{
$id = $_REQUEST['id'];
$newname = $_REQUEST['newname'];
$newpass = $_REQUEST['newpass'];
$newemail = $_REQUEST['newemail'];
$newage = $_REQUEST['newage'];
$newgender = $_REQUEST['newgender'];
$newstate = $_REQUEST['newstate'];
$newpin = $_REQUEST['newpin'];
$newedu = $_REQUEST['neweducation'];
$newmob = $_REQUEST['newmob'];

include('includes/conn.php');

$q1 = "SELECT * FROM users where email='$newemail'";
$q2 = "SELECT * FROM users where mobile_no ='$newmob'";

$r1 = mysqli_query($conn,$q1);
$r2 = mysqli_query($conn,$q2);


if($newemail != "" ){
if($r1->num_rows>0){
print "<script>";
print "alert('Email ID is already register')";
print "</script>";
}
	else{
	mysqli_query($conn,"UPDATE users SET email='$newemail' WHERE uid='$id'");
	echo '<script type="text/javascript">'; 
	echo 'alert("You Update your email address hence you need to login again");'; 
	echo 'window.location.href = "logout.php";';
	echo '</script>';
	}
}

if($newmob != "" ){
if($r2->num_rows>0){
print "<script>";
print "alert('Phone No is already register')";
print "</script>";
}

	else{
	if((strlen($newmob))!=10){
	print "<script>";
	print "alert('Mobile No Must have 10 digit')";
	print "</script>";
}
	else{
	mysqli_query($conn,"UPDATE users SET mobile_no='$newmob' WHERE uid='$id'");
	echo '<script type="text/javascript">'; 
	echo 'alert("Your Profile has been updated successfully");'; 
	echo 'window.location.href = "index1.php";';
	echo '</script>';
	}}
}

if($newname != "" ){
	mysqli_query($conn,"UPDATE users SET name='$newname' WHERE uid='$id'");
	echo '<script type="text/javascript">'; 
	echo 'alert("Your Profile has been updated successfully");'; 
	echo 'window.location.href = "index1.php";';
	echo '</script>';
}

if($newpass != "" ){
	mysqli_query($conn,"UPDATE users SET password='$newpass' WHERE uid='$id'");
	echo '<script type="text/javascript">'; 
	echo 'alert("Your Profile has been updated successfully");'; 
	echo 'window.location.href = "index1.php";';
	echo '</script>';
}

if($newage != "" ){
	mysqli_query($conn,"UPDATE users SET age='$newage' WHERE uid='$id'");
	echo '<script type="text/javascript">'; 
	echo 'alert("Your Profile has been updated successfully");'; 
	echo 'window.location.href = "index1.php";';
	echo '</script>';
}

if($newgender != "" ){
	mysqli_query($conn,"UPDATE users SET gender='$newgender' WHERE uid='$id'");
	echo '<script type="text/javascript">'; 
	echo 'alert("Your Profile has been updated successfully");'; 
	echo 'window.location.href = "index1.php";';
	echo '</script>';
}

if($newstate != "" ){
	mysqli_query($conn,"UPDATE users SET state='$newstate' WHERE uid='$id'");
	echo '<script type="text/javascript">'; 
	echo 'alert("Your Profile has been updated successfully");'; 
	echo 'window.location.href = "index1.php";';
	echo '</script>';
}

if($newpin != "" ){
	mysqli_query($conn,"UPDATE users SET pin='$newpin' WHERE uid='$id'");
	echo '<script type="text/javascript">'; 
	echo 'alert("Your Profile has been updated successfully");'; 
	echo 'window.location.href = "index1.php";';
	echo '</script>';
}

if($newedu != "" ){
	mysqli_query($conn,"UPDATE users SET education='$newedu' WHERE uid='$id'");
	echo '<script type="text/javascript">'; 
	echo 'alert("Your Profile has been updated successfully");'; 
	echo 'window.location.href = "index1.php";';
	echo '</script>';
}

}}
?>