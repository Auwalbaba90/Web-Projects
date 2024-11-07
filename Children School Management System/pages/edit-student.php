
<?php
session_start();
  if($_SESSION['submit']==null){
    header('location:logout.php');
  }

include('../config/config.php');
  if(isset($_POST['Update_std']))
  {
    $Class=$_POST['Class']; $Student_no=$_POST['Student_no']; $fname=$_POST['fname']; $mname=$_POST['mname']; $surname=$_POST['surname']; $gender=$_POST['gender']; $dob=$_POST['dob']; $pbirth=$_POST['pbirth']; $State=$_POST['State']; $Nationality=$_POST['Nationality']; $HLan=$_POST['HLan']; $OLan=$_POST['OLan']; $Religion=$_POST['Religion']; $HAdd=$_POST['HAdd']; $aname=$_POST['aname']; $ycaname=$_POST['ycaname']; $bname=$_POST['bname']; $ycbname=$_POST['ycbname']; $Allergies=$_POST['Allergies']; $PChallenges=$_POST['PChallenges']; $FfName=$_POST['FfName']; $FMNumber=$_POST['FMNumber']; $FWNumber=$_POST['FWNumber']; $Femail=$_POST['Femail']; $FNationality=$_POST['FNationality']; $FPStatus=$_POST['FPStatus']; $FPermanent_Add=$_POST['FPermanent_Add']; $MFName=$_POST['MFName']; $MMNumber=$_POST['MMNumber']; $MWNumber=$_POST['MWNumber']; $Memail=$_POST['Memail']; $MNationality=$_POST['MNationality']; $MPStatus=$_POST['MPStatus']; $House=$_POST['House'];

    $query=mysqli_query($db,"UPDATE `students` SET Addmission_No='$Student_no',First_Name='$fname',Surname='$mname',Other_Name='$surname',Class='$Class',Gender='$gender',D_O_B='$dob',Place_of_Birth='$pbirth',State='$State',Nationality='$Nationality',Home_Language='$HLan',Others_Language='$OLan',Religion='$Religion',Home_Address='$HAdd',A_Name='$aname',A_Year_Class='$ycaname',B_Name='$bname',B_Year_Class='$ycbname',Allergies='$Allergies',Physical_Challenges='$PChallenges',Father_Full_Name='$FfName',Father_M_Number='$FMNumber',Father_W_Number='$FWNumber',Father_Email_Address='$Femail',Father_Nationality='$FNationality',Father_Parental_Status='$FPStatus',Father_Permanent_Address='$FPermanent_Add',Mother_Full_Name='$MFName',Mother_M_Number='$MMNumber',Mother_W_Number='$MWNumber',Mother_Email_Address='$Memail',Mother_Nationality='$MNationality',Mother_Parental_Status='$MPStatus' ,House='$House' WHERE id= {$_GET['id']}");
        if($query)
    {
        echo "<script>alert('Student Information Updated Successfully');</script>";
    }else{
      echo "<script>alert('There is Error or Student Reg. No Already Exist Check and Try Again!!!.');</script>";
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
<title>Edit Student</title>
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
<form method="post" >
  <div id="wrapper">
  <?php include('leftbar.php');?>


    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h4 class="page-header"> <!--<?php echo strtoupper("welcome"." ".htmlentities($_SESSION['submit']));?>--></h4>
        </div>
        <!-- /.col-lg-12 -->
         <?php 
         $db = mysqli_connect('localhost','root','','naub-staff-children-school');
          $query = mysqli_query($db,"SELECT * FROM students where id= {$_GET['id']}") or die(mysqli_error());
            while ($data = mysqli_fetch_array($query)){
              $id=$data['id']; $Addmission_No=$data['Addmission_No']; $First_Name=$data['First_Name']; $Surname=$data['Surname']; $Other_Name=$data['Other_Name']; $Class=$data['Class']; $Gender=$data['Gender']; $D_O_B=$data['D_O_B']; $Place_of_Birth=$data['Place_of_Birth']; $State=$data['State']; $Nationality=$data['Nationality']; $Home_Language=$data['Home_Language']; $Others_Language=$data['Others_Language'];$Religion=$data['Religion']; $Home_Address=$data['Home_Address']; $A_Name=$data['A_Name']; $A_Year_Class=$data['A_Year_Class']; $B_Name=$data['B_Name']; $B_Year_Class=$data['B_Year_Class']; $Allergies=$data['Allergies']; $Physical_Challenges=$data['Physical_Challenges']; $Father_Full_Name=$data['Father_Full_Name']; $Father_M_Number=$data['Father_M_Number']; $Father_W_Number=$data['Father_W_Number']; $Father_Email_Address=$data['Father_Email_Address']; $Father_Nationality=$data['Father_Nationality']; $Father_Parental_Status=$data['Father_Parental_Status']; $Father_Permanent_Address=$data['Father_Permanent_Address']; $Mother_Full_Name=$data['Mother_Full_Name']; $Mother_M_Number=$data['Mother_M_Number']; $Mother_W_Number=$data['Mother_W_Number']; $Mother_Email_Address=$data['Mother_Email_Address']; $Mother_Nationality=$data['Mother_Nationality']; $Mother_Parental_Status=$data['Mother_Parental_Status']; $House=$data['House']; $Entry_Year=$data['Entry_Year'];
          }
        ?>
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
      <label>Class:<span id="" style="font-size:11px;color:red">*</span>  </label>
      </div>
      <div class="col-lg-6">
         <input class="form-control" name="Class" id="Class" value="<?php echo $Class ;?>" title="Class" required="required" readonly>
        </div>
                      
          </div>  
                    
          <br><br>
                
    <div class="form-group">
    <div class="col-lg-4">
    <label>Entry Year:<span id="" style="font-size:11px;color:red">*</span></label>
    </div>
    <div class="col-lg-6">
  <input class="form-control" name="E_Year" value="<?php echo $Entry_Year ;?>" title="Entry Year" required="required" readonly>
  </div>
   </div> 
                    
   <br><br>                 
  <div class="form-group">
    <div class="col-lg-4">
    <label>Registration No:<span id="" style="font-size:11px;color:red">*</span></label>
    </div>
    <div class="col-lg-6">
     <input type="Number" class="form-control" value="<?php echo $Addmission_No ;?>" readonly id="Student_no" name="Student_no" required="required" title="Student Reg No">
   </div>

   <br><br>                 
  <div class="form-group">
    <div class="col-lg-4">
    <label>House:<span id="" style="font-size:11px;color:red">*</span></label>
    </div>
    <div class="col-lg-6">
     <input type="text" class="form-control" readonly value="<?php echo $House ;?>" id="House" name="House" required="required" title="Student Reg No">
   </div> 
  </div> 
  </div>
  <div class="form-group">
    <center><div class="col-lg-12">
    <a href=""><span>Change Passport</span></a>
    </div></center>       
  </div>
  <br>                      
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
      <input class="form-control" name="fname" value="<?php echo $First_Name ;?>" required="required" pattern="[A-Za-z]+$" title="First Name">
      </div>
       <div class="col-lg-2">
      <label>Middle Name:<span id="" style="font-size:11px;color:red">*</span></label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="mname" value="<?php echo $Surname ;?>" required="required" pattern="[A-Za-z]+$" title="Middle Name">
      </div>
      </div>  
      <br><br>
                
    <div class="form-group">
        <div class="col-lg-2">
      <label>Surname:</label>
      </div>
      <div class="col-lg-4">
      <input class="form-control" class="form-control" value="<?php echo $Other_Name ;?>" name="surname" pattern="[A-Za-z]+$" title="Surname">
      </div>
       <div class="col-lg-2">
      <label>Gender:<span id="" style="font-size:11px;color:red">*</span></label>
      
      </div>
      <div class="col-lg-4">
       <select class="form-control" name="gender" id="gender" title="gender">
         <option value="<?php echo $Gender ;?>"><?php echo $Gender ;?></option>
         <option value="Male">Male</option>
         <option value="Female">Female</option>
       </select>
      </div>
      </div>  
  <br><br>    
         <div class="form-group">
       <div class="col-lg-2">
      <label>Date of Birth:<span id="" style="font-size:11px;color:red">*</span> </label>
      
      </div>
      <div class="col-lg-4">
      <input type="Date" class="form-control" name="dob" value="<?php echo $D_O_B ;?>" required="required" title="Date of Birth">
      </div>
       <div class="col-lg-2">
      <label>Place of Birth:<span id="" style="font-size:11px;color:red">*</span> </label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="pbirth" id="pbirth" value="<?php echo $Place_of_Birth ;?>" required="required" title="Place of Birth">
      </div>
      </div>  
      <br><br>
          
         <div class="form-group">
       <div class="col-lg-2">
      <label>State:<span id="" style="font-size:11px;color:red">*</span></label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="State" value="<?php echo $State ;?>" required="required" type="text" pattern="[A-Za-z]+$" title="State">
      </div>
       <div class="col-lg-2">
      <label>Nationality:<span id="" style="font-size:11px;color:red">*</span></label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="Nationality" value="<?php echo $Nationality ;?>" required="required" type="text" pattern="[A-Za-z]+$" title="Nationality">
      </div>  
      <br><br>  
         <div class="form-group">
       <div class="col-lg-2">
      <label>Home Language:<span id="" style="font-size:11px;color:red">*</span></label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="HLan" required="required" value="<?php echo $Home_Language ;?>" type="text" pattern="[A-Za-z]+$" title="Home Language">
      </div>
       <div class="col-lg-2">
      <label>Others Language:</label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="OLan" type="text" value="<?php echo $Others_Language ;?>" pattern="[A-Za-z]+$" title="Others Language">
      </div>
      </div>  
      <br><br>
      <div class="form-group">
        <div class="col-lg-2">
      <label>Religion:<span id="" style="font-size:11px;color:red">*</span>  </label>
      
      </div>
      <div class="col-lg-4">
      <input type="text" class="form-control" name="Religion" value="<?php echo $Religion ;?>" required="required" pattern="[A-Za-z]+$" title="Religion">
      </div>
       <div class="col-lg-2">
      <label>Home Address:<span id="" style="font-size:11px;color:red">*</span> </label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="HAdd" value="<?php echo $Home_Address ;?>" required="required" title="Home Address">
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
      <input class="form-control" name="aname" value="<?php echo $A_Name ;?>" title="School Attended" >
      </div>
       <div class="col-lg-2">
      <label>Year & Class:</label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="ycaname" value="<?php echo $A_Year_Class ;?>" placeholder="E.g: 2023 / Primary 1" title="Year & Class">
      </div>
      </div>  
      <br><br>
      <div class="form-group">
        <div class="col-lg-2">
      <label>(B). Name:</label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="bname" value="<?php echo $B_Name ;?>" title="School Attended">
      </div>
       <div class="col-lg-2">
      <label>Year & Class:</label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control" name="ycbname" value="<?php echo $B_Year_Class ;?>" placeholder="E.g: 2023 / Primary 1" title="Year & Class">
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
      <input class="form-control" name="Allergies" value="<?php echo $Allergies ;?>" title="Allergies">
      </div>
       <div class="col-lg-2">
      <label>Physical Challenges:<span id="" style="font-size:11px;color:red">*</span> </label>
      
      </div>
      <div class="col-lg-4">
      <select name="PChallenges" id="PChallenges"  class="form-control" required="required" title="Physical Challenges">
        <option value="<?php echo $Physical_Challenges ;?>"><?php echo $Physical_Challenges ;?></option>
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
      <input class="form-control" type="text" value="<?php echo $Father_Full_Name ;?>" name="FfName" required="required" title="Full Name" >
      </div>
       <div class="col-lg-2">
      <label>Mobile Number<span id="" style="font-size:11px;color:red">*</span> </label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control"  type="Number" value="<?php echo $Father_M_Number ;?>" name="FMNumber" required="required" maxlength="15" title="Mobile Number">
      </div>
      </div>  
      <br><br>
                
    <div class="form-group">
        <div class="col-lg-2">
      <label>WhatsApp Number:</label>
      </div>
      <div class="col-lg-4">
      <input class="form-control"  type="Number" value="<?php echo $Father_W_Number ;?>" name="FWNumber" placeholder="Optional" maxlength="15" title="WhatsApp Number">
      </div>
       <div class="col-lg-2">
      <label>Email Address:</label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control"  type="Email" value="<?php echo $Father_Email_Address ;?>" name="Femail" placeholder="Optional" title="Email Address">
      </div>
      
      </div>  
      
  <br><br><br><br>    
         <div class="form-group">
       <div class="col-lg-2">
      <label>Nationality:<span id="" style="font-size:11px;color:red">*</span> </label>
      
      </div>
      <div class="col-lg-4">
           <select name="FNationality" id="FNationality"  class="form-control" required="required" title="Nationality">
        <option value="<?php echo $Father_Nationality ;?>"><?php echo $Father_Nationality ;?></option>
        <option value="Nigerian">Nigerian</option>
        <option value="Other">Other</option>
    </select>
      </div>
       <div class="col-lg-2">
      <label>Parental Status:<span id="" style="font-size:11px;color:red">*</span></label>
      
      </div>
      <div class="col-lg-4">
      <select name="FPStatus" id="FPStatus"  class="form-control" required="required" title="Parental Status">
            <option value="<?php echo $Father_Parental_Status ;?>"><?php echo $Father_Parental_Status ;?></option>
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
      <textarea class="form-control" rows="3" name="FPermanent_Add"  id="FPermanent_Add" title="Permanent Address"><?php echo $Father_Permanent_Address ;?></textarea>
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
      <input class="form-control" type="text" name="MFName" value="<?php echo $Mother_Full_Name ;?>" required="required" title="Full Name" >
      </div>
       <div class="col-lg-2">
      <label>Mobile Number:<span id="" style="font-size:11px;color:red">*</span> </label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control"  type="Number" name="MMNumber" value="<?php echo $Mother_M_Number ;?>" required="required" maxlength="15" title="Mobile Number">
      </div>
      </div>  
      <br><br>
                
    <div class="form-group">
        <div class="col-lg-2">
      <label>WhatsApp Number:</label>
      </div>
      <div class="col-lg-4">
      <input class="form-control"  type="Number" name="MWNumber" value="<?php echo $Mother_W_Number ;?>" placeholder="Optional" maxlength="15" title="WhatsApp Number">
      </div>
       <div class="col-lg-2">
      <label>Email Address:</label>
      
      </div>
      <div class="col-lg-4">
      <input class="form-control"  type="Email" name="Memail" value="<?php echo $Mother_Email_Address ;?>" placeholder="Optional" title="Email Address">
      </div>
      
      </div>  
      
  <br><br><br><br>    
         <div class="form-group">
       <div class="col-lg-2">
      <label>Nationality:<span id="" style="font-size:11px;color:red">*</span> </label>
      
      </div>
      <div class="col-lg-4">
           <select name="MNationality" id="MNationality"  class="form-control" required="required" title="Nationality">
        <option value="<?php echo $Mother_Nationality ;?>"><?php echo $Mother_Nationality ;?></option>
        <option value="Nigerian">Nigerian</option>
        <option value="Other">Other</option>
    </select>
      </div>
       <div class="col-lg-2">
      <label>Parental Status:<span id="" style="font-size:11px;color:red">*</span></label>
      
      </div>
      <div class="col-lg-4">
      <select name="MPStatus" id="MPStatus"  class="form-control" required="required" title="Parental Status">
            <option value="<?php echo $Mother_Parental_Status ;?>"><?php echo $Mother_Parental_Status ;?></option>
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
  &nbsp;&nbsp;<input type="submit" title="Update" class="btn btn-primary" id="Update_std" name="Update_std" value="Update"></button>
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

</body>

</html>
