<?php
	session_start();
	session_destroy();
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="icon" type="image/ico" href="./images/logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/login_signup.css">
</head>
<body>
	<div id="container">
		<?php include('header.php'); ?>
		<form action="login.php" method="POST" id="Login">
		<div class="content">
			<h1 class="Register-login">Login</h1>
		<div class="row">
			<div class="col-full">
				<div class="login">
				<?php
					if (isset($_POST['Login'])){
						if(isset($_POST['Username'], $_POST['Password'])){
							$Username = htmlspecialchars(htmlentities(stripslashes($_POST['Username'])));
							$Password = htmlspecialchars(htmlentities(stripslashes($_POST['Password'])));
								if (!empty($Username)) {
									if (!empty($Password)){
										include './db_connection/db_connect.php';
											$query="SELECT count(*) FROM users where Email_Address=? and Password=?";
												$stmt=mysqli_prepare($dbc,$query);
												mysqli_stmt_bind_param($stmt,"ss",$Username,$Password);
												mysqli_stmt_execute($stmt);
												mysqli_stmt_bind_result($stmt,$cnt);
												mysqli_stmt_fetch($stmt);
												//echo $cnt;
												mysqli_stmt_close($stmt);
												mysqli_close($dbc);
												/*$affected_rows=mysqli_stmt_affected_rows($stmt);
												$response=@mysqli_query($dbc,$query);
												echo $affected_rows;
												*/
												if($cnt==1)
												{
													$_SESSION['Email_Address']=$Username;
													echo '
													<script type="text/javascript">
														window.location = "./Dashboard/";
													</script>';
												}else{
													echo '<a style="color: red;">Invalid User Email Address Or Password Check and try Again.</a>';
												}
									}else{
										echo 'Password field Empty!';
									}
								}else{
									echo 'User Name field Empty!';
								}
							}
						}
					?>
							 <div class="input-cnt">
		            		<i class="material-icons">Email Add:<span style="color: red;">*</span></i>
		            		<input type="email" placeholder="E.g: Union@example.com" name="Username" />
		         		</div>
		         		<div class="input-cnt">
		            		<i class="material-icons">Password:<span style="color: red">*</span></i>
		           			 <input type="password" placeholder="Password" name="Password" />
		        		 	</div>
		        		 	 <div class="input-cnt">
		           			 <input type="submit" name="Login" value="Login" />
		         		</div><br>
		         		<span><i><a href="#"><strong>Forgot Password?</strong></a></i></span><br>
		         		<a href="./Register.php" style="text-decoration: none;"><span style="color: red;"><i>You Don't have and Account Click Here.</i></span></a>
		      		</div>
		      	</div>
		      	</form>
			</div>
			</div>
			</div>
		</div>
	</div>
</div>
	<?php include('footer.php'); ?>
	</div><!-- end of Container-->
</body>
</html>