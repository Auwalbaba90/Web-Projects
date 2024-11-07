<?php
    session_start();
    session_destroy();
    session_start();

    if(isset($_POST['submit'])){
    
     include('../config/DbFunction.php');
     $obj=new DbFunction();
     $_SESSION['submit']=$_POST['Staff_id'];
     $obj->login($_POST['Staff_id'],md5($_POST['password']));
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

    <title>Staff Login </title>
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
 <h2 align="center">Staff Login</h2>
    <div class="container">
        <br><br><br><br>

            <div class="col-md-4 col-md-offset-4">

                <div class="panel panel-primary">

                    <div class="panel-heading">
                     <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Staff ID"  id="Staff_id"name="Staff_id" type="text" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" id="password"name="password" type="password" >
                                </div>
                              
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" value="login" name="submit" class="btn btn-lg btn-success btn-block">
                                <span><i><a href="">Forgot Password?</a></i></span>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
