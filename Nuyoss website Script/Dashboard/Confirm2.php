<?php
	session_start();
	if(!isset($_SESSION['Deligate_id']) || (trim($_SESSION['Deligate_id']) == '')){
	 	header('location:./index.php');
	 }
	$deligate_id=$_SESSION['Deligate_id'];
?>
<?php
$connection= mysqli_connect("localhost","root","","nuyoss_database");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirm</title>
	<link rel="icon" type="image/ico" href="./image/logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/vote.page.css">
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
				<li><a href="./vote.page.php"><i class="fa fa-id-card" aria-hidden="true"></i> Vote Page</a></li>
				<li><a href="./vote_validation.php"><i class="fa fa-window-close" aria-hidden="true"></i> Exits</a></li>
			</ul>
			</nav>
		</div>
			<div class="content">
				<?php
					echo "<a><strong style='display: none';><i style='color: red';>" .$_SESSION['Deligate_id']. "</i></strong></a>";
				?>
				<hr>
			</div>
			<center>
				<div class="col-half-q">
					<h1 style="color: green">You Have Already Voted Candidate On This Position....<br>You Can't Allow to Vote More than One Candidate or Duplicate!!!</h1><br><a href="./vote.page.php"><button class="vote" style="width: 10%; border-radius: 5%; padding-top: 1%; padding-bottom: 1%; margin-left: 0%;"><i class="fa fa-arrow-left" aria-hidden="true">&nbsp;</i>Back</button></a>
				</div>
			</center>
	</div><!-- end of Container-->
</body>
</html>