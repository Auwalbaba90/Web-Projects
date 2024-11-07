<?php
session_start();
	if($_SESSION['login']==null){
	 	header('location:logout.php');
	}

include('./config/config.php');
	if(isset($_POST['Up_De']))
	{
		$C_Session=$_POST['c_Session'];
		$C_Term=$_POST['c_Term'];
		$query=mysqli_query($db,"UPDATE `current_session` SET Session='$C_Session',Term='$C_Term' WHERE id='1'");
		if($query)
	{
		echo "<script>alert('Session Change Successfully');</script>";
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
<title>Current Session</title>
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
					<h4 class="page-header"> <?php echo strtoupper("User ID:"."<i style='color: #00b300;'> ".htmlentities($_SESSION['login']));?></i ></h4>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Current Session</div>
						<div class="panel-body">
							<div class="row">
			<div class="form-group">
            <div class="col-lg-2">
            <label>Session:<span id="" style="font-size:11px;color:red">*</span>  </label>      
            </div>
            <div class="col-lg-4">
            <select class="form-control" name="c_Session" required="required" title="Session">
            	<option value="<?php echo $Session; ?>"><?php echo $Session; ?></option>
            	<?php
						$query="SELECT * from session ORDER BY id DESC";

						$result=mysqli_query($db, $query);
						if ($result) {
							if(mysqli_num_rows($result) >0){
								while($row=mysqli_fetch_assoc($result)){
									$Session=$row['Session']
					?>
            	<option value="<?php echo $Session;?>"><?php echo $Session;?></option>
            	<?php
					}
						}
					}else{
						echo mysqli_error($db);
					}
				?>
            </select>
            </div>
             <div class="col-lg-2">
            <label>Term:<span id="" style="font-size:11px;color:red">*</span> </label>
            
            </div>
            <div class="col-lg-4">
            <select class="form-control" name="c_Term" required="required" title="Term">
            	<option value="<?php echo $Term; ?>"><?php echo $Term; ?></option>
            	<option value="First">First</option>
            	<option value="Second">Second</option>
            	<option value="Third">Third</option>
            </select>
            </div>
            </div>
	</div><br>							
	<div class="form-group">
	<div class="col-lg-4">
												
		</div>
		<div class="col-lg-6">
			<input type="submit" class="btn btn-primary" name="Up_De" title="Update Details" value="Change Session"></button>
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

</form>
</body>

</html>
