<?php
	session_start();
	if(isset($_POST['btn_login']))
	{
		$useremail = $_POST['useremail'];
		$userpass = $_POST['userpass'];

		include('includes/conn.php');

		$q1 = "SELECT * FROM users where email= '$useremail'";
		$q2 = "SELECT * FROM admin where email = '$useremail'";

		$r1 = mysqli_query($conn, $q1);
		$r2 = mysqli_query($conn, $q2);

		if(mysqli_num_rows($r1)>0)
		{
			while($row = mysqli_fetch_assoc($r1))
			{
				$dbname = $row['name'];
				$dbemail = $row['email'];
				$dbpass = $row['password'];
			}
			if($useremail == $dbemail && $userpass == $dbpass)
			{
				$_SESSION['useremail'] = $useremail;
				$_SESSION['userpass'] = $userpass;
				$_SESSION['status'] = "Success";
				$_SESSION['type'] = "user";	
				if($_POST['remember'] == 'on')
				{
					$expire = time()+86400;
					setcookie('egov', $_POST['useremail'], $expire);
				}
				header("location:index.php");
		}
		else
		{
			echo "<script>";
			echo "alert('Wrong Email or Password')";
			echo "</script>";
		}
	
	}
	elseif(mysqli_num_rows($r2)>0)
		{
			while($row = mysqli_fetch_assoc($r2))
			{
				$dbemail = $row['email'];
				$dbpass = $row['password'];
			}
			if($useremail == $dbemail && $userpass == $dbpass)
			{
				$_SESSION['useremail'] = $useremail;
				$_SESSION['userpass'] = $userpass;
				$_SESSION['status'] = "Success";
				$_SESSION['type'] = "admin";
				if($_POST['remember'] == 'on')
				{
					$expire = time()+86400;
					setcookie('egov', $_POST['useremail'], $expire);
				}
				header("location:admin_page.php");
			}
			else
			{
				echo "<script>";
				echo "alert('Wrong Email or Password')";
				echo "</script>";
			}
		}
		else
		{
			echo "<script>";
			echo "alert('Account does not exist')";
			echo "</script>";
		}
	}
?>
