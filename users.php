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
	<title>Total Users</title>
	<link rel="icon" type="image/ico" href="./image/logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/users.css">
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
					echo "<h1><center>Total Users</center></h1> <span style='display:none;'> ".$_SESSION['admin']."</span>";
				?>
				<hr>
			</div>
			<div class="full-col">
				<center>
				<div class="two2">
					<table class="tabs" border="1">
						<input class="int" type="search" name="search" placeholder="Search: User With Email Address / Matric No. Here" ><br><br>
						<thead>
							<tr>
								<th class="list" colspan="14">Total Users List</th>
							</tr>
							<tr class="nam">
								<th>Firsr Name</th>
								<th>Surname</th>
								<th >Other Name</th>
								<th>Email Address</th>
								<th>Matric No</th>
								<th >Phone No</th>
								<th>State</th>
								<th>Local Govt</th>
								<th >Date of Birth</th>
								<th>Gender</th>
								<th>Reg Date</th>
								<th>Confirmation</th>
								<th>Actions</th>
							</tr>
							<?php
									$query="select * from users";

									$result=mysqli_query($connection, $query);
									if ($result) {
										if(mysqli_num_rows($result) >0){
											while($row=mysqli_fetch_assoc($result)){
												$Users_id=$row['Users_id'];
												$First_name=$row['First_name'];
												$Surname=$row['Surname'];
												$Other_Name=$row['Other_Name'];
												$Email_Address=$row['Email_Address'];
												$Matric_No=$row['Matric_No'];
												$Phone_No=$row['Phone_No'];
												$State=$row['State'];
												$local_govt=$row['local_govt'];
												$Date_of_Birth=$row['Date_of_Birth'];
												$Gender=$row['Gender'];
												$Date_Reg=$row['Date_Reg'];
												$Code=$row['Confirmation_Code'];

							?>
						</thead>
						<tbody>
							<tr class="data">
								<td class="fname"><b><?php echo $First_name;?></b></td>
								<td class="fname"><b><?php echo $Surname;?></b></td>
								<td class="fname"><b><?php echo $Other_Name;?></b></td>
								<td class="eml"><b><?php echo $Email_Address;?></b></td>
								<td class="mtr"><?php echo $Matric_No;?></td>
								<td><?php echo $Phone_No;?></td>
								<td><?php echo $State;?></td>
								<td><?php echo $local_govt;?></td>
								<td><?php echo $Date_of_Birth;?></td>
								<td><?php echo $Gender;?></td>
								<td><?php echo $Date_Reg;?></td>
								<td><?php echo $Code;?></td>
								<td class="edt"><?php echo'<a class="href" href="./edit_user.php?id='.$Users_id.'">Edit</a> | <a class="hrefs" <!--href="./delete_user.php?id='.$Users_id.'"-->Delete</a>'?></a></td>
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
	</div><!-- end of Container-->
</body>
</html>