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
	$fdates=htmlentities($row['From_date']);
	$tdates=htmlentities($row['To_date']);
	$shiftss=htmlentities($row['Shifts']);
	$Working_statu=htmlentities($row['Working_status']);
	$tin=htmlentities($row['Time_in']);
	$tout=htmlentities($row['Time_out']);
	$dates=htmlentities($row['Date_set']);
	$months=htmlentities($row['Month']);
	$dmonths=htmlentities($row['Month_days']);
	}
  		if(isset($_POST['update']))
		  {
		$fdate=$_POST['fdate'];
		$tdate=$_POST['tdate'];
		$shift=$_POST['shift'];
		$wstatus=$_POST['wstatus'];
		$timein=$_POST['timein'];
		$timeout=$_POST['timeout'];
		$dateset=$_POST['dateset'];
		$monthss=$_POST['month'];
		$dmonth=$_POST['dmonth'];
		$query=mysqli_query($con,"update setting set  From_date='$fdate', To_date='$tdate', Shifts='$shift', Working_status='$wstatus', Time_in='$timein', Time_out='$timeout', Date_set='$dateset', Month='$monthss', Month_days='$dmonth' where id='1'");
		if($query){
			echo "<script>alert('System Setting Updated successfully.');</script>";
			echo "<script>window.location.href ='setting.php'</script>";
		}else{
			echo "<script>alert('Something is Wrong Check and Try Again!');</script>";
			echo "<script>window.location.href ='setting.php'</script>";
		  }
		}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>System | Setting</title>
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
<div class="main-content" >
<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle">System | Setting</h1>
</div>
<ol class="breadcrumb">
<li>
<span>System</span>
</li>
<li class="active">
<span>Setting</span>
</li>
</ol>
</div>
</section>
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
	<table class="table" id="sample-table-1">
	<form role="form" method="post" name="setting">
<thead>
<tr>
<th for="setting">From Date:</th>
<th for="setting">To Date:</th>
<th for="setting">Shifts:</th>
<th for="setting" colspan="2">Working Status:</th>
</tr>
</thead>
<tbody>
<tr>
<td><input type="Date" name="fdate" id="fdate" class="form-control" value="<?php echo $fdates;?>"></td>
<td><input type="Date" name="tdate" id="tdate" class="form-control" value="<?php echo $tdates;?>"></td>
<td>
	<select name="shift" id="shift" class="form-control">
		<option value="<?php echo $shiftss;?>"><?php echo $shiftss;?></option>
		<?php $ret=mysqli_query($con,"select * from shift");
while($row=mysqli_fetch_array($ret))
{
	if (htmlentities($row['Name'])==$shiftss) {
		continue;
	}else
?>
	<option value="<?php echo htmlentities($row['Name']);?>">
														<?php echo htmlentities($row['Name']);?>
																</option>
																<?php } ?>
	</select>
</td>
<td colspan="2">
	<select name="wstatus" id="wstatus" class="form-control">
		<option value="<?php echo $Working_statu;?>"><?php echo $Working_statu;?></option>
		<?php if ($Working_statu=='Undertime') {?>
		<option value="Overtime">Overtime</option>
	<?php }else {?>
	 	<option value="Undertime">Undertime</option>
	 <?php }?>
	</select>
</td>
</tr>

<thead>
<tr>
<th for="setting">Time In:</th>
<th for="setting">Time Out:</th>
<th for="setting">Date:</th>
<th for="setting">Month:</th>
<th for="setting">Month Days:</th>
</tr>
</thead>

<tr>
<td><input type="Time" name="timein" id="timein" class="form-control" value="<?php echo $tin;?>"></td>
<td><input type="Time" name="timeout" id="timeout" class="form-control" value="<?php echo $tout;?>"></td>
<td><input type="Date" name="dateset" id="dateset" class="form-control" value="<?php echo $dates;?>"></td>
<td><input type="Month" name="month" id="month" class="form-control" value="<?php echo $months;?>"></td>
<td>
		<select name="dmonth" id="dmonth" class="form-control" required="True">
			<option value="<?php echo $dmonths; ?>"><?php echo $dmonths; ?></option>
			<?php if ($dmonths=='28') { ?>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<?php }else if ($dmonths=='29') {?>
			<option value="28">28</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<?php }else if ($dmonths=='30') {?>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="31">31</option>
			<?php }else if ($dmonths=='31') {?>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
		<?php }?>
		</select>
	</td>
</tr>
<tr>
	<td class="center" colspan="5"> <button type="submit" name="update" id="update" class="btn btn-primary">
Update <i class="fa fa-check-circle"></i>
</button></td>
 </tr>
</tbody>
</form>
</table>
</div>
</div>
</div>
</div>
</div>
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
