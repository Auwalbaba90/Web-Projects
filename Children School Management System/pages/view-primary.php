<?php
session_start();
  if($_SESSION['submit']==null){
    header('location:logout.php');
  }

	$db = mysqli_connect('localhost','root','','naub-staff-children-school');
     
 $query = mysqli_query($db,"SELECT * FROM primary_result where ID_No= {$_GET['id']}") or die(mysqli_error());
    while ($data = mysqli_fetch_array($query)){
    $id=$data['ID_No']; $fname=$data['First_Name']; $sname=$data['Middle_Name']; $lname=$data['Last_Name']; $Gender=$data['Gender']; $class=$data['Class']; $Ad_no=$data['Addmission_No']; $Age=$data['Age']; $House=$data['House']; $Term=$data['Term']; $Session=$data['Session']; $English_CA1=$data['English_CA1']; $English_CA2=$data['English_CA2']; $English_Exam=$data['English_Exam']; $English_Total=$data['English_Total']; $English_Remark=$data['English_Remark']; $Mathematics_CA1=$data['Mathematics_CA1']; $Mathematics_CA2=$data['Mathematics_CA2']; $Mathematics_Exam=$data['Mathematics_Exam']; $Mathematics_Total=$data['Mathematics_Total']; $Mathematics_Remark=$data['Mathematics_Remark']; $C_Education_CA1=$data['Civic_Education_CA1']; $C_Education_CA2=$data['Civic_Education_CA2']; $C_Education_Exam=$data['Civic_Education_Exam']; $C_Education_Total=$data['Civic_Education_Total']; $C_Education_Remark=$data['Civic_Education_Remark']; $B_Science_CA1=$data['Basic_Science_CA1']; $B_Science_CA2=$data['Basic_Science_CA2']; $B_Science_Exam=$data['Basic_Science_Exam']; $B_Science_Total=$data['Basic_Science_Total']; $B_Science_Remark=$data['Basic_Science_Remark']; $Quantitative_CA1=$data['Quantitative_CA1']; $Quantitative_CA2=$data['Quantitative_CA2']; $Quantitative_Exam=$data['Quantitative_Exam']; $Quantitative_Total=$data['Quantitative_Total']; $Quantitative_Remark=$data['Quantitative_Remark']; $PHE_CA1=$data['P_H_E_CA1']; $PHE_CA2=$data['P_H_E_CA2']; $PHE_Exam=$data['P_H_E_Exam']; $PHE_Total=$data['P_H_E_Total']; $PHE_Remark=$data['P_H_E_Remark']; $HLang_CA1=$data['Hausa_Lang_CA1']; $HLang_CA2=$data['Hausa_Lang_CA2']; $HLang_Exam=$data['Hausa_Lang_Exam']; $HLang_Total=$data['Hausa_Lang_Total']; $HLang_Remark=$data['Hausa_Lang_Remark']; $Verbal_CA1=$data['Verbal_CA1']; $Verbal_CA2=$data['Verbal_CA2']; $Verbal_Exam=$data['Verbal_Exam']; $Verbal_Total=$data['Verbal_Total']; $Verbal_Remark=$data['Verbal_Remark']; $Computer_CA1=$data['Computer_CA1']; $Computer_CA2=$data['Computer_CA2']; $Computer_Exam=$data['Computer_Exam']; $Computer_Total=$data['Computer_Total']; $Computer_Remark=$data['Computer_Remark']; $Religion_CA1=$data['Religion_CA1']; $Religion_CA2=$data['Religion_CA2']; $Religion_Exam=$data['Religion_Exam']; $Religion_Total=$data['Religion_Total']; $Religion_Remark=$data['Religion_Remark']; $Agric_CA1=$data['Agric_CA1']; $Agric_CA2=$data['Agric_CA2']; $Agric_Exam=$data['Agric_Exam']; $Agric_Total=$data['Agric_Total']; $Agric_Remark=$data['Agric_Remark']; $CCA_CA1=$data['CCACA1']; $CCA_CA2=$data['CCACA2']; $CCA_Exam=$data['CCAExam']; $CCA_Total=$data['CCATotal']; $CCA_Remark=$data['CCARemark']; $Sos_CA1=$data['Sos_CA1']; $Sos_CA2=$data['Sos_CA2']; $Sos_Exam=$data['Sos_Exam']; $Sos_Total=$data['Sos_Total']; $Sos_Remark=$data['Sos_Remark']; $T_No_class=$data['T_No_In_Class']; $Position=$data['Position']; $Average=$data['Average']; $Total=$data['Total']; $Class_Teacher_Comment=$data['Class_Teacher_Comment']; $Headmaster_Comment=$data['Headmaster_Comment']; $Promotion=$data['Promotion'];
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
<title>View Student Result</title>
<link rel="shortcut icon" href="../images/naub-children-school.jpg">
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">
<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
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
			<label>First Name:</label>
			
			</div>
			<div class="col-lg-4">
			<span><?php echo$fname; ?></span>
			</div>
			 <div class="col-lg-2">
			<label>Middle Name:</label>
			
			</div>
			<div class="col-lg-4">
			<span><?php echo$sname; ?></span>
			</div>
			</div>	
			<br><br>
								
		<div class="form-group">
		    <div class="col-lg-2">
			<label>Last Name:</label>
			</div>
			<div class="col-lg-4">
			<span><?php echo$lname; ?></span>
			</div>
			 <div class="col-lg-2">
			<label>Gender:</label>
			</div>
			<div class="col-lg-4">
			<span><?php echo$Gender; ?></span>
			</div>
			</div>	
	<br><br>		
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Class:</label>
			
			</div>
			<div class="col-lg-4">
			<span><?php echo$class; ?></span>
			</div>
			 <div class="col-lg-2">
			<label>Addmission No:</label>
			
			</div>
			<div class="col-lg-4">
			<span><?php echo$Ad_no; ?></span>
			</div>
			</div>	
			<br><br>
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Date of Birth:</label>
			
			</div>
			<div class="col-lg-4">
			<span><?php echo$Age; ?></span>
			</div>
			 <div class="col-lg-2">
			<label>House:</label>
			
			</div>
			<div class="col-lg-4">
			<span><?php echo$House; ?></span>
			</div>
			</div>	
			<br><br>
			
			
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Term:</label>
			
			</div>
			<div class="col-lg-4">
			<span><?php echo$Term; ?></span>
			</div>
			 <div class="col-lg-2">
			<label>Session:</label>
			
			</div>
			<div class="col-lg-4">
			<span><?php echo$Session; ?></span>
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
			<th>&nbsp;&nbsp;&nbsp;&nbsp;C.A. 1:</th>
			</div>   
              <div class="col-lg-6">
			 <th>&nbsp;&nbsp;&nbsp;&nbsp;C.A. 2:</th>
			</div>                                 
             <div class="col-lg-6">
			   <th>&nbsp;&nbsp;&nbsp;&nbsp;Exams:</th>
			</div> 
			<div class="col-lg-6">
			   <th>&nbsp;&nbsp;&nbsp;&nbsp;Total:</th>
			</div>
			<div class="col-lg-6">
			   <th>&nbsp;&nbsp;&nbsp;&nbsp;Remarks:</th>
			</div>                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <td><b>English:</b></td>
                  <td><div class="col-lg-6">
			<span><?php echo$English_CA1; ?></span>
			</div></td>
                  <td><div class="col-lg-6">
			<span><?php echo$English_CA2; ?></span>
			</div></td>
			       <td><div class="col-lg-6">
			<span><?php echo$English_Exam; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$English_Total; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$English_Remark; ?></span>
			</div></td>
                  </tr>

                  <tr> 
                  <td><b>Mathematics:</b></td>
                  <td><div class="col-lg-6">
			<span><?php echo$Mathematics_CA1; ?></span>
			</div></td>
                  <td><div class="col-lg-6">
			<span><?php echo$Mathematics_CA2; ?></span>
			</div></td>
			       <td><div class="col-lg-6">
			<span><?php echo$Mathematics_Exam; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$Mathematics_Total; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$Mathematics_Remark; ?></span>
			</div></td>
                  </tr>

                  <tr> 
                  <td><b>Civic Education:</b></td>
                  <td><div class="col-lg-6">
			<span><?php echo$C_Education_CA1; ?></span>
			</div></td>
                  <td><div class="col-lg-6">
			<span><?php echo$C_Education_CA2; ?></span>
			</div></td>
			       <td><div class="col-lg-6">
			<span><?php echo$C_Education_Exam; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$C_Education_Total; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$C_Education_Remark; ?></span>
			</div></td>
                  </tr>

                  <tr> 
                  <td><b>Basic Science:</b></td>
                   <td><div class="col-lg-6">
			<span><?php echo$B_Science_CA1; ?></span>
			</div></td>
                  <td><div class="col-lg-6">
			<span><?php echo$B_Science_CA2; ?></span>
			</div></td>
			       <td><div class="col-lg-6">
			<span><?php echo$B_Science_Exam; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$B_Science_Total; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$B_Science_Remark; ?></span>
			</div></td>
                  </tr>

                  <tr> 
                  <td><b>Quantitative:</b></td>
                   <td><div class="col-lg-6">
			<span><?php echo$Quantitative_CA1; ?></span>
			</div></td>
                  <td><div class="col-lg-6">
			<span><?php echo$Quantitative_CA2; ?></span>
			</div></td>
			      <td><div class="col-lg-6">
			<span><?php echo$Quantitative_Exam; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$Quantitative_Total; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$Quantitative_Remark; ?></span>
			</div></td>
                  </tr>

                  <tr> 
                  <td><b>P.H.E:</b></td>
                  <td><div class="col-lg-6">
			<span><?php echo$PHE_CA1; ?></span>
			</div></td>
                  <td><div class="col-lg-6">
			<span><?php echo$PHE_CA2; ?></span>
			</div></td>
			       <td><div class="col-lg-6">
			<span><?php echo$PHE_Exam; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$PHE_Total; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$PHE_Remark; ?></span>
			</div></td>
                  </tr>

            	  <tr> 
                  <td><b>Hausa Lang.:</b></td>
                  <td><div class="col-lg-6">
			<span><?php echo$HLang_CA1; ?></span>
			</div></td>
                  <td><div class="col-lg-6">
			<span><?php echo$HLang_CA2; ?></span>
			</div></td>
			       <td><div class="col-lg-6">
			<span><?php echo$HLang_Exam; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$HLang_Total; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$HLang_Remark; ?></span>
			</div></td>
                  </tr>

                  <tr> 
                  <td><b>Verbal:</b></td>
                  <td><div class="col-lg-6">
			<span><?php echo$Verbal_CA1; ?></span>
			</div></td>
                  <td><div class="col-lg-6">
			<span><?php echo$Verbal_CA2; ?></span>
			</div></td>
			       <td><div class="col-lg-6">
			<span><?php echo$Verbal_Exam; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$Verbal_Total; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$Verbal_Remark; ?></span>
			</div></td>
                  </tr>

                  <tr> 
                  <td><b>Computer:</b></td>
                  <td><div class="col-lg-6">
			<span><?php echo$Computer_CA1; ?></span>
			</div></td>
                  <td><div class="col-lg-6">
			<span><?php echo$Computer_CA2; ?></span>
			</div></td>
			       <td><div class="col-lg-6">
			<span><?php echo$Computer_Exam; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$Computer_Total; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$Computer_Remark; ?></span>
			</div></td>
                  </tr>

                  <tr> 
                  <td><b>Religion:</b></td>
                  <td><div class="col-lg-6">
			<span><?php echo$Religion_CA1; ?></span>
			</div></td>
                  <td><div class="col-lg-6">
			<span><?php echo$Religion_CA2; ?></span>
			</div></td>
			       <td><div class="col-lg-6">
			<span><?php echo$Religion_Exam; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$Religion_Total; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$Religion_Remark; ?></span>
			</div></td>
                  </tr>

                  <tr> 
                  <td><b>Agric:</b></td>
                  <td><div class="col-lg-6">
			<span><?php echo$Agric_CA1; ?></span>
			</div></td>
                  <td><div class="col-lg-6">
			<span><?php echo$Agric_CA2; ?></span>
			</div></td>
			       <td><div class="col-lg-6">
			<span><?php echo$Agric_Exam; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$Agric_Total; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$Agric_Remark; ?></span>
			</div></td>
                  </tr>

                  <tr> 
                  <td><b>C.C.A:</b></td>
                  <td><div class="col-lg-6">
			<span><?php echo$CCA_CA1; ?></span>
			</div></td>
                  <td><div class="col-lg-6">
			<span><?php echo$CCA_CA2; ?></span>
			</div></td>
			       <td><div class="col-lg-6">
			<span><?php echo$CCA_Exam; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$CCA_Total; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$CCA_Remark; ?></span>
			</div></td>
                  </tr>

                  <tr> 
                  <td><b>Social Studies:</b></td>
                  <td><div class="col-lg-6">
			<span><?php echo$Sos_CA1; ?></span>
			</div></td>
                  <td><div class="col-lg-6">
			<span><?php echo$Sos_CA2; ?></span>
			</div></td>
			       <td><div class="col-lg-6">
			<span><?php echo$Sos_Exam; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$Sos_Total; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$Sos_Remark; ?></span>
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
			<th>&nbsp;&nbsp;&nbsp;&nbsp;Total No. In Class:	</label></th>
			</div>
			<div class="col-lg-6">   
			<th>&nbsp;&nbsp;&nbsp;Position:	</label></th>
			</div>
			<div class="col-lg-6">   
			<th>&nbsp;&nbsp;&nbsp;Average:	</label></th>
			</div>   
            <div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;Total:</th>
			</div>                                    
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <td><div class="col-lg-6">
				  <span><?php echo$T_No_class; ?></span>
				  </div></td>
                  <td><div class="col-lg-6">
			<span><?php echo$Position; ?></span>
			</div></td>
			<td><div class="col-lg-6">
			<span><?php echo$Average; ?></span>
			</div></td>
			<td><div class="col-lg-6">
			<span><?php echo$Total; ?></span>
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
			 <th>&nbsp;&nbsp;Class Teacher Comment:</th>
			</div>
			<div class="col-lg-6">
			 <th>&nbsp;&nbsp;&nbsp;&nbsp;Headmaster Comment:</th>
			</div>                                 
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <td><div class="col-lg-6">
				  <span><?php echo$Class_Teacher_Comment; ?></span>
				  </div></td>
                  <td><div class="col-lg-6">
			<span><?php echo$Headmaster_Comment; ?></span>
			</div></td>
                  </tr>

                  <tr> 
                  <td><label>Promotion:</label></td>
                  <td><div class="col-lg-6">
	     			<span><?php echo$Promotion; ?></span>
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
	<?php echo '<center><a href="del-pri-result.php?id='.$id.'"><button class="btn btn-primary" name="Delete">Delete</button></a></center>';?>
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
</body>

</html>
