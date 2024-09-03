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
	<title>Edit Deligate</title>
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
					echo "<h1><center> Update Deligate Details</center></h1> <span style='display:none;'> ".$_SESSION['admin']."</span>";
				?>
				<hr>
			</div>
			<?php 
                if(isset($_GET['id'])){
                    $Deligate_query = mysqli_query($connection, "SELECT * FROM deligate where ID_No = {$_GET['id']}");
                    foreach(mysqli_fetch_array($Deligate_query) as $k => $v){
                        $$k = $v;
                    }
                }
            ?>
            <?php
	                if (isset($_POST['save_deligate'])) {
	                    $Full_Name = $_POST['Full_Name'];
	                    $Email_add = $_POST['Email_add'];
	                	$Matric_No = $_POST['Matric_No'];
	                    			
                                    if(!empty($Full_Name)){

                                    	if(!empty($Email_add)){

                                    		if(!empty($Matric_No)){

		                                    	 mysqli_query($connection,"UPDATE Deligate set
		                                        Name='$Full_Name', Email_Add='$Email_add', Matric_No='$Matric_No'
		                                         where ID_No = {$_POST['id']}                                    
		                                        ") or die(mysqli_error());
		                                    	echo('<b style="color: green;"><center>Updated Successully.</center></b>');
		                                		echo('<script>location.href = "View_deligate.php?Success"</script>');
	                                   	 	}else{
	                            			echo '<center><b style="color: red;"> Matric No field Empty!</b></center><br>';
			                            }
			                        }else{
			                        	echo '<center><b style="color: red;"> Email Address field Empty!</b></center><br>';
			                        }
			        			}else{
			        				echo '<center><b style="color: red;"> Full Name field Empty!</b></center><br>';
			        			}
			        		}
                ?>
			<form action="edit_deligate.php<?php echo"?id='$ID_No'"?>" id="deligate_edit" method="Post" name="deligate_edit">
			<div class="full-col">
				<div class="full-col">
				</div>
				<div class="two">
					<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
					<label class="leb"><b>Full Name:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="text" name="Full_Name" placeholder="Full Name" value="<?php echo isset($Name) ? $Name : "" ?>" ><br>
				</div>
				<div class="two">
					<label class="leb"><b>Email Address:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="Email" name="Email_add" placeholder="E.g: abc123@example.com" value="<?php echo isset($Email_Add) ? $Email_Add : "" ?>"><br>
				</div>
				<div class="two">
					<label class="leb"><b>Matric No:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="text" name="Matric_No" placeholder="Student Reg. No" value="<?php echo isset($Matric_No) ? $Matric_No : "" ?>"><br>
				</div>
				<div class="two">
					<label class="leb"><b>Deligate ID:</b><span style="color: red;">* <br><i style="font-size: 70%;">You Can't Change this ID</i></span></label><br>
					<input disabled class="int" type="text" name="Deligate_id" placeholder="Deligate Vote ID" value="<?php echo isset($Deligate_id) ? $Deligate_id : "" ?>"><br>
				</div>
				<input class="sub" type="submit" name="save_deligate" value="Save Details">
				</div>
				</form>
			</div>
			</div>
	</div><!-- end of Container-->
</body>
</html>