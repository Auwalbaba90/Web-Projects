
<?php
session_start();
    if($_SESSION['login']==null){
        header('location:logout.php');
    }

include('../config/config.php');
  if(isset($_POST['add_stud']))
  {
    $Class=$_POST['Class']; $E_Year=$_POST['E_Year']; $Student_no=$_POST['Student_no']; $house=$_POST['House'];
    $fname=$_POST['fname']; $mname=$_POST['mname']; $surname=$_POST['surname']; $gender=$_POST['gender']; 
    $dob=$_POST['dob']; $pbirth=$_POST['pbirth']; $State=$_POST['State']; $Nationality=$_POST['Nationality']; $HLan=$_POST['HLan']; $OLan=$_POST['OLan']; $Religion=$_POST['Religion']; $HAdd=$_POST['HAdd']; $aname=$_POST['aname']; $ycaname=$_POST['ycaname']; $bname=$_POST['bname']; $ycbname=$_POST['ycbname']; $Allergies=$_POST['Allergies']; $PChallenges=$_POST['PChallenges']; $FfName=$_POST['FfName']; $FMNumber=$_POST['FMNumber']; $FWNumber=$_POST['FWNumber']; $Femail=$_POST['Femail']; $FNationality=$_POST['FNationality']; $FPStatus=$_POST['FPStatus']; $FPermanent_Add=$_POST['FPermanent_Add']; $MFName=$_POST['MFName']; $MMNumber=$_POST['MMNumber']; $MWNumber=$_POST['MWNumber']; $Memail=$_POST['Memail']; $MNationality=$_POST['MNationality']; $MPStatus=$_POST['MPStatus'];

            $query=mysqli_query($db,"INSERT INTO students(Addmission_No,First_Name,Surname,Other_Name,Class,Gender,D_O_B,Place_of_Birth,State,Nationality,Home_Language,Others_Language,Religion,Home_Address,A_Name,A_Year_Class,B_Name,B_Year_Class,Allergies,Physical_Challenges,Father_Full_Name,Father_M_Number,Father_W_Number,Father_Email_Address,Father_Nationality,Father_Parental_Status,Father_Permanent_Address,Mother_Full_Name,Mother_M_Number,Mother_W_Number,Mother_Email_Address,Mother_Nationality,Mother_Parental_Status,House,Entry_Year) values('$Student_no','$fname','$mname','$surname','$Class','$gender','$dob','$pbirth','$State','$Nationality','$HLan','$OLan','$Religion','$HAdd','$aname','$ycaname','$bname','$ycbname','$Allergies','$PChallenges','$FfName','$FMNumber','$FWNumber','$Femail','$FNationality','$FPStatus','$FPermanent_Add','$MFName','$MMNumber','$MWNumber','$Memail','$MNationality','$MPStatus',' $house','$E_Year')");
            if($query)
            {
              echo "<script>alert('Student Added Successfully');</script>";
              //header('location:user-login.php');
           }else{
            echo "<script>alert('There is Error Chack and Try Again!!.');</script>";
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
<title>Students Register</title>
<link rel="shortcut icon" href="../images/naub-children-school.jpg">
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet">
<link href="../bower_components/metisMenu/dist/metisMenu.min.css"
	rel="stylesheet">
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">
<link href="../bower_components/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
</head>

<body>
<form method="post" enctype="multipart/form-data" >
	<div id="wrapper">
	<?php include('leftbar.php');?>


		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="page-header"> <!--<?php echo strtoupper("welcome"." ".htmlentities($_SESSION['submit']));?>--></h4>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Personal Details</div>
			<div class="panel-body">
			<div class="row">
			<div class="col-lg-10">
			<div class="form-group">
		    <div class="col-lg-4">
			<label>Class:<span id="" style="font-size:11px;color:red">*</span>	</label>
			</div>
			<div class="col-lg-6">
				 <select class="form-control" name="Class"  id="Class" required="required" title="Class" >
        <option VALUE="">Select</option>
        <option VALUE="Crech">Crech</option>
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
											
					</div>	
										
					<br><br>
							<?php 
$query=mysqli_query($db,"SELECT * FROM current_session where id='1'");
while($data=mysqli_fetch_array($query))
{
  $Session = $data['Session'];
    $Term = $data['Term'];
  }
?>
		<div class="form-group">
		<div class="col-lg-4">
		<label>Entry Year:<span id="" style="font-size:11px;color:red">*</span></label>
		</div>
		<div class="col-lg-6">
 	<input class="form-control" name="E_Year" value="<?php echo $Session; ?>" title="Entry Year" required="required" readonly>
	</div>
	 </div>	
										
	 <br><br>									
	<div class="form-group">
		<div class="col-lg-4">
		<label>Student Registration No:<span id="" style="font-size:11px;color:red">*</span></label>
		</div>
		<div class="col-lg-6">
		
	   <input type="text" class="form-control" id="Student_no" onBlur="userAvailability()" name="Student_no" required="required" placeholder="Student Identity" title="Student Reg No">
     <span id="user-availability-status1" style="font-size:12px;"></span>
	 </div>	
										
	 <br><br>								
	
	</div>
	<div class="form-group">
		<div class="col-lg-4">
		<label>House:<span id="" style="font-size:11px;color:red">*</span></label>
		</div>
		<div class="col-lg-6">
		
	   <select class="form-control" name="House" id="House"  title="House" required="required">
       <option value="">Select</option>
       <option value="Tiger House">Tiger House</option>
       <option value="Hippopotamus House">Hippopotamus House</option>
       <option value="Dragon House">Dragon House</option>
       <option value="Rhino House">Rhino House</option>
       <option value="Stallion House">Stallion House</option>
     </select>
	 </div>	
										
	 <br><br>								
	
	</div>
	<br><br>									
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
      <label>First Name:<span id="" style="font-size:11px;color:red">*</span>  </label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="fname" required="required" pattern="[A-Za-z]+$" title="First Name">
      </div>
       <div class="col-lg-2">
      <label>Middle Name:<span id="" style="font-size:11px;color:red">*</span></label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="mname" required="required" pattern="[A-Za-z]+$" title="Middle Name">
      </div>
      </div>  
      <br><br>
                
    <div class="form-group">
        <div class="col-lg-2">
      <label>Surname:</label>
      </div>
      <div class="col-lg-4">
      <input class="form-control" class="form-control" name="surname" pattern="[A-Za-z]+$" title="Surname">
      </div>
       <div class="col-lg-2">
      <label>Gender:<span id="" style="font-size:11px;color:red">*</span></label>
      
      </div>
      <div class="col-lg-4">
     <input type="radio" name="gender" id="male" value="Male" title="Male" checked="checked">&nbsp; Male &nbsp;
     <input type="radio" name="gender" id="female" value="feale" title="Female" > &nbsp; Female &nbsp;
      </div>
      </div>  
  <br><br>    
         <div class="form-group">
       <div class="col-lg-2">
      <label>Date of Birth:<span id="" style="font-size:11px;color:red">*</span> </label>
      
      </div>
      <div class="col-lg-4">
      <input type="Date" class="form-control" name="dob" required="required" title="Date of Birth">
      </div>
       <div class="col-lg-2">
      <label>Place of Birth:<span id="" style="font-size:11px;color:red">*</span> </label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="pbirth" id="pbirth" required="required" title="Place of Birth">
      </div>
      </div>  
      <br><br>
          
         <div class="form-group">
       <div class="col-lg-2">
      <label>State:<span id="" style="font-size:11px;color:red">*</span></label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="State" required="required" type="text" pattern="[A-Za-z]+$" title="State">
      </div>
       <div class="col-lg-2">
      <label>Nationality:<span id="" style="font-size:11px;color:red">*</span></label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="Nationality" required="required" type="text" pattern="[A-Za-z]+$" title="Nationality">
      </div>  
      <br><br>  
         <div class="form-group">
       <div class="col-lg-2">
      <label>Home Language:<span id="" style="font-size:11px;color:red">*</span></label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="HLan" required="required" type="text" pattern="[A-Za-z]+$" title="Home Language">
      </div>
       <div class="col-lg-2">
      <label>Others Language:</label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="OLan" type="text" pattern="[A-Za-z]+$" title="Others Language">
      </div>
      </div>  
      <br><br>
      <div class="form-group">
        <div class="col-lg-2">
      <label>Religion:<span id="" style="font-size:11px;color:red">*</span>  </label>
      
      </div>
      <div class="col-lg-4">
      <input type="text" class="form-control" name="Religion" required="required" pattern="[A-Za-z]+$" title="Religion">
      </div>
       <div class="col-lg-2">
      <label>Home Address:<span id="" style="font-size:11px;color:red">*</span> </label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="HAdd" required="required" title="Home Address">
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
      <input class="form-control" name="aname" title="School Attended" >
      </div>
       <div class="col-lg-2">
      <label>Year & Class:</label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="ycaname" placeholder="E.g: 2023 / Primary 1" title="Year & Class">
      </div>
      </div>  
      <br><br>
      <div class="form-group">
        <div class="col-lg-2">
      <label>(B). Name:</label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="bname" title="School Attended">
      </div>
       <div class="col-lg-2">
      <label>Year & Class:</label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="ycbname" placeholder="E.g: 2023 / Primary 1" title="Year & Class">
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
      <input class="form-control" name="Allergies" title="Allergies">
      </div>
       <div class="col-lg-2">
      <label>Physical Challenges:<span id="" style="font-size:11px;color:red">*</span> </label>
      
      </div>
      <div class="col-lg-4">
      <select name="PChallenges" id="PChallenges"  class="form-control" required="required" title="Physical Challenges">
        <option value="">Select</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
        </select>
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
      <label>Full Name:<span id="" style="font-size:11px;color:red">*</span> </label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" type="text" name="FfName" required="required" title="Full Name" >
      </div>
       <div class="col-lg-2">
      <label>Mobile Number<span id="" style="font-size:11px;color:red">*</span> </label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control"  type="Number" name="FMNumber" required="required" maxlength="15" title="Mobile Number">
      </div>
      </div>  
      <br><br>
                
    <div class="form-group">
        <div class="col-lg-2">
      <label>WhatsApp Number:</label>
      </div>
      <div class="col-lg-4">
      <input class="form-control"  type="Number" name="FWNumber" placeholder="Optional" maxlength="15" title="WhatsApp Number">
      </div>
       <div class="col-lg-2">
      <label>Email Address:</label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control"  type="Email" name="Femail" placeholder="Optional" title="Email Address">
      </div>
      
      </div>  
      
  <br><br><br><br>    
         <div class="form-group">
       <div class="col-lg-2">
      <label>Nationality:<span id="" style="font-size:11px;color:red">*</span> </label>
      
      </div>
      <div class="col-lg-4">
           <select name="FNationality" id="FNationality"  class="form-control" required="required" title="Nationality">
        <option value="">Select</option>
        <option value="Nigerian">Nigerian</option>
        <option value="Other">Other</option>
    </select>
      </div>
       <div class="col-lg-2">
      <label>Parental Status:<span id="" style="font-size:11px;color:red">*</span></label>
      
      </div>
      <div class="col-lg-4">
      <select name="FPStatus" id="FPStatus"  class="form-control" required="required" title="Parental Status">
            <option value="">Select</option>
            <option value="Officer">Officer</option>
            <option value="Soldier">Soldier</option>
            <option value="Staff">Staff</option>
            <option value="Civilian">Civilian</option>
      </select>
      </div>
      </div>  
      <br><br><br>
      
      
          
         <div class="form-group">
       <div class="col-lg-2">
      <label>Permanent Address:<span id="" style="font-size:11px;color:red">*</span></label>
      
      </div>
      <div class="col-lg-4">
      <textarea class="form-control" rows="3" name="FPermanent_Add"  id="FPermanent_Add" title="Permanent Address"></textarea>
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
      <label>Full Name:<span id="" style="font-size:11px;color:red">*</span> </label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" type="text" name="MFName" required="required" title="Full Name" >
      </div>
       <div class="col-lg-2">
      <label>Mobile Number:<span id="" style="font-size:11px;color:red">*</span> </label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control"  type="Number" name="MMNumber" required="required" maxlength="15" title="Mobile Number">
      </div>
      </div>  
      <br><br>
                
    <div class="form-group">
        <div class="col-lg-2">
      <label>WhatsApp Number:</label>
      </div>
      <div class="col-lg-4">
      <input class="form-control"  type="Number" name="MWNumber" placeholder="Optional" maxlength="15" title="WhatsApp Number">
      </div>
       <div class="col-lg-2">
      <label>Email Address:</label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control"  type="Email" name="Memail" placeholder="Optional" title="Email Address">
      </div>
      
      </div>  
      
  <br><br><br><br>    
         <div class="form-group">
       <div class="col-lg-2">
      <label>Nationality:<span id="" style="font-size:11px;color:red">*</span> </label>
      
      </div>
      <div class="col-lg-4">
           <select name="MNationality" id="MNationality"  class="form-control" required="required" title="Nationality">
        <option value="">Select</option>
        <option value="Nigerian">Nigerian</option>
        <option value="Other">Other</option>
    </select>
      </div>
       <div class="col-lg-2">
      <label>Parental Status:<span id="" style="font-size:11px;color:red">*</span></label>
      
      </div>
      <div class="col-lg-4">
      <select name="MPStatus" id="MPStatus"  class="form-control" required="required" title="Parental Status">
            <option value="">Select</option>
            <option value="Officer">Officer</option>
            <option value="Soldier">Soldier</option>
            <option value="Staff">Staff</option>
            <option value="Civilian">Civilian</option>
      </select>
      </div>
      </div>
      <br><br>
    </div>          
       
  <div class="form-group">
  <div class="col-lg-4">
  </div>
  <div class="col-lg-6">
  &nbsp;&nbsp;<input type="submit" class="btn btn-primary" id="add_stud" name="add_stud" value="Register"></button>
  </div>
 	 </div>      
  		</div>
			</div>
		</div>
	</div>
	</form>

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
data:'Student_no='+$("#Student_no").val(),
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
