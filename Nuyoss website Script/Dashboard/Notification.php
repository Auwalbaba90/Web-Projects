<?php
	session_start();
	if($_SESSION['Email_Address']==null){
	 	header('location:./logout.php');
	 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notifications</title>
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
					echo '<h1><center>Notifications</center></h1>';
					echo "<strong style='display: none';>" .$_SESSION['Email_Address']. "</strong>";
				?>
				<hr>
			</div>
		<div class="center" style="background-color: white; width: 95%; text-align: center; margin-left: 2%; min-height: 20%;">
			<!--<a href="" style="text-decoration: none;"><span style="font-size: 30px; color: green; font-family: arial;">
				We Inform That All Candidate for Comfirm Your Information is Correctly. So that click hare to Comfirm Your Information Now.
			</span></a>-->
			<span style="font-size: 60px; color: green; font-family: all;">
				NO ANY NOTIFICATION FOUND
			</span>
		</div>
	</div><!-- end of Container-->
</html>