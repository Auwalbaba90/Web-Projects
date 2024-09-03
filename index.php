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
	<title>Admin| Dashboard</title>
	<link rel="icon" type="image/ico" href="./image/logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/dashboard.css">
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
				<!--<?php
				$query="select * from admin";

				$result=mysqli_query($connection, $query);
				if ($result) {
					if(mysqli_num_rows($result) >0){
						while($row=mysqli_fetch_assoc($result)){
							$S_N=$row['S_N'];
			?>
				<?php
			}
				}
			}else{
				echo mysqli_error($connection);
				}

			?>-->
				<li><a href="./admin_profile.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> My Profile</a></li>
				<li><a href="./users.php"><i class="fa fa-users" aria-hidden="true"></i> Users</a></li>
				<li><a href="./Voted.php"><i class="fa fa-check-square-o" aria-hidden="true"></i> View Voted</a></li>
				<li><a href="./Posting.php"><i class="fa fa-bell-o" aria-hidden="true"></i> Posting News</a></li>
				<li><a href="./logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
			</nav>
		</div>
			<div class="content">
				<?php
					echo "<h1>&nbsp; &nbsp;&nbsp; Welcome, Administrator!<i style='color: red';> ".$_SESSION['admin']."</i></h1>";
				?>
				<hr>
			</div>
			<div class="full-col">
				<div class="col-last">
					<div style="font-size: 30px;" class="link">
					<?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
				<div class="users">
					<?php
						$query="select * from users ORDER BY Users_id";

							$result=mysqli_query($connection, $query);
								
							$Users=mysqli_num_rows($result);

					?>
					<span class="stu"><b>Total Users</b></span><br>
					<span class="stu"><b><?php echo $Users;?></b></span>
				</div>

				<div class="list-users">
					<marquee direction="up" scrollamount="5" behavior="scroll">
					<?php
									$query="select * from users";

									$result=mysqli_query($connection, $query);
									if ($result) {
										if(mysqli_num_rows($result) >0){
											while($row=mysqli_fetch_assoc($result)){
												$Email_Address=$row['Email_Address'];
												$Matric_No=$row['Matric_No'];
												$First_name=$row['First_name'];
												$Surname=$row['Surname'];
												$Other_Name=$row['Other_Name'];

							?>
					<hr><b><center><span class="usr"><?php echo $Email_Address;?></span><br><span class="usrs"> <?php echo $Matric_No;?></span></center></b><hr>
					<?php
									}
										}
									}else{
										echo mysqli_error($connection);
									}
							?>
					</marquee>
				</div>
				<span class="all"><a class="a" href="./users.php"><center><b>View All Users</b></center></a></span>
				</div>
				<a href="./Position.php">
				<div class="col-half">
					<div class="vote-container">
						<label class="link"><strong>Add Position</strong></label>
					</div>
				</div></a>
				<a href="./View_position.php">
				<div class="col-half">
					<div class="vote-container">
						<label class="link"><strong>View Position</strong></label>
					</div>
				</div></a>
				<a href="./Candidate.php">
				<div class="col-half">
					<div class="vote-container">
						<label class="link"><strong>Add Candidate</strong></label>
					</div>
				</div></a>
				<a href="./View_candidate.php">
				<div class="col-half">
					<div class="vote-container">
						<label class="link"><strong>View Candidate</strong></label>
					</div>
				</div></a>
				<a href="./Deligate.php">
				<div class="col-half">
					<div class="vote-container">
						<label class="link"><strong>Add Deligate</strong></label>
					</div>
				</div></a>
				<a href="./View_deligate.php">
				<div class="col-half">
					<div class="vote-container">
						<label class="link"><strong>View Deligate</strong></label>
					</div>
				</div></a>
				<a href="./Purchased_Ticket.php">
				<div class="col-half">
					<div class="vote-container">
						<label class="link"><strong>Purchased Ticket</strong></label>
					</div>
				</div></a>
				<a href="./Voted.php">
				<div class="col-half">
					<div class="vote-container">
						<label class="link"><strong>View Voted</strong></label>
					</div>
				</div></a>
				<!--<a href="#">
				<div class="col-half">
					<div class="vote-container">
						<label class="link"><strong>Add Candidate</strong></label>
					</div>
				</div></a>
				<a href="#">
				<div class="col-half">
					<div class="vote-container">
						<label class="link"><strong>View Candidate</strong></label>
					</div>
				</div></a>-->
				</div>
			</div>
			</div>
	</div><!-- end of Container-->
</body>
</html>