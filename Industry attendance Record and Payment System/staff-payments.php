	<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{
  	$ret=mysqli_query($con,"select * from setting");
while($row=mysqli_fetch_array($ret))
{
	$dmonths=htmlentities($row['Month_days']);
	}

  	date_default_timezone_set('Africa/Lagos');// change according timezone
$currentDate = date( 'Y-m-d', time () );

  	$month=$_POST['month'];
  		$staffid=$_POST['staffid'];
  	if(isset($_POST['paynow']))
{
$staffeid=$_POST['staffeid'];
$fname=$_POST['fname'];
$dept=$_POST['dept'];
$pmonth=$_POST['pmonth'];
$Besics=$_POST['Besics'];
$house=$_POST['house'];
$trans=$_POST['trans'];
$mls=$_POST['mls'];
$oth=$_POST['oth'];
$ovtime=$_POST['ovtime'];
$gtotal=$_POST['gtotal'];
$iou=$_POST['iou'];
$dabs=$_POST['dabs'];
$abstee=$_POST['abstee'];
$sadvc=$_POST['sadvc'];
$loans=$_POST['loans'];
$payee=$_POST['payee'];
$tdeduct=$_POST['tdeduct'];
$ntotal=$_POST['ntotal'];
$paid=$_POST['pstatus'];
$payment=$_POST['Paymentmethod'];
$paydate=$_POST['paymentdate'];
 $sql=mysqli_query($con,"INSERT INTO payementstaff(Staff_id, Full_name, Department, Payment_month, Basic, Housing, Transport, Meal, OT_hours, Overtime, Gross_total, IOU, Days_absent, Absentee_ism, Salary_advance, Loan, Paye, Total_deductions, Net_total, Payment_status, Payment_method, Payment_date) VALUES('$staffeid','$fname','$dept','$pmonth','$Besics','$house','$trans','$mls','$oth','$ovtime','$gtotal','$iou','$dabs','$abstee','$sadvc','$loans','$payee','$tdeduct','$ntotal','$paid','$payment','$paydate')");
 if($sql){
 	$sql2=mysqli_query($con,"Update sattendance set Payment_status='$paid' where Staff_id='$staffeid' && Month='$pmonth' && Payment_status='Unpaid'");
 if($sql2){
 		echo "<script>alert('Staff Payment Successfully');</script>";
		echo "<script>window.location.href ='staff-payments-between-dates.php'</script>";
 } }else{
 		echo "<script>alert('Payment Error');</script>";
		echo "<script>window.location.href ='staff-payments-between-dates.php'</script>";
 }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Payment | Staff</title>
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

									<h1 class="mainTitle">Payment  | Staff</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Payment </span>
									</li>
									<li class="active">
										<span>Staff</span>
										
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

    <?php

$sql=mysqli_query($con,"select * from sattendance where Staff_id='$staffid' && Payment_status='Unpaid' && Month='$month'");
$num=mysqli_num_rows($sql);
if($num>0){
$cnts=1;
while($row=mysqli_fetch_array($sql))
{
?>
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">S/No:</th>
												<th>Full Name:</th>
												<th>Department:</th>
												<th>Shift:</th>
												<th>Working Status:</th>
												<th>Month:</th>
												<th>Date:</th>
												<th>Time In:</th>
												<th>Time Out:</th>
												<th>Time Status:</th>
											</tr>
										</thead>
										<tbody>

			<?php 
										$rets=mysqli_query($con,"select * from ioupay where Staff_id='$staffid' and Month='$month' and iou_status='Paid'");
	$num=mysqli_num_rows($rets);
		if($num>0){
		$cnt=1;
		while($row=mysqli_fetch_array($rets))
		{
			$Amounts=htmlentities($row['Amount']);
			$cnt=$cnt+1;
		}	}else{
			 $Amounts = 0;
		}
									 ?>
<?php

$sql=mysqli_query($con,"select * from sattendance where Staff_id='$staffid' && Payment_status='Unpaid' && Month='$month'");
$num=mysqli_num_rows($sql);
if($num>0){
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td><?php echo $row['Full_name'];?></td>
												<td><?php echo $row['Department'];?></td>
												<td><?php echo $row['Shifts'];?></td>
												<td><?php echo $row['Work_status'];?></td>
												<td><?php echo $row['Month'];?></td>
												<td><?php echo $row['Date'];?></td>
												<td><?php echo $row['Time_in'];?></td>
												<td><?php echo $row['Time_out'];?></td>
												<td><?php echo $row['Time_status'];?></td>
											</tr>
											
											<?php 
										$cnt=$cnt+1;
											} }else{
												?>
											<tr>
    							<td class="center" colspan="10"> No any Outstanding Payment record found!</td>

  											</tr>
											<?php } ?>
										</tbody>
									</table>
<?php
            $ret=mysqli_query($con,"select * from staff where staff_id='$staffid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
                               ?>
									<table border="1" class="table table-bordered">
 										<tr align="center">
											<td colspan="4" style="font-size:20px;color:; font-weight: bold;">Staff Details</td></tr>

    									<tr>
    										<th scope>Full Name:</th>
    										<?php $firstn=htmlentities($row['First_name']); $sn=htmlentities($row['Surname']); $on=htmlentities($row['Other_name']); ?>
    										<td><?php echo $firstn;?> <?php echo $sn;?> <?php echo $on;?></td>
    										<th scope>Staff ID:</th>
    										<td><?php echo $row['staff_id'];?></td>
  										</tr>
  										<tr>
  			<?php
						$sql=("select * from sattendance where Staff_id='$staffid' && Payment_status='Unpaid' && Month='$month'");

							$result=mysqli_query($con, $sql);
								
							$dpresent=mysqli_num_rows($result);

					?>
    										<th scope> Department:</th>
    										<?php $Dpartment=htmlentities($row['Department']); ?>
    										<td><?php echo $Dpartment;?></td>
    										<th scope>Gender:</th>
    										<td><?php echo $row['Gender'];?></td>
  										</tr>
    									<tr>
    										<th scope>Staff Group:</th>
    										<td><?php echo $row['Groups'];?></td>
    										<th scope>Phone Number:</th>
    									<td><?php echo $row['Phone_number'];?></td>
  										</tr>
									</table>


																		<table border="1" class="table table-bordered">
 										<tr align="center">
											<td colspan="8" style="font-size:20px;color:; font-weight: bold;">Salary Details</td></tr>
    									<tr>
    										<th scope>Besic Salary:</th>
    										<?php $Bsalary=htmlentities($row['Basic_salary']); ?>
    										<td>&#8358; <?php echo $Bsalary;?></td>
    										<th scope>Housing:</th>
    										<?php $Housing=htmlentities($row['Housing']); ?>
    										<td>&#8358; <?php echo $Housing;?></td>
    										<th scope>Transport:</th>
    										<?php $Transport=htmlentities($row['Transport']); ?>
    										<td>&#8358; <?php echo $Transport;?></td>
    										<th scope>Meal:</th>
    										<?php $Meal=htmlentities($row['Meal']); ?>
    										<td>&#8358; <?php echo $Meal;?></td>
  										</tr>
  										<tr>
  			<?php
						$sql=("select * from sattendance where Staff_id='$staffid' && Payment_status='Unpaid' && Work_status='Overtime' && Month='$month'");

							$result=mysqli_query($con, $sql);
								
							$Overtime=mysqli_num_rows($result);

					?>
					<?php 
					$grosstotal= $Bsalary + $Housing + $Transport + $Meal;
					$dayabs= $dmonths - $dpresent;
					$Absenteeism= $grosstotal / $dmonths * $dpresent;
					$sadvance= $grosstotal - 'Sum';
					$loan= $grosstotal - $Loan;
					$paye= $grosstotal - $Paye;
					$tdeduction= $Amounts + $Absenteeism + $Loan + $sadvances;
					$nettotal= $grosstotal - $tdeduction;
					
				?>
    										<th scope>OT Hours:</th>
    										<td><?php echo $employeeatt;?></td>
    										<th scope>Overtime:</th>
    										<td><?php echo $Overtime;?></td>
    										<th scope>Days Present:</th>
    										<td><?php echo $dpresent;?></td>
    										<th scope>Days Absent:</th>
    										<td><?php echo $dayabs;?></td>
  										</tr>
    									<tr>
    										<th scope>Absentee-ism:</th>
    										<td><?php echo $Absenteeism;?></td>
    										<th scope>Gross Total:</th>
    										<td>&#8358; <?php echo $grosstotal;?></td>
    										<th scope>IOU:</th>
    										<td>&#8358; <?php echo $Amounts;?></td>
    										<th scope>Salary Advance:</th>
    										<td>&#8358; <?php echo $sadvance;?></td>
  										</tr>
  										<tr>
    										<th scope>Loan:</th>
    										<?php $Loan=htmlentities($row['Loan']); ?>
    										<td>&#8358; <?php echo $Loan;?></td>
    										<th scope>Paye:</th>
    										<?php $Paye=htmlentities($row['Paye']); ?>
    										<td>&#8358; <?php echo $Paye;?></td>
    										<th scope>Total Deductions:</th>
    										<td>&#8358; <?php echo $tdeduction;?></td>
    										<th scope>Net Total:</th>
    										<td>&#8358; <?php echo $nettotal;?></td>
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
		
													<form role="form" name="staffpayment" method="post" >
														<input type="hidden" name="staffeid" id="staffeid" value="<?php echo $staffid?>" required="true" Placeholder='Staff ID'>

														<input type="hidden" name="fname" id="fname" value="<?php echo $firstn?> <?php echo $sn?> <?php echo $on?>" required="true" Placeholder='Full Name'>

														<input type="hidden" name="dept" id="dept" value="<?php echo $Dpartment?>" required="true" Placeholder='Department'>

														<input type="hidden" name="pmonth" id="pmonth" value="<?php echo $month ?>" required="true" Placeholder='Payment Month'>

														<input type="hidden" name="Besics" id="Besics" value="<?php echo $Bsalary?>" required="true" Placeholder='Basic Salary'>

														<input type="hidden" name="house" id="house" value="<?php echo $Housing?>" required="true" Placeholder='Housing'>

														<input type="hidden" name="trans" id="trans" value="<?php echo $Transport?>" required="true" Placeholder='Transport'>

														<input type="hidden" name="mls" id="mls" value="<?php echo $Meal?>" required="true" Placeholder='Meal'>

														<input type="hidden" name="oth" id="oth" value="<?php echo $othours?>" Placeholder='OT Hours'>

														<input type="hidden" name="ovtime" id="ovtime" value="<?php echo $Overtime?>" Placeholder='Overtime'>

														<input type="hidden" name="gtotal" id="gtotal" value="<?php echo $grosstotal?>" required="true" Placeholder='Gross Total'>

														<input type="hidden" name="iou" id="iou" value="<?php echo $Amounts?>" Placeholder='IOU'>

														<input type="hidden" name="dabs" id="dabs" value="<?php echo $dayabs?>" Placeholder='Days Absent'>

														<input type="hidden" name="abstee" id="abstee" value="<?php echo $Absenteeism?>" Placeholder='Absentee ism'>

														<input type="hidden" name="sadvc" id="sadvc" value="<?php echo $sadvance?>" Placeholder='Salary Advance'>

														<input type="hidden" name="loans" id="loans" value="<?php echo $Loan?>" Placeholder='Loan'>

														<input type="hidden" name="payee" id="payee" value="<?php echo $Paye?>" Placeholder='Paye'>

														<input type="hidden" name="tdeduct" id="tdeduct" value="<?php echo $tdeduction?>" required="true" Placeholder='Total Deductions'>

														<input type="hidden" name="ntotal" id="ntotal" value="<?php echo $nettotal?>" required="true" Placeholder='Net Total'>

														<input type="hidden" name="pstatus" id="pstatus" value="Paid" required="true" Placeholder='Payment Status'>

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
								<?php 
										$cnts=$cnts+1;
											} }else{

								$sql=mysqli_query($con,"select * from staff where Staff_id='$staffid'");
									$num=mysqli_fetch_array($sql);
									if($num>0){
										$staffmsg="No Any Outstanding Payment Record Found! on $month";
									}else{
										$staffmsg="Invalid Staff ID Check and Try Again!";
									}
												?>
												<table border="1" class="table table-bordered">
													<body>
														<tr>
    							<td class="center" colspan="10"><?php echo $staffmsg; ?></td>

  											</tr>
													</body>
												</table>
											<?php } ?>
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
