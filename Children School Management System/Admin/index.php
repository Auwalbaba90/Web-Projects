<?php
    session_start();
    session_destroy();
    session_start();

    if(isset($_POST['login'])){
    
     include('./config/DbFunction.php');
     $obj=new DbFunction();
     $_SESSION['login']=$_POST['admin_id'];
     $obj->login($_POST['admin_id'],md5($_POST['Password']));
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

    <title>Admin Login </title>
    <link rel="shortcut icon" href="../images/naub-children-school.jpg">
    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../dist/css/jquery.validate.css" />

</head>

<body>
 <h2 align="center">Admin Login</h2>
    <div class="container">
        <br><br><br><br>

            <div class="col-md-4 col-md-offset-4">

                <div class="panel panel-primary">

                    <div class="panel-heading">
                     <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <center>
                           
                        </center>
                        <form method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" required="required" title="Login Id" placeholder="Login ID"  id="admin_id"name="admin_id" type="text" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required="required" title="Password" placeholder="Password" id="Password"name="Password" type="password">
                                </div>
                              
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" value="login" title="Login" name="login" class="btn btn-lg btn-success btn-block">
                                <span><i><a href="">Forgot Password?</a></i></span>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
