<?php
session_start();
  if($_SESSION['submit']==null){
    header('location:logout.php');
  }


include('../config/config.php');
  if(isset($_POST['Update_rst']))
 {
   $fname=$_POST['fname']; $sname=$_POST['sname']; $lname=$_POST['lname']; $Gender=$_POST['Gender']; $class=$_POST['class']; $Ad_no=$_POST['Ad_no']; $Age=$_POST['Age']; $House=$_POST['House']; $Term=$_POST['Term']; $Session=$_POST['Session']; $English_CA1=$_POST['English_CA1']; $English_CA2=$_POST['English_CA2']; $English_Exam=$_POST['English_Exam']; $English_Total=$_POST['English_Total']; $English_Remark=$_POST['English_Remark']; $Mathematics_CA1=$_POST['Mathematics_CA1']; $Mathematics_CA2=$_POST['Mathematics_CA2']; $Mathematics_Exam=$_POST['Mathematics_Exam']; $Mathematics_Total=$_POST['Mathematics_Total']; $Mathematics_Remark=$_POST['Mathematics_Remark']; $C_Education_CA1=$_POST['C_Education_CA1']; $C_Education_CA2=$_POST['C_Education_CA2']; $C_Education_Exam=$_POST['C_Education_Exam']; $C_Education_Total=$_POST['C_Education_Total']; $C_Education_Remark=$_POST['C_Education_Remark']; $B_Science_CA1=$_POST['B_Science_CA1']; $B_Science_CA2=$_POST['B_Science_CA2']; $B_Science_Exam=$_POST['B_Science_Exam']; $B_Science_Total=$_POST['B_Science_Total']; $B_Science_Remark=$_POST['B_Science_Remark']; $Quantitative_CA1=$_POST['Quantitative_CA1']; $Quantitative_CA2=$_POST['Quantitative_CA2']; $Quantitative_Exam=$_POST['Quantitative_Exam']; $Quantitative_Total=$_POST['Quantitative_Total']; $Quantitative_Remark=$_POST['Quantitative_Remark']; $PHE_CA1=$_POST['PHE_CA1']; $PHE_CA2=$_POST['PHE_CA2']; $PHE_Exam=$_POST['PHE_Exam']; $PHE_Total=$_POST['PHE_Total']; $PHE_Remark=$_POST['PHE_Remark']; $HLang_CA1=$_POST['HLang_CA1']; $HLang_CA2=$_POST['HLang_CA2']; $HLang_Exam=$_POST['HLang_Exam']; $HLang_Total=$_POST['HLang_Total']; $HLang_Remark=$_POST['HLang_Remark']; $Verbal_CA1=$_POST['Verbal_CA1']; $Verbal_CA2=$_POST['Verbal_CA2']; $Verbal_Exam=$_POST['Verbal_Exam']; $Verbal_Total=$_POST['Verbal_Total']; $Verbal_Remark=$_POST['Verbal_Remark']; $Computer_CA1=$_POST['Computer_CA1']; $Computer_CA2=$_POST['Computer_CA2']; $Computer_Exam=$_POST['Computer_Exam']; $Computer_Total=$_POST['Computer_Total']; $Computer_Remark=$_POST['Computer_Remark']; $Religion_CA1=$_POST['Religion_CA1']; $Religion_CA2=$_POST['Religion_CA2']; $Religion_Exam=$_POST['Religion_Exam']; $Religion_Total=$_POST['Religion_Total']; $Religion_Remark=$_POST['Religion_Remark']; $Agric_CA1=$_POST['Agric_CA1']; $Agric_CA2=$_POST['Agric_CA2']; $Agric_Exam=$_POST['Agric_Exam']; $Agric_Total=$_POST['Agric_Total']; $Agric_Remark=$_POST['Agric_Remark']; $CCA_CA1=$_POST['CCA_CA1']; $CCA_CA2=$_POST['CCA_CA2']; $CCA_Exam=$_POST['CCA_Exam']; $CCA_Total=$_POST['CCA_Total']; $CCA_Remark=$_POST['CCA_Remark']; $Sos_CA1=$_POST['Sos_CA1']; $Sos_CA2=$_POST['Sos_CA2']; $Sos_Exam=$_POST['Sos_Exam']; $Sos_Total=$_POST['Sos_Total']; $Sos_Remark=$_POST['Sos_Remark']; $T_No_class=$_POST['T_No_class']; $Position=$_POST['Position']; $Average=$_POST['Average']; $Total=$_POST['Total']; $Class_Teacher_Comment=$_POST['Class_Teacher_Comment']; $Headmaster_Comment=$_POST['Headmaster_Comment']; $Promotion=$_POST['Promotion'];
$query=mysqli_query($db,"UPDATE `primary_result` SET First_Name='$fname',Middle_Name='$sname',Last_Name='$lname',Gender='$Gender',Class='$class',Addmission_No='$Ad_no',Age='$Age',House='$House',Term='$Term',Session='$Session',English_CA1='$English_CA1',English_CA2='$English_CA2',English_Exam='$English_Exam',English_Total='$English_Total',English_Remark='$English_Remark',Mathematics_CA1='$Mathematics_CA1',Mathematics_CA2='$Mathematics_CA2',Mathematics_Exam='$Mathematics_Exam',Mathematics_Total='$Mathematics_Total',Mathematics_Remark='$Mathematics_Remark',Civic_Education_CA1='$C_Education_CA1',Civic_Education_CA2='$C_Education_CA2',Civic_Education_Exam='$C_Education_Exam',Civic_Education_Total='$C_Education_Total',Civic_Education_Remark='$C_Education_Remark',Basic_Science_CA1='$B_Science_CA1',Basic_Science_CA2='$B_Science_CA2',Basic_Science_Exam='$B_Science_Exam',Basic_Science_Total='$B_Science_Total',Basic_Science_Remark='$B_Science_Remark',Quantitative_CA1='$Quantitative_CA1',Quantitative_CA2='$Quantitative_CA2',Quantitative_Exam='$Quantitative_Exam',Quantitative_Total='$Quantitative_Total',Quantitative_Remark='$Quantitative_Remark',P_H_E_CA1='$PHE_CA1',P_H_E_CA2='$PHE_CA2',P_H_E_Exam='$PHE_Exam',P_H_E_Total='$PHE_Total',P_H_E_Remark='$PHE_Remark',Hausa_Lang_CA1='$HLang_CA1',Hausa_Lang_CA2='$HLang_CA2',Hausa_Lang_Exam='$HLang_Exam',Hausa_Lang_Total='$HLang_Total',Hausa_Lang_Remark='$HLang_Remark',Verbal_CA1='$Verbal_CA1',Verbal_CA2='$Verbal_CA2',Verbal_Exam='$Verbal_Exam',Verbal_Total='$Verbal_Total',Verbal_Remark='$Verbal_Remark',Computer_CA1='$Computer_CA1',Computer_CA2='$Computer_CA2',Computer_Exam='$Computer_Exam',Computer_Total='$Computer_Total',Computer_Remark='$Computer_Remark',Religion_CA1='$Religion_CA1',Religion_CA2='$Religion_CA2',Religion_Exam='$Religion_Exam',Religion_Total='$Religion_Total',Religion_Remark='$Religion_Remark',Agric_CA1='$Agric_CA1',Agric_CA2='$Agric_CA2',Agric_Exam='$Agric_Exam',Agric_Total='$Agric_Total',Agric_Remark='$Agric_Remark',CCACA1='$CCA_CA1',CCACA2='$CCA_CA2',CCAExam='$CCA_Exam',CCATotal='$CCA_Total',CCARemark='$CCA_Remark',Sos_CA1='$Sos_CA1',Sos_CA2='$Sos_CA2',Sos_Exam='$Sos_Exam',Sos_Total='$Sos_Total',Sos_Remark='$Sos_Remark',T_No_In_Class='$T_No_class',Position='$Position',Average='$Average',Total='$Total',Class_Teacher_Comment='$Class_Teacher_Comment',Headmaster_Comment='$Headmaster_Comment',Promotion='$Promotion' WHERE ID_No={$_GET['id']}");
    if($query)
  {
    echo "<script>alert('Result Updated Successfully');</script>";
    //header('location:add-results.php');
  }else{
    echo "<script>alert('Thare is Error Check and Try Again!!!.');</script>";
  }
}

