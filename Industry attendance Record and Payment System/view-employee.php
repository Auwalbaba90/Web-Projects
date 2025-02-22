<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{
$did=intval($_GET['id']);// get Employee id
if(isset($_GET['del']))
	{
		$employeeid=$_GET['id'];
		    mysqli_query($con,"delete from employee where id ='$employeeid'");
            $_SESSION['msg']="Employee deleted !!";
            echo "<script>window.location.href ='manage-employees.php'</script>";
	}
if(isset($_POST['submit']))
{
$employeestatus=$_POST['unsuspend'];
$employeeid=$_POST['employeeid'];
      $sql=mysqli_query($con,"Update employee set Employee_status='$employeestatus' where Employee_id='$employeeid'");
if($sql) {
    echo "<script>alert('Employee Status Changed Successfully');</script>";
    echo "<script>window.location.href ='view-employee.php?id=$did'</script>";
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
      echo "<script>window.location.href ='view-employee.php?id=$did'</script>";
    }

  
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>View | Employee</title>
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
<h1 class="mainTitle">View | Employee</h1>
</div>
<ol class="breadcrumb">
<li>
<span>View</span>
</li>
<li class="active">
<span>Employee</span>
</li>
</ol>
</div>
</section>
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<h2 class="over-title margin-bottom-15">Employee <span class="text-bold">Record</span></h2>
<?php
                               $vid=$_GET['id'];
                               $ret=mysqli_query($con,"select * from employee where id='$vid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
                               ?>
<table border="1" class="table table-bordered">
 <tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
 Employee Details</td></tr>
 	<?php  $employeeid = $row['Employee_id'];?>
 	<?php  $Employee_status = $row['Employee_status'];?>
    <tr>
    <th scope>Employee ID</th>
    <td><?php  echo $row['Employee_id'];?></td>
    <th scope>Full Name</th>
    <td><?php  echo $row['First_name'];?> <?php  echo $row['Surname'];?> <?php  echo $row['Other_name'];?></td>
  </tr>
  <tr>
    <th scope>Mobile Number</th>
    <td><?php  echo $row['Phone_number'];?></td>
    <th>Address</th>
    <td><?php  echo $row['Address'];?></td>
  </tr>
    <tr>
    <th>Gender</th>
    <td><?php  echo $row['Gender'];?></td>
    <th>Department</th>
    <td><?php  echo $row['Department'];?></td>
  </tr>
  <tr>
    
    <th>Group</th>
    <td><?php  echo $row['Employee_group'];?></td>
     <th>Employee Reg Date</th>
    <td><?php  echo $row['Reg_date'];?></td>
  </tr>
 
<?php }?>
</table>
<?php  

$ret=mysqli_query($con,"SELECT Account_no, Bank_name, Bank_branch from employee where id='$vid'");
	
 ?>
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
  <tr align="center">
   <th colspan="4" >Bank Details</th> 
  </tr>
  <tr>
<th>Account No</th>
<th>Bank Name</th>
<th>Bank Branch</th>
</tr>
<?php 
$num=mysqli_num_rows($sql);
if($num == 0){ 
while ($row=mysqli_fetch_array($ret)) { 
  ?>
<tr>
 <td><?php  echo $row['Account_no'];?></td>
 <td><?php  echo $row['Bank_name'];?></td> 
  <td><?php  echo $row['Bank_branch'];?></td> 
</tr>
<?php $cnt=$cnt+1;} } else {?>
	<tr>
    	<td class="center" colspan="4"> No Department record found !!</td>

  	</tr>
<?php } ?>
<form role="form" name="unsuspendemply" method="post">
	<input type="hidden" name="employeeid" id="employeeid" value="<?php echo $employeeid; ?>">
	<?php 
	if ($Employee_status == 'Suspend') {
		echo '	
		<input type="hidden" name="unsuspend" id="unsuspend" value="Unsuspend">
		<td class="center" colspan="4"> <button  type="submit" name="submit" id="submit" class="btn btn-primary">
		Suspended <i class="fa fa-lock"></i>
		</button>';
	}else{
		echo '<input type="hidden" name="unsuspend" id="unsuspend" value="Suspend">
		<td class="center" colspan="4"> <button  type="submit" name="submit" id="submit" class="btn btn-primary">
		Active <i class="fa fa-unlock"></i>
		</button>';
	}
?>
</form>

<a href="view-employee.php?id=<?php echo $did;?>&del=delete" onClick="return confirm('Are you sure you want to delete This Employee?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><button id="delete" class="btn btn-primary">
Delete <i class="fa fa-trash"></i>
</button></a></td>
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
