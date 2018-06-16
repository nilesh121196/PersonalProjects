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
	table.tableizer-table {
		font-size: 14px;
		border: 1px solid #CCC; 
		font-family: Arial, Helvetica, sans-serif;
	} 
	.tableizer-table td {
		padding: 8px;
		margin: 3px;
		border: 2px solid #CCC;
	}
	.tableizer-table th {
		padding: 8px;
		margin: 3px;
		background-color: #0E4E8F; 
		color: #FFF;
		border: 2px solid #fff;
		font-weight: bold;
	}

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

	<br /><br /><br /><br />

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

	<div class="container-fluid">
		<div class="col-md-3">
			<ul class="nav nav-pills nav-stacked">
			  <li class="active"><a href="#aaby" data-toggle="pill">Aam Aadmi Bima Yojana</a></li>
			  <li><a href="#cgp" data-toggle="pill">Clean Ganga Project</a></li>
			  <li><a href="#dugjy" data-toggle="pill">Deendayal Upadhyaya Gram Jyoti Yojana	</a></li>
			  <li><a href="#iay" data-toggle="pill">Indira Awaas Yojana</a></li>
			  <li><a href="#jdy" data-toggle="pill">Jan Dhan Yojana</a></li>
			  <li><a href="#mki" data-toggle="pill">Make in India</a></li>
			  <li><a href="#nhm" data-toggle="pill">National Health Mission</a></li>
			  <li><a href="#pmgsy" data-toggle="pill">Pradhan Mantri Gram Sadak Yojana</a></li>
			</ul>
		</div>
		
		<div class="tab-content">

				<!-- Aam Aadmi Bima Yojna -->

			<div class="col-md-6 tab-pane active" id="aaby">
				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Aam Aadmi Bima Yojna</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>The Aam Admi Bima Yojana is a project initiated by the Union Finance Ministry. This can be described as the combination of two social security programmes operated previously by the central government, namely, Janashree Bima Yojana (JBY) and Aam Admi Bima Yojana (AABY). The project has been made operational from 1st January 2013.</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">The eligibility criteria for the scheme</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>In order to be considered eligible for being benefited by the programme, the applicants should be within the age group of 18 to 59 years. The concerned beneficiary should ideally be the head of a family, classified as being Below Poverty Line (BPL) or a family that is only above the said line. However, this classification has to be done in terms of certain selected landless households and vocational groups of the rural areas of India.<br /><br />

					In order to prove their eligibility as beneficiaries of the programme the applicants will need to furnish proper age proof. They could provide their ration card or an extract that has been taken from their birth register or even their school certificate. They could provide their voters identity cards or any other identity card that has been given to them by a governmental department or an employer who is well-known. They could also provide their Aadhar or Unique Identification Card for this purpose.</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Role of nodal agency in programme</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>The nodal agency is the body that is supposed to be responsible for administering the Aam Admi Bima Yojana to its intended beneficiaries. It could be a department of a central ministry or the state government or a union territory. It could also be any other kind of institution-based arrangement such as an NGO. NGOs can get registered with the relevant authorities in order to operate the scheme but it has to be done with rules that have already been set in this regard. However, if the beneficiary is classed as a rural landless household then the nodal agency will have to be appointed by the respective union territory or state government.</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">How will the premium be paid?</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>In the initial stages the policyholders will need to pay an amount of Rs 200 per year; this will ensure that they receive a cover of Rs 30,000. Half of the coverage amount will be contributed by the Social Security Fund. If the member belongs to a rural landless family then his or her premium will be paid by the union territory or state government.<br /><br />
					
					If the member comes from a family that has been classed as an 'other occupational group' then the nodal agency that provided the policy shall be responsible for paying 50 per cent of the premium or the government of the state or union territory where the person stays.

					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">The benefits provided by the programme</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>The benefits available under the Aam Admi Bima Yojana will accrue in several heads such as natural death, accidental death and disability benefits, and permanent total disability benefits. In case a member passes away owing to natural causes in the time for which this policy is effective then the nominee will receive the sum assured of Rs 30,000. In case a member passes away within the stipulated period owing to an accident then the nominee shall be paid an amount of Rs 75,000. The amount will be the same if the member suffers permanent total disability due to an accident. This includes the loss of one or both the limbs as well as one or both the eyes. In case someone loses a limb or an eye in an accident, the amount provided will be Rs 37,500.<br /><br />

					The scheme also provides several scholarship benefits. If the child of a beneficiary is studying between ninth and twelfth standard then he or she will be provided a monthly amount of Rs 100. However, this benefit will be provided as a clubbed amount after 6 months. The two designated dates in this case are 1st January and 1st July. One beneficiary will be able to avail this benefit for a maximum of two children.</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">How can claims be made?</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>If the member dies within the duration of the policy then the concerned nominee will have to make an appeal for claiming the amount along with a proper death certificate to the nodal agency officer who is supposed to handle these procedures. Upon receiving the papers, the concerned officer will check their authenticity. He or she will also certify that the person who passed away was the head of the family or an earning member of the same. The officer will also notify in the same certificate that the concerned family belonged to BPL or an occupational category that is supposed to be covered by the programme.<br /><br />

					In addition to the application, the nodal officer will notify the concerned authorities that the claim form has been totally and properly completed. He or she will provide an original version of the death certificate along with a copy that has been properly attested. In case the deceased's nominee is claiming benefits pertaining to accidental death then the nodal officer will have to file additional documents such as copy of the first information report (FIR), police inquest report, post mortem report and police conclusion report, which is also regarded as the final report submitted by the police.<br /><br />

					In situations where the nominees are claiming benefits related to permanent total disability, they will need to furnish documents that prove that the accident has taken place. They will need to provide medical certificate that is provided by a qualified orthopaedician or a civil surgeon. This certificate should state the fact that the beneficiary has suffered partial or total disability owing to the accident and limbs lost or affected. However, the limbs in question should be covered by the policy.<br /><br />

					It is imperative that the members of this policy appoint a nominee who shall be provided the payment in case of his or her death. The nomination form is provided in the membership application form itself and it needs to be filled up with the details of the individual who is being chosen for this benefit. The form needs to be filled up carefully so that there are no undue complications at the time of transfer of benefits. The nodal agency or concerned panchayat will be entrusted with the responsibility of holding the nomination form and sending it to the LIC when the member passes away.

				</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Which occupations are covered by the policy?</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					The Aam Admi Bima Yojana covers a number of sectors that may be mentioned as below:<br />

						<ul>
						<li>Beedi</li>
						<li>Foodstuffs such as sugar or khandsari</li>
						<li>Brick kiln</li>
						<li>Textile</li>
						<li>Carpentry</li>
						<li>Wood products making</li>
						<li>Cobbling</li>
						<li>Paper products making</li>
						<li>Fishing</li>
						<li>Leather products making</li>
						<li>Hamals</li>
						<li>Printing</li>
						<li>Handicraft</li>
						<li>Coal and rubber products</li>
						<li>Handloom weaving</li>
						<li>Chemical products such as candle making</li>
						<li>Khadi</li>
						<li>Mineral products such as earthen toys</li>
						<li>Tailoring (women will be covered here)</li>
						<li>Agriculture</li>
						<li>Tannery</li>
						<li>Transport</li>
						<li>Papad</li>
						<li>Self-employed people who are specially-abled</li>
						<li>Primary milk</li>
						<li>Construction</li>
						<li>Rickshaw and auto</li>
						<li>Fire crackers</li>
						<li>Safai</li>
						<li>Coconut</li>
						<li>Salt</li>
						<li>Anganwadi education</li>
						<li>Tendu leaf collection</li>
						<li>Kotwal</li>
						<li>Plantations</li>
						<li>Forestry</li>
						<li>Women working for self-help groups  </li>
						<li>Sericulture</li>
						<li>Sheep breeding</li>
						<li>Toddy tapping</li>
						<li>Indian workers working outside the country</li>
						<li>Powerlooms</li>
						<li>Women living in hilly areas</li>
						<li>Unorganised workers who are covered by the Rashtriya Swasthya Bima Yojana</li>
					</ul><br />

					<p>The biggest benefit of such a scheme is that it provides the poorer section of Indian population the much-needed breathing space in terms of their financial requirements. One of the major problems plaguing Indian economy is the less than satisfactory condition of the poor people. With this programme, at least an effort has been made at the policymaking level to achieve a significant breakthrough. </p><br /><br /><br /><br /><br /><br /><br />

				</div>
			</div>
	


			<!-- Clean Ganga Project -->

			<div class="col-md-6 tab-pane" id="cgp">
				<div class="row">
					<h3 class="col-md-6" style="font-family: 'Roboto', sans-serif; color:#376B98">Namami Gange - Saving the Ganga</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>The Clean Ganga project is officially known as the Integrated Ganga Conservation Mission project or 'Namami Gange'. This is basically a dream project of Prime Minster Narendra Modi. Before he became the PM of India, Modi had been a staunch advocate of cleaning up the river Ganga. He promised that if he were voted to power he would start the project right away.<br/><br/>

					True to his word, he got the said project started within a few months of becoming the new PM. This project has already paid dividends to him. This was evident during his recent visit to the US where the Clinton family congratulated him on the project. The project has been in the news of late for the way RSS, the parent party of BJP, has decided to monitor it and also because of the various investment plans - with tax benefits - that the government is announcing with regard to this project.
					</p>
					<h4 class="btn-danger col-md-9">Clean Ganga Project Map</h4>
					<img src="images/map.png"><br /><br />
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">When it will be completed</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>A few days back, the Supreme Court had asked the Indian Government when the Clean Ganga project be completed. In its reply to the apex judicial body of the country, the national administration had answered that the process shall take at least 18 years to be completed. This is not an unusual target considering the length and breadth of the river in question - it almost covers almost the entire part of northern India and stretches from Uttarakhand in northwest to West Bengal in eastern India.</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Area covered in the project</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<img src="images/area-covered.png" align="left" style="margin-right:10px;" alt="area covered in clean ganga project project"/>

					<p>There are five states in India that fall in the course of river Ganga - Uttarakhand, Jharkhand, Uttar Pradesh, West Bengal and Bihar. Besides, it touches parts of Himachal Pradesh, Rajasthan, Haryana, Chhattisgarh, and Delhi through its tributaries. Thus it is conceivable that the Clean Ganga project shall be taking into consideration the aforementioned areas. Recently when the Supreme Court had quizzed the central government on completion of the project it had stated that the assistance of the state governments of the 5 states will be necessary in executing the said project. The Indian Government has also stated that it is for these state governments to generate awareness among the common people as far as keeping the river clean is concerned.</p>

					<h3 style="font-family: 'Roboto', sans-serif; color:#376B98">Implementation of the poject</h3>

					<p>The Namami Gange project will be implemented in several stages. While the exact details are not known yet, one understands that it will involve activities such as cleaning up the tributaries to start with. The authorities will also be supposed to manage the cities through which the river is flowing so that the industrial units in these cities do not dump their effluents and wastes over there. Development of tourism will also be an important part of this project because it shall help meet the expenses towards the upkeep of the project. The authorities may also look to develop a channel that runs from Allahabad till Haldia in West Bengal that shall help in navigation.</p><br /><br /><br /><br /><br /><br /><br />
				</div>
			</div>

			<!-- Deendayal Upadhyaya Gram Jyoti Yojana -->

			<div class="col-md-6 tab-pane" id="dugjy">
				
				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">About Deendayal Upadhyaya Gram Jyoti Yojana</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<p>In order to provide rural electrification across all homes in Indian villages, the Union Government headed by Prime Minister (PM) Narendra Modihas approved the launch of the Deendayal Upadhyaya Gram Jyoti Yojana (DDUGJY) on 20th November, 2014.<br /><br />

					Under the DDUGJY, the elements of agricultural and non-agricultural feeders are going to be separated for the effective rostering in rural area units. The theme additionally includes strengthening and augmentation of sub transmission and distribution infrastructure in rural areas, as well as metering of distribution transformers and feeders.<br /><br />

					The DDUGJY has replaced the present Rajiv Gandhi Grameen Vidyutikaran Yojana (RGGVY) that was started by former Prime Minister Dr Manmohan Singh on 4th April, 2005 to provide access to electricity to all rural households in un-electrified and electrified villages inside the whole country.<br /><br />

					The DDUGJY can benefit rural households significantly. Considering that load shedding continues to be rampant in several parts of the country, effective implementation of the scheme is required. Power is extremely vital for growth and development of the country. <br /><br />

					The features of RGGVY have been subsumed in the new scheme of DDUGJY and the unspent amount of RGGVY will be carried forward to DDUGJY. The RGGVY covered electrification of all the villages within the country except the villages under the programmes run by the Ministry of Non-conventional Sources (MNES) for providing electricity from non-conventional energy sources. With the launch of DDUGJY, the "accelerated electrification of one lakh villages and one crore households "and also the Minimum Needs Programme (MNP) for rural electrification has got integrated with it. The scheme is being enforced through the Rural Electrification Corporation (REC) that has been selected as nodal agency by the Ministry of Power.
					Earlier this scheme was called Accelerated Village Electrification Scheme (AVES) and later renamed as RGGVY. It had been taken as one of the " Bharat Nirman" programme by the erstwhile Planning Commission and the timeline of the scheme had been extended by another two years.</p>

				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Why DDUGJY Project Started?</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<p>The concept of rural electrification in India has undergone varied restructuring programmes. Until 1997, the focus was on electrification for irrigation to extend the agricultural production of the country. Later this modified to an additional targeted approach, recognising the importance of reaching electricity to rural areas.<br /><br />
					
					The declared aim of the electrification programme is to ensure economic development by providing electricity access to all villages and households to enhance the living standards and employment opportunities within the rural areas. <br /><br />

					The UPA government had started a flagship programme, RGGVY, aimed to accelerate the pace of village electrification programme within the country. The  RGGVY aimed at  electrification  of  over  one  lakh  un-electrified  villages  and  providing electricity connections to 2.34 crore rural households.</p>

				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Area & Implementation</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<p>The DDUGJY scheme will help in improvement of power supply in rural households as well as reduction of peak loads. There will also be improvements in billed energy based on metered consumption and access of electricity to rural households. Through the new scheme, intra-state transmission and distribution system for north eastern states will be strengthened.<br /><br />

					During the initial phase of RGGVY, about 12 states of country named Andhra Pradesh, Assam, Madhya Pradesh, Jammu & Kashmir, Jharkhand, Odisha, Rajasthan, Maharashtra, Uttar Pradesh, Karnataka, Kerala, and West Bengal and Bihar participated in the programme. Union Territory (UT) of Lakshadweep was also on the national network during the programme.<br /><br />

					In the first phase, village electrification is under progress in 20 districts of Purvanchal; the electrification work of five districts was dispensed by the Power Grid Corporation of India Limited (PGCIL) and the remaining work of 15 districts was carried out by the six acknowledged companies on turnkey basis.
					In first phase, un-electrified villages are hand-picked for electrification. For this scheme 90 percent of expenditure has been supported by government of India as help and balanced is organised by UPPCL as a loan.</p>

				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Three -Tier Quality Monitoring Mechanism</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<p>
						<b>First Tier:</b> The Project implementing agency (PIA) would be accountable to the 1st tier of the standard management structure. PIA can have interaction with third party scrutiny agency, whose responsibility can be to guarantee that all the materials  to  be utilised and also the craft adapt to the prescribed specifications. This scrutiny can cover around 500 villages on random sample basis for every project.<br /><br />

						<b>Second Tier:</b> Rural Electrification Corporation (REC) can get the scrutiny done of the works/ materials.   The scrutiny can cover  quality  checks  at  pre-shipment  stage  at  the vendors'  outlet  for  major  materials  and 100 percent  villages  on  random  sample basis.<br /><br />

						<b>Third Tier:</b> Freelance  Evaluators  (Individuals  /  Agency) can  be  engaged  by  the Ministry of Power  for analysis, at  random, of offer and  erection under the  programme.  All  works  rated  'unsatisfactory'  shall  be  re-inspected  by RQM  or NQM once  a  rectification  report  has  been  received  from  the  REC Quality organiser. Continual adverse reports regarding quality of works in a given district/state may entail suspension of the programme in  that space until  the underlying causes of defective work are self-addressed. The standard management mechanism would be ruled by the standard management manual that has been set up by REC for the scheme.
					</p>

				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Cost of the Project</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<p>
						The cost of implementing the two components of the DDUGJY scheme will be Rs 43033 crore and this includes required budgetary support of Rs, 33453 crore from the Union Government within the entire period for implementation. <br /><br />

						Balance work pertaining to rural electrification will now come under the DDUGJY scheme as a distinct component for electrification of rural areas. CCEA has approved the scheme cost of 39275 crore rupees including budgetary support of Rs 35447 crore.
					</p>


				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Achievement of the Earlier  Scheme for Rural Electrification</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<p>
						The Evaluation Organisation of Planning Commission released the evaluation report on RGGVY Programme on May, 2014.  The report stated that the overall achievement of the scheme is 93.3 per cent as far as the household electrification is concerned. The good thing about the household electrification is that achievement in sample district average is over 80 per cent in all the sample states. Five states (out of the 15 sample states) AP, Haryana, HP, Karnataka and UP have achieved 100 per cent in relation to respective target. In terms of physical achievements of coverage of villages, RGGVY has done reasonably well in sample states.<br /><br />

						Regarding intensification of electrified villages, the overall performance does not appear satisfactory at 53 per cent achievement.. However, spectacular progress has been reported from six states, Andhra Pradesh (98 per cent), Gujarat (97 per cent), and Tamil Nadu (89 per cent). Poor progress is seen in Haryana (8 per cent), Rajasthan (27 per cent), Odisha (34 per cent), Mysore (38 per cent), and Himachal Pradesh (29 per cent). These states have given priority to un-electrified/de-electrified villages. <br /><br />

						The Ministry of Power has sanctioned 921 projects to electrify 1,24,755 unelectrified villages, intensive electrification of 603581 partially electrified villages and to provide free electricity connections to 405.72 lakh BPL rural households. The project works in 1, 08,661 unelectrified villages and intensive electrification of 311881 partially electrified villages have been completed and 219.77 lakh free electricity connections have been released to BPL households, till  30th September, 2014.<br /><br />

						Although the scheme was launched in the year 2005, the scheme wasn't enforced within the same year in all the states. Timely completion of projects needed an excellent degree of cooperation and coordination. A number of sample states had already achieved 100 percent electrification whereas others are way behind. The foremost reason for incomplete work is attributable to delay in receiving letter of award (LOA) and land acquisition.<br /><br />

						Under the scheme, 90 percent capital grant is provided by Government of India for overall value of comes. Cumulatively until FY10, works in 190,858 villages were completed and free connections to over ten million below personal income (BPL) households were given.
						In 2012, against a target of one lakh villages and 1.75 crore BPL households, the government has provided electricity to 1.04 lakh villages and provided free connections to 1.95 crore BPL households. The addition of over 20,500 MW in 2011-12 was the highest ever annual capacity addition in any year. The government has achieved a milestone by successfully testing the world's highest voltage test station of 1200 KV at Bina in Madhya Pradesh.<br /><br />

						Under Phase-I of RGGVY, the Ministry of Power sanctioned 576 projects for 546 districts to electrify 1, 10,886 villages and to provide free electricity connections to 2.29 crore BPL rural households. As on 31st December, 2012, works in 1, 06,335 villages have been completed and 204.47 lakh free electricity connections have been released to BPL households. About 72 projects under Phase-II covering electrification of 1909 un-electrified villages, 46606 un-electrified habitations, 53,505 partially electrified villages, 25,947 partially electrified habitations and release of free electricity connections to 45,59,141 BPL households have also been sanctioned with an outlay of Rs 7964.32 crore.
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Facts about the  Earlier Programme</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<p>
						RGGVY has been instrumental in providing power to BPL households and to some APL households specifically in states wherever rural electrification intensity was low. However, the expectation of exaggerated employment and financial gain of the beneficiary households has not materialised, though variety of different associated advantages have increased to rural economy. <br /><br />

						Further, most districts hand-picked within the sample areas provide electricity to BPL beneficiaries and APL shoppers fairly recently. Different development themes haven't nonetheless taken advantage of presence of electricity in these areas thereby missing the convergence of scheme advantages.<br /><br />

						The major changes seen in RGGVY enforced areas relate to social unit employment, income, and social development in terms of changes within the pattern of employment of girls, facilities for youngsters to spend hours in electric light for improvement in their respective performances, and improved security in villages throughout night. Rural electrification has helped in diversification of subsidiary occupation of beneficiary households, production of handicrafts and handlooms throughout spare hours by girls attributable to convenience of electricity and different entrepreneurial activities. Some changes in agricultural operations, specifically, agro-processing through electrical equipment were seen, although restricted to a couple of pockets of the sample districts.<br /><br />

						 However RGGVY has not created any major changes in primary occupation nor in agricultural operations as envisaged (like electrical pump sets for irrigation, agro-processed product or service units operated through electricity).

					</p><br /><br /><br /><br /><br /><br /><br />


				</div>
			</div>

			<!-- Indira Awaas Yojana -->

			<div class="col-md-6 tab-pane" id="iay">
				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Indira Awaas Yojana: Houses for the Poorest</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<p>
						The Indira Awaas Yojana (IAY) can be described as the flagship programme of the Union Ministry of Rural Development. Ever since it has been operated, the programme has been benefiting families below the poverty line (BPL). The beneficiaries of the said plan have either been people whose houses are not up to the mark or ones who have nothing to call their home.<br /><br /><br />
						
						In a way, this programme has enabled the Indian Government to execute a bigger strategy of eradicating poverty from the country. It was during June 1996 that India signed  the Istanbul Declaration on Human Settlement and ever since the Rural Development Ministry has focused on providing living spaces for one and all in the country. Being party to this treaty, India has realised how important it is for the national administration to provide healthy and secure housing facilities to all. After all, it is very important for an individual's overall well-being to have something that he or she can call home.<br /><br />

						The major focus groups of this programme are the poor, who are living in pitiful conditions in the urban areas as well as the rural hinterlands. As per the Constitution of India, it is the responsibility of the panchayati raj institutions (PRIs) and the state governments to ensure that the poor in the rural have proper houses to them. However, the Indian Government too has become a part of the said initiative.
					</p>

				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">What is the aim of Indira Awaas Yojana?</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<p>
						Through the IAY, the Central government looks to create living spaces across the country for the poor. It is endeavouring to make these habitats friendly from an environmental point of view and also construct them in such a way that there are sufficient arrangements for the inhabitants to later on add to these facilities or even improve them. Through this project, the Indian Government is also trying to make available to them what are regarded as basic amenities in a civilised world - proper infrastructure, sanitation, proper drinking water and electricity, among others.  <br /><br />

						The Indian Government understands that a house is more than just a place where someone lives. It is a property that gives one the foundation from which to build a life, a career - it is a representation of that individual's position in the immediate community as well as outside it, and also reflects the cultural aspects of the person in question. A properly built home will not only safeguard one from various natural calamities, it will also make sure that the person can move places from thereon and contribute positively to the economic activities that are driving the country. <br /><br />

						With the IAY, the Indian Government will be looking to create builders from among the common people. This can be regarded as a form of participation but the other way round. Here the national administration will take part in the process to empower the people to build their own houses in ways that they have seen being done before them and ones which they have a certain extent of control over.
					</p>

				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">When was the Indira Awaas Yojana launched?</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<p>
						The IAY had been started during June 1985. Back then it was a part of the Rural Landless Employment Guarantee Programme (RLEGP). At that time, a certain portion of the funds allocated for RLEGP had been set aside for providing money to schedule caste and scheduled tribe people as well as labourers who did not own any land. The end aim in this case was to help them make their own houses.<br /><br />

						When the Jawahar Rozgar Yojana (JRY) was started during April 1985, six per cent of the funds assigned for the project were set apart for helping the landless workers and STs and SCs build their own houses. During 1993-94, families, which were neither SCs nor STs, were brought within the ambit of the programme and the part of JRY meant to help these people was increased to 10 per cent.
					</p>

				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">What is the fund-requirement for Indira Awaas Yojana?</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<p>
						The expenses for the IAY keep changing with regards to the place where it is being executed. Certain areas have been noted as difficult areas, where the administration feels that the costs of construction could be more. The areas where raw materials will not be available readily or where the facilities for connectivity are not in order have been classified as being difficult areas. In fact, also included in this list are locations where the geological, geographical and climatic conditions are not exactly conducive. The conditions have to be so hard that they are able to raise the costs of construction in the end. This is the basic guideline being followed in determination and identification of the difficult places.<br /><br />

						It will be the responsibility of the state governments to identify the difficult areas and they would need to come up with specific methods for determining the same. However, before the plan is implemented, it will have to receive the approval of Empowered Committee for the rural housing programme. In this case the village panchayats will be regarded as units.
					</p>

				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">When will Indira Awaas Yojana be completed?</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<p>
						At present, this is an ongoing project.
					</p>

				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Which areas are covered by Indira Awaas Yojana?</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<p>
						The programme covers all the states and union territories in India.
					</p>

				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">How is Indira Awaas Yojana being executed?</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<p>
						As part of the IAY, the central government IS fortifying the existing process and making sure that the ones, executing the project, receive all the assistance that they need to take the project forward. This is why the government does not burden the project with any technology or design that cannot be used at a practical level. It plays the role of a supporter and a facilitator.<br /><br />

						The way the houses are designed is decided on the basis of how the user wants them to be. The government also keeps in mind the following factors while making these houses and choosing their materials as well as the technologies that would be employed to erect them:<br />

						<ul>
							<li>The beneficiaries should be able to afford them   </li>
							<li>They should use up as little as possible in energy and natural resources such as water and greenery, as long as they last</li>
							<li>They should be adaptable</li>
							<li>They should be easy to maintain</li>
							<li>Some people should be employed while making them</li>
							<li>They should be sustainable</li>
							<li>They should be built in an environment-friendly way</li>
						</ul><br />

						The government is looking to identify the applicable building technologies and also improve local technologies that have traditionally been in vogue in the particular area. The basic goal is to develop houses that can last at least three decades. The houses are also being built in such a way that they do not stand out too much in contrast to other residences in the same location.<br /><br />

						The authorities in question try to make sure that the particular settlement does not lose its original structure as a result of the construction of the new houses. In this programme, special focus is on SC and ST families, specially-abled individuals, and families run by women. There are certain depressed social groups in these areas that are not even able to express their need for a home. The government is looking to benefit them as well.<br /><br />

						The government also provides new training to masons to enhance their existing traditional skill-sets. Engineers and construction workers are also trained as part of the programme. Mason groups, comprising women, are developed and trained in such a way that they are able to develop a sense of proper design, and technologies for constructing a house. Focus is also given on coming up with practices that can save significant sums of money. They are also taught how to manage the sites and construction activities properly. The panchayats are also expected to be assigned a major role in creating plans for the scheme and then carrying them out.<br /><br /> 

						It is being expected that the gram sabhas are pointing out the beneficiaries of the programme. However, the criterion for identifying such households keeps changing on a consistent basis. The people can get their houses directly built by the government or they can get the land and money that they can use for the above purposes.<br /><br />

						Technologies and materials that are approved by any of the following can be used by the state government to build its houses:<br />

						<ul>
							<li>HUDCO</li>
							<li>Engineering colleges</li>
							<li>BMPTC</li>
							<li>NGOs that have earned some repute in the domain of engineering</li>
							<li>IITs</li>
						</ul><br />

						Materials and technologies that have been specified by the BIS could also be included in the project. The authorities have also been given permission to use material that has been used before or one that has been recycled. There is a special emphasis on using environment-friendly technologies in this regard.
						In case a new technology has to be adopted, permission for using the same needs to be taken beforehand from the Empowered Committee or any other agency. It is also important to provide information regarding the materials and techniques being used to the intended beneficiary.<br /><br />

						All the houses being thus built should include the following:<br />

						<ul>
							<li>Toilet</li>
							<li>Smokeless chulhas - these could later on be replaced with a biogas or LPG connection</li>
							<li>Soak pit</li>
							<li>System for harvesting roof water, which is commensurate with local areas</li>
							<li>Compost pit</li>
						</ul><br />

						In case the state government provides additional assistance, arrangements could be made to increase the minimum built area. The states can determine what the maximum area would be so that people do not incur debts in attempting to build their own houses.<br /><br />

						Under normal circumstances the IAY concerns itself with one building at a time. However, if the beneficiaries want a duplex housing scheme then the authorities shall proceed in that way. In areas with shortage of space and high land prices the beneficiaries are permitted to erect multi-storeyed buildings and one floor is given to one family. In these cases, the building is not  in excess of three floors - and this includes the ground floor. A multi-party agreement also needs to be inked with the state government and the said agreement should specify the responsibilities that have to be assumed in terms of maintenance and construction of the house in question. In case of the kutcha and broken down houses the authorities would upgrade the roves, walls and replace or repair them. This could be done using recycled and reused materials.
					</p>

				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">What are the criteria for a new house under Indira Awaas Yojana?</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<p>
						As per the IAY guidelines, a new house should have a built up area of at least 20 square meters and this does not include the toilet. A house will only be deemed pucca when it is capable of standing up to normal wear and tear that happens to a house owing to usage, or as a result of the action of natural elements such as various climatic conditions. The house should last at least 30 years and in that period the maintenance costs for the same should not be much - at least not out of bounds for the beneficiary.<br /><br />

						The roof of the house should be built from permanent materials and the walls of these houses should be able to stand up to the vagaries of climate, which is common in the said area. The house owner should not have to plaster the inner walls other than when the outer walls become vulnerable to erosion. The state government in question can take the help of any technology that helps the house stand for 30 years and this would be inclusive of houses built from mud and bamboo as well.
					</p><br /><br /><br /><br /><br /><br /><br />

				</div>	
			</div>

			<!-- Jan Dhan Yojna -->
			
			<div class="col-md-6 tab-pane" id="jdy">
				
				<div class="row">
						<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">About the Pradhan Mantri Jan Dhan Yojana</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<p>
						The Pradhan Mantri Jan Dhan Yojana (PMJDY) is the NDA government's premier financial inclusion scheme. Under the PMJDY, the government aims to provide basic financial services such as bank accounts and debit cards to all the citizens of India. Introduced to further the National Mission for Financial Inclusion, the PMJDY is meant to be the launch vehicle of economic streamlining and will provide the masses access to a host of financial services including bank deposit accounts, credit, and even insurance. The PMJDY was launched by the NDA government with the motto - "Mera Khata - Bhagya Vidhaata". Securing subsidies, overdraft facilities, and pension schemes for the poorer sections of Indian society are listed among the long term goals of the scheme. The aim is to cover 7.5 crore households (15 crore bank accounts) by the year 2018.
					</p>

				</div>

			<div class="row">
						<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Why is PMJDY a flagship scheme of the NDA government?</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<p>
						On his maiden Independence Day address as the Prime Minister of India, Narendra Modi had promised financial inclusion for the masses. About 42 percent of the country's population lacks access to the banking system making it susceptible to approach loan sharks and money lenders for loans, fly-by-night or Ponzi scheme operators for deposits, lose interest on savings on idle money, and lack any insurance cover. The PMJDY came up as PM Modi's solution to extend such financial services to the entire country and end an era of what he calls "financial untouchability". <br /><br />

						The PMJDY is also meant to become a potent tool to combat corruption of any form in government offices. When the bulk of the Indian populace has a bank account, it facilitates direct bank transfer of any funds due to the people from the government averting the need for a bribe. The PMJDY also neatly ties in with PM Modi's vision of a Digital India - a country where the economy shall grow increasingly cashless.
					</p>

				</div>

			<div class="row">
						<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Features of the PMJDY account</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<p>
						All accounts opened under the PM Jan Dhan Yojana will be zero-balance accounts and shall be linked to RuPay debit cards. For opening these accounts, the prospective account holder need not comply with stringent Know Your Customer (KYC) norms but will only need to provide a photograph and a signature/thumb impression specimen. In a bank account opened under the scheme the total deposits must not exceeding Rs 100000 in a year. The total withdrawals may not be over Rs 10000 a month and the account balance should not exceed Rs 50000. The account shall remain active for a period of 12 month within which the account holder must furnish proof of application for a valid identification document such as an Aadhaar card or a PAN. In such a case the account will be allowed to exist for another year.<br /><br />

						The account holders are provided a free accident insurance cover of Rs 1 lakh as well. All account holders who open accounts before 26 January 2015, will also be provided a life insurance cover amounting to about Rs 30,000. After about 6 months of the account opening, an overdraft facility of about Rs 5000 shall be allowed.  The provision of RuPay debit cards shall promote savings, the Finance Ministry believes.
					</p>

				</div>

			<div class="row">
						<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Launch and implementation</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<p>
						The PMJDY was launched on 28 August 2014. The Prime Minister himself flagged off the scheme with an address to the nation. The Chief Ministers of about 20 states and a number of other prominent Union Ministers participated in launch ceremonies in over 76 cities of the country including Mumbai, Vizag, Patna, Bilaspur, Gandhinagar, Dehradun, Guwahati, Muzaffarpur, Panjim, Raipur, Surat, and Port Blair. Prior to the launch, the Prime Minister's Office had sent out about 7.25 lakh e-mails to bankers across the country entreating their cooperation in making the scheme a success. Over 77,862 enrolment camps were set up nationwide to handle the initial spate of account openings. Thereafter the banks took up the account opening process under the directives of the RBI. On the very day of its launch the PM Jan Dhan Yojana set a record with the opening of over 1.5 crore bank accounts nationwide - the largest such exercise undertaken in any country ever on a single day. Within the first 10 days, about 3 crore accounts were opened under the scheme; the next 20 days saw 2 crore more accounts being added to the kitty, according to reports from the Ministry of Finance. The Bill and Melinda Gates Foundation has offered to assist the Indian government in monitoring of the progress made with regard to the PMJDY.
					</p>

				</div>

			<div class="row">
						<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Concerns and controversy</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<p>
						One of the greatest concerns regarding the PM Jan Dhan Yojana has been bypassing the KYC (Know Your Customer) norms that are mandatory for regular savings accounts according to RBI policy. Banks are concerned that multiple accounts may be opened up by the same individual in various banks and thus an account holder may be able to avail of multiple insurance policies due to the lack of valid documentation. If dispensing of insurance amounts is linked to identification documents such as the Aadhaar cards, the account holders who do not have these documents remain left out.<br /><br />

						Another major hiccup that could be faced in the execution of the scheme is in the provision of overdraft facilities to account holders. According to the scheme overdraft facility may only be provided to Aadhaar card linked accounts but if this is a requisite it foils the very need of a bank account without identification documents.<br /><br />

						<table class="tableizer-table" width="100%" cellspacing="0" cellpadding="5" border="1">
							 <tr><td><b>Scheme</b> </td><td>Pradhan Mantri Jan Dhan Yojana</td></tr>
							 <tr><td><b>Start Date </b></td><td>08/28/14</td></tr>
							 <tr><td rowspan="2"><b>Implementation Period</b></td><td>Phase I - August 2014 to August 2015</td></tr>
							 <tr><td>Phase II - August 2015 to 2018</td></tr>
							 <tr><td><b>Accounts opened </b></td><td>5.29 crore accounts (3 Oct  2014)</td></tr>
							 <tr><td><b>Collection</b> </td><td>Rs 3.97 crore (3 Oct 2014)</td></tr>
						</table>

					</p>

				</div>

			<div class="row">
						<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Pradhan Mantri Jan - Dhan Yojana (Accounts Opened As on 26.11.2014)</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<table class="tableizer-table">
						<tr class="tableizer-firstrow"><th rowspan="2">S.No</th><th rowspan="2">Banks</th><th colspan="3">No Of Accounts (In Lacs)</th><th rowspan="2">No Of Rupay Debit Card (In Lacs)</th><th rowspan="2">Balance In Accounts(In Lacs)</th><th rowspan="2">No Of Accounts With Zero Balance (In Lacs)</th></tr>
						 <tr><th>Rural</th><th>Urban</th><th>Total</th></tr>
						 <tr><td>1</td><td>Public Sector Banks</td><td>368.61</td><td>309.47</td><td>678.08</td><td>501.58</td><td>525010.68</td><td>503.86</td></tr>
						 <tr><td>2</td><td>Regional Rural Banks</td><td>122.25</td><td>21.75</td><td>144</td><td>23.14</td><td>94503.95</td><td>110.69</td></tr>
						 <tr><td>3</td><td>Private Banks</td><td>11.63</td><td>11.15</td><td>22.78</td><td>13.08</td><td>38390.46</td><td>16.02</td></tr>
						 <tr><td>&nbsp;</td><td>Total</td><td>502.49</td><td>342.37</td><td>844.86</td><td>537.8</td><td>657905.09</td><td>630.57</td></tr>
					</table><br /><br />

				</div>

			<div class="row">
						<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Statewise Account Opening Weekly Statistics as on 26.11.2014</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
				
					<table class="tableizer-table" width="100%" cellspacing="0" cellpadding="5" border="1">
						<tr class="tableizer-firstrow" align="center"><th>S.No </th><th>STATE</th><th>RURAL</th><th>URBAN</th><th>TOTAL</th><th>AADHAAR SEEDED</th><th>% AADHAAR SEEDED</th></tr>
						 <tr><td>1</td><td>Andaman and Nicobar Islands</td><td>21366</td><td>7380</td><td>28746</td><td>5886</td><td>20.48%</td></tr>
						 <tr><td>2</td><td>Andhra Pradesh</td><td>2130010</td><td>1670756</td><td>3800766</td><td>2503294</td><td>65.86%</td></tr>
						 <tr><td>3</td><td>Arunachal Pradesh</td><td>36072</td><td>8530</td><td>44602</td><td>1579</td><td>3.54%</td></tr>
						 <tr><td>4</td><td>Assam</td><td>1907642</td><td>627644</td><td>2535286</td><td>69846</td><td>2.75%</td></tr>
						 <tr><td>5</td><td>Bihar</td><td>3790989</td><td>1527525</td><td>5318514</td><td>428133</td><td>8.05%</td></tr>
						 <tr><td>6</td><td>Chandigarh</td><td>20311</td><td>124029</td><td>144340</td><td>80979</td><td>56.10%</td></tr>
						 <tr><td>7</td><td>Chattisgarh</td><td>1318891</td><td>832068</td><td>2150959</td><td>219363</td><td>10.20%</td></tr>
						 <tr><td>8</td><td>Dadra and Nagar Haveli</td><td>16476</td><td>5102</td><td>21578</td><td>5824</td><td>26.99%</td></tr>
						 <tr><td>9</td><td>Daman and Diu</td><td>9777</td><td>2862</td><td>12639</td><td>3712</td><td>29.37%</td></tr>
						 <tr><td>10</td><td>Goa</td><td>63862</td><td>21706</td><td>85568</td><td>47903</td><td>55.98%</td></tr>
						 <tr><td>11</td><td>Gujarat</td><td>1731856</td><td>1423221</td><td>3155077</td><td>708125</td><td>22.44%</td></tr>
						 <tr><td>12</td><td>Haryana</td><td>1319448</td><td>1107123</td><td>2426571</td><td>956530</td><td>39.42%</td></tr>
						 <tr><td>13</td><td>Himachal Pradesh</td><td>443594</td><td>58267</td><td>501861</td><td>296523</td><td>59.08%</td></tr>
						 <tr><td>14</td><td>Jammu and Kashmir</td><td>321409</td><td>106121</td><td>427530</td><td>49724</td><td>11.63%</td></tr>
						 <tr><td>15</td><td>Jharkhand</td><td>1124759</td><td>592009</td><td>1716768</td><td>974219</td><td>56.75%</td></tr>
						 <tr><td>16</td><td>Karnataka</td><td>2973735</td><td>1719424</td><td>4693159</td><td>2505882</td><td>53.39%</td></tr>
						 <tr><td>17</td><td>Kerala</td><td>709035</td><td>601686</td><td>1310721</td><td>651633</td><td>49.72%</td></tr>
						 <tr><td>18</td><td>Lakshadweep</td><td>3783</td><td>148</td><td>3931</td><td>2393</td><td>60.88%</td></tr>
						 <tr><td>19</td><td>Madhya Pradesh</td><td>2884749</td><td>2938801</td><td>5823550</td><td>1998120</td><td>34.31%</td></tr>
						 <tr><td>20</td><td>Maharashtra</td><td>2562563</td><td>2754709</td><td>5317272</td><td>3093320</td><td>58.17%</td></tr>
						 <tr><td>21</td><td>Manipur</td><td>103450</td><td>102109</td><td>205559</td><td>32101</td><td>15.62%</td></tr>
						 <tr><td>22</td><td>Meghalaya</td><td>61941</td><td>32951</td><td>94892</td><td>1326</td><td>1.40%</td></tr>
						 <tr><td>23</td><td>Mizoram</td><td>19025</td><td>34055</td><td>53080</td><td>1983</td><td>3.74%</td></tr>
						 <tr><td>24</td><td>Nagaland</td><td>32447</td><td>28724</td><td>61171</td><td>7171</td><td>11.72%</td></tr>
						 <tr><td>25</td><td>National Capital Territory of Delhi</td><td>189363</td><td>1484272</td><td>1673635</td><td>916865</td><td>54.78%</td></tr>
						 <tr><td>26</td><td>Odisha(Orissa)</td><td>1874083</td><td>777287</td><td>2651370</td><td>575889</td><td>21.72%</td></tr>
						 <tr><td>27</td><td>Puducherry (Pondicherry)</td><td>38015</td><td>35663</td><td>73678</td><td>43144</td><td>58.56%</td></tr>
						 <tr><td>28</td><td>Punjab</td><td>1807095</td><td>1223158</td><td>3030253</td><td>1643911</td><td>54.25%</td></tr>
						 <tr><td>29</td><td>Rajasthan</td><td>3362386</td><td>2374936</td><td>5737322</td><td>2229855</td><td>38.87%</td></tr>
						 <tr><td>30</td><td>Sikkim</td><td>37313</td><td>6332</td><td>43645</td><td>30789</td><td>70.54%</td></tr>
						 <tr><td>31</td><td>Tamil Nadu</td><td>2294899</td><td>1697132</td><td>3992031</td><td>858990</td><td>21.52%</td></tr>
						 <tr><td>32</td><td>Telangana</td><td>1735097</td><td>1530146</td><td>3265243</td><td>2353643</td><td>72.08%</td></tr>
						 <tr><td>33</td><td>Tripura</td><td>150766</td><td>69055</td><td>219821</td><td>113952</td><td>51.84%</td></tr>
						 <tr><td>34</td><td>Uttar Pradesh</td><td>8242290</td><td>4985615</td><td>13227905</td><td>1420028</td><td>10.74%</td></tr>
						 <tr><td>35</td><td>Uttrakhand</td><td>931020</td><td>485097</td><td>1416117</td><td>178583</td><td>12.61%</td></tr>
						 <tr><td>36</td><td>West Bengal</td><td>3997754</td><td>1959928</td><td>5957682</td><td>950525</td><td>15.95%</td></tr>
						 <tr><td>&nbsp;</td><td>Total</td><td>48267271</td><td>32955571</td><td>81222842</td><td>25961743</td><td>31.96%</td></tr>
					</table><br /><br /><br /><br /><br /><br /><br />


				</div>
		</div>

		<div class="col-md-6 tab-pane" id="mki">
			
				<div class="row">
					<h2 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">About Make in India</h2>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<img src="images/make-in-india.jpg" alt="Make in India Logo" />
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Make in India campaign</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						Make in India is the BJP-led NDA government's flagship campaign intended to boost the domestic manufacturing industry and attract foreign investors to invest into the Indian economy. The Indian Prime Minister, Mr. Narendra Modi first mentioned the keyphrase in his maiden Independence Day address from the ramparts of the Red Fort and over a month later launched the campaign in September 2014 with an intention of reviving manufacturing businesses and emphasizing key sectors in India amidst growing concerns that most entrepreneurs are moving out of the country due to its low rank in ease of doing business ratings.
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">The Make in India Vision</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						Manufacturing currently contributes just over 15% to the national GDP. The aim of this campaign is to grow this to a 25% contribution as seen with other developing nations of Asia. In the process, the government expects to generate jobs, attract much foreign direct investment, and transform India into a manufacturing hub preferred around the globe. <br /><br />

						The logo for the Make In India campaign is a an elegant lion, inspired by the Ashoka Chakra and designed to represent India's success in all spheres.The campaign was dedicated by the Prime Minister to the eminent patriot, philosopher and political personality, Pandit Deen Dayal Upadhyaya who had been born on the same date in 1916.
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Why PM wants to Make in India</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						The Prime Minister called for all those associated with the campaign, especially the entrepreneurs and the corporates, to step and discharge their duties as Indian nationals by First Developing India and for investors to endow the country with foreign direct investments. The Prime Minister also promised that his administration would aid the investors by making India a pleasant experience and that his government considered overall development of the nation an article of faith rather than a political agenda. He also laid a robust foundation for his vision of a technology-savvy Digital India as complementary to Make In India. He stressed on the employment generation and poverty alleviation that would inevitably accompany the success of this campaign.
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Launch Ceremony</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						Prime Minister Mr. Narendra Modi launched the Make In India campaign on September 25, 2014. The date of the launch was chosen to be of maximum advantage. Coming right after the successful insertion of Mangalyaan - a wholly indigenously built low-cost probe into the Martian orbit - the event highlighted India's success in manufacturing, science and technology, and all this at inexpensive costs. It also came just a day ahead of the Prime Minister's maiden US visit. Calculated to enhance India's attractiveness as an investment destination, the launch ceremony was held at the Vigyan Bhavan in New Delhi. Thehall thronged with attendees, a number of whom did not even find seats. Leading entrepreneurs and the CEOs of about 3000 companies from across 30 countries were invited to attend the launch.<br /><br />

						Law Minister Mr. Ravishankar Prasad and Commerce Minister Ms. Nirmala Sitharaman were part of the occasion. Apart from them, a number of corporate head honchos with deep roots in the country also spoke at the occasion. These include - Mr. Cyrus Mistry (Chairman, Tata Sons), Mr. Kenichi Ayukawa (MD and CEO, Maruti Suzuki India), Mr. Mukesh Ambani (Chairman & Managing Director, Reliance Industries), Mr. Azim Premji (Chairman, Wipro Limited), Mr. KM Birla Chairman, Aditya Birla Group), Ms. Chanda Kochchar (MD & CEO, ICICI Bank), Mr. Phil Shaw (CEO, Lockheed Martin), and Mr. YC Deveshwar (Chairman, ITC).
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Sectors in focus</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						For the Make in India campaign, the government of India has identified 25 priority sectors that shall be promoted adequately. These are the sectors where likelihood of FDI (foreign direct investment) is the highest and investment shall be promoted by the government of India.On the campaign launch, the Prime Minister Mr. Modi said that the development of these sectors would ensure that the world shall readily come to Asia, particularly to India where the availability of both democratic conditions and manufacturing superiority made it the best destinations, especially when combined with the effective governance intended by his administration.<br /><br />

						<table class="tableizer-table" width="100%">
							 <tr><td>Automobiles</td><td>Food Processing </td><td>Renewable Energy</td></tr>
							 <tr><td>Automobile Components</td><td>IT and BPM</td><td>Roads and highways</td></tr>
							 <tr><td>Aviation</td><td>Leather</td><td>Space</td></tr>
							 <tr><td>Biotechnology</td><td>Media and Entertainment</td><td>Textiles and garments</td></tr>
							 <tr><td>Chemicals</td><td>Mining</td><td>Thermal Power</td></tr>
							 <tr><td>Construction</td><td>Oil and Gas</td><td>Tourism and Hospitality</td></tr>
							 <tr><td>Defence manufacturing</td><td>Pharmaceuticals</td><td>Wellness</td></tr>
							 <tr><td>Electrical Machinery</td><td>Ports</td><td>&nbsp;</td></tr>
							 <tr><td>Electronic Systems</td><td>Railways</td><td></td></tr>
						</table><br /><br />

					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Benefits and disadvantages of Make in India</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						India is a country rich in natural resources. Labour is aplenty and skilled labour is easily available given the high rates of unemployment among the educated class of the country. With Asia developing as the outsourcing hub of the world, India is soon becoming the preferred manufacturing destination of most investors across the globe. Mae in India is the Indian government's effort to harness this demand and boost the Indian economy.<br /><br />

						India ranks low on the "ease of doing business index". Labour laws in the country are still not conducive to the Make in India campaign. This is one of the universally noted disadvantages of manufacturing and investing in India.
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Why Companies were not manufacturing in India</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						Make in India campaign is at loggerheads with the Make in China ideal that has gained momentum over the past decade. China is a major rival to India when it comes to the outsourcing, manufacturing, and services business. India's ailing infrastructure scenario and defunct logistics facilities make it difficult for the country to achieve an elite status as a manufacturing hub. The bureaucratic approach of former governments, lack of robust transport networks, and widespread corruption makes it difficult for manufacturers to achieve timely and adequate production. The Modi government has vowed to remove these hurdles and make the nation an ideal destination for investors to set up industries.
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">The Make in India Website</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						Apart from the launch of a colourful brochure, which should find its way into the hands of anyone intending to invest into India, the government of India also launched a website to supplement the campaign. The Make In India website highlights each of the 25 target sectors with statistics, reasons to invest, growth drivers, all policies relevant to investors and the individual sectors, government support, and opportunities for investors apart from showcasing the live projects that have been undertaken and FAQs. The website also links to the campaigns Social Media feeds on Twitter, Facebook, Google Plus, and YouTube.
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Criticism and concerns</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						The NDA government's Make In India campaign has till early October attracted INR 2000 crore worth investment proposals. The campaign has, despite this,found its fair share of critics. The topmost of these criticisms is leveled against the incumbent government. It has been felt that the government does not walk its talk - labour reforms and policy reforms which are fundamental for the success of the Make In India campaign have not yet been implemented.  A number of layoffs in companies such as Nokia India cast long shadows over the campaign. A number of technology based companies have not been enthused by the campaign launch and have professed to continue getting their components manufactured by China.<br /><br /></p>

						<table class="tableizer-table" width="100%">
							 <tr><td>Campaign Name</td><td>Make In India</td></tr>
							 <tr><td>Launch Date</td><td>09/25/14</td></tr>
							 <tr><td>Launched By</td><td>PM Mr. Narendra Modi</td></tr>
							 <tr><td>Number of Sectors</td><td>25</td></tr>
							 <tr><td>Investment Proposals Received</td><td>INR 2000 crore (till 9-Oct-2014)</td></tr>
						</table><br /><br /><br /><br /><br /><br /><br /><br /><br />

					
				</div>

		</div>

		<!-- National Health Mission -->

		<div class="col-md-6 tab-pane" id="nhm">
			
				<div class="row">
					<h2 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">National Health Mission</h2>
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">The Origin</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						The National Rural Health Mission (NRHM) was launched on April 12, 2005 by the Government of India (headed at the time by the then Prime Minister Manmohan Singh) as a welfare initiative to strengthen the healthcare infrastructure and to boost the failing public health indicators in the rural areas of 18 Indian states. The programme was initially designed to last between 2005 and 2012. By 2013, the considerable success of the mission prompted the Union Cabinet to set up the National Urban Health Mission (NUHM) on May 1, 2013. Both the NRHM and the NUHM currently exist as sub-missions of the National Health Mission (NHM). The NHM, the NRHM and the NUHM are managed by the Ministry for Health and Family Welfare, in close association with the states.
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">The states initially covered by the NRHM</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						The 18 states in focus by the NRHM include the Empowered Action Group (EAG) states, the North Eastern states, Jammu and Kashmir, and Himachal Pradesh.<br /><br />

						<table class="tableizer-table" width="100%">
							 <tr><td>Arunachal Pradesh</td><td>Himachal Pradesh</td><td> Mizoram</td><td>Orissa</td><td>Uttaranchal</td></tr>
							 <tr><td>Assam</td><td>Jharkhand </td><td>Meghalaya</td><td>Rajasthan</td><td>Uttar Pradesh</td></tr>
							 <tr><td>Bihar</td><td>Jammu & Kashmir</td><td>Madhya Pradesh</td><td>Sikkim</td><td>Tripura</td></tr>
							 <tr><td>Chhattisgarh</td><td>Manipur</td><td>Nagaland</td><td></td><td></td></tr>
						</table><br /><br />

						The NRHM now covers all Indian states and Union Territories.
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Why did India need the NHM?</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						India's public healthcare situation, particularly in rural regions and villages, had been a major concern since independence. Hunger, malnutrition, and high mortality had plagued the nation for decades. In 2005, India's Infant Mortality Rate (IMR) stood at 58, well above the global average. In 2001-03, the Maternal Mortality Ratio (MMR) estimates were pegged at 301 maternal deaths per 100,000 live births and 2004 & 2006 saw 254 maternal deaths per 100,000 live births. In 2006, when the first Global Hunger Index report was released, India was ranked 96 among 119 hungriest countries in the world. In 2005, about 43.5 percent children in the country were considered underweight. The need for a focused initiative to tackle the health scenario led to the launch of NRHM by the Indian government to improve the widespread malnutrition scenario, to collect and study data relating to public health, and to manage the outbreak of endemics and curb the spread of diseases.
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Goals and aims of the NHM</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						The NHM was launched to "improve the availability of and access to quality health care by people, especially for those residing in rural areas, the poor, women, and children" between the years 2005 to 2012. It aims to provide universally accessible and affordable healthcare facilities both in cities and villages. Prevention, treatment, and control of diseases (both communicable and non-communicable, prevention and management of endemic spread of diseases, prevention of pandemics (such as in the face of the current Ebola scare), and promotion of healthy lifestyles are very important goals of the mission. The mission aims to reduce IMR and MMR in both urban and rural regions. One of India's most important worries is its population explosion. The NHM also looks to control growth of this population and also to bring about a gender balance in the Indian society.
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Programmes and components</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						At the very core of the NHM are women's and children's health programmes. A number of schemes and policies have been initiated to address the concerns in these areas and to match up to India's public health standards. Some of the NHM schemes are - <br />

						<ul>
							<li><b>Rashtriya Bal Swasthya Karyakram -</b> The aim of this programme is to provide comprehensive child health care for all Indians from newborns to children under the age of 18. The programme intends to control, manage, and prevent "Diseases, Deficiencies, Disability, and Developmental delays".</li><br />

							<li><b>Rashtriya Kishore Swasthya Karyakram -</b> Targeted to improve the health of adolescents between the ages of 10 and 19, this scheme not only looks into deficiencies, diseases, and diet but also looks into important aspects of social environment such as substance abuse.</li><br />

							<li><b>Janani Swasthya Shishu Suraksha Karyakram - </b>Launched in 2011, the scheme aims to bring health benefits to over 12 million pregnant women in the country. Apart from neonatal and postnatal care, the scheme also aims at providing newborn care and infant healthcare for 30 days since birth.</li>
						</ul>
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">National Disease Control Programmes</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						These programmes are designed to prevent and contain diseases such as malaria and filarial. While also looking at eradication of preventable diseases such as those caused by iron or iodine deficiency, they also work on a larger scheme of eradicating communicable and potentially lethal diseases such as tuberculosis and leprosy.<br /><br />

						The NHM also has comprehensive health and welfare schemes and programmes that work to improve a number of areas such as mental health, family planning, and population control apart from containing endemic spread of diseases.
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Measure of success</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						The NHM has achieved a considerable degree of success in achieving the goals for which it was established. In 2014, India was ranked 55 in the Global Hunger Index ahead of both Pakistan (rank 57) and Bangladesh (57). Our country still trails behind Nepal (44) and Sri Lanka (39). Infant Mortality Rate (IMR) has declined to 40 in 2013 and Maternal Mortality Ratio (MMR) has declined to 178 maternal deaths per 100,000 live births. While there is much more to be done to rid India of  the scourge of hunger, malnutrition, and spread of diseases, the achievements must be weighed against India's burgeoning population that stands at 1.2 billion (2013 estimates). Lack of education, awareness, and women's emancipation, particularly in rural regions have been the biggest challenges faced by the mission. India is currently at the threshold of a new phase of growth and development and this can only be achieved when public health is accorded a high level of importance. The NHM's role in realising this aim cannot be undermined.
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Targets listed by the NHM</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<table class="tableizer-table" width="100%">
						 <tr><td>Achievement of MMR to 1/1000 live births</td></tr>
						 <tr><td>Achievement of IMR to 25/1000 live births</td></tr>
						 <tr><td>Reduction of Total Fertility Rate to 2.1</td></tr>
						 <tr><td>Prevention and control of anaemia in women between the ages of 15 and 49 </td></tr>
						 <tr><td>Prevention of mortality from communicable & non-communicable diseases</td></tr>
						 <tr><td>Control of injuries and newly discovered diseases</td></tr>
						 <tr><td>Reduction of household expenditure on health care </td></tr>
						 <tr><td>Reduction of mortality and occurrence of tuberculosis by about half each year</td></tr>
						 <tr><td>Reduction in occurrence of leprosy to <1 /10000 population </td></tr>
						 <tr><td>Reduction in occurrence of malaria to <1 /1000 population</td></tr>
						 <tr><td>Reduction in occurrence of microfilaria to < 1 percent population</td></tr>
						 <tr><td>Elimination of Kala-azar by 2015</td></tr>
					</table><br /><br />

				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Cost of healthcare</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						India's healthcare budget (including the money spent towards the NHM) is far below those of other developed nations. Despite the rapid economic growth seen over the past couple of decades, the nation has been unable to eradicate hunger and provide basic healthcare facilities to most of its citizens. The government of India has been spending only about 1 percent of its GDP towards public healthcare. This figure stands out far below in comparison with other nations such as the UK which spends 9.5 percent of its GDP on healthcare, the US which spends about 8.3 percent and India's populous Asian neighbour, China, which spends about 3 percent. In the current fiscal year, India's budgetary allocation towards healthcare has been a mere USD 5 billion. A comprehensive nationwide healthcare plan for India is likely to raise its healthcare spends rather substantially.<br /><br />

						Indians are noted for "high out of-pocket" expenditures towards medical facilities, treatments, and healthcare costs. Each year at least 39 million Indians are forced into poverty due to spending on medicines, treatments, and other medical costs (as of 2011). This fact comes in stark contrast to the fact that the nation's medical infrastructure is far from adequate. In India, there are just about hospital beds per 10,000 people despite a population of over 1.2 billion. China, on the other hand, has a population of about 1.3 billion but has 41 hospital beds per 10,000 people.<br /><br />
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">National Health Assurance Mission</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						Furthering the ideals of the National Health Mission, the Narendra Modi-led NDA government plans to launch a National Health assurance Mission in 2015. The mission shall be rolled out in phases and aims at providing free healthcare services including diagnostic services and drugs to every Indian. With the implementation of the mission, the government will provide 50 free drugs and 12 diagnostic treatments free of cost for all the citizens. <br /><br />

						The financial burden of the implementation of the National Health Assurance Mission is, however, likely to run up a huge bill and has started to attract criticism even at the planning stage. The mission is likely to cost the country Rs1.6 trillion (approximately USD 26 billion) between 2015 and 2019. By 2019, the entire population of the country is to be covered. The mission is likely to cost India about USD 11.4 billion each year. The World Bank and British healthcare agency NICE are collaborating with the Indian government in the planning of the mission. Critics, however, claim that covering the entire population of the country is likely to take over a decade and the costs involved in such a scheme is likely to be much higher than the current estimates.
					</p><br /><br /><br /><br /><br /><br /><br /><br /><br />
				</div>

		</div>


		<!-- Pradhan Mantri Gram Sadak Yojana -->

		<div class="col-md-6 tab-pane" id="pmgsy">
				
				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">About PMGSY</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						In order to provide good unrestricted road connectivity to villages, the Government of India launched Pradhan Mantri Gram Sadak Yojana (PMGSY) on 25thDec, 2000 as a Centrally Sponsored theme. This Bharat Nirman programme was introduced by the then Prime Minister of India Atal Bihari Vajpayee.<br /><br />

						The main objective of the PMGSY is to provide connectivity, by way of an all-weather road (with necessary culverts and cross-drainage structures, which is operable throughout the year), to the eligible unconnected habitations in the rural areas with a population of 500 persons and above in plain areas. In respect of hill states (North-East, Sikkim, Himachal Pradesh, Jammu & Kashmir and Uttarakhand), the desert areas (known within the Desert Development Programme), the social group (Schedule V) areas and chosen social group and Backward Districts (as known by the Ministry of Home Affairs and coming up with Commission, the target would be to attach eligible unconnected habitations with a population of 250 persons and higher.
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Why was PMGSY Started?</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						After Independence, roads except National Highways became the responsibility of the state governments involved; it shaped a part of the state Plans.<br /><br />

						Owing to funds constraints the allocations for road development remained meagre compared to demand and particularly in case of village roads. Road Development did not receive due importance and from the planners as compared to other specific development activities that got higher priority. 
						On the recommendations of National Rural Roads Development Committee, Pradhan Mantri Gram Sadak Yojana (PMGSY) was launched with a view to provide road connectivity in rural areas of the country. The programme envisages connecting all habitations with a population of 500 persons and higher than in plain areas and 250 persons and higher than in hill states, social group (Schedule V) areas and also the desert areas (as known in Desert Development Programme).<br /><br />

						Recently, the programme pointers are amended to increase the advantages of the scheme to habitations having population of 250 persons and higher than within the districts known as LWE affected/implementation of Integrated Action set up as known by the Ministry of Home Affairs/Planning Commission. 
						For technical and social control support within the implementation of the programme, National Rural Roads Development Agency (NRRDA) was established in 2002 under the Societies Registration Act - XXI of 1860.
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Target of PMGSY</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						In this programme, 1,68, 268 habitations were eligible for coverage , out of that 31,804 habitations had been reported either connected below different schemes or not possible. Therefore, 1,36,464 habitations were targeted for providing road property under PMGSY. The programme also has an `Upgradation' component with a target to upgrade 3.75 lakh km. of existing rural roads (including 40per cent renewal of rural roads to be funded by the states) in order to ensure full farm to market connectivity. So, the target for Government of India in upgradation per se is 2,24,906 km.
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Budget Allocation</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						The finances needed even for Phase-1 of this project area unit are to the tune of Rs 80,000 crore. It is necessary to adopt some innovative strategies of funding. It is needed to make a special centralised authority outside the regular department to execute this programme.  This agency has complete freedom as regards methodology of its work.
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Salient options of the PMGSY</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						<b>Planning:</b> The   District Rural Roads are set up  because the Core Network helps within the identification of the roads needed to attach the unconnected habitations  to ensure basic access (single unrestricted road connectivity) to any or all the habitations. These plans are placed before the Panchayati dominion establishments for approval.<br /><br />

						<b>Project approach: </b>The road works are projected every year in time specific manner.
						Technical standards: The roads under the PMGSY are designed and executed as per the standards laid down by the Indian Roads Congress.<br /><br />

						<b>Tendering:</b> The roads are tendered in packages of Re 1 to 5 crore, to draw in competent contractors with requisite instrumentality.<br /><br />

						<b>Quality control:</b> A three-tier quality control system has been designed to implement  the standard of the road works. All the states are requested to enlist the services of a state level federal agency to verify the standard of the roads.  The National Rural Roads Development Agency engages senior technical personnel as National Quality Monitors to examine the road works.<br /><br />

						<b>Maintenance:</b> The roads created under the PMGSY are  maintained by the Panchayati Raj establishments.
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Quality Mechanism</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						PMGSY lays special stress on quality of road works. Consequently, Rural Roads Manual (IRC SP 20:2002) has been prescribed because the Technical Manual for the programme. The standard of works is decided in reference to the specifications prescribed under the Book of Specifications (BoS) set by the Indian Roads Congress (IRC) for Ministry of Rural Development (MoRD). <br /><br />

						Since rural roads is a state subject and state agencies are executing the programme, making certain the standard of road work is primarily the responsibility of the state governments. A three- tier Quality Management Mechanism is envisaged so as to confirm the requisite quality assurance. <br /><br />

						<b>First Tier of Quality Mechanism:</b>  In-house internal control to confirm the implementation of quality standards through finishing up obligatory tests by Contractor under the superintendence of the district level Programme Implementing Unit (PIU). The superintendence by department officers, additionally forms a part of this tier itself and also the PIU is needed to record the check ends up in internal control Registers.<br /><br />

						<b>The Second Tier of Quality Mechanism:</b>  Independent Quality observation System at the State Level examines that the first tier of quality control System is achieving its intended objectives. The states are needed to appoint a senior skilled  State Quality Coordinator (SQC) who is empowered to coordinate and supervise each  tier of quality mechanism, through the SRRDA.<br /><br />

						<b>Third Tier of Quality Control Mechanism:</b> It functions as independent Quality Audit at National Level. The selected retired professionals from the state and Central Agencies termed as National Quality Monitors (NQMs), perform independent inspection of the works on systemic randomised basis. The essential objective of this tier of the Quality Mechanism is to examine that the First and Second Tier of quality control is achieving its intended objectives, the contracts are being managed professionally and systemic issues in Quality and Execution are addressed.
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Main activities/functions</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						<ul>
							<li>To frame appropriate policy/action plan for the effective and optimum result-oriented implementation of PMGSY keeping in view the broad policies/ guidelines and the budgetary resources made available. </li>
							<li>  To interact with state governments and other bodies with a view to take concerted action for effective and meaningful implementation of PMGSY/Rural Road Component of Bharat Nirman in an effective and convergent manner.</li>
							<li>   To seek sufficient budgetary support for implementation of PMGSY/ Rural Road Component and release the funds to the state governments.</li>
							<li>Meetings of the Performance Review Committee for periodic reviews of PMGSY.</li>
							<li>   Monitoring the progress of PMGSY for providing rural connectivity.</li>
						</ul>
					</p>
				</div>

				<div class="row">
					<h3 class="col-md-12" style="font-family: 'Roboto', sans-serif; color:#376B98">Execution Mechanism</h3>
				</div>
				<div class="row col-md-12" style="text-align: justify;">
					<p>
						<ul>
							<li> The National Rural Roads Development Agency (NRRDA) is responsible for providing Operational and Management support to the programme. State Rural Roads Development Agencies (SRRDAs) are created by all the states at state level as autonomous agencies for implementation of PMGSY programme. The mandate and the performance review are carried out by the states on a defined charter, which may be as per the decision of the state. In three states, NEAs (Nominated Executing Agencies) have also been engaged for execution of PMGSY programme.</li>
							<li>At the District level, the Programme is co-ordinated and implemented through one or more dedicated Programme Implementation Units (PIUs).</li>
						</ul><br />

					</p><br /><br /><br /><br /><br /><br /><br /><br /><br />
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