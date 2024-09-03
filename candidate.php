<?php
	session_start();
	if($_SESSION['admin']==null){
	 	header('location:./logout.php');
	}
?>
<?php
$connection= mysqli_connect("localhost","root","","nuyoss_database");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Candidate</title>
	<link rel="icon" type="image/ico" href="./image/logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/Candidates.css">
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
</head>
<body>
	<div id="container">
		<div class="row">
			<div class="logo">
				<span class="head"><b>National Union Of Yobe State Students.<br>(NUYOSS)</b></span>
			</div>
		</div>
		<div class="row">
			<nav>
			<ul>
				<li><a href="./index.php"><i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="./admin_profile.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> My Profile</a></li>
				<li><a href="./users.php"><i class="fa fa-users" aria-hidden="true"></i> Users</a></li>
				<li><a href="./Voted.php"><i class="fa fa-check-square-o" aria-hidden="true"></i> View Voted</a></li>
				<li><a href="./logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
			</nav>
		</div>
			<div class="content">
				<?php
					echo "<h1><center> Adding Candidate</center></h1> <span style='display:none;'> ".$_SESSION['admin']."</span>";
				?>
				<hr>
			</div>
			<form action="candidate.php" id="candidate" method="Post" name="candidate">
			<div class="full-col">
				<div class="full-col">
					<?php
						if (isset($_POST['Add_candidate'])){
							if(isset($_POST['Name'], $_POST['School'], $_POST['Course'], $_POST['Matric_No'], $_POST['Local_govt'], $_POST['Position']));{
								$Name = htmlspecialchars(htmlentities(stripslashes($_POST['Name'])));
								$School = htmlspecialchars(htmlentities(stripslashes($_POST['School'])));
								$Course = htmlspecialchars(htmlentities(stripslashes($_POST['Course'])));
								$Matric_No = htmlspecialchars(htmlentities(stripslashes($_POST['Matric_No'])));
								$Local_govt = htmlspecialchars(htmlentities(stripslashes($_POST['Local_govt'])));
								$Position = htmlspecialchars(htmlentities(stripslashes($_POST['Position'])));
								
								if(!empty($Name)){

									if(!empty($School)){

										if(!empty($Course)){

											if(!empty($Matric_No)){

												if(!empty($Local_govt)){

													if(!empty($Position)){

																require_once('../db_connection/db_connect.php');{
													$query="INSERT INTO candidate (Full_Name, School, Course, Matric_No, Local_Govt, Position_Name) VALUES (?,?,?,?,?,?)";
													$stmt=mysqli_prepare($dbc,$query);
													mysqli_stmt_bind_param($stmt,"ssssss",$Name,$School,$Course,$Matric_No,$Local_govt,$Position);
													mysqli_stmt_execute($stmt);
													$affected_rows=mysqli_stmt_affected_rows($stmt);
													mysqli_stmt_close($stmt);
													mysqli_close($dbc);
																											
													if($affected_rows==1)
														{
															echo('<b style="color: green;">Candidate Added Successully.</b>');
														}else{
															echo '<b style="color: blue;">'.$Matric_No.'.<br></b><b style="color: red;"> Already Exists Check and try Again.</b> ';
															}
														}
													}else{
														echo '<b style="color: red;">Position field Empty!</b>';
													}
												}else{
													echo '<b style="color: red;">Local Goverment field Empty!</b>';
												}
											}else{
												echo '<b style="color: red;">Matric No field Empty!</b>';
											}
										}else{
											echo '<b style="color: red;">Course field Empty!</b>';
										}
									}else{
										echo '<b style="color: red;">School Name field Empty!</b>';
									}

								}else{
									echo '<b style="color: red;">Full Name field Empty!</b>';
								}
									
							}
						}
			?>
				</div>
				<div class="two">
					<label class="leb"><b>Full Name:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="text" name="Name" placeholder="Full Name" ><br>
				</div>
				<div class="two">
					<label class="leb"><b>School Name:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="text" name="School" placeholder="School Name" ><br>
				</div>
				<div class="two">
					<label class="leb"><b>Course:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="text" name="Course" placeholder="Course of Study" ><br>
				</div>
				<div class="two">
					<label class="leb"><b>Matric No:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="text" name="Matric_No" placeholder="Reg No:" ><br>
				</div>
				<div class="two">
					<label class="leb"><b>Local Govt:</b><span style="color: red;">*</span></label><br>
					<select class="int" name="Local_govt" >
						<option value="">Select</option>
						<option value="Bade">Bade</option>
						<option value="Bursari">Bursari</option>
						<option value="Damaturu">Damaturu</option>
						<option value="Geidam">Geidam</option>
						<option value="Gujba">Gujba</option>
						<option value="Gulani">Gulani</option>
						<option value="Fika">Fika</option>
						<option value="Fune">Fune</option>
						<option value="Jakusko">Jakusko</option>
						<option value="Karasuwa">Karasuwa</option>
						<option value="Machina">Machina</option>
						<option value="Nangere">Nangere</option>
						<option value="Nguru">Nguru</option>
						<option value="Potiskum">Potiskum</option>
						<option value="Tarmuwa">Tarmuwa</option>
						<option value="Yunusari">Yunusari</option>
						<option value="Yusufari">Yusufari</option>
					</select>
				</div>
				<div class="two">
					<label class="leb"><b>Position:</b><span style="color: red;">*</span></label><br>
					<select class="int" name="Position" >
						<option value="">Select</option>
						<?php
						$query="select * from positions";

						$result=mysqli_query($connection, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Name=$row['Name']
					?>
						<option value='<?php echo $Name;?>'><?php echo $Name;?></option>
						<?php
					}
						}
					}else{
						echo mysqli_error($connection);
					}
				?>
					</select>
				</div>
				<input class="sub" type="submit" name="Add_candidate" value="Add Candidate">
				</div>
				</form>
			</div>
			</div>
	</div><!-- end of Container-->
</body>
</html>