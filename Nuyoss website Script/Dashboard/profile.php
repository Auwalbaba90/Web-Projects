<?php
	session_start();
	if($_SESSION['Email_Address']==null){
	 	header('location:./logout.php');
	 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="icon" type="image/ico" href="./image/logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/Profile.css">
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
</head>
<body>
	<div id="container">
		<div class="row">
			<div class="logo">
				<img src="./image/logo.png">
				<h2>National Union Of Yobe State Students.<br> &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; (NUYOSS)</h2>
			</div>
		</div>
		<div class="row">
			<nav>
			<ul>
				<li><a href="./index.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="./vote_validation.php"><i class="fa fa-download" aria-hidden="true"></i> Voting Page</a></li>
				<li><a href="./candidates.php"><i class="fa fa-users" aria-hidden="true"></i> Candidates</a></li>
				<li><a href="./logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
			</nav>
		</div>
			<div class="content">
				<?php
					echo '<h1><center>Profile</center></h1>';
					echo "<strong style='display: none';>" .$_SESSION['Email_Address']. "</strong>";
				?>
				<hr>
			</div>
			<form>
				<div class="col-half-q">
						<label class="head"><b>Bio-Data</b></label>
					</div>
					<div class="col-half">
					<div class="bio_data">
						<label class="labs">First Name:&emsp;</label>
						<input class="inpt" type="text" name="fname"  value="<?php echo '' ?>">
					</div>
					<div class="bio_data">
						<label class="labs">Surname:&emsp;</label>
						<input class="inpt" type="text" name="surname" value="<?php echo '' ?>">
					</div>
					<div class="bio_data">
						<label class="labs">Other Name:</label>
						<input class="inpt" type="text" name="Other_name" value="<?php echo '' ?>">
					</div>
					<div class="bio_data">
						<label class="labs">Matric No:&emsp;</label>
						<input disabled class="inpt" type="text" name="Matric_No" value="<?php echo 'CYB/19DR/1745' ?>">
					</div>
					<div class="bio_data">
						<label class="labs">Gender:&emsp;&emsp;</label>
						<input class="inpt" type="text" name="Gender" value="<?php echo '' ?>">
					</div>
					<div class="bio_data">
						<label class="labs">Date of Birth:</label>
						<input class="inpt" type="Date" name="Date_of_birth" value="<?php echo '' ?>">
					</div>
				</div>
				<div class="col-half-q">
						<label class="head"><b>School Information</b></label>
					</div>
					<div class="col-half">
					<div class="bio_data">
						<label class="labs">School Name:</label>
						<input class="inpt" type="text" name="School" value="<?php echo '' ?>">
					</div>
					<div class="bio_data">
						<label class="labs">Faculty:</label>
						<input class="inpt" type="text" name="School" value="<?php echo '' ?>">
					</div>
					<div class="bio_data">
						<label class="labs">Department:&emsp;</label>
						<input class="inpt" type="text" name="Department" value="<?php echo '' ?>">
					</div>
					<div class="bio_data">
						<label class="labs">Course:</label>
						<input class="inpt" type="text" name="Course" value="<?php echo '' ?>">
					</div>
					<div class="bio_data">
						<label class="labs">State:&emsp;&emsp;&emsp;&emsp;</label>
						<input class="inpt" type="text" name="State" value="<?php echo '' ?>">
					</div>
					<div class="bio_data">
						<label class="labs">Country:</label>
						<input class="inpt" type="text" name="Country" value="<?php echo '' ?>">
					</div>
				</div>
				<div class="col-half-q">
						<label class="head"><b>Address</b></label>
					</div>
					<div class="col-half">
					<div class="bio_data">
						<label class="labs">Email Address:</label>
						<input disabled class="inpt" type="Email" name="Email" value="<?php echo 'auwalbaba@gmail.com' ?>">
					</div>
					<div class="bio_data">
						<label class="labs">Phone No:&emsp;</label>
						<input class="inpt" type="Number" name="School" value="<?php echo '' ?>">
					</div>
					<div class="bio_data">
						<label class="labs">State of Origin:</label>
						<input class="inpt" type="text" name="State" value="<?php echo '' ?>">
					</div>
					<div class="bio_data">
						<label class="labs">Local Govt:&emsp;</label>
						<input class="inpt" type="text" name="Local" value="<?php echo '' ?>">
					</div>
					<div class="bio_data">
						<label class="labs">Home Address:</label>
						<input class="inpt" type="text" name="Home" value="<?php echo '' ?>">
					</div>
					<div class="bio_data">
						<label class="labs">Resident Add:</label>
						<input class="inpt" type="text" name="Home" value="<?php echo '' ?>">
					</div>
				</div>
				<div class="col-half-q">
						<label class="head"><b>Next Of Kin</b></label>
					</div>
					<div class="col-half">
					<div class="bio_data">
						<label class="labs">Full Name:</label>
						<input class="inpt" type="text" name="full_name" value="<?php echo '' ?>">
					</div>
					<div class="bio_data">
						<label class="labs">Phone No:</label>
						<input class="inpt" type="Number" name="N_Number" value="<?php echo '' ?>">
					</div>
					<div class="bio_data">
						<label class="labs">Email Add:</label>
						<input class="inpt" type="Email" name="Email" value="<?php echo '' ?>">
					</div>
					<div class="bio_data">
						<label class="labs">Full Add:</label>
						<input class="inpt" type="text" name="res_add" value="<?php echo '' ?>">
					</div>
					<hr>
					<input class="subm" type="submit" name="submit" value="Update">
				</div>
			</form>
	</div><!-- end of Container-->
</html>