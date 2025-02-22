<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{

$did=intval($_GET['id']);// get Employee id
if(isset($_POST['Update']))
{
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$othername=$_POST['othername'];
$gender=$_POST['gender'];
$staffcontact=$_POST['staffcontact'];
$staffaddress=$_POST['staffaddress'];
$staffdept=$_POST['staffdept'];
$staffgroup=$_POST['groups'];
$bsalary=$_POST['bsalary'];
$housing=$_POST['housing'];
$transport=$_POST['transport'];
$meal=$_POST['meal'];
$sadvance=$_POST['sadvance'];
$acno=$_POST['acno'];
$bankname=$_POST['bankname'];
$bbranch=$_POST['bbranch'];

$sql=mysqli_query($con,"Update staff set First_name='$fname', Surname='$sname', Other_name='$othername', Gender='$gender', Phone_number='$staffcontact', Address='$staffaddress', Department='$staffdept', Groups='$staffgroup', Basic_salary='$bsalary', Housing='$housing', Transport='$transport', Meal='$meal', Salary_advance='$sadvance', Account_no='$acno', Bank_name='$bankname', Bank_branch='$bbranch' where id='$did'");
if($sql)
{
echo "<script>alert('Staff Record Edited Successfully');</script>";
echo "<script>window.location.href ='manage-staffs.php'</script>";

}else{
	echo "<script>alert('Some Record Already Exist Check and Try Again');</script>";
echo "<script>window.location.href ='manage-staffs.php'</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Edit Staff</title>
		<link rel="shortcut icon" href="assets/images/Ficus-tree-Ltd.png">
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />

	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Edit Staff</h1>
								</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Edit Staff</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h2>Edit Staff:</h2>
												</div>
												<div class="panel-body">
									<?php $sql=mysqli_query($con,"select * from staff where id='$did'");
while($data=mysqli_fetch_array($sql))
{
?>
													<form role="form" name="Editstaff" method="post" onSubmit="return valid();">
<div class="form-group">
															<label for="fname">
																 First Name:
															</label>
					<input type="text" name="fname" class="form-control"  placeholder="First Name" required="true" value="<?php echo htmlentities($data['First_name']);?>">
														</div>

<div class="form-group">
															<label for="sname">
																 Surname:
															</label>
					<input type="text" name="sname" class="form-control"  placeholder="Surname" required="true" value="<?php echo htmlentities($data['Surname']);?>">
														</div>

<div class="form-group">
															<label for="othername">
																 Other Name:
															</label>
					<input type="text" name="othername" class="form-control"  placeholder=" Optional" value="<?php echo htmlentities($data['Other_name']);?>">
														</div>

<div class="form-group">
															<label for="Gender">
																Gender:
															</label>
							<select name="gender" class="form-control" required="true">
														<option value="<?php echo htmlentities($data['Gender']);?>"><?php echo htmlentities($data['Gender']);?></option>
											<?php if (htmlentities($data['Gender'])=='Female') {?>
														<option value="Male">Male</option>
										<?php }else {?>
	 													<option value="Female">Female</option>
	 									<?php }?>
															</select>
														</div>

<div class="form-group">
									<label for="call">
																 Staff Phone Number:
															</label>
					<input type="Number" name="staffcontact" class="form-control"  placeholder="Staff Contact No" required="true" value="<?php echo htmlentities($data['Phone_number']);?>">
														</div>

<div class="form-group">
															<label for="address">
																 Staff Address:
															</label>
					<textarea name="staffaddress" class="form-control"  placeholder="Staff Address" required="true"><?php echo htmlentities($data['Address']);?></textarea>
														</div>

<div class="form-group">
															<label for="Department">
																Select Department:
															</label>
							<select name="staffdept" class="form-control" required="true">
																<option value="<?php echo htmlentities($data['Department']);?>"><?php echo htmlentities($data['Department']);?></option>
<?php $ret=mysqli_query($con,"select * from department");
while($row=mysqli_fetch_array($ret))
{
	if (htmlentities($row['Name'])==htmlentities($data['Department'])) {
		continue;
	}else
?>
										<option value="<?php echo htmlentities($row['Name']);?>">
														<?php echo htmlentities($row['Name']);?>
																</option>
																<?php } ?>
																
															</select>
														</div>

<div class="form-group">
															<label for="group">
																Select Group:
															</label>
													<select name="groups" class="form-control">
														<option value="<?php echo htmlentities($data['Groups']);?>"><?php echo htmlentities($data['Groups']);?></option>
								<?php if (htmlentities($data['Groups'])=='A') {?>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="">None</option>
								<?php }else if(htmlentities($data['Groups'])=='B'){?>
	 															<option value="A">A</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="">None</option>
								<?php }else if(htmlentities($data['Groups'])=='C'){?>
	 															<option value="A">A</option>
																<option value="B">B</option>
																<option value="D">D</option>
																<option value="">None</option>
	 							<?php }else if (htmlentities($data['Groups'])=='D'){?>
	 															<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="">None</option>
	 													<?php }else{?>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="C">D</option>
															<?php }?>
													</select>
														</div>
									<h2>Salary:</h2>

<div class="form-group">
															<label for="Salary">
																 Basic Salary:
															</label>
					<input type="Number" name="bsalary" class="form-control"  placeholder="Salary" required="true" value="<?php echo htmlentities($data['Basic_salary']);?>">
														</div>

<div class="form-group">
															<label for="Housing">
																 Housing:
															</label>
					<input type="Number" name="housing" class="form-control"  placeholder="Housing" required="true" value="<?php echo htmlentities($data['Housing']);?>">
														</div>

<div class="form-group">
															<label for="Transport">
																 Transport:
															</label>
					<input type="Number" name="transport" class="form-control"  placeholder="Transport" required="true" value="<?php echo htmlentities($data['Transport']);?>">
														</div>

<div class="form-group">
															<label for="Meal">
																 Meal:
															</label>
					<input type="Number" name="meal" class="form-control"  placeholder="Meal" required="true" value="<?php echo htmlentities($data['Meal']);?>">
														</div>

<div class="form-group">
															<label for="Salary Advance">
																 Salary Advance:
															</label>
					<input type="Number" name="sadvance" class="form-control"  placeholder="Salary Advance" value="<?php echo htmlentities($data['Salary_advance']);?>">
														</div>

<!--<div class="form-group">
															<label for="Paye">
																 Paye:
															</label>
					<input type="Number" name="paye" class="form-control"  placeholder="Paye" value="<?php echo htmlentities($data['Paye']);?>">
														</div>-->

									<h2>Bank Details:</h2>
<div class="form-group">
															<label for="bankacc">
																 Account No:
															</label>
					<input type="Number" name="acno" class="form-control"  placeholder="Account No" value="<?php echo htmlentities($data['Account_no']);?>">
														</div>

<div class="form-group">
									<label for="bankname">
																 Bank Name:
															</label>
					<input type="text" name="bankname" class="form-control"  placeholder="Bank Name" value="<?php echo htmlentities($data['Bank_name']);?>">
														</div>


<div class="form-group">
															<label for="bankbranch">
																 Bank Branch:
															</label>
					<input type="text" name="bbranch" class="form-control"  placeholder="Optional" value="<?php echo htmlentities($data['Bank_branch']);?>">
														</div>
														<button type="submit" name="Update" id="Update" class="btn btn-primary">
															Update <i class="fa fa-check-circle"></i>
														</button>
													</form>
													<?php } ?>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: BASIC EXAMPLE -->
			
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
<?php } ?>