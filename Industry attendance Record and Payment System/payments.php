	<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{

  	date_default_timezone_set('Africa/Lagos');// change according timezone
$currentDate = date( 'Y-m-d', time () );

  	$emplyid=$_POST['employeesid'];
  		$fdate=$_POST['fromdate'];
  		$tdate=$_POST['todate'];
  	if(isset($_POST['paynow']))
{
$emplyeid=$_POST['emplyeid'];
$frdate=$_POST['frdate'];
$trdate=$_POST['trdate'];
$sql=mysqli_query($con,"SELECT Employee_id FROM  attendance where Employee_id='$emplyeid' && Payment_status='Unpaid' && date(At_Date) between '$frdate' and '$trdate'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
$paid=$_POST['paymentstatus'];
$payment=$_POST['Paymentmethod'];
$paydate=$_POST['paymentdate'];
 $con=mysqli_query($con,"Update attendance set Payment_status='$paid', Payment_method='$payment', Payment_date='$paydate' where Employee_id='$emplyeid' && Payment_status='Unpaid' && date(At_Date) between '$frdate' and '$trdate'");
		echo "<script>alert('Employee Payment Successfully');</script>";
		echo "<script>window.location.href ='payments-between-dates.php'</script>";
}
else
{
		echo "<script>alert('No any Outstanding Payment record found Between Date Selected !!');</script>";
		echo "<script>window.location.href ='payments-between-dates.php'</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Payment | Employee</title>
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

									<h1 class="mainTitle">Payment  | Employee</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Payment </span>
									</li>
									<li class="active">
										<span>Employee</span>
										
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">

									<div class="row">
								<div class="col-md-12">
	<?php 

	$sql=("SELECT SUM(Salary) AS Total_amount FROM attendance where Employee_id='$emplyid' && Payment_status='Unpaid' && date(At_Date) between '$fdate' and '$tdate'");
							$Amount=mysqli_query($con, $sql);
						while($row=mysqli_fetch_array($Amount)){
							$employeeamount=$row['Total_amount'];
						}

    ?>
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">S/No:</th>
												<th>Full Name:</th>
												<th>Department:</th>
												<th>Shift:</th>
												<th>Working Status:</th>
												<th>Date:</th>
												<th>Time In:</th>
												<th>Time Out:</th>
												<th>Time Status:</th>
												<th>Salary:</th>
											</tr>
										</thead>
										<tbody>
<?php

$sql=mysqli_query($con,"select * from attendance where Employee_id='$emplyid' && Payment_status='Unpaid' && date(At_Date) between '$fdate' and '$tdate' ORDER BY At_Date");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td><?php echo $row['Full_name'];?></td>
												<td><?php echo $row['Department'];?></td>
												<td><?php echo $row['Shifts'];?></td>
												<td><?php echo $row['Working_status'];?></td>
												<td><?php echo $row['At_Date'];?></td>
												<td><?php echo $row['Time_in'];?></td>
												<td><?php echo $row['Time_out'];?></td>
												<td><?php echo $row['Time_status'];?></td>
												<td><?php echo $row['Salary'];?></td>
											</tr>
											
											<?php 
										$cnt=$cnt+1;
											} ?>
										</tbody>
									</table>
<?php
            $ret=mysqli_query($con,"select * from employee where Employee_id='$emplyid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
                               ?>
									<table border="1" class="table table-bordered">
 										<tr align="center">
											<td colspan="4" style="font-size:20px;color:; font-weight: bold;">Employee Invoice</td></tr>

    									<tr>
    										<th scope>Invoice Details B/W:</th>
    										<td><strong>From</strong> <i><?php echo $fdate?></i> <strong>To</strong> <i><?php echo $tdate?></i></td>
    										<th scope>Employee ID No:</th>
    										<td><?php echo $row['Employee_id'];?></td>
  										</tr>
  										<tr>
  			<?php
						$sql=("select * from attendance where Employee_id='$emplyid' && Payment_status='Unpaid' && date(At_Date) between '$fdate' and '$tdate'");

							$result=mysqli_query($con, $sql);
								
							$employeeatt=mysqli_num_rows($result);

					?>
    										<th scope>Employee Full Name:</th>
    										<td><?php echo $row['First_name'];?> <?php echo $row['Surname'];?> <?php echo $row['Other_name'];?></td>
    										<th scope>Total Attendance:</th>
    										<td><?php echo $employeeatt;?></td>
  										</tr>
    									<tr>
    										<th scope>Employee Group:</th>
    										<td><?php echo $row['Employee_group'];?></td>
    										<th scope>Total Amount:</th>
    									<td>&#8358; <?php echo $employeeamount;?></td>
  										</tr>
									</table>
					<table border="1" class="table table-bordered"> 
						<tr align="center">
							<td colspan="8" style="font-size:20px;color:; font-weight: bold;">Bank Details</td></tr>
  						<tr>
							<th scope>Account No:</th>
							<td><?php echo $row['Account_no'];?></td>
							<th scope>Bank Name:</th>
							<td><?php echo $row['Bank_name'];?></td>
							<th scope>Account Name:</th>
							<td><?php echo $row['Surname'];?> <?php echo $row['First_name'];?> <?php echo $row['Other_name'];?></td>
							<th scope>Bank Branch:</th>
							<td><?php echo $row['Bank_branch'];?></td>
						</tr>
					</table>
					<?php }?>
								<div class="col-lg-4 col-md-12">
											<div class="panel panel-white">
												<div class="panel-body">

		<?php 
			
		?>	
		
													<form role="form" name="employeepayment" method="post" >
														<input type="hidden" name="emplyeid" id="emplyeid" value="<?php echo $emplyid?>" required="true">

														<input type="hidden" name="frdate" id="frdate" value="<?php echo $fdate?>" required="true">

														<input type="hidden" name="trdate" id="trdate" value="<?php echo $tdate?>" required="true">

														<input type="hidden" name="paymentstatus" id="paymentstatus" value="Paid" required="true">

														<div class="form-group">
															<label for="Paymentmethod">
																Payment Method:
															</label>
															<select name="Paymentmethod" id="Paymentmethod" class="form-control" required="true">
																<option value="">Select</option>
																<option value="Cash">Cash</option>
																<option value="Bank Account">Bank Account</option>
															</select>
														</div>
														<div class="form-group">
															<label for="Paymentdate">
																Payment Date:
															</label>
														<input type="date" name="paymentdate" id="paymentdate" class="form-control" required="true" value="<?php echo $currentDate;?>">
														</div>
														<center><button type="submit" name="paynow" id="paynow" class="btn btn-primary">
															Pay Now <i class="fa fa-check-circle"></i>
														</button></center>
													</form>
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