$db = mysqli_connect('localhost','root','','naub-staff-children-school');     
    $query = mysqli_query($db,"SELECT * FROM primary_result where ID_No= {$_GET['id']}") or die(mysqli_error());
        while ($data = mysqli_fetch_array($query)){
            $id=$data['ID_No']; $fname=$data['First_Name']; $sname=$data['Middle_Name']; $lname=$data['Last_Name']; $Gender=$data['Gender']; $class=$data['Class']; $Ad_no=$data['Addmission_No']; $Age=$data['Age']; $House=$data['House']; $Term=$data['Term']; $Session=$data['Session']; $English_CA1=$data['English_CA1']; $English_CA2=$data['English_CA2']; $English_Exam=$data['English_Exam']; $English_Total=$data['English_Total']; $English_Remark=$data['English_Remark']; $Mathematics_CA1=$data['Mathematics_CA1']; $Mathematics_CA2=$data['Mathematics_CA2']; $Mathematics_Exam=$data['Mathematics_Exam']; $Mathematics_Total=$data['Mathematics_Total']; $Mathematics_Remark=$data['Mathematics_Remark']; $C_Education_CA1=$data['Civic_Education_CA1']; $C_Education_CA2=$data['Civic_Education_CA2']; $C_Education_Exam=$data['Civic_Education_Exam']; $C_Education_Total=$data['Civic_Education_Total']; $C_Education_Remark=$data['Civic_Education_Remark']; $B_Science_CA1=$data['Basic_Science_CA1']; $B_Science_CA2=$data['Basic_Science_CA2']; $B_Science_Exam=$data['Basic_Science_Exam']; $B_Science_Total=$data['Basic_Science_Total']; $B_Science_Remark=$data['Basic_Science_Remark']; $Quantitative_CA1=$data['Quantitative_CA1']; $Quantitative_CA2=$data['Quantitative_CA2']; $Quantitative_Exam=$data['Quantitative_Exam']; $Quantitative_Total=$data['Quantitative_Total']; $Quantitative_Remark=$data['Quantitative_Remark']; $PHE_CA1=$data['P_H_E_CA1']; $PHE_CA2=$data['P_H_E_CA2']; $PHE_Exam=$data['P_H_E_Exam']; $PHE_Total=$data['P_H_E_Total']; $PHE_Remark=$data['P_H_E_Remark']; $HLang_CA1=$data['Hausa_Lang_CA1']; $HLang_CA2=$data['Hausa_Lang_CA2']; $HLang_Exam=$data['Hausa_Lang_Exam']; $HLang_Total=$data['Hausa_Lang_Total']; $HLang_Remark=$data['Hausa_Lang_Remark']; $Verbal_CA1=$data['Verbal_CA1']; $Verbal_CA2=$data['Verbal_CA2']; $Verbal_Exam=$data['Verbal_Exam']; $Verbal_Total=$data['Verbal_Total']; $Verbal_Remark=$data['Verbal_Remark']; $Computer_CA1=$data['Computer_CA1']; $Computer_CA2=$data['Computer_CA2']; $Computer_Exam=$data['Computer_Exam']; $Computer_Total=$data['Computer_Total']; $Computer_Remark=$data['Computer_Remark']; $Religion_CA1=$data['Religion_CA1']; $Religion_CA2=$data['Religion_CA2']; $Religion_Exam=$data['Religion_Exam']; $Religion_Total=$data['Religion_Total']; $Religion_Remark=$data['Religion_Remark']; $Agric_CA1=$data['Agric_CA1']; $Agric_CA2=$data['Agric_CA2']; $Agric_Exam=$data['Agric_Exam']; $Agric_Total=$data['Agric_Total']; $Agric_Remark=$data['Agric_Remark']; $CCA_CA1=$data['CCACA1']; $CCA_CA2=$data['CCACA2']; $CCA_Exam=$data['CCAExam']; $CCA_Total=$data['CCATotal']; $CCA_Remark=$data['CCARemark']; $Sos_CA1=$data['Sos_CA1']; $Sos_CA2=$data['Sos_CA2']; $Sos_Exam=$data['Sos_Exam']; $Sos_Total=$data['Sos_Total']; $Sos_Remark=$data['Sos_Remark']; $T_No_class=$data['T_No_In_Class']; $Position=$data['Position']; $Average=$data['Average']; $Total=$data['Total']; $Class_Teacher_Comment=$data['Class_Teacher_Comment']; $Headmaster_Comment=$data['Headmaster_Comment']; $Promotion=$data['Promotion'];
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
<title>Edit Result</title>
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
			<input class="form-control" name="fname" value="<?php echo$fname; ?>" required="required" readonly="readonly" pattern="[A-Za-z]+$" title="First Name">
			</div>
			 <div class="col-lg-2">
			<label>Middle Name:<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="sname" value="<?php echo$sname; ?>" readonly="readonly" required="required" pattern="[A-Za-z]+$" title="Middle Name">
			</div>
			</div>	
			<br><br>
								
		<div class="form-group">
		    <div class="col-lg-2">
			<label>Last Name:</label>
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="lname" value="<?php echo$lname; ?>" readonly="readonly" pattern="[A-Za-z]+$" title="Last Name">
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
			<input class="form-control" readonly="readonly" value="<?php echo$class; ?>" name="class" required="required" title="Class" >
			</div>
			 <div class="col-lg-2">
			<label>Addmission No:<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" readonly="readonly" value="<?php echo$Ad_no; ?>" name="Ad_no" id="Ad_no" required="required" title="Addmission No">
			</div>
			</div>
			<br><br>
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Date of Birth:<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input type="text" class="form-control" name="Age" value="<?php echo$Age; ?>" id="Age" required="required" title="Date of Birth" readonly>
			</div>
			 <div class="col-lg-2">
			<label>House:<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="House" id="House" value="<?php echo$House; ?>" required="required" title="House" readonly>
			</div>
			</div>	
			<br><br>
			
			
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Term:<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="Term" id="Term" readonly="readonly" value="<?php echo$Term; ?>" required="required" value="First" title="Term">
			</div>
			 <div class="col-lg-2">
			<label>Session:<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="Session" id="Session" value="<?php echo$Session; ?>" readonly="readonly" required="required" value="2023/2024" title="Session">
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
                  <td>English</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pen-cal"  type="number" onkeyup="penTotal()" name="English_CA1" value="<?php echo$English_CA1; ?>" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pen-cal"  type="number" onkeyup="penTotal()" name="English_CA2" value="<?php echo$English_CA2; ?>" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pen-cal"  type="number" onkeyup="penTotal()" name="English_Exam" value="<?php echo$English_Exam; ?>" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pri-cal"  type="text" name="English_Total" value="<?php echo$English_Total; ?>" id="pen-total" required="required" onblur="priTotal()" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="English_Remark" required="required" title="Remark">
				<option value="<?php echo$English_Remark; ?>"><?php echo$English_Remark; ?></option>
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
                  <td>Mathematics</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pmath-cal"  type="number" onkeyup="pmathTotal()" name="Mathematics_CA1" value="<?php echo$Mathematics_CA1; ?>" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pmath-cal"  type="number" onkeyup="pmathTotal()" name="Mathematics_CA2" value="<?php echo$Mathematics_CA2; ?>" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pmath-cal"  type="number" onkeyup="pmathTotal()" name="Mathematics_Exam" value="<?php echo$Mathematics_Exam; ?>" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pri-cal"  type="text" onblur="priTotal()" name="Mathematics_Total" id="pmath-total" value="<?php echo$Mathematics_Total; ?>" required="required" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="Mathematics_Remark" required="required" title="Remark">
				<option value="<?php echo$Mathematics_Remark; ?>"><?php echo$Mathematics_Remark; ?></option>
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
                  <td>Civic Education</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pciv-cal"  type="number" onkeyup="pcivTotal()" name="C_Education_CA1" value="<?php echo$C_Education_CA1; ?>" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pciv-cal"  type="number" onkeyup="pcivTotal()" name="C_Education_CA2" value="<?php echo$C_Education_CA2; ?>" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pciv-cal"  type="number" onkeyup="pcivTotal()" name="C_Education_Exam" value="<?php echo$C_Education_Exam; ?>" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pri-cal"  type="text" onblur="priTotal()" name="C_Education_Total" id="pciv-total" value="<?php echo$C_Education_Total; ?>" required="required" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="C_Education_Remark" required="required" title="Remark">
				<option value="<?php echo$C_Education_Remark; ?>"><?php echo$C_Education_Remark; ?></option>
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
                  <td>Basic Science</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pbs-cal"  type="number" onkeyup="pbsTotal()" name="B_Science_CA1" value="<?php echo$B_Science_CA1; ?>" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pbs-cal"  type="number" onkeyup="pbsTotal()" name="B_Science_CA2" value="<?php echo$B_Science_CA2; ?>" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pbs-cal"  type="number" onkeyup="pbsTotal()" name="B_Science_Exam" value="<?php echo$B_Science_Exam; ?>" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pri-cal"  type="text" onblur="priTotal()" name="B_Science_Total" id="pbs-total" value="<?php echo$B_Science_Total; ?>" required="required" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="B_Science_Remark" required="required" title="Remark">
				<option value="<?php echo$B_Science_Remark; ?>"><?php echo$B_Science_Remark; ?></option>
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
                  <td>Quantitative</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pqua-cal"  type="number" onkeyup="pquaTotal()" name="Quantitative_CA1" value="<?php echo$Quantitative_CA1; ?>" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pqua-cal"  type="number" onkeyup="pquaTotal()" name="Quantitative_CA2" value="<?php echo$Quantitative_CA2; ?>" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pqua-cal"  type="number" onkeyup="pquaTotal()" name="Quantitative_Exam" value="<?php echo$Quantitative_Exam; ?>" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pri-cal"  type="text" onblur="priTotal()" name="Quantitative_Total" id="pqua-total" value="<?php echo$Quantitative_Total; ?>" required="required" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="Quantitative_Remark" required="required" title="Remark">
				<option value="<?php echo$Quantitative_Remark; ?>"><?php echo$Quantitative_Remark; ?></option>
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
                  <td>P.H.E</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pphe-cal"  type="number" onkeyup="ppheTotal()" name="PHE_CA1" value="<?php echo$PHE_CA1; ?>" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pphe-cal"  type="number" onkeyup="ppheTotal()" name="PHE_CA2" value="<?php echo$PHE_CA2; ?>" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pphe-cal"  type="number" onkeyup="ppheTotal()" name="PHE_Exam" value="<?php echo$PHE_Exam; ?>" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pri-cal"  type="text" onblur="priTotal()" name="PHE_Total" id="pphe-total" value="<?php echo$PHE_Total; ?>" required="required" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="PHE_Remark" required="required" title="Remark">
				<option value="<?php echo$PHE_Remark; ?>"><?php echo$PHE_Remark; ?></option>
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
                  <td>Hausa Lang.</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control phal-cal"  type="number" onkeyup="phalTotal()" name="HLang_CA1" value="<?php echo$HLang_CA1; ?>" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control phal-cal"  type="number" onkeyup="phalTotal()" name="HLang_CA2" value="<?php echo$HLang_CA2; ?>" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control phal-cal"  type="number" onkeyup="phalTotal()" name="HLang_Exam" value="<?php echo$HLang_Exam; ?>" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pri-cal"  type="text" onblur="priTotal()" name="HLang_Total" id="phal-total" value="<?php echo$HLang_Total; ?>" required="required" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="HLang_Remark" required="required" title="Remark">
				<option value="<?php echo$HLang_Remark; ?>"><?php echo$HLang_Remark; ?></option>
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
                  <td>Verbal</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pver-cal"  type="number" onkeyup="pverTotal()" name="Verbal_CA1" value="<?php echo$Verbal_CA1; ?>" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pver-cal"  type="number" onkeyup="pverTotal()" name="Verbal_CA2" value="<?php echo$Verbal_CA2; ?>" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pver-cal"  type="number" onkeyup="pverTotal()" name="Verbal_Exam" value="<?php echo$Verbal_Exam; ?>" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pri-cal"  type="text" onblur="priTotal()" name="Verbal_Total" id="pver-total" value="<?php echo$Verbal_Total; ?>" required="required" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="Verbal_Remark" required="required" title="Remark">
				<option value="<?php echo$Verbal_Remark; ?>"><?php echo$Verbal_Remark; ?></option>
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
                  <td>Computer</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pcom-cal"  type="number" onkeyup="pcomTotal()" name="Computer_CA1" value="<?php echo$Computer_CA1; ?>" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pcom-cal"  type="number" onkeyup="pcomTotal()" name="Computer_CA2" value="<?php echo$Computer_CA2; ?>" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pcom-cal"  type="number" onkeyup="pcomTotal()" name="Computer_Exam" value="<?php echo$Computer_Exam; ?>" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pri-cal"  type="text" onblur="priTotal()" name="Computer_Total" id="pcom-total" value="<?php echo$Computer_Total; ?>" required="required" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="Computer_Remark" required="required" title="Remark">
				<option value="<?php echo$Computer_Remark; ?>"><?php echo$Computer_Remark; ?></option>
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
                  <td>Religion</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control prel-cal"  type="number" onkeyup="prelTotal()" name="Religion_CA1" value="<?php echo$Religion_CA1; ?>" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control prel-cal"  type="number" onkeyup="prelTotal()" name="Religion_CA2" value="<?php echo$Religion_CA2; ?>" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control prel-cal"  type="number" onkeyup="prelTotal()" name="Religion_Exam" value="<?php echo$Religion_Exam; ?>" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pri-cal"  type="text" onblur="priTotal()" name="Religion_Total" id="prel-total" value="<?php echo$Religion_Total; ?>" required="required" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="Religion_Remark" required="required" title="Remark">
				<option value="<?php echo$Religion_Remark; ?>"><?php echo$Religion_Remark; ?></option>
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
                  <td>Agric</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pagr-cal"  type="number" onkeyup="pagrTotal()" name="Agric_CA1" value="<?php echo$Agric_CA1; ?>" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pagr-cal"  type="number" onkeyup="pagrTotal()" name="Agric_CA2" value="<?php echo$Agric_CA2; ?>" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pagr-cal"  type="number" onkeyup="pagrTotal()" name="Agric_Exam" value="<?php echo$Agric_Exam; ?>" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pri-cal"  type="text" onblur="priTotal()" name="Agric_Total" id="pagr-total" value="<?php echo$Agric_Total; ?>" required="required" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="Agric_Remark" required="required" title="Remark">
				<option value="<?php echo$Agric_Remark; ?>"><?php echo$Agric_Remark; ?></option>
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
                  <td>C.C.A</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pcca-cal"  type="number" onkeyup="pccaTotal()" name="CCA_CA1" value="<?php echo$CCA_CA1; ?>" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pcca-cal"  type="number" onkeyup="pccaTotal()" name="CCA_CA2" value="<?php echo$CCA_CA2; ?>" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pcca-cal"  type="number" onkeyup="pccaTotal()" name="CCA_Exam" value="<?php echo$CCA_Exam; ?>" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pri-cal"  type="text" onblur="priTotal()" name="CCA_Total" id="pcca-total" value="<?php echo$CCA_Total; ?>" required="required" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="CCA_Remark" required="required" title="Remark">
				<option value="<?php echo$CCA_Remark; ?>"><?php echo$CCA_Remark; ?></option>
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
                  <td>Social Studies</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control psos-cal"  type="number" onkeyup="psosTotal()" name="Sos_CA1" value="<?php echo$Sos_CA1; ?>" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control psos-cal"  type="number" onkeyup="psosTotal()" name="Sos_CA2" value="<?php echo$Sos_CA2; ?>" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control psos-cal"  type="number" onkeyup="psosTotal()" name="Sos_Exam" value="<?php echo$Sos_Exam; ?>" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control pri-cal"  type="text" onblur="priTotal()" name="Sos_Total" id="psos-total" value="<?php echo$Sos_Total; ?>" required="required" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="Sos_Remark" required="required" title="Remark">
				<option value="<?php echo$Sos_Remark; ?>"><?php echo$Sos_Remark; ?></option>
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
			</div>   
            <div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;&nbsp;Total:<span id="" style="font-size:11px;color:red">*</span></th>
			</div>
			<th>&nbsp;&nbsp;&nbsp;Average:<span id="" style="font-size:11px;color:red">*</span>	</label></th>
			</div>   
            <div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;Position:<span id="" style="font-size:11px;color:red">*</span></th>
			</div>                                    
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <td><div class="col-lg-6">
				  <input style="width: 100px;" class="form-control" type="number" value="<?php echo$std_id; ?>" name="T_No_class" required="required" title="Total No. In Class" readonly>
				  </div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control aver_cal"  type="number" onblur="average()" value="<?php echo$Total; ?>" name="Total" id="pri_total" required="required" title="Total" readonly>
			</div></td>
			<td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control" type="number" value="<?php echo$Average; ?>" name="Average" id="aver-total" required="required" title="Average" readonly>
			</div></td>
			 <td>
			 	<div class="col-lg-6">
			<input style="width: 100px;" class="form-control" type="number" value="<?php echo$Position; ?>" name="Position" required="required" title="Position">
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
				  	<option value="<?php echo$Class_Teacher_Comment; ?>"><?php echo$Class_Teacher_Comment; ?></option>
				  	<option value="Excellent, Keep it Up">Excellent, Keep it Up</option>
				  	<option value="V.Good, Keep on Trying">V.Good, Keep on Trying</option>
				  	<option value="Good, Try Harder">Good, Try Harder</option>
				  	<option value="Fairly Good, Parent Assistance Needed">Fairly Good, Parent Assistance Needed</option>
				  	<option value="Poor, Wake up and Tight Your Belt">Poor, Wake up and Tight Your Belt</option>
				  </select>
				  </div></td>
                  <td><div class="col-lg-6">
			<input class="form-control" type="text" name="Headmaster_Comment" value="<?php echo$Headmaster_Comment; ?>" required="required" title="Headmaster Comment">
			</div></td>
                  </tr>

                  <tr> 
                  <td><label>Promotion:</label><span id="" style="font-size:11px;color:red">*</span></td>
                  <td><div class="col-lg-6">
     					<select class="form-control" name="Promotion" required="required" title="Promotion">
				  	<option value="<?php echo$Promotion; ?>"><?php echo$Promotion; ?></option>
				  	<option value=" Promoted">Promoted</option>
				  	<option value="Demoted">Demoted</option>
				  	<option value="Not Applicable">Not Applicable</option>
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
		
	<div class="form-group">
	<div class="col-lg-4">
	</div>
	<div class="col-lg-4">
	<center><input type="submit" class="btn btn-primary" name="Update_rst" value="Update"></button></center>
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
