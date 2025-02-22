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
	$shiftss=htmlentities($row['Shifts']);
	$Working_statu=htmlentities($row['Working_status']);
	$tin=htmlentities($row['Time_in']);
	$tout=htmlentities($row['Time_out']);
	$dates=htmlentities($row['Date_set']);
	$months=htmlentities($row['Month']);
	}

  	if(isset($_POST['submit']))
{
$staffid=$_POST['idnumber'];
$fname=$_POST['fname'];
$dept=$_POST['dept'];
$shift=$_POST['shift'];
$month=$_POST['month'];
$date=$_POST['date'];
$timein=$_POST['timein'];
$timeout=$_POST['timeout'];
$workstatus=$_POST['workstatus'];
$tstatus=$_POST['tstatus'];
$pstatus=$_POST['pstatus'];
$ret=mysqli_query($con,"SELECT * FROM staff WHERE staff_id='$staffid' and Status='Suspend'");
$num=mysqli_fetch_array($ret);
if($num == 0){
		$ret=mysqli_query($con,"SELECT * FROM sattendance WHERE Staff_id='$staffid' and Department='$dept' and Shifts='$shift' and Date='$date'");
$num=mysqli_fetch_array($ret);
if($num == 0)
{
	$sql=mysqli_query($con,"insert into sattendance(Staff_id, Full_name, Department, Shifts, Month, Date, Time_in, Time_out, Work_status, Time_status, Payment_status) values('$staffid','$fname','$dept','$shift','$month','$date','$timein','$timeout','$workstatus','$tstatus','$pstatus')");
if($sql){
	echo "<script>alert('Attendance Recorded Successfully');</script>";
	echo "<script>window.location.href ='staff-attendance.php'</script>";
}	
	}else{
	echo "<script>alert('Attendance Already Recorded of the Day');</script>";
	echo "<script>window.location.href ='staff-attendance.php'</script>";
}
}else{
	echo "<script>alert('Staff Has Been Inactive');</script>";
	echo "<script>window.location.href ='staff-attendance.php'</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Staff Attendance</title>
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
<h1 class="mainTitle">Staff Attendance</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Admin</span>
</li>
<li class="active">
<span>Staff Attendance</span>
</li>
</ol>
</div>
</section>
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
	<form role="form" method="post" name="search">

<div class="form-group">
<label for="search">
Staff ID.
</label>
<input type="number" name="staffid" id="staffid" class="form-control" value="" required='true' placeholder="Enter Staff ID">
</div>

<center><button type="submit" name="search" id="search" class="btn btn-primary">
Search <i class="fa fa-search-plus"></i>
</button></center>
</form><br>
<?php
if(isset($_POST['search']))
{ 

$staffdata=$_POST['staffid'];
  ?>
<table class="table" id="sample-table-1">
	<form role="form" method="post" name="attendance">
<thead>
	<?php

$sql=mysqli_query($con,"select * from staff where staff_id='$staffdata'");
$num=mysqli_num_rows($sql);
if($num>0){
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
<tr>
<th><label for="attendance">Staff ID:</label></th>
<th><label for="attendance">Full Name:</label></th>
<th><label for="attendance">Department:</label></th>
<th><label for="attendance">Shifts:</label></th>
</tr>
</thead>
<tbody>

<tr>
<td>
	<?php echo $row['staff_id'];?>
	<input type="hidden" name="idnumber" id="idnumber" class="form-control" value="<?php echo $row['staff_id'];?>" required='true' placeholder="Employee No"></td>
<td>
	<?php echo $row['First_name'];?> <?php echo $row['Surname'];?> <?php echo $row['Other_name'];?>
	<input type="hidden" name="fname" id="fname" class="form-control" value="<?php echo $row['First_name'];?> <?php echo $row['Surname'];?> <?php echo $row['Other_name'];?>" required='true' placeholder="Full Name"></td>
<td>
	<?php $deptst=htmlentities($row['Department']);?><?php echo $deptst; ?>
	<input type="hidden" name="dept" id="dept" class="form-control" value="<?php echo $row['Department'];?>" required='true' placeholder="Department"></td>
	
<td><select name="shift" class="form-control" required="true">
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
</select></td>
</tr>

<thead>
<tr>
<th><label for="attendance">Month:</label></th>
<th><label for="attendance">Date:</label></th>
<th><label for="attendance">Time In:</label></th>
<th><label for="attendance">Time Out:</label></th>
</tr>
</thead>

<tr>
<td>

<?php $ret=mysqli_query($con,"select * from department");
while($row=mysqli_fetch_array($ret))
{
	}
?>

	<input type="Month" name="month" id="month" class="form-control" value="<?php echo $months;?>" required='true'>
</td>
<td><input type="Date" name="date" id="date" class="form-control" value="<?php echo $dates;?>" required='true'></td>
<td><input type="Time" name="timein" id="timein" class="form-control" value="<?php echo $tin;?>" required='true'></td>
<td><input type="Time" name="timeout" id="timeout" class="form-control" value="<?php echo $tout;?>" required='true'></td>
</tr>
<thead>
<tr>
<th colspan="2"><label for="attendance">Work Status:</label></th>
<th colspan="2"><label for="attendance">Time Status:</label></th>
</tr>
</thead>
<tr>
<td colspan="2" >
	<select name="workstatus" class="form-control" required="true">
	<option value="<?php echo $Working_statu;?>"><?php echo $Working_statu;?></option>
	<?php if ($Working_statu=='Undertime') { ?>
		<option value="Overtime">Overtime</option>
	<?php }else { ?>
		<option value="Undertime">Undertime</option>
		<?php } ?>
</select>
	</td>

<td colspan="2" >
	<select name="tstatus" id="tstatus" class="form-control" required="true">
	<option value="">Select</option>
	<option value="Full Time">Full Time</option>
	<option value="Half Time">Half Time</option>
</select>
<input type="hidden" name="pstatus" id="pstatus" class="form-control" value="Unpaid" required='true' placeholder="Payment Status">
</td>
</tr>
<tr>
	<td class="center" colspan="4"> <button type="submit" name="submit" id="submit" class="btn btn-primary">
Submit <i class="fa fa-arrow-circle-right"></i>
</button></td>

 </tr>
<?php 
$cnt=$cnt+1;
} } else { ?>
  <tr>
    <td class="center" colspan="4"> No record found Check and Try Again!</td>

  </tr>
   
<?php } }?></tbody>
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
