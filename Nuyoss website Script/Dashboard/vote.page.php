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
	<title>Voting Page</title>
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
				<li><a href="./profiles.php"><i class="fa fa-user-circle" aria-hidden="true"></i> Profile</a></li>
				<li><a href="./vote.page.php"><i class="fa fa-id-card" aria-hidden="true"></i> Vote Now</a></li>
				<li><a href="./Successuful voteded list.php"><i class="fa fa-check-square-o" aria-hidden="true"></i> All Voted</a></li>
				<li><a href="./vote_validation.php"><i class="fa fa-window-close" aria-hidden="true"></i> Exit</a></li>
				<li><a href="./logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
			</nav>
		</div>
			<div class="content">
				<?php
					echo "<h1>&nbsp;Welcome. <i style='color: red';>" .$_SESSION['Deligate_id']. "</i></h1>";
					echo "<a><strong style='display: none';><i style='color: red';>" .$_SESSION['Deligate_id']. "</i></strong></a>";
				?>
				<strong style="font-size: 25px;">&nbsp;
				<?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                </strong>
				<hr>
				<script>
				      function greetdeligate() {
				         var time = new Date().getHours();
				         if (time < 11) {
				            return "Good Morning";
				         } else if (time < 18) {
				            return "Good Afternoon";
				         } else {
				            return "Good Evening";
				         }
				      }
				      document.getElementById("user").innerHTML = greetdeligate();
				</script>
			</div>
				<div class="row-1">
					<div class="col-half">
						<div class="vote-container">
							<label class="vt"><strong>voters</strong></label>
							<hr>
							<i id="users"class="fa fa-users" aria-hidden="true"></i>
							<span>
								<?php
									$query="select * from deligate ORDER BY ID_No";

										$result=mysqli_query($connection, $query);
											$result=mysqli_query($connection, $query);
											
												$Voters=mysqli_num_rows($result);

												echo $Voters;
								?>
							</span>
						</div>
					</div>
					<div class="col-half_2">
						<div class="vote-container">
							<label class="vt"><strong>voted</strong></label>
							<hr>
							<i id="user"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span-2>
								<?php
									$query="select * from president_voted ORDER BY ID";

										$result2=mysqli_query($connection, $query);
											$result2=mysqli_query($connection, $query);
											
												$Voted=mysqli_num_rows($result2);

												echo $Voted;
								?>
							</span-2>
						</div>
					</div>
					<div class="hr">
						<hr>
					</div>
					<div class="col-half-q">
						<label class="head"><b>President</b></label>
					</div><br><br>
					
						<?php $deligate_query=mysqli_query($connection,"select * from deligate where ID_No='$deligate_id'")or die(mysqli_error());
                            $row=  mysqli_fetch_array($deligate_query);
                            
                            ?>

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
					<?php
						if (isset($_POST['vote'])){
							if(isset($_POST['Deligate_id'], $_POST['Full_Name'], $_POST['School'], $_POST['Course']));{
								$Deligate_id = htmlspecialchars(htmlentities(stripslashes($_POST['Deligate_id'])));
								$Full_Name = htmlspecialchars(htmlentities(stripslashes($_POST['Full_Name'])));
								$Matric_No = htmlspecialchars(htmlentities(stripslashes($_POST['Matric_No'])));
								$School = htmlspecialchars(htmlentities(stripslashes($_POST['School'])));
								$Course = htmlspecialchars(htmlentities(stripslashes($_POST['Course'])));
								if(!empty($Deligate_id)){
									require_once('./db_connection/db_connect.php');{
										$query="INSERT INTO president_voted (Deligate_ID, Candidate_Full_Name, Matric_No, Candidate_School, Candidate_Course) VALUES (?,?,?,?,?)";
										$stmt=mysqli_prepare($dbc,$query);
										mysqli_stmt_bind_param($stmt,"sssss",$Deligate_id,$Full_Name,$Matric_No,$School,$Course);
										mysqli_stmt_execute($stmt);
										$affected_rows=mysqli_stmt_affected_rows($stmt);
										mysqli_stmt_close($stmt);
										mysqli_close($dbc);
																								
										if($affected_rows==1)
											{
												echo('<script>location.href = "./confirm.php"</script>');
											}else{
												echo('<script>location.href = "./confirm2.php"</script>');
											}
										}
								}else{
									echo('<script>location.href = "./vote_validation.php"</script>');
								}
							}
						}
					?>
					<div class="col-half-tt">
						<img class="can" src="../admin/<?php echo $Candidate_Photo;?>"><br>
						<label class="info"><b>Name: <a style="color: blue;"><?php echo $Full_Name;?></a><br>School: <a style="color: red;"><?php echo $School;?></a><br>Course: <a style="color: brown;"><?php echo $Course;?></a><br>Local Govt: <a style="color: black;"><?php echo $Local_Govt;?></a></b>
							<center>
								<form action="vote.page.php" method="post" id="vote" name="vote">
								<?php echo '<input type="hidden" name="Deligate_id" value="'.$deligate_id.'">';?>
								<?php echo '<input type="hidden" name="Full_Name" value="'.$Full_Name.'">';?>
								<?php echo '<input type="hidden" name="Matric_No" value="'.$Matric_No.'">';?>
								<?php echo '<input type="hidden" name="School" value="'.$School.'">';?>
								<?php echo '<input type="hidden" name="Course" value="'.$Course.'">';?>
								<input class="vote" type="submit" name="vote" value="Vote">
							</form>
						</center>
						</label>
						
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
				<!--<div class="col-half-q">
					<label class="head"><b>Vice President (1)</b></label>
				</div>
				<?php
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
					<label class="head"><b>Vice President (2)</b></label>
				</div>
				<?php
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
						$query="select * from candidate";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Candidate_id=$row['Candidate_id'];
									$Full_Name=$row['Full_Name'];
									$School=$row['School'];
									$Course=$row['Course'];
									$Local_Govt=$row['Local_Govt'];
									$Position=$row['Position_Name'];
									$School=$row['School'];

					?>
					<div class="col-half-tt">
						<img class="can" src="./image/no_image.png"><br>
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
					</div>-->
				</div>
			</div>
	</div><!-- end of Container-->
</body>
</html>