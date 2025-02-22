<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{

date_default_timezone_set('Africa/Lagos');// change according timezone
$currentDate = date( 'Y-m-d', time () );

	$month=$_POST['month'];
  	$staffid=$_POST['staffid'];

  	if(isset($_POST['request'])){
  		$staffno=$_POST['staffno'];
  		$fname=$_POST['fname'];
  		$dept=$_POST['dept'];
  		$months=$_POST['months'];
  		$amount=$_POST['amount'];
  		$requestdate=$_POST['requestdate'];
  		$status=$_POST['status'];
  		$ret=mysqli_query($con,"SELECT * FROM ioupay WHERE Staff_id='$staffno' and Month='$months'");
		$num=mysqli_fetch_array($ret);
	if($num == 0){
			$sql=mysqli_query($con,"insert into ioupay(Staff_id, full_name, Department, Month, Amount, Request_date, iou_status) values('$staffno','$fname','$dept','$months','$amount','$requestdate','$status')");
  			if($sql){
		echo "<script>alert('I.O.U Requested Successfully');</script>";
		echo "<script>window.location.href ='iou-payments.php'</script>";
	}else{
	echo "<script>alert('Something is Wrong');</script>";
	echo "<script>window.location.href ='iou-payments.php'</script>";
	}
}else{
	echo "<script>alert('Already Applied for this Month!');</script>";
	echo "<script>window.location.href ='iou-payments.php'</script>";
	}
  }

  if(isset($_POST['approved']))
{
	$Sid=$_POST['sid'];
	$Smonth=$_POST['smonth'];
	$pay=$_POST['approve'];
	$paydate=$_POST['paymentdate'];

	$sql2=mysqli_query($con,"UPDATE ioupay SET iou_status='$pay', Payment_date='$paydate' WHERE Staff_id='$Sid' && Month='$Smonth'");
		if($sql2){
	echo "<script>alert('I.O.U Payment Successfully');</script>";
	echo "<script>window.location.href ='iou-payments.php'</script>";
	}else{
		echo "<script>alert('Something Wrong');</script>";
		echo "<script>window.location.href ='iou-payments.php'</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>IOU Payment</title>
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
									<h1 class="mainTitle">IOU Payment</h1>
																	</div>

								<ol class="breadcrumb">
									<li>
										<span>Staff</span>
									</li>
									<li class="active">
										<span>IOU</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									<h3 class="over-title margin-bottom-15">I.O.U <span class="text-bold">Payment</span></h3>
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
												<?php $staffids=htmlentities($row['staff_id']); ?>
												<td><?php echo $staffids;?></td>
											</tr>

											<tr>
												<th>Full Name:</th>
												<?php $firstname=htmlentities($row['First_name']); ?>
												<?php $surname=htmlentities($row['Surname']); ?>
												<?php $oname=htmlentities($row['Other_name']); ?>
												<td><?php echo $firstname;?> <?php echo $surname;?> <?php echo $oname;?></td>
											</tr>
											<tr>
												<th>Department:</th>
												<?php $depts=htmlentities($row['Department']); ?>
												<td><?php echo $depts;?></td>
											</tr>

											<tr>
												<th>Month:</th>
												<td><?php echo $month;?></td>
											</tr>
<?php
	$rets=mysqli_query($con,"select * from ioupay where Staff_id='$staffid' and Month='$month'");
	$num=mysqli_num_rows($rets);
		if($num>0){
		$cnt=1;
		while($row=mysqli_fetch_array($rets))
		{
			$status=htmlentities($row['iou_status']);
			$Amounts=htmlentities($row['Amount']);
			$Requestdate=htmlentities($row['Request_date']);
			$Paymentdate=htmlentities($row['Payment_date']);
			$cnt=$cnt+1;
		} }else{
			echo '
				<form name="ioupay" method="post">
											<tr>
												<th>Amount:</th>
												<input type="hidden" name="staffno" class="form-control" required="true" placeholder="Staff ID" value="'.$staffids.'">
												<input type="hidden" name="fname" class="form-control" required="true" placeholder="Full Name" value="'.$firstname.' '.$surname.' '.$oname.'">
												<input type="hidden" name="dept" class="form-control" required="true" placeholder="Department" value="'.$depts.'">
												<input type="hidden" name="months" class="form-control" required="true" value="'.$month.'">
												<input type="hidden" name="status" class="form-control" required="true" placeholder="Status" value="Request">
												<td><input type="number" name="amount" class="form-control" required="true" placeholder="Enter IOU Amount"></td>
											</tr>

											<tr>
												<th>Request Date:</th>
												<td><input type="Date" name="requestdate" class="form-control" required="true" value="'.$currentDate.'"></td>
											</tr>
												<tr>
													<td>&nbsp;</td>
													<td>	
														<button type="submit" class="btn btn-primary pull-left" name="request">
		Request <i class="fa fa-arrow-circle-right"></i>
								</button>

													</td>
												</tr>

</form>
			';
		}
 	
 ?>
	<?php 
		if ($status=='Request') {
			echo "
				<tr>
					<th>Amount:</th>
					<td>&#8358; $Amounts</td>
				</tr>
				<tr>
					<th>Status:</th>
					<td>Requested</td>
				</tr>
				<tr>
					<th>Requested Date:</th>
					<td>$Requestdate</td>
				</tr>
				<form name='ioupays' method='post'>
		<tr>
			<th>Payment Date:</th>
			<input type='hidden' name='sid' value='$staffid' required='true'>
			<input type='hidden' name='smonth' value='$month' required='true'>
			<input type='hidden' name='approve' class='form-control' required='true' value='Paid'>
			<td><input type='Date' name='paymentdate' class='form-control' required='true' value='$currentDate'></td>
			</tr>
		<tr>
			<td>&nbsp;</td>
			<td>	
				<button type='submit' class='btn btn-primary pull-left' name='approved'>
					Approve  <i class='fa fa-check-circle'></i>
				</button>

													</td>
												</tr>
	</form>
			";
		}else if ($status=='Paid') {
			echo "
				<tr>
					<th>Amount:</th>
					<td>&#8358; $Amounts</td>
				</tr>
				<tr>
					<th>Requested Date:</th>
					<td>$Requestdate</td>
				</tr>
				<tr>
					<th>Status:</th>
					<td>$status</td>
				</tr>
				<tr>
					<th>Payment Date:</th>
					<td>$Paymentdate</td>
				</tr>
			";
		}
	?>												
	

											
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
