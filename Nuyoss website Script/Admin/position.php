<?php
	session_start();
	if($_SESSION['admin']==null){
	 	header('location:./logout.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Position</title>
	<link rel="icon" type="image/ico" href="./image/logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/Position.css">
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
					echo "<h1><center> Adding Position</center></h1> <span style='display:none;'> ".$_SESSION['admin']."</span>";
				?>
				<hr>
			</div>
			<form action="Position.php" id="Position" method="Post" name="Position">
			<div class="full-col">
				<div class="two">
					<?php
						if (isset($_POST['Add'])){
							if(isset($_POST['Position']));{
								$Position = htmlspecialchars(htmlentities(stripslashes($_POST['Position'])));
								if(!empty($Position)){
									require_once('../db_connection/db_connect.php');{
										$query="INSERT INTO positions (Name) VALUES (?)";
										$stmt=mysqli_prepare($dbc,$query);
										mysqli_stmt_bind_param($stmt,"s",$Position);
										mysqli_stmt_execute($stmt);
										$affected_rows=mysqli_stmt_affected_rows($stmt);
										mysqli_stmt_close($stmt);
										mysqli_close($dbc);
																								
										if($affected_rows==1)
											{
												echo('<b style="color: green;">Position Added Successully.</b>');
											}else{
												echo '<b style="color: blue;">'.$Position.'.<br></b><b style="color: red;"> Already Exists Check and try Again.</b> ';
											}
										}
								}else{
									echo '<b style="color: red;">Position field Empty!</b>';
								}
							}
						}
					?>
				</div>
				<div class="two">
					<label class="leb"><b>Position:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="text" name="Position" placeholder="Position" ><br>
					<input class="sub" type="submit" name="Add" value="Add Position">
				</div>
				</div>
				</form>
			</div>
			</div>
	</div><!-- end of Container-->
</body>
</html>