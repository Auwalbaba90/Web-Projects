<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{

  		$staffid=$_POST['staffid'];

  	if(isset($_POST['update']))
  	{
  		$sid=$_POST['stid'];
  		$payee=$_POST['paye'];
  		$loan=$_POST['loan'];
  		$ret=mysqli_query($con,"SELECT * FROM staff where Staff_id='$staffid'");
$num=mysqli_fetch_array($ret);
if($num == 0){
	$sql=mysqli_query($con,"UPDATE staff SET Loan='$loan', Paye='$payee' where staff_id='$sid'");
  		if($sql){
  			echo "<script>alert('Loan Updated Successfully');</script>";
		echo "<script>window.location.href ='staff-loan.php'</script>";
	}else{
		echo "<script>alert('Error check');</script>";
		echo "<script>window.location.href ='staff-loan.php'</script>";
	}	
	}else{
		echo "<script>alert('Error check');</script>";
		echo "<script>window.location.href ='staff-loan.php'</script>";
	} 		
  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Loan</title>
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
									<h1 class="mainTitle">Staff Loan</h1>
																	</div>

								<ol class="breadcrumb">
									<li>
										<span>Staff</span>
									</li>
									<li class="active">
										<span>Loan</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									<h3 class="over-title margin-bottom-15">Staff <span class="text-bold">Loan</span></h3>
												<hr />
									<table class="table table-hover" id="sample-table-1">
		
										<tbody>
<?php

$sql=mysqli_query($con,"select * from staff where Staff_id='$staffid'");
$num=mysqli_num_rows($sql);
if($num>0){
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

											<tr>
												<th>Staff ID:</th>
												<td><?php echo $row['staff_id'];?></td>
											</tr>

											<tr>
												<th>Full Name:</th>
												<td><?php echo $row['First_name'];?> <?php echo $row['Surname'];?> <?php echo $row['Other_name'];?></td>
											</tr>
											<tr>
												<th>Department:</th>
												<td><?php echo $row['Department'];?></td>
											</tr>

											<tr>
												<th>Basic Salary:</th>
												<?php $Bsalary=htmlentities($row['Basic_salary']); ?>
												<td>&#8358; <?php echo $Bsalary;?></td>
											</tr>

											<tr>
												<th>Housing:</th>
												<?php $Housing=htmlentities($row['Housing']); ?>
												<td>&#8358; <?php echo $Housing;?></td>
											</tr>

											<tr>
												<th>Transport:</th>
												<?php $Transport=htmlentities($row['Transport']); ?>
												<td>&#8358; <?php echo $Transport;?></td>
											</tr>

											<tr>
												<th>Meal:</th>
												<?php $Meal=htmlentities($row['Meal']); ?>
												<td>&#8358; <?php echo $Meal;?></td>
											</tr>

											<tr>
												<th>Gross Total:</th>
												<?php $Gtotal= $Bsalary+$Housing+$Transport+$Meal; ?>
												<td>&#8358; <?php echo $Gtotal;?></td>
											</tr>

	
<form name="staffloan" method="post">
											<tr>
												<input type="hidden" name="stid" value="<?php echo $staffid ?>" required="true">
												<th>Paye Amount:</th>
												<td><input type="number" name="paye" class="form-control" placeholder="Paye Amount" value="<?php echo $row['Paye'];?>"></td>
											</tr>

											<tr>
												<th>Loan Amount:</th>
												<td><input type="number" name="loan" class="form-control" placeholder="Enter Amount" value="<?php echo $row['Loan'];?>"></td>
											</tr>

												<tr>
													<td>&nbsp;</td>
													<td>	
														<button type="submit" class="btn btn-primary pull-left" name="update">
		Update <i class="fa fa-check-circle"></i>
								</button>

													</td>
												</tr>

</form>												
																					
											<?php 
												$cnt=$cnt+1;
											} } else { ?>
											<tr>
    							<td class="center" colspan="4"> No Staff record found Check and Try Again!</td>

  											</tr>
											<?php } ?>
										</tbody>
									</table>
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
