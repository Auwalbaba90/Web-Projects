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
	<title>View Deligate</title>
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
					echo "<h1><center>Deligate</center></h1> <span style='display:none;'> ".$_SESSION['admin']."</span>";
				?>
				<hr>
			</div>
			<div class="full-col">
				<div class="two2">
					<center>
					<table class="tabs" border="1">
						<input class="int" type="search" name="search" placeholder="Search: Deligate Here" ><br><br>
						<thead>
							<tr>
								<th class="list" colspan="5">Deligate List</th>
							</tr>
							<tr class="nam">
								<th>Name</th>
								<th>Email Address</th>
								<th>Matric No</th>
								<th>Deligate ID</th>
								<th>Actions</th>
							</tr>
							<?php
									$query="select * from deligate";

									$result=mysqli_query($connection, $query);
									if ($result) {
										if(mysqli_num_rows($result) >0){
											while($row=mysqli_fetch_assoc($result)){
												$ID_No=$row['ID_No'];
												$Name=$row['Name'];
												$Email_Add=$row['Email_Add'];
												$Matric_No=$row['Matric_No'];
												$Deligate_id=$row['Deligate_id'];

							?>
						</thead>
						<tbody>
							<tr class="data">
								<td class="name"><?php echo $Name;?></td>
								<td><?php echo $Email_Add; ?></td>
								<td><?php echo $Matric_No; ?></td>
								<td><?php echo $Deligate_id; ?></td>
								<td class="edt"><?php echo'<a class="href" href="./edit_deligate.php?id='.$ID_No.'">Edit</a> | <a class="hrefs" href="./delete_deligate.php?id='.$ID_No.'">Delete</a>'?></a></td>
							</tr>
							<?php
									}
										}
									}else{
										echo mysqli_error($connection);
									}
							?>
						</tbody>
					</table>
					</center>
				</div>
				</div>
			</div>
			</div>
	</div><!-- end of Container-->
</body>
</html>