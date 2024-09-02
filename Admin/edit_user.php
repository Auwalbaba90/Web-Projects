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
	<title>Edit User</title>
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
					echo "<h1><center> Edit User Details</center></h1> <span style='display:none;'> ".$_SESSION['admin']."</span>";
				?>
				<hr>
			</div>
			<?php 
                if(isset($_GET['id'])){
                    $Candidate_query = mysqli_query($connection, "SELECT * FROM users where Users_id = {$_GET['id']}");
                    foreach(mysqli_fetch_array($Candidate_query) as $k => $v){
                        $$k = $v;
                    }
                }
            ?>
             <?php
	                if (isset($_POST['Save_user'])) {
	                    $First_Name = $_POST['First_Name'];
	                    $Surname = $_POST['Surname'];
	                	$Other_name = $_POST['Other_name'];
	                	$Email_Address = $_POST['Email_Address'];
	                	$matric_no = $_POST['matric_no'];
	                	$Phone_Number = $_POST['Phone_Number'];
	                    $State = $_POST['State'];
	                	$Local_govt = $_POST['Local_govt'];
	                	$Date_of_Birth = $_POST['Date_of_Birth'];
	                	$gender = $_POST['gender'];
	                	$Password = $_POST['Password'];

                                    if(!empty($First_Name)){

                                    	if(!empty($Surname)){

                                    			if(!empty($Email_Address)){

                                    				if(!(empty($matric_no))){

                                    					if(!empty($Phone_Number)){

					                                    	if(!empty($State)){

					                                    		if(!empty($Local_govt)){

					                                    			if(!empty($Date_of_Birth)){

					                                    				if(!(empty($gender))){

					                                    					if(!(empty($Password))){
									                                    	 mysqli_query($connection,"UPDATE users set
									                                        First_name='$First_Name', Surname='$Surname', Other_Name='$Other_name', Email_Address='$Email_Address', Matric_No='$matric_no', Phone_No='$Phone_Number', State='$State', local_govt='$Local_govt', Date_of_Birth='$Date_of_Birth', Gender='$gender', Password='$Password'
									                                         where Users_id = {$_POST['id']}                                    
									                                        ") or die(mysqli_error());
									                                    	echo('<b style="color: green;"><center>Updated Successully.</center></b>');
									                                		echo('<script>location.href = "users.php?Success"</script>');
									                                    }else{
									                                		echo '<center><b style="color: red;"> Password field Empty!</b></center>';
									                            		}
									                                }else{
									                                	echo '<center><b style="color: red;"> Gender field Empty!</b></center>';
									                            	}  
								                                }else{
								                                	echo '<center><b style="color: red;"> Date of Birth field Empty!</b></center>';
								                                }
								                            }else{
								                            	echo '<center><b style="color: red;"> Local govt field Empty!</b></center>';
								                            }
								                        }else{
								                        	echo '<center><b style="color: red;"> State field Empty!</b></center>';
								                        }
								        			}else{
								        				echo '<center><b style="color: red;"> Phone Number field Empty!</b></center>';
								        			}
								        		 }else{
								        		echo '<center><b style="color: red;"> Matric No field Empty!</b></center>';
								    		}
								       
								        }else{
								        	echo '<center><b style="color: red;"> Email Address field Empty!</b></center>';
								        }
								}else{
									echo '<center><b style="color: red;"> Surname field Empty!</b></center>';
								}
							}else{
								echo '<center><b style="color: red;"> First Name field Empty!</b></center>';
							}
						}
					?>
			<form action="edit_user.php<?php echo"?id='$Users_id'"?>" id="user_edit" method="Post" name="user_edit">
			<div class="full-col">
				<div class="full-col">
				</div>
				<div class="two">
					<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
					<label class="leb"><b>First Name:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="text" name="First_Name" placeholder="E.g: Auwal" value="<?php echo isset($First_name) ? $First_name : "" ?>"><br>
				</div>
				<div class="two">
					<label class="leb"><b>Surname:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="text" name="Surname" placeholder="E.g: Musa" value="<?php echo isset($Surname) ? $Surname : "" ?>"><br>
				</div>
				<div class="two">
					<label class="leb"><b>Other Name:</b></span></label><br>
					<input class="int" type="text" name="Other_name" placeholder="E.g: Baba" value="<?php echo isset($Other_Name) ? $Other_Name : "" ?>"><br>
				</div>
				<div class="two">
					<label class="leb"><b>Email Address:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="Email" name="Email_Address" placeholder="E.g: abc123@example.com" value="<?php echo isset($Email_Address) ? $Email_Address : "" ?>"><br>
				</div>
				<div class="two">
					<label class="leb"><b>Matric No:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="text" name="matric_no" placeholder=" School Reg No" value="<?php echo isset($Matric_No) ? $Matric_No : "" ?>"><br>
				</div>
				<div class="two">
					<label class="leb"><b>Phone No:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="number" name="Phone_Number" placeholder="E.g: +2348123872663" value="<?php echo isset($Phone_No) ? $Phone_No : "" ?>"><br>
				</div>
				<div class="two">
					<label class="leb"><b>State:</b><span style="color: red;">*</span></label><br>
					<select class="int" name="State" >
						<option value='<?php echo $State;?>'><?php echo isset($State) ? $State : "" ?></option>
						<option value="Yobe">Yobe</option>
					</select>
				</div>
				<div class="two">
					<label class="leb"><b>Local Govt:</b><span style="color: red;">*</span></label><br>
					<select class="int" name="Local_govt" >
						<option value='<?php echo $local_govt;?>'><?php echo isset($local_govt) ? $local_govt : "" ?></option>
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
					<label class="leb"><b>Date of Birth:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="Date" name="Date_of_Birth" value="<?php echo isset($Date_of_Birth) ? $Date_of_Birth : "" ?>"><br>
				</div>
				<div class="two">
					<label class="leb"><b>Gender:</b><span style="color: red;">*</span></label><br>
					<select class="int" name="gender" id="Gender" >
						<option value='<?php echo $Gender;?>'><?php echo isset($Gender) ? $Gender : "" ?></option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
				<div class="two">
					<label class="leb"><b>Password:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="text" name="Password" placeholder="E.g: Password" value="<?php echo isset($Password) ? $Password : "" ?>"><br>
				</div>
				<input class="sub" type="submit" name="Save_user" value="Save User">
				</div>
				</form>
			</div>
			</div>
	</div><!-- end of Container-->
</body>
</html>