<?php 
session_start();
    if($_SESSION['submit']==null){
        header('location:logout.php');
    }

if (!(isset($_SESSION['submit']))) {

    header('location:login.php');

}
$db = mysqli_connect('localhost','root','','naub-staff-children-school');

$query=mysqli_query($db, "SELECT Title, First_Name, Surname, Other_Name, Gender, Email_Address, Phone_No, Staff_ID, Rank, Class, D_O_B from staff_account where Staff_ID='".$_SESSION['submit']."'");
while($row=mysqli_fetch_array($query))
    {
    $Title = $row['Title'];
    $First_Name = $row['First_Name'];
    $Surname = $row['Surname'];
    $Other_Name = $row['Other_Name'];
    $Gender = $row['Gender'];
    $Email_Address = $row['Email_Address'];
    $Phone_No = $row['Phone_No'];
    $Staff_ID = $row['Staff_ID'];
    $Rank = $row['Rank'];
    $Class = $row['Class'];
    $D_O_B = $row['D_O_B'];
}

/* =====================================================================*/
include('../config/config.php');
    if(isset($_POST['update']))
    {
        $fname=$_POST['fname'];
        $surname=$_POST['surname'];
         $othername=$_POST['othername'];
        $Gender=$_POST['Gender'];
         $Email=$_POST['Email'];
        $pno=$_POST['pno'];
         $dob=$_POST['dob'];
        $query=mysqli_query($db,"UPDATE `staff_account` SET First_Name='$fname',Surname='$surname',Other_Name='$othername',Gender='$Gender',Email_Address='$Email',Phone_No='$pno',D_O_B='$dob' WHERE Staff_ID='".$_SESSION['submit']."'");
        if($query)
    {
        echo "<script>alert('Your Account Updated Successfully');</script>";
        echo "<script>window.location.href ='index.php'</script>";
    }else{
        echo "<script>alert('There is Error Check and Try Again!!.');</script>";
    }
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

    <title>Staff Dashboard</title>
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
                   <h4 class="page-header">  <?php 
  $time = date('H');
    if ($time < 12) {
      echo "<p class='admin-color'><b><i style='color: #009900;'>Good Morning:</i> <i>".$Title.'</i> &nbsp;<span style="color: red;">'.$First_Name."</span></b></p>";
    }else if ($time >= 12 && $time <= 16) {
      echo "<p class='admin-color'><b><i style='color: #009900;'>Good Afternoon:</i> <i>".$Title.'</i> &nbsp;<span style="color: red;">'.$First_Name."</span></b></p>";
    }else{
      echo "<p class='admin-color'><b><i style='color: #009900;'>Good Eveninng:</i> <i>".$Title.'</i> &nbsp;<span style="color: red;">'.$First_Name."</span></b></p>";
    }
 ?></h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <form method="POST">
                      <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                            Dashboard
                        </div>
            <div class="panel-heading " style="background: none;">Personal Informations</div>
            <div class="panel-body">
            <div class="col-lg-12">
            <div class="form-group">
            <div class="col-lg-2">
            <label>First Name:<span id="" style="font-size:11px;color:red">*</span>  </label>
            
            </div>
            <div class="col-lg-4">
            <input type="text" class="form-control" name="fname" value="<?php echo $First_Name ?>" required="required" pattern="[A-Za-z]+$" title="First Name">
            </div>
             <div class="col-lg-2">
            <label>Surname:<span id="" style="font-size:11px;color:red">*</span> </label>
            
            </div>
            <div class="col-lg-4">
            <input class="form-control" name="surname" required="required" value="<?php echo $Surname ?>" pattern="[A-Za-z]+$" title="Surname">
            </div>
            </div>  
            <br><br>
                                
        <div class="form-group">
            <div class="col-lg-2">
            <label>Other Name:</label>
            </div>
            <div class="col-lg-4">
            <input type="text" class="form-control" name="othername" value="<?php echo $Other_Name ?>" pattern="[A-Za-z]+$" title="Other Name">
            </div>
             <div class="col-lg-2">
            <label>Gender:<span id="" style="font-size:11px;color:red">*</span></label>
            
            </div>
            <div class="col-lg-4">
            <select class="form-control" name="Gender"  id="Gender" required="required" pattern="[A-Za-z]+$" title="Gender" >
                <option VALUE="<?php echo $Gender ?>"><?php echo $Gender ?></option>
                <option VALUE="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>
            </div>  
            <br><br>        
             <div class="form-group">
             <div class="col-lg-2">
            <label>Email Address:<span id="" style="font-size:11px;color:red">*</span></label>
            
            </div>
            <div class="col-lg-4">
            <input type="Email" class="form-control" name="Email" value="<?php echo $Email_Address ?>" required="required" title="Email Address" >
            </div>
             <div class="col-lg-2">
            <label>Phone No:<span id="" style="font-size:11px;color:red">*</span></label>
            
            </div>
            <div class="col-lg-4">
            <input type="number" class="form-control" value="<?php echo $Phone_No ?>" name="pno" id="pno" required="required" title="Phone No">
            </div>
            </div>  
            <br><br>
                    
             <div class="form-group">
             <div class="col-lg-2">
            <label>Staff ID:<span id="" style="font-size:11px;color:red">*</span></label>
            
            </div>
            <div class="col-lg-4">
            <input class="form-control" name="Staff" id="Staff" value="<?php echo $Staff_ID ?>" required="required" title="Staff ID" disabled >
            </div>
             <div class="col-lg-2">
            <label>Rank:<span id="" style="font-size:11px;color:red">*</span></label>
            
            </div>
            <div class="col-lg-4">
            <input class="form-control" name="Rank"  id="Rank" value="<?php echo $Rank ?>" required="required" pattern="[A-Za-z]+$" title="Rank" disabled >
            </div>
            </div>  
            <br><br>
            
            
                    
             <div class="form-group">
             <div class="col-lg-2">
            <label>Class:<span id="" style="font-size:11px;color:red">*</span></label>
            
            </div>
            <div class="col-lg-4">
            <input class="form-control" name="Class"  id="Class" value="<?php echo $Class ?>" required="required" title="Class" disabled="disabled" >
            </div>
             <div class="col-lg-2">
            <label>Date Of Birth:<span id="" style="font-size:11px;color:red">*</span></label>
            
            </div>
            <div class="col-lg-4">
            <input type="Date" class="form-control" name="dob" id="dob" value="<?php echo $D_O_B ?>" required="required" title="Date Of Birth">
            </div>

            <?php
            $query="SELECT * from students WHERE Class='$Class'";
                $result = mysqli_query($db, $query);
                    $std_id = mysqli_num_rows($result);
                        $std_id = $std_id;
            ?>
            </div>
            <center><label>Total No. of Your Students:</label> <span id="" style="font-size:15px;color:green"><?php echo $std_id; ?></span></center>
            </div><br>
            </div>  
           <center><input type="submit" class="btn btn-primary" name="update" value="Update Profile"></button></center><br>
        </div>
        </div>
        </form>
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
