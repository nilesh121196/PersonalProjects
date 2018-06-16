<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>e-Governance Portal | National Portal of India</title>


	<link type="text/css" rel="stylesheet" href="css/mystyle.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	
	<style type="text/css">
		.icon-bar
  		{
	    	color: #fff;
	    	border-color: #fff;
	    	background-color: #fff;
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
			$name = "Admin";
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
				<li><a href="#">Home</a></li>
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
				<li><a href="#">Home</a></li>
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
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi, <?php echo 	$name; ?> <span class="caret"></span></a>
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
		<!-- Slider -->

		<div class="carousel slide" id="carousel1" style="margin-top: 50px; " data-ride="carousel">
			<ol class="carousel-indicators">
				<li dara-target="#carousel1" data-slide-to="0" class="active"></li>
				<li dara-target="#carousel1" data-slide-to="1"></li>
				<li dara-target="#carousel1" data-slide-to="2"></li>
				<li dara-target="#carousel1" data-slide-to="3"></li>
				<li dara-target="#carousel1" data-slide-to="4"></li>
				<!-- <li dara-target="#carousel1" data-slide-to="5"></li> -->
			</ol>

			<div class="carousel-inner">
				<div class="item active" style="background-image: url(images/2.jpg);">
					<img src="images/2.jpg">
				</div>
				<div class="item" style="background-image: url(images/3.jpg);">
					<img src="images/3.jpg">
				</div>
				<div class="item" style="background-image: url(images/4.jpg);">
					<img src="images/4.jpg">
				</div>
				<div class="item" style="background-image: url(images/5.jpg);">
					<img src="images/5.jpg">
				</div>
				<div class="item" style="background-image: url(images/6.jpg);">
					<img src="images/6.jpg">
				</div>				
			</div>

			<a href="#carousel1" data-slide="prev" class="left carousel-control"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a href="#carousel1" data-slide="next" class="right carousel-control"><span class="glyphicon glyphicon-chevron-right"></span></a>

		</div>
	<br><br><br>


	<div class="container">
		<div class="panel panel-default col-md-5" style="padding-top: 20px; background-color: #f5f5f5;">
			<div class="panel-header"><h4>News</h4></div>
			<div class="panel-body" style="max-height: 300px;overflow-y: scroll;">
					<p><i class="fa fa-angle-double-right"></i><a href="#" style="text-decoration: none; color: black;"> Reports of Law Commision of India</a></p>
					<p><i class="fa fa-angle-double-right"></i><a href="#" style="text-decoration: none; color: black;"> Website of National Law University and Judicial Academy of Assam</a></p>
					<p><i class="fa fa-angle-double-right"></i><a href="#" style="text-decoration: none; color: black;"> Website of Department of Industrial Policy and Promotion</a></p>
					<p><i class="fa fa-angle-double-right"></i><a href="#" style="text-decoration: none; color: black;"> List of State Agricultural Marketing Boards</a></p>
					<p><i class="fa fa-angle-double-right"></i><a href="#" style="text-decoration: none; color: black;"> Website of Directorate of Petroleum of Gujrat</a></p>
					<p><i class="fa fa-angle-double-right"></i><a href="#" style="text-decoration: none; color: black;"> National Policy on Skill Development by Ministry of Labour.</a></p>
					<p><i class="fa fa-angle-double-right"></i><a href="#" style="text-decoration: none; color: black;"> Micro Small and Medium Enterprises Development Institute of Agra</a></p>
					<p><i class="fa fa-angle-double-right"></i><a href="#" style="text-decoration: none; color: black;"> Exercise Gaganshakti-2018</a></p>
					<p><i class="fa fa-angle-double-right"></i><a href="#" style="text-decoration: none; color: black;"> Performance of PMSBY and PMJJBY</a></p>
					<p><i class="fa fa-angle-double-right"></i><a href="#" style="text-decoration: none; color: black;"> Gram Swaraj Abhiyan on Ambedkar Jayanti</a></p>
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
<br /><br /><br /><br /><br /><br /><br />
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