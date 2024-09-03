<?php
	session_start();
	if($_SESSION['admin']==null){
	 	header('location:./logout.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Deligate</title>
	<link rel="icon" type="image/ico" href="./image/logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/Deligate.css">
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
					echo "<h1><center> Adding Deligate</center></h1> <span style='display:none;'> ".$_SESSION['admin']."</span>";
				?>
				<hr>
			</div>
			<div class="full-col">
				<script>
				      function validateForm() {
				         var Deligate_id = document.getElementsByName("Deligate_id")[0].value;
				         var length = Deligate_id.length;
				         if(length > 20) {
				            alert("You can't Allow to Put more than 20 characters, The Original Deligate Id is 20 characters Check and Confirm Before You Submit!");
				            return false;
				         }if (length<20){
				            alert ("Deligate Id is Incorrect Check and try Again!");
				            return false;
				         }
				      }
   				</script>
				<form action="deligate.php" id="deligate" method="Post" name="deligate" onsubmit="return validateForm()">
				<div class="two">
					<?php
						if (isset($_POST['Add_deligate'])){
							if(isset($_POST['Name'], $_POST['Email_Address'], $_POST['Matric_No'], $_POST['Deligate_id']));{
								$Name = htmlspecialchars(htmlentities(stripslashes($_POST['Name'])));
								$Email_Address = htmlspecialchars(htmlentities(stripslashes($_POST['Email_Address'])));
								$Matric_No = htmlspecialchars(htmlentities(stripslashes($_POST['Matric_No'])));
								$Deligate_id = htmlspecialchars(htmlentities(stripslashes($_POST['Deligate_id'])));
								if(!empty($Name)){

									if(!empty($Email_Address)){

										if(!empty($Matric_No)){

											if(!empty($Deligate_id)){
											require_once('../db_connection/db_connect.php');{
										$query="INSERT INTO deligate (Name, Email_Add, Matric_No, Deligate_id) VALUES (?,?,?,?)";
										$stmt=mysqli_prepare($dbc,$query);
										mysqli_stmt_bind_param($stmt,"ssss",$Name,$Email_Address,$Matric_No,$Deligate_id);
										mysqli_stmt_execute($stmt);
										$affected_rows=mysqli_stmt_affected_rows($stmt);
										mysqli_stmt_close($stmt);
										mysqli_close($dbc);
																								
										if($affected_rows==1)
											{
												echo('<center><b style="color: green;">Deligate Added Successully.</b></center>');
											}else{
												echo '<center><b style="color: red;">There Some Errors in Your Application <br><strong style="color: blue;">Or</strong><br>Already Exists Check and try Again.</b></center> ';
											}
										}
										}else{
											echo '<center><b style="color: red;">Deligate ID field Empty!</b></center>';
										}
										}else{
											echo '<center><b style="color: red;">Matric No: field Empty!</b></center>';
										}

									}else{
										echo '<center><b style="color: red;">Email Address field Empty!</b></center>';
									}

								}else{
									echo '<center><b style="color: red;">Full Name field Empty!</b></center>';
								}
							}
						}
					?>
				</div>
				<div class="two">
					<label class="leb"><b>Full Name:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="text" name="Name" value="<?php echo('');?>" placeholder="Full Name" ><br>
				</div>
				<div class="two">
					<label class="leb"><b>Email Address:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="Email" name="Email_Address" placeholder="example@email.com" ><br>
				</div>
				<div class="two">
					<label class="leb"><b>Matric No:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="text" name="Matric_No" placeholder="Student Reg. No" ><br>
				</div>
				<div class="two">
					<label class="leb"><b>Deligate ID:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="text" value="" name="Deligate_id" placeholder="Deligate Vote ID" >
				</div>
				<div class="two">
				<input class="sub" type="submit" name="Add_deligate" value="Add Deligate">
				</div>
				</form>
				<center>
					<strong style="color: red; font-size:250%; " >Warnning!!!</strong><br>
					<i><strong>You Must Generate a Deligate Vote ID Before You Copy and Past in to Deligate Id Field and then You Submit. if else You Can Not Edit Deligate id After Submit.</strong></i>
				</center>
				<strong class="leb">NUYOSS/DLT/2022/<a id="ababa">????</a></strong><br>
				<button class="leb" onclick="getRandomInt(1111, 9999)"><strong> Generate New ID </strong></button><br>
					<script>
					      // minimum is included, maximum is included
					      function getRandomInt(min, max) {
					         document.getElementById("ababa").innerHTML = Math.floor(Math.random() * (max - min + 1)) + min;
					      }
					</script>
			</div>
				</div>
			</div>
	</div><!-- end of Container-->
</body>
</html>