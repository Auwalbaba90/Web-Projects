<?php
session_start();
    if($_SESSION['login']==null){
        header('location:logout.php');
    }

include('./config/config.php');
    if(isset($_POST['chan_staff']))
    {
        $Password=md5($_POST['Password']);
        $query=mysqli_query($db,"UPDATE `staff_account` SET Password='$Password' WHERE id= {$_GET['id']}");
        if($query)
    {
        echo "<script>alert('Password Change Successfully');</script>";
        echo "<script>window.location.href ='staff.php'</script>";
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

    <title>Change Staff Password</title>
    <link rel="shortcut icon" href="../images/naub-children-school.jpg">

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<script type="text/javascript">
        function valid()
    {
            if(document.staff_add.Password.value!= document.staff_add.C_Password.value)
        {
            alert("Password and Confirm Password Field do not match  !!");
            document.staff_add.C_Password.focus();
            return false;
        }
        return true;
    }
</script>
<body>

    <div id="wrapper">

        <?php include 'leftbar.php'; ?>

    <?php 
                if(isset($_GET['id'])){
                    $query = mysqli_query($db, "SELECT * FROM staff_account where id = {$_GET['id']}");
                    foreach(mysqli_fetch_array($query) as $k => $v){
                        $$k = $v;


                    }
                }
            ?>

<?php 

$query=mysqli_query($db,"SELECT * FROM staff_account where id= {$_GET['id']}");
while($data=mysqli_fetch_array($query))
{
        $First_Name=$data['First_Name'];
        $Surname=$data['Surname'];
        $Other_name=$data['Other_Name'];
        $Phone_No=$data['Phone_No'];
        $Staff_id=$data['Staff_ID'];
    }
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header"> <?php echo strtoupper("User ID:"."<i style='color: #00b300;'> ".htmlentities($_SESSION['login']));?></i></h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <form method="POST" name="staff_add" id="staff_add" onSubmit="return valid();">
                      <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-default">
            <div class="panel-heading ">Change Password</div>
            <div class="panel-body">
            <div class="col-lg-12"> 
            <div class="form-group">
                <center><strong>Name:</strong> <?php echo $First_Name; ?> <?php echo $Surname; ?> <?php echo $Other_name; ?><br> <strong>Staff ID:</strong> <?php echo $Staff_id; ?></center>
            </div>  
            <div class="form-group">
             <div class="col-lg-2">
            <label>New Password:<span id="" style="font-size:11px;color:red">*</span></label>
            
            </div>
            <div class="col-lg-4">
            <input type="password" class="form-control" placeholder="Password" name="Password" id="Password" required="required"  title="Password">
            </div>
             <div class="col-lg-2">
            <label>Confirm Password:<span id="" style="font-size:11px;color:red">*</span></label>
            
            </div>
            <div class="col-lg-4">
            <input type="password" class="form-control" placeholder="Confirm Password" name="C_Password" id="C_Password" required="required"  title="Confirm Password">
            </div>
            </div>
            <br><br><br> 
           <center><input type="submit" class="btn btn-primary" id="chan_staff" name="chan_staff" title="Change Password" value="Change password"></center>
        </div>
        </div>
        </form>
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

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
