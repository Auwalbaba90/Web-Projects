<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Paid | Employee</title>
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
		<link rel="stylesheet" href="assets/css/AdminLTE.min.css">
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
<h1 class="mainTitle">Paid Employee Record</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Paid</span>
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
<?php
  $dept=$_POST['depts'];
  $fdate=$_POST['fromdate'];
  $tdate=$_POST['todate'];

date_default_timezone_set('Africa/Lagos');// change according timezone
              $currentDate = date( 'd-m-Y', time () );
?>
<!--<h4 align="center" style="color:#008000">Record from <?php echo $fdate?> to <?php echo $tdate?></h4>-->
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Ficus Tree, Ltd.
            <small class="pull-right">Date: <?php echo $currentDate; ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info table table-hover" id="sample-table-1">
        <center><div class="col-sm-12 invoice-col">
          <address>
            <h1 style="font-family: Arial Black;">FICUS TREE LIMITED.</h1>
            <strong style="color: #008000; font-size: 20px;">(RICE MILL - TOOYUMM PARBOILED RICE)</strong><br>
            Off km 11, Hadejia Road, After Viva Poly Bags Near Railway Track Gunduwawa Area, (Doka),<br>
            P.O. Box-12717 Kano - Nigeria.<br>
            Email: ficustreenig@gmail.com
          </address>
        </div></center>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class=" table table-bordered table-hover">
          	<center><strong style="font-size: 18px; font-family: Arial Black"><u>Payment Invoice</u></strong></center>
            <thead>
              <tr></tr>
            <tr>
              <th>Employee ID</th>
              <th>Name</th>
              <th>Departments</th>
              <th>Payment Date</th>
              <th>Attendance</th>
              <th>Payment Status</th>
              <th>Payment Method</th>
              <th>Amount</th>
            </tr>
            </thead>
            <?php

$sql=mysqli_query($con,"SELECT Employee_id, Full_name, SUM(Salary) AS Total_Slary, Department, Payment_status, Payment_method, COUNT(*) AS employee_attendance FROM attendance WHERE Payment_status='Paid' && Department IN ($dept) && date(At_Date) between '$fdate' and '$tdate' GROUP BY Employee_id order by employee_attendance DESC");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
            <tbody>
            <tr>
              <td><?php echo $row['Employee_id'];?></td>
              <td style="text-transform: capitalize;"><?php echo $row['Full_name'];?></td>
              <td style="text-transform: lowercase;"><?php echo $row['Department'];?></td>
              <td><strong>from</strong> <i><?php echo $fdate?></i> <strong>To</strong> <i><?php echo $tdate?></i></td>
              <td><?php echo $row['employee_attendance'];?></td>
              <td><?php echo $row['Payment_status'];?></td>
              <td><?php echo $row['Payment_method'];?></td>
              <td>&#8358; <?php echo $row['Total_Slary'];?></td>
            </tr>
            <?php 
                    $cnt=$cnt+1;
                      } ?>
            </tbody>
            <!--<<<<<<<<<<<<<<<<<-->
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead"><strong>Payment Methods:</strong></p>
          <p class="lead">Cash and Transfer</p>

          <div class="text-muted well well-sm no-shadow" style="margin-top: 10px;"><br>
              <tr><center>
                <th>Manager Sign:</th>
                <td>______________</td>
              </tr>
              <tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <th>Accounter Sign:</th>
                <td>______________</td>
              </tr><br><br></center>
              <center><td>__________________</td><br>
                <th>Managing Director Sign:</th></center>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Payment Record:</th>
                <td><strong>from</strong> <?php echo $fdate?> <strong>To</strong> <?php echo $tdate?></td>
              </tr>
              <tr>
                <th>Payment Status:</th>
                <td>Paid</td>
              </tr>
              <tr>

      <?php 

  $sql=("SELECT Employee_id, COUNT(*) AS totalemployee FROM attendance WHERE Payment_status='Paid' && Department IN ($dept) && date(At_Date) between '$fdate' and '$tdate' GROUP BY Employee_id");

              $result=mysqli_query($con, $sql);
                
              $totalemployee=mysqli_num_rows($result);

    ?>
                <th>Total Employee:</th>
                <td><?php echo $totalemployee; ?></td>
              </tr>
              <tr>
    <?php 

  $sql=("SELECT SUM(Salary) AS Total_amount FROM attendance where Payment_status='Paid' && Department IN ($dept) && date(At_Date) between '$fdate' and '$tdate'");
              $Amount=mysqli_query($con, $sql);
            while($row=mysqli_fetch_array($Amount)){
              $employeeamount=$row['Total_amount'];
            }

    ?>
                <th>Total Amount:</th>
                <td>&#8358; <?php echo $employeeamount; ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <form method="POST" name="Printinvoice" action="invoice-print.php" target="Black">
            <input type="hidden" name="depts" id="depts" value="<?php echo $dept?>">
            <input type="hidden" name="fromdate" id="fromdate" value="<?php echo $fdate?>">
            <input type="hidden" name="todate" id="todate" value="<?php echo $tdate?>">
            <button type="submit" class="btn btn-Defult" style="margin-right: 5px;">
            <i class="fa fa-print"></i> Print
          </button>
          </form>
        </div>
      </div>
    </section>
    <!-- /.content -->	
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
