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
	<title>Edit Candidate</title>
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
					echo "<h1><center> Edit Candidate Details</center></h1> <span style='display:none;'> ".$_SESSION['admin']."</span>";
				?>
				<hr>
			</div>
			<?php 
                if(isset($_GET['id'])){
                    $Candidate_query = mysqli_query($connection, "SELECT * FROM Candidate where Candidate_id = {$_GET['id']}");
                    foreach(mysqli_fetch_array($Candidate_query) as $k => $v){
                        $$k = $v;
                    }
                }
            ?>
            <?php
	                if (isset($_POST['edit_candidate'])) {
	                    $Name_edit = $_POST['Name_edit'];
	                    $School_edit = $_POST['School_edit'];
	                	$Course_edit = $_POST['Course_edit'];
	                	$Matric_No_edit = $_POST['Matric_No_edit'];
	                	$Local_govt_edit = $_POST['Local_govt_edit'];
	                	$Position_edit = $_POST['Position_edit'];

	                    			
                                    if(!empty($Name_edit)){

                                    	if(!empty($School_edit)){

                                    		if(!empty($Course_edit)){

                                    			if(!empty($Matric_No_edit)){

	                                    			if(!empty($Local_govt_edit)){

	                                    				if(!(empty($Position_edit))){
		                                    	 mysqli_query($connection,"UPDATE Candidate set
		                                        Full_Name='$Name_edit', School='$School_edit', Course='$Course_edit', Matric_No='$Matric_No_edit', Local_Govt='$Local_govt_edit', Position_Name='$Position_edit'
		                                         where Candidate_id = {$_POST['id']}                                    
		                                        ") or die(mysqli_error());
		                                    	echo('<b style="color: green;"><center>Updated Successully.</center></b>');
		                                		echo('<script>location.href = "View_candidate.php?Success"</script>');
		                                    }else{
	                                			  echo '<center><b style="color: red;">Position field Empty!</b></center><br>';
		                            		}
		                                }else{
		                                	echo '<center><b style="color: red;"> Local Govt field Empty!</b></center><br>';
		                                }
	                                }else{
	                            	echo '<center><b style="color: red;"> Matric No field Empty!</b></center><br>';
	                            }
	                            }else{
	                            	echo '<center><b style="color: red;"> Course field Empty!</b></center><br>';
	                            }
	                        }else{
	                        	echo '<center><b style="color: red;"> School field Empty!</b></center><br>';
	                        }
	        			}else{
	        				echo '<center><b style="color: red;"> Name field Empty!</b></center><br>';
	        			}
	        		}
                ?>
			<form action="edit_candidate.php<?php echo"?id='$Candidate_id'"?>" id="edit_candidate" method="Post" name="edit_candidate">
			<div class="full-col">
				<div class="full-col">
				</div>
				<div class="two">
					<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
					<label class="leb"><b>Full Name:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="text" name="Name_edit" placeholder="Full Name"  value="<?php echo isset($Full_Name) ? $Full_Name : "" ?>"><br>
				</div>
				<div class="two">
					<label class="leb"><b>School Name:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="text" name="School_edit" placeholder="School Name" value="<?php echo isset($School) ? $School : "" ?>"><br>
				</div>
				<div class="two">
					<label class="leb"><b>Course:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="text" name="Course_edit" placeholder="Course of Study" value="<?php echo isset($Course) ? $Course : "" ?>"><br>
				</div>
				<div class="two">
					<label class="leb"><b>Matric No:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="text" name="Matric_No_edit" placeholder="Matric No:" value="<?php echo isset($Matric_No) ? $Matric_No : "" ?>"><br>
				</div>
				<div class="two">
					<label class="leb"><b>Local Govt:</b><span style="color: red;">*</span></label><br>
					<select class="int" name="Local_govt_edit" >
						<option value='<?php echo $Local_Govt;?>'><?php echo isset($Local_Govt) ? $Local_Govt : "" ?></option>
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
					<select class="int" name="Position_edit" >
						<option value='<?php echo $Position_Name;?>'><?php echo isset($Position_Name) ? $Position_Name : "" ?></option>
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
				<input class="sub" type="submit" name="edit_candidate" value="Update Details">
				</div>
				</form>
			</div>
			</div>
	</div><!-- end of Container-->
</body>
</html>