<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{

  	date_default_timezone_set('Africa/Lagos');// change according timezone
							$currentDate = date( 'Y-m-d', time () );

if(isset($_POST['submit']))
{
$fname=$_POST['full_name'];
$email=$_POST['email'];
$pnumber=$_POST['pnumber'];
$status=$_POST['status'];
$password=$_POST['password'];
$regdate=$_POST['regdate'];
$query=mysql_query("insert into admin(Name,email_id,Phone_No,Status,Password,Reg_date) values('$fname','$email','$pnumber','$status','$password','$regdate')");
if($query){
	echo "<script>alert('Successfully Registered. You can login now');</script>";
}else{
	echo "<script>alert('Email Address or Phone Number Already Exist Check And Try Again!');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Admin Registration</title>
		<link rel="shortcut icon" href="assets/images/Ficus-tree-Ltd.png">
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		
		
		

	</head>

	<body class="login">
		<!-- start: REGISTRATION -->
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
					<center><img style="max-width: 20%; " src="assets/images/Ficus-tree-Ltd.png" alt="Ficus Tree Logo"></center><br>
				</div>
				<!-- start: REGISTER BOX -->
				<div class="box-register">
					<form name="registration" id="registration"  method="post">
						<fieldset style=" color:#008000;">
							<legend style=" color:#cc0000;">
								Sign Up
							</legend>
							<p>
								Enter Admin personal details below:
							</p>
							<div class="form-group">
								<span class="input-icon">
								<input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
								<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group">
								<span class="input-icon">
								<input type="text" class="form-control" name="pnumber" placeholder="Phone Number" required>
								<i class="fa fa-phone"></i> </span>
							</div>
							<div class="form-group">
								<label class="block">
									Account Status
								</label>
								<select class="form-control" name="status" required>
									<option value="">Select</option>
									<option value="Active">Active</option>
									<option value="Inactive">Inactive</option>
								</select>
							</div>
							<p>
								Enter account Login details below:
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
									<i class="fa fa-envelope"></i> </span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
									<i class="fa fa-lock"></i> </span>
									<input type="hidden" class="form-control" value="<?php echo $currentDate; ?>" name="regdate" required>
							</div>
							<div class="form-actions">
								<p>
									Already have an account?
									<a href="index.php">
										Log-in
									</a>
								</p>
								<button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
									Submit <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>

					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> FICUS TREE Ltd.</span>. <span>All rights reserved</span>
					</div>

				</div>

			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>	
		
	</body>
	<!-- end: BODY -->
</html>
<?php } ?>