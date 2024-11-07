<?php 
    session_start();
    if($_SESSION['login']==null){
        header('location:logout.php');
    }
if (!(isset($_SESSION['login']))) {

    header('location:./index.php');

}
$db = mysqli_connect('localhost','root','','naub-staff-children-school');

$query=mysqli_query($db, "SELECT Full_Name, admin_id, Email, Login_time from admin where admin_id='".$_SESSION['login']."'");
while($row=mysqli_fetch_array($query))
    {
    $Full_Name = $row['Full_Name'];
    $admin_id = $row['admin_id'];
    $Email = $row['Email'];
    $Login_time = $row['Login_time'];
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

    <title>Dashboard</title>
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

<body>

    <div id="wrapper">

        <?php include 'leftbar.php'; ?>

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
                            Dashboard
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-12">
                                    <h1>Admin Details:</h1>
                                    <form role="form">
                                        <fieldset disabled>
                                            <div class="form-group col-lg-6">
                                                <label for="disabledSelect">Full Name:</label>
                                                <input class="form-control" value="<?php echo$Full_Name; ?>" id="Full_Name" type="text" placeholder="Full Name" disabled>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="disabledSelect">Admin ID:</label>
                                                <input class="form-control" value="<?php echo$admin_id; ?>" id="Admin_ID" type="text" placeholder="Admin ID" disabled>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="disabledSelect">Email Address:</label>
                                                <input class="form-control" value="<?php echo$Email; ?>" id="Email_Address" type="text" placeholder="Email Address" disabled>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="disabledSelect">Registration Date:</label>
                                                <input class="form-control" value="<?php echo$Login_time; ?>" id="Registration" type="text" placeholder="Registration Date" disabled>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
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

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
