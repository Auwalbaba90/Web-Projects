<?php 
    session_start();
    if($_SESSION['login']==null){
        header('location:logout.php');
    }
if (!(isset($_SESSION['login']))) {

    header('location:./index.php');

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

    <title>Staff</title>
    <link rel="shortcut icon" href="../images/naub-children-school.jpg">

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
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
                   <h4 class="page-header"> <?php echo strtoupper("User ID:"."<i style='color: #00b300;'> ".htmlentities($_SESSION['login']));?></i ></h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            View Staff
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S/No</th>
                                            <th>Full Name</th>
                                            <th>Email Address</th>
                                            <th>Phone No</th>
                                            <th>Staff ID</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $ID = 1;
                                $query = mysqli_query($db,"SELECT * from staff_account") or die(mysqli_error());
                                while ($data = mysqli_fetch_array($query)) {
                                    $id=$data['id'];
                                    $Title=$data['Title'];
                                    $First_Name=$data['First_Name'];
                                    $Surname=$data['Surname'];
                                    $Other_name=$data['Other_Name'];
                                    $Gender=$data['Gender'];
                                    $Email=$data['Email_Address'];
                                    $Phone_No=$data['Phone_No'];
                                    $Staff_id=$data['Staff_ID'];
                                    $Rank=$data['Rank'];
                                    $Class=$data['Class'];
                                    $D_O_B=$data['D_O_B'];
                                    $Password=$data['Password'];
                                ?>
                                         <tr>
                                           <td><?php echo $ID;?></td>
                                           <td><?php echo $First_Name.' &nbsp;'.$Surname.' &nbsp;'.$Other_name;?></td>
                                           <td><?php echo $Email;?></td>
                                           <td><?php echo $Phone_No;?></td>
                                           <td><?php echo $Staff_id;?></td>
                                           <td>&nbsp;&nbsp;<?php echo'<a href="update-staff.php?id='.$id.'">
      <p class="fa fa-edit"></p></a>';?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php echo'<a href="view-staff.php?id='.$id.'">
      <p class="fa fa-eye"></p></a>';?></td> 
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
