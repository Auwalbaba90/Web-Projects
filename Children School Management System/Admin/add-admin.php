<?php
session_start();
	if($_SESSION['login']==null){
	 	header('location:logout.php');
	}

include('./config/config.php');
	if(isset($_POST['Add_Admin']))
	{
		$Full_Name=$_POST['Full_Name'];
		$Admin_id=$_POST['Admin_id'];
		$EAdd=$_POST['EAdd'];
		$Password=md5($_POST['Password']);
		$query=mysqli_query($db,"insert into admin(Full_Name,Admin_id,Email,Password) values('$Full_Name','$Admin_id','$EAdd','$Password')");
		if($query)
	{
		echo "<script>alert('Admin Added Successfully');</script>";
		echo "<script>window.location.href ='view-admin.php'</script>";
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
<title>Add Admin</title>
<link rel="shortcut icon" href="../images/naub-children-school.jpg">
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">
<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<form method="post" >
	<div id="wrapper">

		<!-- Navigation -->
		<?php include('leftbar.php')?>;


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
						<div class="panel-heading">Add Admin</div>
						<div class="panel-body">
							<div class="row">
								
		<div class="form-group">
		<div class="col-lg-4">
		<label>Full Name:<span id="" style="font-size:11px;color:red">*</span></label>
		</div>
		<div class="col-lg-6">
		<input type="text" class="form-control"  name="Full_Name" placeholder="Full Name" required="required" title="Full Name">
	 </div>
	 </div>	
	<br><br>								
								
		<div class="form-group">
		<div class="col-lg-4">
		<label>Admin ID:<span id="" style="font-size:11px;color:red">*</span></label>
		</div>
		<div class="col-lg-6">
		<input type="text" class="form-control"  name="Admin_id" id="Admin_id" onBlur="userAvailability()" placeholder="Admin ID" required="required" title="Admin ID">
		<span id="user-availability-status1" style="font-size:12px;"></span>
	</div>
	 </div>	
	<br><br>	

     <div class="form-group">
		<div class="col-lg-4">
		<label>Email Address:<span id="" style="font-size:11px;color:red">*</span> </label>
		</div>
		<div class="col-lg-6">
		<input type="Email" class="form-control"  name="EAdd" id="EAdd" required="required" placeholder="Email Address" title="Email Address">
	 </div>
	 </div>	
	<br><br>									
	<div class="form-group">
	<div class="col-lg-4">
	 <label>Password:<span id="" style="font-size:11px;color:red">*</span></label>
	</div>
	<div class="col-lg-6">
	<input type="Password" class="form-control"  name="Password" placeholder="Password" required="required" title="Password">
	
	</div>
	</div>
	</div>	
	<br><br><br>								
										
	<div class="form-group">
											<div class="col-lg-4">
												
											</div>
											<div class="col-lg-6"><br><br>
	<input type="submit" class="btn btn-primary" name="Add_Admin" id="Add_Admin" title="Add Admin" value="Add Admin"></button>
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
	

	<!-- jQuery -->
	<script src="../bower_components/jquery/dist/jquery.min.js"
		type="text/javascript"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"
		type="text/javascript"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="../bower_components/metisMenu/dist/metisMenu.min.js"
		type="text/javascript"></script>

	<!-- Custom Theme JavaScript -->
	<script src="../dist/js/sb-admin-2.js" type="text/javascript"></script>

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
data:'Admin_id='+$("#Admin_id").val(),
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
