<?php 
    session_start();
    if($_SESSION['login']==null){
        header('location:logout.php');
    }
$db = mysqli_connect('localhost','root','','naub-staff-children-school');

?> 

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>View Students</title>
<link rel="shortcut icon" href="../images/naub-children-school.jpg">
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet">
<link href="../bower_components/metisMenu/dist/metisMenu.min.css"
	rel="stylesheet">
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">
<link href="../bower_components/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
</head>
<style type="text/css">
  .passport{
  max-width: 100%;
  border: 4px solid #d6d6c2;
  /*padding: 2px;*/
  border-radius: 2px;
  float: left;
</style>
<body>
	<div id="wrapper">
	<?php include('leftbar.php');?>


		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="page-header"> <!--<?php echo strtoupper("welcome"." ".htmlentities($_SESSION['submit']));?>--></h4>
				</div>
				<!-- /.col-lg-12 -->
			</div>
      <?php 
      $query=mysqli_query($db,"SELECT * FROM students where id= {$_GET['id']}");
while($data=mysqli_fetch_array($query)){
              $id=$data['id']; $Addmission_No=$data['Addmission_No']; $First_Name=$data['First_Name']; $Surname=$data['Surname']; $Other_Name=$data['Other_Name']; $Class=$data['Class']; $Gender=$data['Gender']; $D_O_B=$data['D_O_B']; $Place_of_Birth=$data['Place_of_Birth']; $State=$data['State']; $Nationality=$data['Nationality']; $Home_Language=$data['Home_Language']; $Others_Language=$data['Others_Language'];$Religion=$data['Religion']; $Home_Address=$data['Home_Address']; $A_Name=$data['A_Name']; $A_Year_Class=$data['A_Year_Class']; $B_Name=$data['B_Name']; $B_Year_Class=$data['B_Year_Class']; $Allergies=$data['Allergies']; $Physical_Challenges=$data['Physical_Challenges']; $Father_Full_Name=$data['Father_Full_Name']; $Father_M_Number=$data['Father_M_Number']; $Father_W_Number=$data['Father_W_Number']; $Father_Email_Address=$data['Father_Email_Address']; $Father_Nationality=$data['Father_Nationality']; $Father_Parental_Status=$data['Father_Parental_Status']; $Father_Permanent_Address=$data['Father_Permanent_Address']; $Mother_Full_Name=$data['Mother_Full_Name']; $Mother_M_Number=$data['Mother_M_Number']; $Mother_W_Number=$data['Mother_W_Number']; $Mother_Email_Address=$data['Mother_Email_Address']; $Mother_Nationality=$data['Mother_Nationality']; $Mother_Parental_Status=$data['Mother_Parental_Status']; $House=$data['House']; $Entry_Year=$data['Entry_Year']; $Father_Email_Address=$data['Father_Email_Address'];
          }

          if ($Gender == 'Male') {
            $image = '<img class="passport" src="../images/avatar_male.png" title="Passport">';
          }else{
            $image = '<img class="passport" src="../images/avatar_female.png" title="Passport">';
          }
        ?>
			<!-- /.row -->
			<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Personal Details</div>
			<div class="panel-body">
			<div class="row">
        <div class="col-lg-6">
        <div class="form-group">
            <div class="col-lg-5">
              <label><?php echo $image;?></label>
            </div>                           
          </div> 
        </div>
<!--==============================================================-->
			<div class="col-lg-6">
        <div class="form-group">
            <div class="col-lg-6">
              <label>Registration No:</label>
            </div>
            <div class="col-lg-4">
                <span style="font-size: 17px;"><?php echo $Addmission_No ;?></span>
            </div>
                                            
          </div><br>
          <div class="form-group">
            <div class="col-lg-6">
              <label>Class:</label>
            </div>
            <div class="col-lg-4">
              <span style="font-size: 17px;"><?php echo $Class ;?></span>
            </div>
          </div><br>
          <div class="form-group">
            <div class="col-lg-6">
              <label>House:</label>
          </div>
          <div class="col-lg-4">
              <span style="font-size: 17px;"><?php echo $House ;?></span>
          </div>                               
          </div><br>
          <div class="form-group">
            <div class="col-lg-6">
              <label>Entry Year:</label>
          </div>
          <div class="col-lg-4">
              <span style="font-size: 17px;"><?php echo $Entry_Year ;?></span>
          </div>                               
          </div> 
        </div>

					</div>
								
							</div>
							
						</div>
						
					</div>

					<div class="col-lg-12">
      <div class="panel panel-default">
      <div class="panel-heading">Students Details</div>
      <div class="panel-body">
      <div class="row">
      <div class="col-lg-12">
      <div class="form-group">
        <div class="col-lg-2">
      <label>First Name:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $First_Name ;?></span>
      </div>
       <div class="col-lg-2">
      <label>Middle Name:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $Surname ;?></span>
      </div>
      </div>  
      <br><br>
                
    <div class="form-group">
        <div class="col-lg-2">
      <label>Surname:</label>
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $Other_Name ;?></span>
      </div>
       <div class="col-lg-2">
      <label>Gender:</label>
      
      </div>
      <div class="col-lg-4">
     <span style="font-size: 17px;"><?php echo $Gender ;?></span>
      </div>
      </div>  
  <br><br>    
         <div class="form-group">
       <div class="col-lg-2">
      <label>Date of Birth:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $D_O_B ;?></span>
      </div>
       <div class="col-lg-2">
      <label>Place of Birth:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $Place_of_Birth ;?></span>
      </div>
      </div>  
      <br><br>
          
         <div class="form-group">
       <div class="col-lg-2">
      <label>State:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $State ;?></span>
      </div>
       <div class="col-lg-2">
      <label>Nationality:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $Nationality ;?></span>
      </div>  
      <br><br>  
         <div class="form-group">
       <div class="col-lg-2">
      <label>Home Language:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $Home_Language ;?></span>
      </div>
       <div class="col-lg-2">
      <label>Others Language:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $Others_Language ;?></span>
      </div>
      </div>  
      <br><br>
      <div class="form-group">
        <div class="col-lg-2">
      <label>Religion:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $Religion ;?></span>
      </div>
       <div class="col-lg-2">
      <label>Home Address:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $Home_Address ;?></span>
      </div>
      </div>  
      <br>
      <h3><b>Schools Attended:</b></h3>
      <br>
      <div class="form-group">
        <div class="col-lg-2">
      <label>(A). Name:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $A_Name ;?></span>
      </div>
       <div class="col-lg-2">
      <label>Year & Class:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $A_Year_Class ;?></span>
      </div>
      </div>  
      <br><br>
      <div class="form-group">
        <div class="col-lg-2">
      <label>(B). Name:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $B_Name ;?></span>
      </div>
       <div class="col-lg-2">
      <label>Year & Class:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $B_Year_Class ;?></span>
      </div>
      </div>  
      <br>
        <h3><b>Medical History:</b></h3>
      <br>
      <div class="form-group">
        <div class="col-lg-2">
      <label>Allergies:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $Allergies ;?></span>
      </div>
       <div class="col-lg-2">
      <label>Physical Challenges:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $Physical_Challenges ;?></span>
      </div>
      </div>
      </div>  
      <br><br>
    </div>
        </div>
    </div>
      </div>
    </div>

    <div class="col-lg-12">
      <div class="panel panel-default">
      <div class="panel-heading">Family Information</div>
      <div class="panel-body">
        <h3><b>Father:</b></h3>
      <br>
      <div class="row">
      <div class="col-lg-12">
      <div class="form-group">
        <div class="col-lg-2">
      <label>Full Name:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $Father_Full_Name ;?></span>
      </div>
       <div class="col-lg-2">
      <label>Mobile Number:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $Father_M_Number ;?></span>
      </div>
      </div>  
      <br><br>
                
    <div class="form-group">
        <div class="col-lg-2">
      <label>WhatsApp Number:</label>
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $Father_W_Number ;?></span>
      </div>
       <div class="col-lg-2">
      <label>Email Address:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $Father_Email_Address ;?></span>
      </div>
      
      </div>  
      
  <br><br><br><br>    
         <div class="form-group">
       <div class="col-lg-2">
      <label>Nationality:</label>
      
      </div>
      <div class="col-lg-4">
          <span style="font-size: 17px;"><?php echo $Father_Nationality ;?></span>
      </div>
       <div class="col-lg-2">
      <label>Parental Status:</label>
      
      </div>
      <div class="col-lg-4">
        <span style="font-size: 17px;"><?php echo $Father_Parental_Status ;?></span>
      </div>
      </div>  
      <br><br><br>
      
      
          
         <div class="form-group">
       <div class="col-lg-4">
      <label>Permanent Address:</label>
      
      </div>
      <div class="col-lg-6">
      <span style="font-size: 17px;"><?php echo $Father_Permanent_Address ;?></span>
      </div><br>
      </div>  
      <br><br>
      
      </div>  
        <h3>&nbsp;&nbsp;<b>Mother:</b></h3>
      <br>
      <div class="row">
      <div class="col-lg-12">
      <div class="form-group">
        <div class="col-lg-2">
      <label>Full Name:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $Mother_Full_Name ;?></span>
      </div>
       <div class="col-lg-2">
      <label>Mobile Number:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $Mother_M_Number ;?></span>
      </div>
      </div>  
      <br><br>
                
    <div class="form-group">
        <div class="col-lg-2">
      <label>WhatsApp Number:</label>
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $Mother_W_Number ;?></span>
      </div>
       <div class="col-lg-2">
      <label>Email Address:</label>
      
      </div>
      <div class="col-lg-4">
      <span style="font-size: 17px;"><?php echo $Mother_Email_Address ;?></span>
      </div>
      
      </div>  
      
  <br><br><br><br>    
         <div class="form-group">
       <div class="col-lg-2">
      <label>Nationality:</label>
      
      </div>
      <div class="col-lg-4">
          <span style="font-size: 17px;"><?php echo $Mother_Nationality ;?></span>
      </div>
       <div class="col-lg-2">
      <label>Parental Status:</label>
      
      </div>
      <div class="col-lg-4">
        <span style="font-size: 17px;"><?php echo $Mother_Parental_Status ;?></span>
      </div>
      </div>
      <br><br>
    </div>          
       
  <div class="form-group">
  <div class="col-lg-4">
  </div>
  <div class="col-lg-6">
  &nbsp;&nbsp;<a href="Students.php"><button class="btn btn-primary" id="Back" name="Back">Back</button></a>
  </div> 
 	 </div>      
  		</div>
			</div>
      <!--<?php echo '<a href="edit-student.php?id='.$id.'" style="font-size: 16px; text-align: left; float: left;">Edit</a>';?>-->
  <?php echo'<a href="delete.php?id='.$id.'" style="font-size: 16px; text-align: right; float: right;"><span class="fa fa-trash "> Delete</span></a>';?>
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

</body>

</html>
