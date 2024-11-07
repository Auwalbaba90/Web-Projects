<?php 
    session_start();
    if($_SESSION['submit']==null){
        header('location:logout.php');
    }

include('../config/config.php');
  if(isset($_POST['Update']))
 {
   $fname=$_POST['fname']; $sname=$_POST['sname']; $lname=$_POST['lname']; $Gender=$_POST['Gender']; $class=$_POST['class']; $Ad_no=$_POST['Ad_no']; $Age=$_POST['Age']; $House=$_POST['House']; $Term=$_POST['Term']; $Session=$_POST['Session']; $English_CA1=$_POST['English_CA1']; $English_CA2=$_POST['English_CA2']; $English_Exam=$_POST['English_Exam']; $English_Total=$_POST['English_Total']; $English_Remark=$_POST['English_Remark']; $Mathematics_CA1=$_POST['Mathematics_CA1']; $Mathematics_CA2=$_POST['Mathematics_CA2']; $Mathematics_Exam=$_POST['Mathematics_Exam']; $Mathematics_Total=$_POST['Mathematics_Total']; $Mathematics_Remark=$_POST['Mathematics_Remark']; $Verbal_CA1=$_POST['Verbal_CA1']; $Verbal_CA2=$_POST['Verbal_CA2']; $Verbal_Exam=$_POST['Verbal_Exam']; $Verbal_Total=$_POST['Verbal_Total']; $Verbal_Remark=$_POST['Verbal_Remark']; $Quantitative_CA1=$_POST['Quantitative_CA1']; $Quantitative_CA2=$_POST['Quantitative_CA2']; $Quantitative_Exam=$_POST['Quantitative_Exam']; $Quantitative_Total=$_POST['Quantitative_Total']; $Quantitative_Remark=$_POST['Quantitative_Remark']; $Phonics_CA1=$_POST['Phonics_CA1']; $Phonics_CA2=$_POST['Phonics_CA2']; $Phonics_Exam=$_POST['Phonics_Exam']; $Phonics_Total=$_POST['Phonics_Total']; $Phonics_Remark=$_POST['Phonics_Remark']; $handwriting_CA1=$_POST['handwriting_CA1']; $handwriting_CA2=$_POST['handwriting_CA2']; $handwriting_Exam=$_POST['handwriting_Exam']; $handwriting_Total=$_POST['handwriting_Total']; $handwriting_Remark=$_POST['handwriting_Remark']; $T_No_class=$_POST['T_No_class']; $Average=$_POST['Average']; $Total=$_POST['Total']; $Grade=$_POST['Grade']; $Class_Teacher_Comment=$_POST['Class_Teacher_Comment']; $Headmaster_Comment=$_POST['Headmaster_Comment']; $Promotion=$_POST['Promotion'];

$query=mysqli_query($db,"UPDATE `nursery_result` SET First_Name='$fname',Middle_Name='$sname',Last_Name='$lname',Gender='$Gender',Class='$class',Addmission_No='$Ad_no',Age='$Age',House='$House',Term='$Term',Session='$Session',English_CA1='$English_CA1',English_CA2='$English_CA2',English_Exam='$English_Exam',English_Total='$English_Total',English_Remark='$English_Remark',Mathematics_CA1='$Mathematics_CA1',Mathematics_CA2='$Mathematics_CA2',Mathematics_Exam='$Mathematics_Exam',Mathematics_Total='$Mathematics_Total',Mathematics_Remark='$Mathematics_Remark',Verbal_CA1='$Verbal_CA1',Verbal_CA2='$Verbal_CA2',Verbal_Exam='$Verbal_Exam',Verbal_Total='$Verbal_Total',Verbal_Remark='$Verbal_Remark',Quantitative_CA1='$Quantitative_CA1',Quantitative_CA2='$Quantitative_CA2',Quantitative_Exam='$Quantitative_Exam',Quantitative_Total='$Quantitative_Total',Quantitative_Remark='$Quantitative_Remark',Phonics_CA1='$Phonics_CA1',Phonics_CA2='$Phonics_CA2',Phonics_Exam='$Phonics_Exam',Phonics_Total='$Phonics_Total',Phonics_Remark='$Phonics_Remark',handwriting_CA1='$handwriting_CA1',handwriting_CA2='$handwriting_CA2',handwriting_Exam='$handwriting_Exam',handwriting_Total='$handwriting_Total',handwriting_Remark='$handwriting_Remark',T_No_In_Class='$T_No_class',Average='$Average',Total='$Total',Grade='$Grade',Class_Teacher_Comment='$Class_Teacher_Comment',Headmaster_Comment='$Headmaster_Comment',Promotion='$Promotion' WHERE ID_No= {$_GET['id']}");
    if($query)
  {
    echo "<script>alert('Result Updated Successfully');</script>";
    //header('location:add-results.php');
  }else{
    echo "<script>alert('Thare is Error Check and Try Again!!!.');</script>";
  }
}

