<?php 
    session_start();
    if($_SESSION['submit']==null){
        header('location:logout.php');
    }
$db = mysqli_connect('localhost','root','','naub-staff-children-school');

    $query=mysqli_query($db, "SELECT Class from staff_account where Staff_ID='".$_SESSION['submit']."'");
while($row=mysqli_fetch_array($query))
    {
    $Class = $row['Class'];
}

?> 

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nursery Results</title>
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
                   <h4 class="page-header"> <!--<?php echo strtoupper("welcome"." ".htmlentities($_SESSION['login']));?>--></h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Your Students Results
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Students Id</th>
                                            <th>Full Name</th>
                                            <th>Class</th>
                                            <th>Terms</th>
                                            <th>Session</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                        $ID = 1;
                                $query = mysqli_query($db,"SELECT * from nursery_result WHERE Class='$Class'") or die(mysqli_error());
                                while ($data = mysqli_fetch_array($query)){
                                    $id=$data['ID_No']; $fname=$data['First_Name']; $sname=$data['Middle_Name']; $lname=$data['Last_Name']; $Gender=$data['Gender']; $class=$data['Class']; $Ad_no=$data['Addmission_No']; $Age=$data['Age']; $House=$data['House']; $Term=$data['Term']; $Session=$data['Session']; $English_CA1=$data['English_CA1']; $English_CA2=$data['English_CA2']; $English_Exam=$data['English_Exam']; $English_Total=$data['English_Total']; $English_Remark=$data['English_Remark']; $Mathematics_CA1=$data['Mathematics_CA1']; $Mathematics_CA2=$data['Mathematics_CA2']; $Mathematics_Exam=$data['Mathematics_Exam']; $Mathematics_Total=$data['Mathematics_Total']; $Mathematics_Remark=$data['Mathematics_Remark']; $Quantitative_CA1=$data['Quantitative_CA1']; $Quantitative_CA2=$data['Quantitative_CA2']; $Quantitative_Exam=$data['Quantitative_Exam']; $Quantitative_Total=$data['Quantitative_Total']; $Quantitative_Remark=$data['Quantitative_Remark']; $Phonics_CA1=$data['Phonics_CA1']; $Phonics_CA2=$data['Phonics_CA2']; $Phonics_Exam=$data['Phonics_Exam']; $Phonics_Total=$data['Phonics_Total']; $Phonics_Remark=$data['Phonics_Remark']; $handwriting_CA1=$data['handwriting_CA1']; $handwriting_CA2=$data['handwriting_CA2']; $handwriting_Exam=$data['handwriting_Exam']; $handwriting_Total=$data['handwriting_Total']; $handwriting_Remark=$data['handwriting_Remark']; $Verbal_CA1=$data['Verbal_CA1']; $Verbal_CA2=$data['Verbal_CA2']; $Verbal_Exam=$data['Verbal_Exam']; $Verbal_Total=$data['Verbal_Total']; $Verbal_Remark=$data['Verbal_Remark']; $T_No_class=$data['T_No_In_Class']; $Grade=$data['Grade']; $Average=$data['Average']; $Total=$data['Total']; $Class_Teacher_Comment=$data['Class_Teacher_Comment']; $Headmaster_Comment=$data['Headmaster_Comment']; $Promotion=$data['Promotion'];
                                        ?>
                                        <tr>
                                            <td><?php echo $Ad_no;?></td>
                                            <td><?php echo $fname.' &nbsp;'.$sname.' &nbsp;'.$lname;?></td>
                                            <td><?php echo $class ?></td>
                                            <td><?php echo $Term;?></td>
                                            <td><?php echo $Session;?></td>
                                            <td>&nbsp;&nbsp;<?php echo'<a href="view-nursery.php?id='.$id.'">
      <p class="fa fa-eye" title="View Result"></p></a>';?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <?php echo'<a href="edit-result.php?id='.$id.'">
      <p class="fa fa-edit" title="Edit Result"></p></a>';?></p></td>
                                        </tr>
                                        
                                    <?php  $ID++;}?>   	           
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
