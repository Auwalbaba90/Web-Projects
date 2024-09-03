<?php
	session_start();
	if($_SESSION['Email_Address']==null){
	 	header('location:./logout.php');
	 }

?>
<?php
$connection= mysqli_connect("localhost","root","","nuyoss_database");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Candidates</title>
	<link rel="icon" type="image/ico" href="./image/logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/Candidates.css">
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
				<li><a href="./profiles.php"><i class="fa fa-user-circle" aria-hidden="true"></i> Profile</a></li>
				<li><a href="./vote_validation.php"><i class="fa fa-download" aria-hidden="true"></i> Voting Page</a></li>
			</ul>
			</nav>
		</div>
			<div class="content">
				<?php
					echo '<h1><center>Election Candidates</center></h1>';
					echo "<strong style='display: none';>" .$_SESSION['Email_Address']. "</strong>";
				?>
				<hr>
			</div>
				<div class="col-half-q">
					<label class="head"><b>President</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='President' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
				<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
					<div class="col-half-q">
						<label class="head"><b>Vice President (1)</b></label>
					</div>
					<?php
						$query="select * from candidate WHERE Position_Name='Vice President (1)' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
					<div class="col-half-q">
						<label class="head"><b>Vice President (2)</b></label>
					</div>
					<?php
						$query="select * from candidate WHERE Position_Name='Vice President (2)' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];
					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
				<div class="col-half-q">
					<label class="head"><b>Secretary General</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='Secretary General' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
				<div class="col-half-q">
					<label class="head"><b>Assistant Secretary General</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='Assistant Secretary General' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
				<div class="col-half-q">
					<label class="head"><b>Financial Secretary</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='Financial Secretary' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
				<div class="col-half-q">
					<label class="head"><b>Treasurer</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='Treasurer' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
				<div class="col-half-q">
					<label class="head"><b>Auditor (1)</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='Auditor (1)' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
				<div class="col-half-q">
					<label class="head"><b>Auditor (2)</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='Auditor (2)' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
				<div class="col-half-q">
					<label class="head"><b>Auditor (3)</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='Auditor (3)' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
				<div class="col-half-q">
					<label class="head"><b>Welfare Director (1)</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='Welfare Director (1)' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
				<div class="col-half-q">
					<label class="head"><b>Welfare Director (2)</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='Welfare Director (2)' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
				<div class="col-half-q">
					<label class="head"><b>Admin. Secretary</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='Admin. Secretary' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
				<div class="col-half-q">
					<label class="head"><b>Social Director</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='Social Director' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
				<div class="col-half-q">
					<label class="head"><b>Sport Director</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='Sport Director' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
				<div class="col-half-q">
					<label class="head"><b>PRO (1)</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='PRO (1)' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
				<div class="col-half-q">
					<label class="head"><b>PRO (2)</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='PRO (2)' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
				<div class="col-half-q">
					<label class="head"><b>Speaker</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='Speaker' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
				<div class="col-half-q">
					<label class="head"><b>Deputy Speaker</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='Deputy Speaker' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
				<div class="col-half-q">
					<label class="head"><b>Cleark</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='Cleark' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
				<div class="col-half-q">
					<label class="head"><b>Deputy Cleark</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='Deputy Cleark' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
				<div class="col-half-q">
					<label class="head"><b>Chief Whip</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='Chief Whip' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
				<div class="col-half-q">
					<label class="head"><b>Deputy Chief Whip</b></label>
				</div>
				<?php
						$query="select * from candidate WHERE Position_Name='Deputy Chief Whip' ORDER BY Candidate_id";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Matric_No=$row['Matric_No'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$Candidate_Photo=$row['Candidate_Photo'];

					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b></label>
					</div>
					<?php
						}
							}
						}else{
							echo mysqli_error($connection);
						}
					?>
					<div class="hr">
						<hr>
					</div>
				</div>
	</div><!-- end of Container-->
</body>
</html>