$db = mysqli_connect('localhost','root','','naub-staff-children-school');
$query = mysqli_query($db,"SELECT * FROM nursery_result where ID_No= {$_GET['id']}") or die(mysqli_error());
        while ($data = mysqli_fetch_array($query)){
            $id=$data['ID_No']; $fname=$data['First_Name']; $sname=$data['Middle_Name']; $lname=$data['Last_Name']; $Gender=$data['Gender']; $class=$data['Class']; $Ad_no=$data['Addmission_No']; $Age=$data['Age']; $House=$data['House']; $Term=$data['Term']; $Session=$data['Session']; $English_CA1=$data['English_CA1']; $English_CA2=$data['English_CA2']; $English_Exam=$data['English_Exam']; $English_Total=$data['English_Total']; $English_Remark=$data['English_Remark']; $Mathematics_CA1=$data['Mathematics_CA1']; $Mathematics_CA2=$data['Mathematics_CA2']; $Mathematics_Exam=$data['Mathematics_Exam']; $Mathematics_Total=$data['Mathematics_Total']; $Mathematics_Remark=$data['Mathematics_Remark']; $Phonics_CA1=$data['Phonics_CA1']; $Phonics_CA2=$data['Phonics_CA2']; $Phonics_Exam=$data['Phonics_Exam']; $Phonics_Total=$data['Phonics_Total']; $Phonics_Remark=$data['Phonics_Remark']; $handwriting_CA1=$data['handwriting_CA1']; $handwriting_CA2=$data['handwriting_CA2']; $handwriting_Exam=$data['handwriting_Exam']; $handwriting_Total=$data['handwriting_Total']; $handwriting_Remark=$data['handwriting_Remark']; $Quantitative_CA1=$data['Quantitative_CA1']; $Quantitative_CA2=$data['Quantitative_CA2']; $Quantitative_Exam=$data['Quantitative_Exam']; $Quantitative_Total=$data['Quantitative_Total']; $Quantitative_Remark=$data['Quantitative_Remark']; $Verbal_CA1=$data['Verbal_CA1']; $Verbal_CA2=$data['Verbal_CA2']; $Verbal_Exam=$data['Verbal_Exam']; $Verbal_Total=$data['Verbal_Total']; $Verbal_Remark=$data['Verbal_Remark']; $T_No_class=$data['T_No_In_Class']; $Grade=$data['Grade']; $Average=$data['Average']; $Total=$data['Total']; $Class_Teacher_Comment=$data['Class_Teacher_Comment']; $Headmaster_Comment=$data['Headmaster_Comment']; $Promotion=$data['Promotion'];
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
			<input class="form-control" readonly="readonly" name="class" value="<?php echo$class; ?>" required="required" title="Class" >
			</div>
			 <div class="col-lg-2">
			<label>Addmission No:<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" readonly="readonly" name="Ad_no" value="<?php echo$Ad_no; ?>" id="Ad_no" required="required" title="Addmission No">
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
			<input class="form-control" name="Term" id="Term" readonly="readonly" required="required" value="<?php echo$Term; ?>" title="Term">
			</div>
			 <div class="col-lg-2">
			<label>Session:<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="Session" id="Session" readonly="readonly" required="required" value="<?php echo$Session; ?>" title="Session">
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
			<input style="width: 100px;" class="form-control en-cal"  type="number" onkeyup="enTotal()" name="English_CA1" value="<?php echo$English_CA1; ?>" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control en-cal"  type="number" onkeyup="enTotal()" name="English_CA2" value="<?php echo$English_CA2; ?>" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control en-cal"  type="number" onkeyup="enTotal()" name="English_Exam" value="<?php echo$English_Exam; ?>" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control nur-cal"  type="text" onblur="nurTotal()" name="English_Total" id="en-total" value="<?php echo$English_Total; ?>" required="required" title="Total" readonly>
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
                  <td>Mathematics:</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control math-cal"  type="number" onkeyup="mathTotal()" name="Mathematics_CA1" value="<?php echo$Mathematics_CA1; ?>" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control math-cal"  type="number" onkeyup="mathTotal()" name="Mathematics_CA2" value="<?php echo$Mathematics_CA2; ?>" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control math-cal"  type="number" onkeyup="mathTotal()" name="Mathematics_Exam" value="<?php echo$Mathematics_Exam; ?>" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control nur-cal"  type="text" onblur="nurTotal()" name="Mathematics_Total" id="math-total" value="<?php echo$Mathematics_Total; ?>" required="required" title="Total" readonly>
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
                  <td>Verbal:</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control ver-cal"  type="number" onkeyup="verTotal()" name="Verbal_CA1" value="<?php echo$Verbal_CA1; ?>" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control ver-cal"  type="number" onkeyup="verTotal()" name="Verbal_CA2" value="<?php echo$Verbal_CA2; ?>" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control ver-cal"  type="number" onkeyup="verTotal()" name="Verbal_Exam" value="<?php echo$Verbal_Exam; ?>" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control nur-cal"  type="text" onblur="nurTotal()" name="Verbal_Total" id="ver-total" value="<?php echo$Verbal_Total; ?>" required="required" title="Total" readonly>
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
                  <td>Quantitative:</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control qua-cal"  type="number" onkeyup="quaTotal()" name="Quantitative_CA1" value="<?php echo$Quantitative_CA1; ?>" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control qua-cal"  type="number" onkeyup="quaTotal()" name="Quantitative_CA2" value="<?php echo$Quantitative_CA2; ?>" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control qua-cal"  type="number" onkeyup="quaTotal()" name="Quantitative_Exam" value="<?php echo$Quantitative_Exam; ?>" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control nur-cal"  type="text" onblur="nurTotal()" name="Quantitative_Total" id="qua-total" value="<?php echo$Quantitative_Total; ?>" required="required" title="Total" readonly>
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
                  <td>Phonics:</td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control phon-cal"  type="number" onkeyup="phonTotal()" name="Phonics_CA1" value="<?php echo$Phonics_CA1; ?>" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control phon-cal"  type="number" onkeyup="phonTotal()" name="Phonics_CA2" value="<?php echo$Phonics_CA2; ?>" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control phon-cal"  type="number" onkeyup="phonTotal()" name="Phonics_Exam" value="<?php echo$Phonics_Exam; ?>" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control nur-cal"  type="text" onblur="nurTotal()" name="Phonics_Total" id="phon-total" value="<?php echo$Phonics_Total; ?>" required="required" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="Phonics_Remark" required="required" title="Remark">
				<option value="<?php echo$Phonics_Remark; ?>"><?php echo$Phonics_Remark; ?></option>
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
			<input style="width: 100px;" class="form-control Han-cal"  type="number" onkeyup="HanTotal()" name="handwriting_CA1" value="<?php echo$handwriting_CA1; ?>" required="required" title="C.A. 1">
			</div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control Han-cal"  type="number" onkeyup="HanTotal()" name="handwriting_CA2" value="<?php echo$handwriting_CA2; ?>" required="required" title="C.A. 2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control Han-cal"  type="number" onkeyup="HanTotal()" name="handwriting_Exam" value="<?php echo$handwriting_Exam; ?>" required="required" title="Exam">
			</div></td>
				 <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control nur-cal"  type="text" onblur="nurTotal()" name="handwriting_Total" id="Han-total" value="<?php echo$handwriting_Total; ?>" required="required" title="Total" readonly>
			</div></td>
				 <td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="handwriting_Remark" required="required" title="Remark">
				<option value="<?php echo$handwriting_Remark; ?>"><?php echo$handwriting_Remark; ?></option>
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
			<th>&nbsp;&nbsp;&nbsp;Total:<span id="" style="font-size:11px;color:red">*</span>	</label></th>
			</div>   
            <div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;Average:<span id="" style="font-size:11px;color:red">*</span></th>
			</div>
			<div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;Grade:<span id="" style="font-size:11px;color:red">*</span></th>
			</div>                                    
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <td><div class="col-lg-6">
				  <input style="width: 100px;" class="form-control" type="number" value="<?php echo$std_id; ?>" name="T_No_class" required="required" title="Total No. In Class" readonly>
				  </div></td>
                  <td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control"  type="number" onblur="nuraverage()" id="nur_total" value="<?php echo$Total; ?>" name="Total" required="required" title="Total" readonly>
			</div></td>
			<td><div class="col-lg-6">
			<input style="width: 100px;" class="form-control" type="number" value="<?php echo$Average; ?>" name="Average" id="nuraver-total" required="required" title="Average" readonly>
			</div></td>
			<td><div class="col-lg-6">
			<select style="width: 100px;" class="form-control" name="Grade"  title="Grade" id="Grade" required="required">
				<option value="<?php echo$Grade; ?>"><?php echo$Grade; ?></option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
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
				  		<option value="Promoted">Promoted</option>
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
	<center><input type="submit" class="btn btn-primary" name="Update" value="Update"></button></center>
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
