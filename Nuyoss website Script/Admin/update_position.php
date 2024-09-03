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
	<title>Edit Position</title>
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
					echo "<h1><center> Update Position</center></h1> <span style='display:none;'> ".$_SESSION['admin']."</span>";
				?>
				<hr>
			</div>
				 <?php 
                    if(isset($_GET['id'])){
                        $position = mysqli_query($connection, "SELECT * FROM positions where Position_id = {$_GET['id']}");
                        foreach(mysqli_fetch_array($position) as $k => $v){
                            $$k = $v;
                        }
                    }
                ?>
                <?php
	                if (isset($_POST['Edit_pos'])) {
	                    $edt_Position = $_POST['edt_Position'];
	                    			
                                    if(!empty($edt_Position)){
                                    	 mysqli_query($connection,"UPDATE positions set
                                        Name='$edt_Position'
                                         where Position_id = {$_POST['id']}                                    
                                        ") or die(mysqli_error());
                                    	echo('<b style="color: green;"><center>Position Updated Successully.</center></b>');
                                		echo('<script>location.href = "view_position.php"</script>');
                                    }else{
                                		echo '<b style="color: red;"><center>Position field Empty!<br></b><a style="color: green;" href="./view_position.php">Go Back and try Again.</a></center>';
                            		}
                               
                                }
                ?>
				<form action="update_Position.php" id="Update" method="Post" name="update_Position">
					 <input type="text" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?> ">
			<div class="full-col">
				<div class="two">
					
				</div>
				<div class="two">
					<label class="leb"><b>Position:</b><span style="color: red;">*</span></label><br>
					<input class="int" type="text" name="edt_Position" placeholder="Position" value="<?php echo isset($Name) ? $Name : "" ?>"><br>
					<input class="sub" type="submit" name="Edit_pos" value="Update Position">
				</div>
				</div>
				</form>
			</div>
			</div>
	</div><!-- end of Container-->
</body>
</html>