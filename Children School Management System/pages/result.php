<?php 
    session_start();
    if($_SESSION['Continue']==null){
        header('location:logout.php');
    }
if (!(isset($_SESSION['Continue']))) {

    header('location:index.php');

}

include('../config/config.php');
  if(isset($_POST['submit']))
 {
   $fname=$_POST['fname']; $sname=$_POST['sname']; $lname=$_POST['lname']; $Gender=$_POST['Gender']; $class=$_POST['class']; $Ad_no=$_POST['Ad_no']; $Age=$_POST['Age']; $House=$_POST['House']; $Term=$_POST['Term']; $Session=$_POST['Session']; $English_CA1=$_POST['English_CA1']; $English_CA2=$_POST['English_CA2']; $English_Exam=$_POST['English_Exam']; $English_Total=$_POST['English_Total']; $English_Remark=$_POST['English_Remark']; $Mathematics_CA1=$_POST['Mathematics_CA1']; $Mathematics_CA2=$_POST['Mathematics_CA2']; $Mathematics_Exam=$_POST['Mathematics_Exam']; $Mathematics_Total=$_POST['Mathematics_Total']; $Mathematics_Remark=$_POST['Mathematics_Remark']; $Verbal_CA1=$_POST['Verbal_CA1']; $Verbal_CA2=$_POST['Verbal_CA2']; $Verbal_Exam=$_POST['Verbal_Exam']; $Verbal_Total=$_POST['Verbal_Total']; $Verbal_Remark=$_POST['Verbal_Remark']; $Quantitative_CA1=$_POST['Quantitative_CA1']; $Quantitative_CA2=$_POST['Quantitative_CA2']; $Quantitative_Exam=$_POST['Quantitative_Exam']; $Quantitative_Total=$_POST['Quantitative_Total']; $Quantitative_Remark=$_POST['Quantitative_Remark']; $Phonics_CA1=$_POST['Phonics_CA1']; $Phonics_CA2=$_POST['Phonics_CA2']; $Phonics_Exam=$_POST['Phonics_Exam']; $Phonics_Total=$_POST['Phonics_Total']; $Phonics_Remark=$_POST['Phonics_Remark']; $handwriting_CA1=$_POST['handwriting_CA1']; $handwriting_CA2=$_POST['handwriting_CA2']; $handwriting_Exam=$_POST['handwriting_Exam']; $handwriting_Total=$_POST['handwriting_Total']; $handwriting_Remark=$_POST['handwriting_Remark']; $T_No_class=$_POST['T_No_class']; $Average=$_POST['Average']; $Total=$_POST['Total']; $Grade=$_POST['Grade']; $Class_Teacher_Comment=$_POST['Class_Teacher_Comment']; $Headmaster_Comment=$_POST['Headmaster_Comment']; $Promotion=$_POST['Promotion'];
$query=mysqli_query($db,"INSERT INTO nursery_result(First_Name,Middle_Name,Last_Name,Gender,Class,Addmission_No,Age,House,Term,Session,English_CA1,English_CA2,English_Exam,English_Total,English_Remark,Mathematics_CA1,Mathematics_CA2,Mathematics_Exam,Mathematics_Total,Mathematics_Remark,Verbal_CA1,Verbal_CA2,Verbal_Exam,Verbal_Total,Verbal_Remark,Quantitative_CA1,Quantitative_CA2,Quantitative_Exam,Quantitative_Total,Quantitative_Remark,Phonics_CA1,Phonics_CA2,Phonics_Exam,Phonics_Total,Phonics_Remark,handwriting_CA1,handwriting_CA2,handwriting_Exam,handwriting_Total,handwriting_Remark,T_No_In_Class,Average,Total,Grade,Class_Teacher_Comment,Headmaster_Comment,Promotion) values('$fname','$sname','$lname','$Gender','$class','$Ad_no','$Age','$House','$Term','$Session','$English_CA1','$English_CA2','$English_Exam','$English_Total','$English_Remark','$Mathematics_CA1','$Mathematics_CA2','$Mathematics_Exam','$Mathematics_Total','$Mathematics_Remark','$Verbal_CA1','$Verbal_CA2','$Verbal_Exam','$Verbal_Total','$Verbal_Remark','$Quantitative_CA1','$Quantitative_CA2','$Quantitative_Exam','$Quantitative_Total','$Quantitative_Remark','$Phonics_CA1','$Phonics_CA2','$Phonics_Exam','$Phonics_Total','$Phonics_Remark','$handwriting_CA1','$handwriting_CA2','$handwriting_Exam','$handwriting_Total','$handwriting_Remark','$T_No_class','$Average','$Total','$Grade','$Class_Teacher_Comment','$Headmaster_Comment','$Promotion')");
    if($query)
  {
    echo "<script>alert('Result Added Successfully');</script>";
    echo "<script>window.location.href ='add-result.php'</script>";
  }else{
    echo "<script>alert('Thare is Error Check and Try Again!!!.');</script>";
  }
}

