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
	<title>Dashboard</title>
	<link rel="icon" type="image/ico" href="./image/logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/dashboard.css">
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
				<li><a href="./"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="./profiles.php"><i class="fa fa-user-circle" aria-hidden="true"></i> Profile</a></li>
				<li><a href="./vote_validation.php"><i class="fa fa-download" aria-hidden="true"></i> Voting Page</a></li>
				<li><a href="./logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
				<li><i class="fa fa-calendar" aria-hidden="true"> <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?></i></li>
			</ul>
			</nav>
		</div>
			<div class="content">
				<?php
				echo "<h1>&nbsp; &nbsp;&nbsp;Your Welcome, <i style='color: red';>" .$_SESSION['Email_Address']. "</i></h1>";
			/*require_once('./db_connection/db_connect.php');
			$query="SELECT count(*),First_name,Matric_No FROM users where First_name=? and Matric_No=?";
			$stmt=mysqli_prepare($dbc,$query);
			mysqli_stmt_bind_param($stmt,"ss",$_SESSION['First_name'],$_SESSION['Matric_No']);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt,$cnt,$First_name,$Matric_No);
			mysqli_stmt_fetch($stmt);
			if($cnt==1)
			{
				echo "<h4 style='padding-left: none;'>First_name.: ".$First_name."&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Matric_No: ".$Matric_No." points</h4><br>";
			}
			mysqli_stmt_close($stmt);
			mysqli_close($dbc);*/
		?>
				<hr>
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
					<div class="col-half-q">
						<div class="half_col"><a href="./profiles.php">
							<div class="vote-container">
								<i id="profile"class="fa fa-user-circle-o" aria-hidden="true"></i>
							</div></a>
							<strong class="name">Profile</strong>
						</div>
					<div class="half_col"><a href="./notification.php">
						<div class="vote-container">
							<i id="profile"class="fa fa-bell-o" aria-hidden="true"></i>
						</div></a>
						<strong class="name">Notifications</strong>
					</div>
					<div class="half_col"><a href="#">
						<div class="vote-container">
							<i id="profile"class="fa fa-ticket" aria-hidden="true"></i>
						</div></a>
						<strong class="name">Purchase Ticket</strong>
					</div>
					<div class="half_col"><a href="./Candidates.php">
						<div class="vote-container">
							<i id="profile"class="fa fa-group" aria-hidden="true"></i>
						</div></a>

						<strong class="name">Candidates</strong>
					</div>
					<div class="half_col"><a href="./vote_validation.php">
						<div class="vote-container">
							<i id="profile"class="fa fa-id-card" aria-hidden="true"></i>
						</div></a>
						<strong class="name">Vote</strong>
					</div>
					<div class="half_col"><a href="./Education.php">
						<div class="vote-container">
							<i id="profile"class="fa fa-graduation-cap" aria-hidden="true"></i>
						</div></a>
						<strong class="name">Education</strong>
					</div>
					</div>
					<div class="col-half-m">
						<div class="vote-container">
							<label><strong>Calander</strong></label>
						</div>
					</div>
				</div>
			</div>
	
	</div><!-- end of Container-->
</body>
</html>