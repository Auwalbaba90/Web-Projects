<?php
session_start();
    if($_SESSION['login']==null){
        header('location:logout.php');
    }
    
include('./config/config.php');
    if(isset($_POST['add_staff']))
    {
        $Title=$_POST['Title'];
        $First_Name=$_POST['fname'];
        $Surname=$_POST['surname'];
        $Other_name=$_POST['othername'];
        $Gender=$_POST['Gender'];
        $Email=$_POST['Email'];
        $Phone_No=$_POST['pno'];
        $Staff_id=$_POST['Staff'];
        $Rank=$_POST['Rank'];
        $Class=$_POST['Class'];
        $D_O_B=$_POST['dob'];
        $Password=md5($_POST['Password']);
        $query=mysqli_query($db,"insert into staff_account(Title,First_Name,Surname,Other_Name,Gender,Email_Address,Phone_No,Staff_ID,Rank,Class,D_O_B,Password) values('$Title','$First_Name','$Surname','$Other_name','$Gender','$Email','$Phone_No','$Staff_id','$Rank','$Class','$D_O_B','$Password')");
        if($query)
    {
        echo "<script>alert('Staff Added Successfully');</script>";
        //header('location:user-login.php');
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

    <title>Add Staff</title>
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

</head>

<body>

    <div id="wrapper">

        <?php include 'leftbar.php'; ?>

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
            <div class="panel-heading ">Personal Informations</div>
            <div class="panel-body">
            <div class="col-lg-12">
                <div class="form-group">
            <div class="col-lg-2">
            <label>Title:<span id="" style="font-size:11px;color:red">*</span>  </label>
            
            </div>
            <div class="col-lg-10">
            <select class="form-control" name="Title"  id="Title" required="required" pattern="[A-Za-z]+$" title="Title" >
                <option VALUE="">Select</option>
                <option value="Mr.">Mr.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Miss.">Miss.</option>
                <option VALUE="Dr.">Dr.</option>
                <option value="Prof.">Prof.</option>
            </select>
            </div>
             
            </div>  
            <br><br>
            <div class="form-group">
            <div class="col-lg-2">
            <label>First Name:<span id="" style="font-size:11px;color:red">*</span>  </label>
            
            </div>
            <div class="col-lg-4">
            <input type="text" class="form-control" name="fname" required="required" pattern="[A-Za-z]+$" title="First Name">
            </div>
             <div class="col-lg-2">
            <label>Surname:<span id="" style="font-size:11px;color:red">*</span> </label>
            
            </div>
            <div class="col-lg-4">
            <input class="form-control" name="surname" required="required" pattern="[A-Za-z]+$" title="Surname">
            </div>
            </div>  
            <br><br>
                                
        <div class="form-group">
            <div class="col-lg-2">
            <label>Other Name:</label>
            </div>
            <div class="col-lg-4">
            <input type="text" class="form-control" name="othername" pattern="[A-Za-z]+$" title="Other Name">
            </div>
             <div class="col-lg-2">
            <label>Gender:<span id="" style="font-size:11px;color:red">*</span></label>
            
            </div>
            <div class="col-lg-4">
         <input type="radio" name="Gender" id="male" title="Male" value="Male"> &nbsp; Male &nbsp;
         <input type="radio" name="Gender" id="female" title="Female" value="Female"> &nbsp; Female &nbsp;
            </div>
            </div>  
    <br><br>        
             <div class="form-group">
             <div class="col-lg-2">
            <label>Email Address:<span id="" style="font-size:11px;color:red">*</span></label>
            
            </div>
            <div class="col-lg-4">
            <input type="Email" class="form-control" name="Email" required="required" title="Email Address" >
            </div>
             <div class="col-lg-2">
            <label>Phone No:<span id="" style="font-size:11px;color:red">*</span></label>
            
            </div>
            <div class="col-lg-4">
            <input type="number" class="form-control" name="pno" id="pno" required="required" title="Phone No">
            </div>
            </div>  
            <br><br>
                    
             <div class="form-group">
             <div class="col-lg-2">
            <label>Staff ID:<span id="" style="font-size:11px;color:red">*</span></label>
            
            </div>
            <div class="col-lg-4">
            <input class="form-control" name="Staff" id="Staff" required="required" onBlur="userAvailability()" title="Staff ID">
            <span id="user-availability-status1" style="font-size:12px;"></span>
            </div>
             <div class="col-lg-2">
            <label>Rank:<span id="" style="font-size:11px;color:red">*</span></label>
            
            </div>
            <div class="col-lg-4">
            <select class="form-control" name="Rank"  id="Rank" required="required" pattern="[A-Za-z]+$" title="Rank" >
        <option VALUE="">Select</option>
        <option VALUE="Headmaster">Headmaster</option>
        <option value="Assi. Headmaster">Assi. Headmaster</option>
        <option value="Class Teachers">Class Teachers</option>
        <option value="Nanny">Nanny</option>
        <option value="Cleaner">Cleaner</option>
       </select>
            </div>
            </div>  
            <br><br>
            
            
                    
             <div class="form-group">
             <div class="col-lg-2">
            <label>Class:<span id="" style="font-size:11px;color:red">*</span></label>
            
            </div>
            <div class="col-lg-4">
            <select class="form-control" name="Class"  id="Class" required="required" title="Select Class" >
        <option value="">Select</option>
        <option value="None">None</option>
        <option value="Crech">Crech</option>
        <option value="Pre-Nursery">Pre-Nursery</option>
       <option value="Nursery 1" style="color: red;">Nursery 1</option>
        <option value="Nursery 2" style="color: red;">Nursery 2</option>
        <option value="Nursery 3" style="color: red;">Nursery 3</option>
        <option value="Primary 1" style="color: green;">Primary 1</option>
        <option value="Primary 2" style="color: green;">Primary 2</option>
        <option value="Primary 3" style="color: green;">Primary 3</option>
        <option value="Primary 4" style="color: green;">Primary 4</option>
        <option value="Primary 5" style="color: green;">Primary 5</option>
        <option value="Primary 6" style="color: green;">Primary 6</option>
            </select>
            </div>
             <div class="col-lg-2">
            <label>Date Of Birth:<span id="" style="font-size:11px;color:red">*</span></label>
            
            </div>
            <div class="col-lg-4">
            <input type="Date" class="form-control" name="dob" id="dob" required="required" title="Date Of Birth">
            </div>
            </div>  
            <br><br>

            <div class="form-group">
             <div class="col-lg-2">
            <label>Password:<span id="" style="font-size:11px;color:red">*</span></label>
            
            </div>
            <div class="col-lg-4">
            <input type="password" class="form-control" placeholder="Password" name="Password" id="Password" required="required"  title="Password">
            </div>
             <div class="col-lg-2">
            <label>Confirm:<span id="" style="font-size:11px;color:red">*</span></label>
            
            </div>
            <div class="col-lg-4">
            <input type="password" class="form-control" placeholder="Confirm Password" name="C_Password" id="C_Password" required="required"  title="Confirm Password">
            </div>
            </div>
            <br><br>  
            </div>  
            <br><br>
           <center><input type="submit" class="btn btn-primary" id="add_staff" name="add_staff" title="Add Staff" value="Add Staff"></center>
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

    <!--========================================================================================-->
        <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    
    <script>
            jQuery(document).ready(function() {
                Main.init();
                Login.init();
            });
        </script>

    <script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'Staff='+$("#Staff").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
/*================================================*/
</script>
</body>

</html>
