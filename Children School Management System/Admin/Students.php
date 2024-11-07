<?php 
   session_start();
    if($_SESSION['login']==null){
        header('location:logout.php');
    }
$db = mysqli_connect('localhost','root','','naub-staff-children-school');

?> 

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Students</title>
    <link rel="shortcut icon" href="../images/naub-children-school.jpg">
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
      
     <?php include('leftbar.php')?>;

           
         <nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <h4 class="page-header"> <!--<?php echo strtoupper("welcome"." ".htmlentities($_SESSION['submit']));?>--></h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            View All Students
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S/No</th>
                                            <th>Students No</th>
                                            <th>Full Name</th>
                                            <th>Admitted Year</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                        $ID = 1;
                                $query = mysqli_query($db,"SELECT * from students") or die(mysqli_error());
                                while ($data = mysqli_fetch_array($query)){
                                    $id=$data['id']; $Addmission_No=$data['Addmission_No']; $First_Name=$data['First_Name']; $Surname=$data['Surname']; $Other_Name=$data['Other_Name']; $Class=$data['Class']; $Gender=$data['Gender']; $D_O_B=$data['D_O_B']; $Place_of_Birth=$data['Place_of_Birth']; $State=$data['State']; $Nationality=$data['Nationality']; $Home_Language=$data['Home_Language']; $Others_Language=$data['Others_Language'];$Religion=$data['Religion']; $Home_Address=$data['Home_Address']; $A_Name=$data['A_Name']; $A_Year_Class=$data['A_Year_Class']; $B_Name=$data['B_Name']; $B_Year_Class=$data['B_Year_Class']; $Allergies=$data['Allergies']; $Physical_Challenges=$data['Physical_Challenges']; $Father_Full_Name=$data['Father_Full_Name']; $Father_M_Number=$data['Father_M_Number']; $Father_W_Number=$data['Father_W_Number']; $Father_Email_Address=$data['Father_Email_Address']; $Father_Nationality=$data['Father_Nationality']; $Father_Parental_Status=$data['Father_Parental_Status']; $Father_Permanent_Address=$data['Father_Permanent_Address']; $Mother_Full_Name=$data['Mother_Full_Name']; $Mother_M_Number=$data['Mother_M_Number']; $Mother_W_Number=$data['Mother_W_Number']; $Mother_Email_Address=$data['Mother_Email_Address']; $Mother_Nationality=$data['Mother_Nationality']; $Mother_Parental_Status=$data['Mother_Parental_Status']; $Photo=$data['House']; $Entry_Year=$data['Entry_Year']; $Father_Email_Address=$data['Father_Email_Address'];
                                        ?>
                                        <tr>
                                            <td><?php echo $ID;?></td>
                                            <td><?php echo $Addmission_No;?></td>
                                            <td><?php echo $First_Name.' &nbsp;'.$Surname.' &nbsp;'.$Other_Name;?></td>
                                            <td><?php echo $Entry_Year;?></td>
                                            <td>&nbsp;&nbsp;<?php echo'<a href="view-Student.php?id='.$id.'">
      <p class="fa fa-eye" title="View Student"></p></a>';?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <?php echo'<a href="edit-student.php?id='.$id.'">
      <p class="fa fa-edit" title="Edit Student"></p></a>';?></p></td>
                                        </tr>
                                    <?php $ID++;}?>   	           
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
            
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
