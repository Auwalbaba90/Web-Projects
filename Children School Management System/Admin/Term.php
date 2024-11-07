<?php
session_start();
	if($_SESSION['login']==null){
	 	header('location:logout.php');
	}

include('./config/config.php');
	if(isset($_POST['Update']))
	{
		$Next_Term_Begins=$_POST['Next_Term_Begins'];
		$Next_Term_end=$_POST['Next_Term_end'];
		$T_School_Open=$_POST['T_School_Open'];
		$Times_Present=$_POST['Times_Present'];
		$Cause_Absent=$_POST['Cause_Absent'];
		$Times_Abs=$_POST['Times_Abs'];
		$query=mysqli_query($db,"UPDATE `next_term_begins` SET Next_Term_Begins='$Next_Term_Begins',Next_Term_Ends='$Next_Term_end',Time_School_open='$T_School_Open',Times_Present='$Times_Present',Cause_Absent='$Cause_Absent',Times_Absent='$Times_Abs' WHERE id='1'");
		if($query)
	{
		echo "<script>alert('Next Term Begin Change Successfully');</script>";
		echo "<script>window.location.href ='Term.php'</script>";
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
<title>Next Term Begin</title>
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
$query=mysqli_query($db,"SELECT * FROM next_term_begins where id='1'");
while($data=mysqli_fetch_array($query))
{
	$Next_Term_Begins = $data['Next_Term_Begins'];
    $Next_Term_Ends = $data['Next_Term_Ends'];
    $Time_School_open = $data['Time_School_open'];
    $Times_Present = $data['Times_Present'];
    $Cause_Absent = $data['Cause_Absent'];
    $Times_Absent = $data['Times_Absent'];
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
						<div class="panel-heading">Next Term Begins</div>
						<div class="panel-body">
							<div class="row">
			<div class="form-group">
            <div class="col-lg-2">
            <label>Next Term Begins: </label>      
            </div>
            <div class="col-lg-4">
            <input class="form-control" name="Next_Term_Begins" value="<?php echo $Next_Term_Begins; ?>" title="Next Term Begins">
            </div>
             <div class="col-lg-2">
            <label>Next Term Ends:</label>
            
            </div>
            <div class="col-lg-4">
            <input class="form-control" name="Next_Term_end" value="<?php echo $Next_Term_Ends; ?>" title="Next Term Ends">
            </div>
            </div><br><br>
            <div class="form-group">
            <div class="col-lg-2">
            <label>Time School Open:</label>      
            </div>
            <div class="col-lg-4">
            <input class="form-control" name="T_School_Open" value="<?php echo $Time_School_open; ?>" title="Time School Opened">
            </div>
             <div class="col-lg-2">
            <label>Times Present:</label>
            
            </div>
            <div class="col-lg-4">
            <input class="form-control" name="Times_Present" value="<?php echo $Times_Present; ?>" title="Times Present">
            </div>
            </div>
		</div><br>
			<div class="col-lg-4">
												
		</div>
		<div class="col-lg-6">
			<input type="submit" class="btn btn-primary" name="Update" title="Update Details" value="Update"></button>
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
