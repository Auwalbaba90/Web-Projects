<?php
session_start();
	if($_SESSION['login']==null){
	 	header('location:logout.php');
	}
include('./config/config.php');
	if(isset($_POST['Change_P']))
	{
		$N_Password=md5($_POST['N_Password']);
		$query=mysqli_query($db,"UPDATE `admin` SET Password='$N_Password' WHERE admin_id='".$_SESSION['login']."'");
		if($query)
	{
		echo "<script>alert('Your Password Has Been Change Successfully');</script>";
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

<title>Change password</title>
<link rel="shortcut icon" href="../images/naub-children-school.jpg">

<!-- Bootstrap Core CSS -->
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../bower_components/metisMenu/dist/metisMenu.min.css"
	rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

 <script type="text/javascript">
        function valid()
    {
            if(document.change_pass.N_Password.value!= document.change_pass.C_Password.value)
        {
            alert("New Password and Confirm Password do not match  !!");
            document.change_pass.C_Password.focus();
            return false;
        }
        return true;
    }
</script>
</head>

<body>
<form method="post" name="change_pass" id="change_pass" onSubmit="return valid();" >
	<div id="wrapper">

		<!-- Navigation -->
		<?php include('leftbar.php')?>;

<!--nav-->
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
						<div class="panel-heading">Change Password</div>
						<div class="panel-body">
							<div class="row">
						 	<div class="col-lg-10">
									
										<div class="form-group">
											<div class="col-lg-4">
					 <label>Current Password:<span id="" style="font-size:11px;color:red">*</span>	</label>
											</div>
											<div class="col-lg-6">
			
  <input type="password" class="form-control" placeholder="Enter Current Password" onBlur="userAvailability()" name="Current_Password" id="Current_Password" required="required" title="Current Password">
  <span id="user-availability-status1" style="font-size:12px;"></span>      
		</div>
											
			</div>	
										
				<br><br>
								
		<div class="form-group">
		<div class="col-lg-4">
		<label>New Password:<span id="" style="font-size:11px;color:red">*</span></label>
		</div>
		<div class="col-lg-6">
		<input type="password" class="form-control" placeholder="New Password" name="N_Password" id="N_Password" required="required"  title="New Password"> 
		</div>
	 </div>									
	 <br><br>								
										
	<div class="form-group">
	<div class="col-lg-4">
	 <label>Confirm Password:<span id="" style="font-size:11px;color:red">*</span></label>
	</div>
	<div class="col-lg-6">
	<input type="password" class="form-control" placeholder="Confirm Password" name="C_Password" id="C_Password" required="required"  title="Confirm Password" >
	
	</div>
	</div>
	</div>	
										
		<br><br>		
		
							<div class="form-group">
											<div class="col-lg-4">
												
											</div>
											<div class="col-lg-6"><br><br>
							<input type="submit" class="btn btn-primary" id="Change_P" name="Change_P" value="Change Password" title="Change Password"></button>
											</div>
											
										</div>		
													
				</div>

					</div>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		

	</div>
	
	<script src="../bower_components/jquery/dist/jquery.min.js"
		type="text/javascript"></script>

	
	<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"
		type="text/javascript"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="../bower_components/metisMenu/dist/metisMenu.min.js"
		type="text/javascript"></script>
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
data:'Current_Password='+$("#Current_Password").val(),
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
</form>
</body>

</html>
