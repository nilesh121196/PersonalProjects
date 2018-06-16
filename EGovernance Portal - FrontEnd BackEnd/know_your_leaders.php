<?php
 session_start();
// if(!isset($_SESSION['useremail'])){
// 	echo "<div align='center' style='font-family : calibri; color:white; background:#D20D0D; padding:15px;'>Access Denied ! </div>";
// 	exit();
// }else{
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

	<title>Know Your Leaders</title>
	
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
		<?php } ?>

	

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

	<br><br><br><br>

	<div class="container-fluid">
		<div class="col-md-3">
			<ul class="nav nav-pills nav-stacked">
			  <li class="active"><a href="#knl" data-toggle="pill">Know your leaders</a></li>
			  <li><a href="#president" data-toggle="pill">President</a></li>
			  <li><a href="#vice-president" data-toggle="pill">Vice-President</a></li>
			  <li><a href="#pm" data-toggle="pill">Prime Minister</a></li>
			  <li><a href="#" data-toggle="pill">Council of Ministers</a></li>
			</ul>
		</div>
		
		<div class="tab-content">
			<div class="col-md-6 tab-pane active" id="knl">
				<div class="row">
					<img src="images/rashtrapati-bhavan.jpg" class="img-circle col-md-3" width="150px" height="150px">
					<h3 class="col-md-6" style="font-family: 'Roboto', sans-serif;">Know your leaders</h3>
				</div><br>
				<div class="row col-md-12" style="text-align: justify;">
					<p>This section gives you information about the persons holding the highest offices as well as respectable positions at the Executive, Judiciary, and Legislature levels in the country. Users can get the detailed profiles of the President, Vice President, Prime Minister, Chief Ministers, Members of Parliament, Governors and Chief Justice of India etc.</p><br><br><br><br><br><br><br><br><br><br>
					</div>
			</div>


			<!-- President -->
			<div class="col-md-9 tab-pane" id="president">
				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif;">President</h3>
					<img src="images/ram-nath-kovind.jpg" class="col-md-6">
				</div><br>
				<div class="row col-md-6" style="font-size: 13px; text-align: justify;">
					<h4 style="font-family: 'Roboto', sans-serif;">Shri Ram Nath Kovind</h4>
					<p><b>Father's Name:</b> Late Shri Maiku Lal</p>
					<p><b>Mother's Name:</b> Late Smt. Kalavati</p>
					<p><b>Date of Birth:</b> October 01, 1945</p>
					<p><b>Place of Birth:</b> Kanpur Dehat, Uttar Pradesh</p>
					<p><b>Marital Status:</b> Married</p>
					<p><b>Spouse's Name:</b> Smt. Savita Kovind</p>
					<p><b>Children:</b> Prashant Kumar and Swati</p>
					<p><b>Educational Qualifications:</b> B.Com, L.L.B.</p>
					<p><b>Permanent Address:</b> Kanpur Dehat, Uttar Pradesh</p>
					<p><b>Present Address:</b> Rashtrapati Bhavan, New Delhi, 110004, Tel: 011-23015321</p>
					<p><b>Profession:</b> Advocate, Politician and Activist</p>
					<p><b>Positions Held:</b></p>
					<ul>
						<li>Member, Rajya Sabha, 1994-2006. (Elected from Uttar Pradesh)</li>
						<li>Permanent Advocate at Hon'ble Supreme Court of India for Central Govt. (1980-93).</li>
						<li>Member, Parliamentary Committees for SC/ST Welfare, Home Ministry, Petroleum & Natural Gas, Social Justice and Rights, Law & Justice, Chairman of Rajya Sabha Housing Committee.</li>
						<li>Member, Management Board for Dr. B. R. Ambedkar University, Lucknow.</li>
						<li>Member, Board of Governors, Indian Institute of Management, Kolkata.</li>
						<li>Represented India at United Nations (New York) and addressed the General Assembly during Oct, 2002.</li>
						<li>Governor of Bihar from 16-08-2015 to 21-06-2017</li>
					</ul>
					<p><b>Countries Visited:</b> Widely travelled</p><br><br><br><br><br><br><br>
					</div>
			</div>

			<!-- Vice-President -->

			<div class="col-md-9 tab-pane" id="vice-president">
				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif;">Vice-President</h3>
					<img src="images/venkaiah-naidu.jpg" class="col-md-6">
				</div><br>
				<div class="row col-md-6" style="font-size: 13px; text-align: justify;">
					<h4 style="font-family: 'Roboto', sans-serif;">Shri M. Venkaiah Naidu</h4>
					<p><b>Father's Name:</b> Late Shri Rangaiah Naidu</p>
					<p><b>Mother's Name:</b> Late Shrimati Ramanamma</p>
					<p><b>Date of Birth:</b> 01/07/1949</p>
					<p><b>Place of Birth:</b> Chavatapalem, SPSR Nellore District, Andhra Pradesh</p>
					<p><b>Marital Status:</b> Married</p>
					<p><b>Spouse's Name:</b> Shrimati Muppavarapu Usha</p>
					<p><b>Children:</b> One Son and One daughter</p>
					<p><b>Educational Qualifications:</b> B.A., B.L. (Educated at V.R. High School, Nellore; V.R. College, Nellore and Law College, Andhra University, Visakhapatnam)</p>
					<p><b>Present Address:</b> Vice-President House, 6, Maulana Azad Road, New Delhi - 110011, Telephone - 011-23016422, 23016344</p>
					<p><b>Profession:</b> Agriculturist/Farmer, Political and Social worker</p>
					<p><b>Email:</b> vpindia@nic.in</p>
					<p><b>Positions Held:</b></p>
					<ul>
						<li>1971: President, Students' Union, V.R. College, Nellore</li>
						<li>1973-74: President, Students Union, Andhra University Colleges</li>
						<li>1974:Convener, Lok Nayak Jai Prakash Narayan Kshatra Sangharsh Samiti of Andhra Pradesh</li>
						<li>1977-80: President, Youth Wing of Janata Party, Andhra Pradesh</li>
						<li>1978-83 & 1983-85: Member, Legislative Assembly, Andhra Pradesh</li>
						<li>1980-83: Vice-President, Youth Wing of All India B.J.P.</li>
						<li>1980-85: Leader, B.J.P. Legislature Party in Andhra Pradesh</li>
						<li>1985-88: General Secretary, Andhra Pradesh State B.J.P.</li>
						<li>1988-93: President, Andhra Pradesh State Unit of B.J.P.</li>
						<li>1993 -2000: General Secretary, All India B.J.P.</li>
						<li>1996 - 2000: Secretary (i) BJP Parliamentary Board, & (ii) BJP Central Election Committee, and (iii) Spokesperson, BJP</li>
						<li>April 1998: Elected to Rajya Sabha from Karnataka (1st term)</li>
						<li>1998 - 99: Member, Committee on Home Affairs and Member, Consultative Committee for the Ministry of Agriculture</li>
						<li>1998 - 2001 & 2005 - 2013: Member, Tobacco Board</li>
						<li>1999 - 2000: Member, Committee on Finance</li>
						<li>Jan 2000: Member, Consultative Committee for the Ministry of Rural Development</li>
						<li>2000 (Sept) -2002 (June): Minister of Rural Development, Government of India</li>
						<li>2002 (July) - 2004 (Oct): National President, B.J.P.</li>
						<li>2004 (Jan) - 2004 (Feb): Member, Committee on External Affairs</li>
						<li>June 2004: Re-elected to Rajya Sabha from Karnataka (2nd term)</li>
						<li>2004 - 06: Member, Standing Committee on Finance</li>
						<li>2005: Member, Consultative Committee for the Ministry of Agriculture and Ministry of Consumer Affairs, Food and Public Distribution</li>
						<li>2006 - 2008: Chairman, Committee on Petitions (Rajya Sabha)</li>
						<li>2006 onwards: Member, (i) BJP Parliamentary Board, and (ii) BJP Central Election Committee</li>
						<li>2008 - 2014: Chairman, Committee on Home Affairs (Rajya Sabha)</li>
						<li>June 2010: Re-elected to Rajya Sabha in June, 2010 from Karnataka (3rd term)</li>
						<li>2011 (Dec) - 2014 (May): Parliamentary Forum on Disaster Management</li>
						<li>26 May 2014 - 5 July, 2016: Minister for Urban Development, Housing & Urban Poverty Alleviation and Parliamentary Affairs ;</li>
						<li>June, 2016 - Re-elected to Rajya Sabha from Rajasthan (4th term)</li>
						<li>6th July, 2016 - 17 July 2017: Minister for Urban Development, Housing & Urban Poverty Alleviation, and Information and Broadcasting.</li>
					</ul>
					
					<p><b>Other interests:</b> Agriculture, social work and writing articles in newspapers on the subjects of political and public interest; motivating voluntary organizations and involving and guiding constructive works in the fields of agriculture, health, animal care, vocational training, education etc.</p>
					<p><b>Hobbies:</b> Reading, Educating and motivating people</p>
					<p><b>Countries visited:</b> U.S.A., U.K., Malaysia, Singapore, France, Belgium, Netherlands, Australia, Mauritius, Maldives, Dubai, Hong Kong, Thailand, Spain, Egypt and Germany.</p>
					<p><b>Other Information: Chairman, Students' Union at College and also in University; Imprisoned under MISA during the emergency, 1975-77;</b> 
					<p><b>Contact Details:</b> Vice President's House, 6, Maulana Azad Road, New Delhi - 110 011</p>
					<p>Phone: 011-23016422, 23016344</p><br><br><br><br><br><br><br>
					</div>
			</div>

			<!-- PM -->
			<div class="col-md-9 tab-pane" id="pm">
				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif;">Prime Minister</h3>
					<img src="images/narender-modi-header.jpg" class="col-md-6">
				</div><br>
				<div class="row col-md-6" style="font-size: 13px; text-align: justify;">
					<h4 style="font-family: 'Roboto', sans-serif;">Shri Narendra Modi</h4>
					
					<p>On 26th May 2014 Narendra Modi took oath as the Prime Minister of India, becoming the first ever PM to be born after India attained Independence. Dynamic, dedicated and determined, Narendra Modi reflects the aspiration and hope of over a billion Indians.</p>
					<p>Ever since he assumed office in May 2014, PM Modi has embarked on a journey of all-round and inclusive development where every Indian can realize their hopes and aspirations. He remains deeply inspired by the principle of 'Antyodaya', of serving the last person in the queue.</p>
					<p>Through innovative ideas and initiatives, the Government has ensured that the wheels of progress move at rapid pace and the fruits of development reach every citizen. Governance has become open, easier and transparent.</p>

					<p><a href="http://www.pmindia.gov.in/en/pms-profile/"> To know more about the Prime Minister click hereContact Details:</a></p>
						
					<p>Prime Minister's Office</p>
					<p>South Block, Raisina Hill</p>
					<p>New Delhi-110011</p>
					<p>Phone No: +91-11-23012312</p>
					<p>Fax: +91-11-23019545, 23016857</p>
					<p><i class="fa fa-facebook-square"></i>: <a href="https://www.facebook.com/narendramodi">https://www.facebook.com/narendramodi</a> </p>
					<p><i class="fa fa-twitter-square"></i>: <a href="https://twitter.com/narendramodi"> https://twitter.com/narendramodi</a> </p><br><br><br><br><br><br><br>
				</div>
			</div>



		</div>

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