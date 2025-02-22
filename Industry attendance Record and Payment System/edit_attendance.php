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
	}

  	$did=intval($_GET['id']);// get Employee id
  	if(isset($_POST['update']))
{
$emplyid=$_POST['idnumber'];
$fname=$_POST['fname'];
$dept=$_POST['dept'];
$shift=$_POST['shift'];
$date=$_POST['date'];
$timein=$_POST['timein'];
$timeout=$_POST['timeout'];
$workstatus=$_POST['workstatus'];
$salary=$_POST['salary'];
$tstatus=$_POST['tstatus'];
$pstatus=$_POST['pstatus'];
$ret=mysqli_query($con,"SELECT * FROM employee WHERE Employee_id='$emplyid' and Employee_status='Suspend'");
$num=mysqli_fetch_array($ret);
if($num == 0){
		$ret=mysqli_query($con,"SELECT * FROM attendance WHERE Employee_id='$emplyid' and Department='$dept' and Shifts='$shift' and At_Date='$date'");
$num=mysqli_fetch_array($ret);
if($num == 0)
{
	$sql=mysqli_query($con,"Update attendance set Shifts='$shift', At_Date='$date', Time_in='$timein', Time_out='$timeout', Working_status='$workstatus', Salary='$salary', Time_status='$tstatus' where id='$did'");
if($sql){
	echo "<script>alert('Attendance Edited Successfully');</script>";
	echo "<script>window.location.href ='edit_attendance.php?id=$did'</script>";
}	
	}else{
	echo "<script>alert('There is One The Same Attendance Record in the System');</script>";
	echo "<script>window.location.href ='edit_attendance.php?id=$did'</script>";
}
}else{
	echo "<script>alert('Employee Has Been Suspended');</script>";
	echo "<script>window.location.href ='edit_attendance.php?id=$did'</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Edit Attendance</title>
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
<h1 class="mainTitle">Edit Attendance</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Admin</span>
</li>
<li class="active">
<span>Edit Attendance</span>
</li>
</ol>
</div>
</section>
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<table class="table" id="sample-table-1">
	<form role="form" method="post" name="attendance">
<thead>
<tr>
<th><label for="attendance">ID No:</label></th>
<th><label for="attendance">Full Name:</label></th>
<th><label for="attendance">Department:</label></th>
<th><label for="attendance">Shifts:</label></th>
</tr>
</thead>
<tbody>
<?php $sql=mysqli_query($con,"select * from attendance where id='$did'");
while($row=mysqli_fetch_array($sql))
{
?>
<tr>
<td>
	<?php echo $row['Employee_id'];?>
	</td>
<td>
	<?php echo $row['Full_name'];?>
</td>
<td>
	<?php $deptst=htmlentities($row['Department']);?><?php echo $deptst; ?>
</td>
<td><select name="shift" class="form-control" required="true">
	<option value="<?php echo $row['Shifts'];?>"><?php echo $row['Shifts'];?></option>

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
<?php } ?>
</tr>
<?php 

	if ($deptst=='SECURITY') {
		if ($Working_statu=='Undertime') {
			echo '
	<script type="text/javascript">
			function populate(s1, s2) {
				var s1 = document.getElementById (s1);
				var s2 = document.getElementById (s2);
				s2.innerHTML = "";
				if (s1.value == "Select") {
					var optionArry = ["|Select"];
				} else if (s1.value == "Full Time") {
					var optionArry = ["1334|1334"];
				} else if (s1.value == "Half Time") {
					var optionArry = ["667|667"];
				}
				for(var option in optionArry) {
					var pair = optionArry[option].split("|");
					var newoption = document.createElement("option");
					newoption.value = pair[0];
					newoption.innerHTML = pair[1];
					s2.options.add(newoption);
				}
			}
	</script>
			';
		}else{
			echo '
	<script type="text/javascript">
			function populate(s1, s2) {
				var s1 = document.getElementById (s1);
				var s2 = document.getElementById (s2);
				s2.innerHTML = "";
				if (s1.value == "Select") {
					var optionArry = ["|Select"];
				} else if (s1.value == "Full Time") {
					var optionArry = ["2668|2668"];
				} else if (s1.value == "Half Time") {
					var optionArry = ["1334|1334"];
				}
				for(var option in optionArry) {
					var pair = optionArry[option].split("|");
					var newoption = document.createElement("option");
					newoption.value = pair[0];
					newoption.innerHTML = pair[1];
					s2.options.add(newoption);
				}
			}
	</script>
			';
		}
	}else{
		if ($Working_statu=='Undertime') {
			echo '
	<script type="text/javascript">
			function populate(s1, s2) {
				var s1 = document.getElementById (s1);
				var s2 = document.getElementById (s2);
				s2.innerHTML = "";
				if (s1.value == "Select") {
					var optionArry = ["|Select"];
				} else if (s1.value == "Full Time") {
					var optionArry = ["2000|2000"];
				} else if (s1.value == "Half Time") {
					var optionArry = ["1000|1000"];
				}
				for(var option in optionArry) {
					var pair = optionArry[option].split("|");
					var newoption = document.createElement("option");
					newoption.value = pair[0];
					newoption.innerHTML = pair[1];
					s2.options.add(newoption);
				}
			}
	</script>
			';
		}else{
			echo '
	<script type="text/javascript">
			function populate(s1, s2) {
				var s1 = document.getElementById (s1);
				var s2 = document.getElementById (s2);
				s2.innerHTML = "";
				if (s1.value == "Select") {
					var optionArry = ["|Select"];
				} else if (s1.value == "Full Time") {
					var optionArry = ["4000|4000"];
				} else if (s1.value == "Half Time") {
					var optionArry = ["2000|2000"];
				}
				for(var option in optionArry) {
					var pair = optionArry[option].split("|");
					var newoption = document.createElement("option");
					newoption.value = pair[0];
					newoption.innerHTML = pair[1];
					s2.options.add(newoption);
				}
			}
	</script>
			';
		}
	}
	 ?>
<thead>
<tr>
<th><label for="attendance">Date:</label></th>
<th><label for="attendance">Time In:</label></th>
<th><label for="attendance">Time Out:</label></th>
<th><label for="attendance">Work Status:</label></th>
</tr>
</thead>

<tr>
<td>

<?php $ret=mysqli_query($con,"select * from department");
while($row=mysqli_fetch_array($ret))
{
	}
?>
<?php $sql=mysqli_query($con,"select * from attendance where id='$did'");
while($row=mysqli_fetch_array($sql))
{
?>
	<input type="Date" name="date" id="date" class="form-control" value="<?php echo $row['At_Date'];?>" required='true' placeholder="Date">
</td>
<td><input type="Time" name="timein" id="timein" class="form-control" value="<?php echo $row['Time_in'];?>" required='true' placeholder="Time"></td>
<td><input type="Time" name="timeout" id="timeout" class="form-control" value="<?php echo $row['Time_out'];?>" required='true' placeholder="Time"></td>
<td><select name="workstatus" class="form-control" required="true">
	<option value="<?php echo $row['Working_status'];?>"><?php echo $row['Working_status'];?></option>
<?php if ($row['Working_status']==$Working_statu) {
		
	 }else{?>
		<option value="<?php echo $Working_statu;?>"><?php echo $Working_statu;?></option>
		<?php } ?>
</select></td>
</tr>

<thead>
<tr>
<!--<th>Salary:</th>
<th>Payment Status:</th>
<th>Payment Method:</th>-->
<th colspan="2"><label for="attendance">Time Status:</label></th>
<th colspan="2"><label for="attendance">Salary:</label></th>
</tr>
</thead>
<tr>
<td colspan="2" >

	<select name="tstatus" id="tstatus" onchange="populate(this.id,'salary')" class="form-control" required="true">
	<option value="<?php echo $row['Time_status'];?>"><?php echo $row['Time_status'];?></option>
	<option value="Full Time">Full Time</option>
	<option value="Half Time">Half Time</option>
</select></td>

<td colspan="2" >
<select name="salary" id="salary" class="form-control" required="true">
	<option value="<?php echo $row['Salary'];?>"><?php echo $row['Salary'];?></option>
</select></td>
</tr>
<tr>
	<td class="center" colspan="4"> <button type="submit" name="update" id="update" class="btn btn-primary">
Update <i class="fa fa-check-circle"></i>
</button></td>
 </tr>
 <?php } ?>
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
		<script>
			function mathTotal(){
    var arr = document.getElementsByClassName('math-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('math-total').value = tot;
}

		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
<?php } ?>
