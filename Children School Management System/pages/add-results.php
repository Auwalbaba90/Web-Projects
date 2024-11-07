<?php
    session_start();

    if(isset($_POST['Continue'])){
    
     include('../config/DbFunction.php');
     $obj=new DbFunction();
     $_SESSION['Continue']=$_POST['Addmission_No'];
     $obj->valid($_POST['Addmission_No'],$_POST['Class']);
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
<title>Add Results</title>
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
<?php 
								include('../config/config.php');
$query=mysqli_query($db,"SELECT * FROM current_session where id='1'");
while($data=mysqli_fetch_array($query))
{
  $Session = $data['Session'];
    $Term = $data['Term'];
  }
?>

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
						<div class="panel-heading">Primary Results</div>
						<div class="panel-body">
							<div class="row">
						 <div class="form-group">
						 	<div class="col-lg-4">
		<label>Addmission No:<span id="" style="font-size:11px;color:red">*</span></label>
		</div>
		<div class="col-lg-6">
		<input class="form-control"  name="Addmission_No" id="Addmission_No" onBlur="userAvailability()" required="required" title="Student Reg No">
		<span id="user-availability-status1" style="font-size:12px;"></span>
	</div>
	 </div>	
	<br><br>								
								
		<div class="form-group">
		<div class="col-lg-4">
		<label>Class:<span id="" style="font-size:11px;color:red">*</span></label>
		</div>
		<div class="col-lg-6">
		<select class="form-control" name="Class"  id="Class" required="required" title="Please Select Class">
        <option VALUE="">Select</option>
        <option value="Primary 1">Primary 1</option>
        <option value="Primary 2">Primary 2</option>
        <option value="Primary 3">Primary 3</option>
        <option value="Primary 4">Primary 4</option>
        <option value="Primary 5">Primary 5</option>
        <option value="Primary 6">Primary 6</option>
       </select>
	 </div>
	 </div>	
	<br><br>	

     <div class="form-group">
		<div class="col-lg-4">
		<label>Academic Session:<span id="" style="font-size:11px;color:red">*</span> </label>
		</div>
		<div class="col-lg-6">
		<input class="form-control"  name="Ac_Session" required="required" readonly="readonly" value="<?php echo $Session; ?>" title="Academic Session">
	 </div>
	 </div>	
	<br><br>									
	<div class="form-group">
	<div class="col-lg-4">
	 <label>Term:<span id="" style="font-size:11px;color:red">*</span></label>
	</div>
	<div class="col-lg-6">
	<input class="form-control"  name="Term" required="required" readonly="readonly" value="<?php echo $Term; ?>" title="Term">
	
	</div>
	</div>
	</div>																
	<div class="form-group">

	<div class="col-lg-4">
												
		</div>
		<div class="col-lg-6"><br><br>
			<input type="submit" class="btn btn-primary" id="Continue" name="Continue" value="Continue" title="Continue"></button>
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
data:'Addmission_No='+$("#Addmission_No").val(),
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
