<?php
session_start();
    if($_SESSION['login']==null){
        header('location:logout.php');
    }

include('./config/config.php');
    ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View Staff</title>
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
                      <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-default">
            <div class="panel-heading ">Personal Informations</div>
            <div class="panel-body">
            <div class="col-lg-12">
                <div class="form-group">
            <div class="col-lg-2">
            <label>Title:</label>
            
            </div>
            <div class="col-lg-10">
            <span style="font-size: 16px;"><?php echo $Title; ?></span>
            </div>
             
            </div>  
            <br><br>
            <div class="form-group">
            <div class="col-lg-2">
            <label>First Name:</label>
            
            </div>
            <div class="col-lg-4">
            <span style="font-size: 16px;"><?php echo $First_Name; ?></span>
            </div>
             <div class="col-lg-2">
            <label>Surname:</label>
            
            </div>
            <div class="col-lg-4">
            <span style="font-size: 16px;"><?php echo $Surname; ?></span>
            </div>
            </div>  
            <br><br>
                                
        <div class="form-group">
            <div class="col-lg-2">
            <label>Other Name:</label>
            </div>
            <div class="col-lg-4">
            <span style="font-size: 16px;"><?php echo $Other_name; ?></span>
            </div>
             <div class="col-lg-2">
            <label>Gender:</label>
            
            </div>
            <div class="col-lg-4">
           <span style="font-size: 16px;"><?php echo $Gender; ?></span>
            </div>
            </div>  
    <br><br>        
             <div class="form-group">
             <div class="col-lg-2">
            <label>Email Address:</label>
            
            </div>
            <div class="col-lg-4">
            <span style="font-size: 16px;"><?php echo $Email; ?></span>
            </div>
             <div class="col-lg-2">
            <label>Phone No:</label>
            
            </div>
            <div class="col-lg-4">
            <span style="font-size: 16px;"><?php echo $Phone_No; ?></span>
            </div>
            </div>  
            <br><br>
                    
             <div class="form-group">
             <div class="col-lg-2">
            <label>Staff ID:</label>
            
            </div>
            <div class="col-lg-4">
            <span style="font-size: 16px;"><?php echo $Staff_id; ?></span>
            </div>
             <div class="col-lg-2">
            <label>Rank:</label>
            
            </div>
            <div class="col-lg-4">
            <span style="font-size: 16px;"><?php echo $Rank; ?></span>
            </div>
            </div>  
            <br><br>
            
            
                    
             <div class="form-group">
             <div class="col-lg-2">
            <label>Class:</label>
            
            </div>
            <div class="col-lg-4">
            <span style="font-size: 16px;"><?php echo $Class; ?></span>
            </div>
             <div class="col-lg-2">
            <label>Date Of Birth:</label>
            
            </div>
            <div class="col-lg-4">
            <span style="font-size: 16px;"><?php echo $D_O_B; ?></span>
            </div>
            </div>  
            <br><br>
           <center> <a href="staff.php"><button class="btn btn-primary" title="Back">Back</button></a></center>
        </div>
        <?php echo'<a href="delete_staff.php?id='.$id.'" style="font-size: 16px; text-align: right; float: right;"><span class="fa fa-trash "> Delete</span></a>';?>
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
