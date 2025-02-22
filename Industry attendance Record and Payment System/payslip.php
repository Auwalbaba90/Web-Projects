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
    <title>Payslip</title>
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
  $Ioumonth=$_POST['ioumonth'];
  $Staffid=$_POST['staffid'];

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
            <center><strong style="padding-left: 5px; padding-right: 5px; font-size: 21px; font-family: Arial Black; text-transform: uppercase; background-color: #008000; border-radius: 5px; color: #ffff;">Monthly Payslip</strong></center>
            <table class=" table table-bordered table-hover">
            <?php

$sql=mysqli_query($con,"SELECT Staff_id, Full_name, Department, Payment_month, Basic, Housing, Transport, Meal, OT_hours, Overtime, Gross_total, IOU, Days_absent, Absentee_ism, Salary_advance, Loan, Paye, Total_deductions, Net_total, Payment_status, Payment_method, Payment_date FROM payementstaff WHERE Staff_id='$Staffid' && Payment_month='$Ioumonth'");
$num=mysqli_num_rows($sql);
if($num == 1){
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
            
                    <tr align="center">
                      <td colspan="4" style="font-size:20px;color:; font-weight: bold;">Staff Details</td></tr>

                      <tr>
                        <th scope>Staff ID:</th>
                        <td><?php echo $row['Staff_id'];?></td>
                        <th scope>Name:</th>
                        <td style="text-transform: capitalize;"><?php echo $row['Full_name'];?></td>
                      </tr>
                      <tr>
                        <th scope> Department:</th>
                        <td style="text-transform: capitalize;"><?php echo $row['Department'];?></td>
                        <th scope>Month:</th>
                        <td><?php echo $row['Payment_month'];?></td>
                      </tr>
                  </table>
            <!--<<<<<<<<<<<<<<<<<-->
            <table border="1" class="table table-bordered table-hover">
                    <tr align="center">
                      <td colspan="8" style="font-size:20px;color:; font-weight: bold;">Salary Details</td></tr>
                      <tr>
                        <th scope>Besic Salary:</th>
                        <td>&#8358; <?php echo $row['Basic'];?></td>
                        <th scope>Housing:</th>
                        <td>&#8358; <?php echo $row['Housing'];?></td>
                        <th scope>Transport:</th>
                        <td>&#8358; <?php echo $row['Transport'];?></td>
                      </tr>
                      <tr>
                        <th scope>Meal:</th>
                        <td>&#8358; <?php echo $row['Meal'];?></td>
                        <th scope>Gross Total:</th>
                        <td>&#8358; <?php echo $row['Gross_total'];?></td>
                        <th scope>IOU:</th>
                        <td>&#8358; <?php echo $row['IOU'];?></td>
                      </tr>
                      <tr>
                        <th scope>Over Time:</th>
                        <td><?php echo $row['Overtime'];?></td>
                        <th scope>OT Hours:</th>
                        <td><?php echo $row['OT_hours'];?></td>
                        <th scope>Days Absent:</th>
                        <td><?php echo $row['Days_absent'];?></td>
                      </tr>
                      <tr>
                        <th scope>Absentee Ism:</th>
                        <td>&#8358; <?php echo $row['Absentee_ism'];?></td>
                        <th scope>Loan:</th>
                        <td>&#8358; <?php echo $row['Loan'];?></td>
                        <th scope>Paye:</th>
                        <td>&#8358; <?php echo $row['Paye'];?></td>
                      </tr>
                      <tr>
                        <th scope>Salary Advance:</th>
                        <td>&#8358; <?php echo $row['Salary_advance'];?></td>
                        <th scope>Total Deductions:</th>
                        <td>&#8358; <?php echo $row['Total_deductions'];?></td>
                        <th scope>Net Total:</th>
                        <td>&#8358; <?php echo $row['Net_total'];?></td>
                      </tr>
                      <tr>
                        <th colspan="2">Payment Status:</th>
                        <td><?php echo $row['Payment_status'];?></td>
                        <th colspan="2">Payment Method:</th>
                        <td><?php echo $row['Payment_method'];?></td>
                      </tr>
                      <tr>
                        <th colspan="4">Payment Date:</th>
                        <td colspan="2"><?php echo $row['Payment_date'];?></td>
                      </tr>
                  </table>
                  <!--<<<<<<<<<<<<<<<<<-->
          <table class=" table table-bordered table-hover">
            <body>
              <?php 
                    $cnt=$cnt+1;
              }  } else { ?>
              <tr>
                <td class="center" colspan="3"> No Record Found!</td>
              </tr>
              <?php } ?>
            </body>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
