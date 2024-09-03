<?php
	session_start();
	session_destroy();
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="icon" type="image/ico" href="./image/logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/login.css">
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
					<center><span class="maqee"><b>Welcome to National Union Of Yobe State Students, (NUYOSS). Admin Portal. </b></span></center>
			</ul>
			</nav>
		</div>
			<div class="content">
				<hr>
			</div>
				<form action="login.php" name="admin" method="POST" id="admin">
				<div class="col-half-tt">
					<?php
					if (isset($_POST['login'])){
						if(isset($_POST['admin'], $_POST['admin_password'])){
							$admin = htmlspecialchars(htmlentities(stripslashes($_POST['admin'])));
							$admin_password = htmlspecialchars(htmlentities(stripslashes($_POST['admin_password'])));
								if (!empty($admin)) {
									if (!empty($admin_password)){
										include './db_connection/db_connect.php';
											$query="SELECT count(*) FROM admin where Admin_id=? and Password=?";
												$stmt=mysqli_prepare($dbc,$query);
												mysqli_stmt_bind_param($stmt,"ss",$admin,$admin_password);
												mysqli_stmt_execute($stmt);
												mysqli_stmt_bind_result($stmt,$cnt);
												mysqli_stmt_fetch($stmt);
												//echo $cnt;
												mysqli_stmt_close($stmt);
												mysqli_close($dbc);
												if($cnt==1)
												{
													echo "<b style='color: green';>login Successully.</b>";
													$_SESSION['admin']=$admin;
													echo $_SESSION['admin']." is logged in";
													header("location:./index.php");
												}else{
													session_destroy();
													echo '<b style="color: red";>Invalid Admin Id <i style="color: green";>Or</i> Password Check and try Again.</b>';
												}
									}else{
										echo '<b style="color: red">Password field Empty!</b>';
									}
								}else{
									echo '<b style="color: red">Admin Id field Empty!</b>';
								}
						}
					}
				?>
					<br><label class="label">Admin Id:<span style="color: red;">*</span></label><br>
					<input class="inputs" type="text" name="admin" placeholder="Admin" ><br>
					<br><label class="label">Password:<span style="color: red;">*</span></label><br>
					<input class="inputs" type="Password" name="admin_password" placeholder="Secured" ><br><br>
					<input class="subm" type="submit" name="login" value="Login"><br><br>
				</div>
				</form>
	</div><!-- end of Container-->
</body>
</html>