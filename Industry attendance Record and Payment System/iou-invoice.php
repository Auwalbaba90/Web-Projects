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
    <title>I.O.U | Invoice</title>
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
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
  </head>
  <body onload="window.print();">   
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<?php
  $dept=$_POST['depts'];
  $statuss=$_POST['status'];
  $month=$_POST['month'];

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
        <center><div class="col-sm-12">
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
            <center><strong style="font-size: 18px; font-family: Arial Black"><u>I.O.U Invoice</u></strong></center>
            <thead>
              <tr></tr>
            <tr>
              <th>Staff ID</th>
              <th>Name</th>
              <th>Departments</th>
              <th>Month</th>
              <th>Amount</th>
              <th>IOU Status</th>
              <th>Request Date</th>
            </tr>
            </thead>
            <?php

$sql=mysqli_query($con,"SELECT Staff_id, full_name, Department, Month, Amount, Request_date, iou_status FROM ioupay WHERE Department IN ($dept) && Month='$month' && iou_status IN ($statuss) order by Department ASC");
$num=mysqli_num_rows($sql);
    if($num>0){
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
            <tbody>
            <tr>
              <td><?php echo $row['Staff_id'];?></td>
              <td style="text-transform: capitalize;"><?php echo $row['full_name'];?></td>
              <td style="text-transform: lowercase;"><?php echo $row['Department'];?></td>
              <td><?php echo $row['Month'];?></td>
              <td>&#8358; <?php echo $row['Amount'];?></td>
              <td><?php echo $row['iou_status'];?></td>
              <td><?php echo $row['Request_date'];?></td>
            </tr>
            <?php 
                        $cnt=$cnt+1;
                      } } else { ?>
                      <tr>
                  <td class="center" colspan="7"> No I.O.U record found!</td>

                        </tr>
                      <?php } ?>
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
                <th style="width:50%">Month:</th>
                <td><?php echo $month; ?></td>
              </tr>
              <tr>

      <?php 

  $sql=("SELECT Staff_id, COUNT(*) AS totalstaff FROM ioupay WHERE Department IN ($dept) && Month='$month' && iou_status IN ($statuss) GROUP BY Staff_id");

              $result=mysqli_query($con, $sql);
                
              $totalstaff=mysqli_num_rows($result);

    ?>
                <th>Total Staff:</th>
                <td><?php echo $totalstaff; ?></td>
              </tr>
              <tr>
    <?php 

  $sql=("SELECT SUM(Amount) AS Total_amount FROM ioupay where Department IN ($dept) && Month='$month' && iou_status IN ($statuss)");
              $Amount=mysqli_query($con, $sql);
            while($row=mysqli_fetch_array($Amount)){
              $staffamount=$row['Total_amount'];
            }

    ?>
                <th>Total Amount:</th>
                <td>&#8358; <?php echo $staffamount; ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->  
</div>
</div>
</div>
</div>
      
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
    <!-- end: JavaScript Event Handlers for this page -->
    <!-- end: CLIP-TWO JAVASCRIPTS -->
  </body>
</html>
<?php } ?>