$db = mysqli_connect('localhost','root','','naub-staff-children-school');

$query=mysqli_query($db, "SELECT Addmission_No, First_Name, Surname, Other_Name, Class, Gender, D_O_B, House from students where Addmission_No='".$_SESSION['Continue']."'");
while($row=mysqli_fetch_array($query))
    {
    $Addmission_No = $row['Addmission_No'];
    $First_Name = $row['First_Name'];
    $Surname = $row['Surname'];
    $Other_Name = $row['Other_Name'];
    $Class = $row['Class'];
    $Gender = $row['Gender'];
    $Age = $row['D_O_B'];
    $House = $row['House'];
}
?> 
<?php 
$query=mysqli_query($db,"SELECT * FROM current_session where id='1'");
while($data=mysqli_fetch_array($query))
{
  $Session = $data['Session'];
    $Term = $data['Term'];
  }

  $query=mysqli_query($db, "SELECT Class from staff_account where Staff_ID='".$_SESSION['submit']."'");
	while($row=mysqli_fetch_array($query))
    {
    $Class = $row['Class'];
}

    $query="SELECT * from students WHERE Class='$Class'";
        $result = mysqli_query($db, $query);
            $std_id = mysqli_num_rows($result);
                $std_id = $std_id;
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
			<div class="panel-heading">Personal Informations</div>
			<div class="panel-body">
			<div class="row">
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="col-lg-2">
			<label>First Name:<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="fname" value="<?php echo$First_Name; ?>" required="required" readonly="readonly" pattern="[A-Za-z]+$" title="First Name">
			</div>
			 <div class="col-lg-2">
			<label>Middle Name:<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="sname" value="<?php echo$Surname; ?>" readonly="readonly" required="required" pattern="[A-Za-z]+$" title="Middle Name">
			</div>
			</div>	
			<br><br>
								
		<div class="form-group">
		    <div class="col-lg-2">
			<label>Last Name:</label>
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="lname" value="<?php echo$Other_Name; ?>" readonly="readonly" pattern="[A-Za-z]+$" title="Last Name">
			</div>
			 <div class="col-lg-2">
			<label>Gender:<span id="" style="font-size:11px;color:red">*</span> </label>
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="Gender" value="<?php echo$Gender; ?>" readonly="readonly" pattern="[A-Za-z]+$" required="required" title="Gender">
			</div>
			</div>	
	<br><br>		
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Class:<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" readonly="readonly" name="class" value="<?php echo$Class; ?>" required="required" title="Class" >
			</div>
			 <div class="col-lg-2">
			<label>Addmission No:<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" readonly="readonly" name="Ad_no" value="<?php echo$Addmission_No; ?>" id="Ad_no" required="required" title="Addmission No">
			</div>
			</div>	
			<br><br>
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Date of Birth:<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input type="Date" class="form-control" value="<?php echo$Age; ?>" name="Age" id="Age" required="required" title="Date of Birth" readonly>
			</div>
			 <div class="col-lg-2">
			<label>House:<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="House" id="House" required="required" title="House" value="<?php echo$House; ?>" readonly>
			</div>
			</div>	
			<br><br>
			
			
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Term:<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="Term" id="Term" readonly="readonly" required="required" value="<?php echo $Term; ?>" title="Term">
			</div>
			 <div class="col-lg-2">
			<label>Session:<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="Session" id="Session" readonly="readonly" required="required" value="<?php echo $Session; ?>" title="Session">
			</div>
			</div>	
			<br><br>
			</div>	
			<br><br>
		</div>
      	</div>
		</div>		

			<div class="panel panel-default">
			<div class="panel-heading">Academic Informations</div>
			<div class="panel-body">
			<div class="row">					
		  </div>				
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                         <div class="col-lg-6">
			<th>Subjects:</th>
			</div>   
            <div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;&nbsp;C.A. 1<span id="" style="font-size:11px;color:red">*</span></th>
			</div>   
              <div class="col-lg-6">
			 <th>&nbsp;&nbsp;&nbsp;&nbsp;C.A. 2<span id="" style="font-size:11px;color:red">*</span></th>
			</div>                                 
             <div class="col-lg-6">
			   <th>&nbsp;&nbsp;&nbsp;&nbsp;Exams<span id="" style="font-size:11px;color:red">*</span></th>
			</div> 
			<div class="col-lg-6">
			   <th>&nbsp;&nbsp;&nbsp;&nbsp;Total<span id="" style="font-size:11px;color:red">*</span></th>
			</div>
			<div class="col-lg-6">
			   <th>&nbsp;&nbsp;&nbsp;&nbsp;Remarks<span id="" style="font-size:11px;color:red">*</span></th>
			</div>                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <td>English:</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control en-cal"  type="number" onkeyup="enTotal()" name="English_CA1" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control en-cal"  type="number" onkeyup="enTotal()" name="English_CA2" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control en-cal"  type="number" onkeyup="enTotal()" name="English_Exam" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control nur-cal"  type="text" onblur="nurTotal()"  name="English_Total" id="en-total" required="required" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="English_Remark" required="required" title="Remark">
				<option value="">Select</option>
				<option value="Excellent">Excellent</option>
				<option value="Very Good">Very Good</option>
				<option value="Good">Good</option>
				<option value="Pass">Pass</option>
				<option value="Poor">Poor</option>
				<option value="Fail">Fail</option>
			</select>
			</div></td>
                  </tr>

                  <tr> 
                  <td>Mathematics:</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control math-cal"  type="number" onkeyup="mathTotal()" name="Mathematics_CA1" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control math-cal"  type="number" onkeyup="mathTotal()" name="Mathematics_CA2" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control math-cal"  type="number" onkeyup="mathTotal()" name="Mathematics_Exam" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control nur-cal"  type="text" onblur="nurTotal()" name="Mathematics_Total" id="math-total" required="required" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="Mathematics_Remark" required="required" title="Remark">
				<option value="">Select</option>
				<option value="Excellent">Excellent</option>
				<option value="Very Good">Very Good</option>
				<option value="Good">Good</option>
				<option value="Pass">Pass</option>
				<option value="Poor">Poor</option>
				<option value="Fail">Fail</option>
			</select>
			</div></td>
                  </tr>

                  <tr> 
                  <td>Verbal:</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control ver-cal"  type="number" onkeyup="verTotal()" name="Verbal_CA1" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control ver-cal"  type="number" onkeyup="verTotal()" name="Verbal_CA2" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control ver-cal"  type="number" onkeyup="verTotal()" name="Verbal_Exam" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control nur-cal"  type="text" onblur="nurTotal()" id="ver-total" name="Verbal_Total" required="required" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="Verbal_Remark" required="required" title="Remark">
				<option value="">Select</option>
				<option value="Excellent">Excellent</option>
				<option value="Very Good">Very Good</option>
				<option value="Good">Good</option>
				<option value="Pass">Pass</option>
				<option value="Poor">Poor</option>
				<option value="Fail">Fail</option>
			</select>
			</div></td>
                  </tr>

                  <tr> 
                  <td>Quantitative:</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control qua-cal"  type="number" onkeyup="quaTotal()" name="Quantitative_CA1" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control qua-cal"  type="number" onkeyup="quaTotal()" name="Quantitative_CA2" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control qua-cal"  type="number" onkeyup="quaTotal()" name="Quantitative_Exam" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control nur-cal"  type="text" onblur="nurTotal()" id="qua-total" name="Quantitative_Total" required="required" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="Quantitative_Remark" required="required" title="Remark">
				<option value="">Select</option>
				<option value="Excellent">Excellent</option>
				<option value="Very Good">Very Good</option>
				<option value="Good">Good</option>
				<option value="Pass">Pass</option>
				<option value="Poor">Poor</option>
				<option value="Fail">Fail</option>
			</select>
			</div></td>
                  </tr>

                  <tr> 
                  <td>Phonics:</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control phon-cal"  type="number" onkeyup="phonTotal()" name="Phonics_CA1" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control phon-cal"  type="number" onkeyup="phonTotal()" name="Phonics_CA2" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control phon-cal"  type="number" onkeyup="phonTotal()" name="Phonics_Exam" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control nur-cal"  type="text" onblur="nurTotal()" id="phon-total" name="Phonics_Total" required="required" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="Phonics_Remark" required="required" title="Remark">
				<option value="">Select</option>
				<option value="Excellent">Excellent</option>
				<option value="Very Good">Very Good</option>
				<option value="Good">Good</option>
				<option value="Pass">Pass</option>
				<option value="Poor">Poor</option>
				<option value="Fail">Fail</option>
			</select>
			</div></td>
                  </tr>

                  <tr> 
                  <td>Handwriting:</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control Han-cal"  type="number" onkeyup="HanTotal()" name="handwriting_CA1" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control Han-cal"  type="number" onkeyup="HanTotal()" name="handwriting_CA2" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control Han-cal"  type="number" onkeyup="HanTotal()" name="handwriting_Exam" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control nur-cal"  type="text" onblur="nurTotal()" id="Han-total" name="handwriting_Total" required="required" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="handwriting_Remark" required="required" title="Remark">
				<option value="">Select</option>
				<option value="Excellent">Excellent</option>
				<option value="Very Good">Very Good</option>
				<option value="Good">Good</option>
				<option value="Pass">Pass</option>
				<option value="Poor">Poor</option>
				<option value="Fail">Fail</option>
			</select>
			</div></td>
                  </tr>
                                        
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                        
                    <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <br>
                <div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                         <div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;&nbsp;Total No. In Class:<span id="" style="font-size:11px;color:red">*</span>	</label></th>
			<div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;Total:<span id="" style="font-size:11px;color:red">*</span></th>
			</div>
			</div>   
			<th>&nbsp;&nbsp;&nbsp;Average:<span id="" style="font-size:11px;color:red">*</span>	</label></th>
			</div>   
			<div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;Grade:<span id="" style="font-size:11px;color:red">*</span></th>
			</div>                                    
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <td><div class="col-lg-6">
				  <input style="width: 100px;" class="form-control" value="<?php echo$std_id; ?>" type="number" name="T_No_class" required="required" title="Total No. In Class" readonly>
				  </div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control"  type="number" onblur="nuraverage()" id="nur_total" name="Total" required="required" title="Total" readonly>
			</div></td>
			<td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control" type="number" id="nuraver-total" name="Average" required="required" title="Average" readonly>
			</div></td>
			<td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="Grade" title="Grade" id="Grade" required="required">
				<option value="">Select</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="">D</option>
				<option value="E">E</option>
				<option value="F">F</option>
			</select>
			</div></td>
                  </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
			</div>
			</div>	
				<div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                         <div class="col-lg-6">
			 
              <div class="col-lg-6">
			 <th>&nbsp;&nbsp;Class Teacher Comment:<span id="" style="font-size:11px;color:red">*</span></th>
			</div>
			<div class="col-lg-6">
			 <th>&nbsp;&nbsp;&nbsp;&nbsp;Headmaster Comment:<span id="" style="font-size:11px;color:red">*</span></th>
			</div>                                 
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <td><div class="col-lg-6">
				  <select class="form-control" name="Class_Teacher_Comment" required="required" title="Class Teacher Comment">
				  	<option value="">Select</option>
				  	<option value="Excellent, Keep it Up">Excellent, Keep it Up</option>
				  	<option value="V.Good, Keep on Trying">V.Good, Keep on Trying</option>
				  	<option value="Good, Try Harder">Good, Try Harder</option>
				  	<option value="Fairly Good, Parent Assistance Needed">Fairly Good, Parent Assistance Needed</option>
				  	<option value="Poor, Wake up and Tight Your Belt">Poor, Wake up and Tight Your Belt</option>
				  </select>
				  </div></td>
                  <td><div class="col-lg-6">
			<input class="form-control" type="text" name="Headmaster_Comment" required="required" title="Headmaster Comment">
			</div></td>
                  </tr>

                  <tr> 
                  <td><label>Promotion:</label><span id="" style="font-size:11px;color:red">*</span></td>
                  <td><div class="col-lg-6">
     <input type="radio" name="Promotion" id="Promoted" value="Promoted" title="Promoted"> &nbsp;Promoted &nbsp;
     <input type="radio" name="Promotion" id="Demoted" value="Demoted" title="Demoted"> &nbsp;Demoted &nbsp;
     <input type="radio" name="Promotion" id="Not Applicable" value="Not Applicable" title="Not Applicable" checked="checked">&nbsp; Not Applicable &nbsp;
			</div></td>
                  </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>			
		  </div>	
		
	<div class="form-group">
	<div class="col-lg-4">
	</div>
	<div class="col-lg-4">
	<center><input type="submit" class="btn btn-primary" name="submit" value="Upload Result"></button></center>
	</div>
		</div>			
			</div>
				</div><!--row!-->		
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

	<script src="../js/calculate.js" type="text/javascript"></script>

</form>
</body>

</html>
