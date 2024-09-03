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
					<table class="col-half-q" style="background-color: lightgrey;" border="0">
					<thead>
							<tr>
								<th class="head" style="background-color: green;" colspan="4"><b>Bio-Data</b></th>
							</tr>
							<tr class="nam">
								<th style="color: #cc6600" class="labs">First Name:</th>
								<th style="color: #cc6600" class="labs">Surname:</th>
								<th style="color: #cc6600" class="labs">Other Name:</th>
							</tr>
						</thead>
						<tbody>
							<tr class="data">
								<td class="labs" style="font-family: arial"><?php echo 'Auwal';?></td>
								<td class="labs"><?php echo'Musa';?></td>
								<td class="labs"><?php echo 'Baba';?></td>
							</tr>
							<tr class="nam">
								<th style="color: #cc6600" class="labs">Matric No:</th>
								<th style="color: #cc6600" class="labs">Gender:</th>
								<th style="color: #cc6600" class="labs">Date of Birth:</th>
							</tr>
							<tr class="data">
								<td class="labs"><?php echo 'CYB/19D/1745';?></td>
								<td class="labs"><?php echo'Male';?></td>
								<td class="labs"><?php echo '12/08/1999';?></td>
							</tr>
						</tbody>
					<thead>
							<tr>
								<th class="head" style="background-color: green;" colspan="4"><b>School Information</b></th>
							</tr>
							<tr class="nam">
								<th style="color: #cc6600" class="labs">School Name:</th>
								<th style="color: #cc6600" class="labs">Faculty:</th>
								<th style="color: #cc6600" class="labs">Department:</th>
							</tr>
					</thead>
					<tbody>
							<tr class="data">
								<td class="labs"><?php echo 'Nigerian Army Univesity, Biu';?></td>
								<td class="labs"><?php echo'Computing';?></td>
								<td class="labs"><?php echo 'Cyber Security';?></td>
							</tr>
							<tr class="nam">
								<th style="color: #cc6600" class="labs">Course:</th>
								<th style="color: #cc6600" class="labs">State:</th>
								<th style="color: #cc6600" class="labs">Country:</th>
							</tr>
							<tr class="data">
								<td class="labs"><?php echo 'Cyber Srcurity';?></td>
								<td class="labs"><?php echo'Yobe';?></td>
								<td class="labs"><?php echo 'Nigeria';?></td>
							</tr>
						</tbody>
					<thead>
							<tr>
								<th class="head" style="background-color: green;" colspan="4"><b>Address</b></th>
							</tr>
							<tr class="nam">
								<th style="color: #cc6600" class="labs">Email Address:</th>
								<th style="color: #cc6600" class="labs">Phone No:</th>
								<th style="color: #cc6600" class="labs">State of Origin:</th>
							</tr>
						</thead>
						<tbody>
							<tr class="data">
								<td class="labs"><?php echo 'auwalbaba90@gmail.com';?></td>
								<td class="labs"><?php echo'08123872663';?></td>
								<td class="labs"><?php echo 'Yobe';?></td>
							</tr>
							<tr class="nam">
								<th style="color: #cc6600" class="labs">Local Govt:</th>
								<th style="color: #cc6600" class="labs">Home Address:</th>
								<th style="color: #cc6600" class="labs">Resident Address:</th>
							</tr>
							<tr class="data">
								<td class="labs"><?php echo 'Potiskum';?></td>
								<td class="labs"><?php echo'Tandari Area Potiskum';?></td>
								<td class="labs"><?php echo 'Tandari Area Potiskum';?></td>
							</tr>
						</tbody>
					<thead>
							<tr>
								<th class="head" style="background-color: green;" colspan="4"><b>Next Of Kin</b></th>
							</tr>
							<tr class="nam">
								<th style="color: #cc6600" class="labs">Full Name:</th>
								<th style="color: #cc6600" class="labs">Phone No:</th>
								<th style="color: #cc6600" class="labs">Email Address:</th>
							</tr>
					</thead>
					<tbody>
							<tr class="data">
								<td class="labs"><?php echo 'Ali Musa Baba';?></td>
								<td class="labs"><?php echo'09039935629';?></td>
								<td class="labs"><?php echo'alimusababa@gmail.com';?></td>
							</tr>
							<tr class="nam">
								<th style="color: #cc6600" class="labs">Resident Address:</th>
							</tr>
							<tr class="data">
								<td class="labs"><?php echo 'Potiskum Yobe State';?></td>
							</tr>
						</tbody>
				</table>
				<center>
					<a href="./profile.php"><button class="subm" name="Edit"><i class="fa fa-pencil-square fa-lg" aria-hidden="true"></i> Edit</button></a>
				</center>
	</div><!-- end of Container-->
</html>