<?php
session_start();
// if(!isset($_SESSION['useremail'])){
// 	echo "<div align='center' style='font-family : calibri; color:white; background:#D20D0D; padding:15px;'>Access Denied ! </div>";
// 	exit();
//}else{
if(isset($_SESSION['useremail'])||isset($_COOKIE['egov'])){
$email = $_SESSION['useremail'];
include('includes/conn.php');
$query = "SELECT * FROM users WHERE email ='".$email."'";
$rec = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($rec)){
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
//}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Projects</title>
	
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
  		font-size: 16px;
  	}
</style>

</head>
<body>

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
		while($row = mysqli_fetch_assoc($h2))
		{
			
			$username = $row['username'];
			$email = $row['email'];
		}
	?>

	
	<!-- Navigation Bar -->
	<?php if(!isset($_SESSION['useremail'])){?>
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
				<li><a href="contact">Contact Us</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="register_form.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
			</div>
		</div>
	</div><?php }else{
		?>
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
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Complain <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="complaint.php" style="color: black;">Log Complain</a></li>
						<li><a href="check_complain_status.php" style="color: black;">View complaint status</a></li>
					</ul>
				</li>
				<li><a href="projects.php">Projects</a></li>
				<li><a href="know_your_leaders.php">Know Your Leaders</a></li>
				<li><a href="#">Contact Us</a></li>
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
		<?php } ?>

	<br /><br /><br /><br />


	<div class="container">
		<h2>Contact Us</h2><br>
		<div class="row">
			<div class="col-md-6" style="text-align: justify;">
				<p>This is the Official Portal of the Government of India designed, developed and hosted by <a href="http://www.nic.in/" target="_BLANK" title="External site that opens in a new window">National Informatics Centre (NIC)</a>, <a href="http://meity.gov.in/" target="_BLANK" title="External site that opens in a new window">Ministry of Electronics &amp; Information Technology</a>.</p> <p>The objective behind the Portal is to provide a single window access to the information and services being provided by the Indian Government for citizens and other stakeholders. The content of this Portal is managed centrally by the National Portal Content Management Team from the National Portal Secretariat. In case you have any query regarding this portal you may write to the <strong>Web Information Manager</strong> at  <strong>indiaportal[at]gov[dot]in</strong></p> <p>Any feedback, related to content, design, or technology with respect to the National Portal of India (NPI) may be submitted at <a href="#">Feedback</a> section.</p>
			</div>

			<div class="col-md-6">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div> 
        </div></div>
		</div><br /><br /><br /><br /><br />
	</div>


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

<!-- container-fluid div close here -->
</div>


	<footer class="footer1">
<div class="container">

<div class="row"><!-- row -->
            
                <div class="col-lg-4 col-md-4"><!-- widgets column left -->
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Information Related To</h1>
                                
                                <ul>
                                	<li><a  href="#"><i class="fa fa-angle-double-right"></i> Agriculture</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i> Commerce</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i> Defence</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i> Environment & Forest</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i> Food & Public Distribution</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Governance & Administration</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Housing</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Social Development</a></li>
                                </ul>
                    
							</li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                
                <div class="col-lg-4 col-md-4"><!-- widgets column left -->
            
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Useful links</h1>
                                
                                <ul>
 									<li><a  href="#"><i class="fa fa-angle-double-right"></i>  Art & Culture</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Communication</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Education</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Finance & Taxes</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Foreign Affairs</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Infrastructure</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Science & Technology</a></li>
                                    <li><a  href="#" target="_blank"><i class="fa fa-angle-double-right"></i> Youth &Sports</a></li>
                                    
                                </ul>
                    
							</li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                
                <div class="col-lg-4 col-md-4"><!-- widgets column left -->
            
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">About the Government</h1>
                                
                                <ul>


                <li><a href="#"><i class="fa fa-angle-double-right"></i> Constitution of India</a></li>
 				<li><a href="#"><i class="fa fa-angle-double-right"></i> Indian Parliament</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i> President of India</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i> Vice-President of India</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i> Prime Minister of India</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i> Cabinet Ministers</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i>  Cheifs of Armed Forces</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i>  Members of Parliament</a></li>

                                </ul>
                    
							</li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                
                </div>
</div>
</footer>
<!--header-->

<div class="footer-bottom">

	<div class="container">

		<div class="row">

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

				<div class="copyright">

					© 2018, Group, All rights reserved

				</div>

			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

				<div class="design">

					 <a href="#">Web Design & Development by group</a>

				</div>

			</div>

		</div>

	</div>

</div>	

            
</body>
</html>