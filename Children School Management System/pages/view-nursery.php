<?php 
session_start();
  if($_SESSION['submit']==null){
    header('location:logout.php');
  }
  $db = mysqli_connect('localhost','root','','naub-staff-children-school');
    $query = mysqli_query($db,"SELECT * FROM nursery_result where ID_No= {$_GET['id']}") or die(mysqli_error());
        while ($data = mysqli_fetch_array($query)){
            $id=$data['ID_No']; $fname=$data['First_Name']; $sname=$data['Middle_Name']; $lname=$data['Last_Name']; $Gender=$data['Gender']; $class=$data['Class']; $Ad_no=$data['Addmission_No']; $Age=$data['Age']; $House=$data['House']; $Term=$data['Term']; $Session=$data['Session']; $English_CA1=$data['English_CA1']; $English_CA2=$data['English_CA2']; $English_Exam=$data['English_Exam']; $English_Total=$data['English_Total']; $English_Remark=$data['English_Remark']; $Mathematics_CA1=$data['Mathematics_CA1']; $Mathematics_CA2=$data['Mathematics_CA2']; $Mathematics_Exam=$data['Mathematics_Exam']; $Mathematics_Total=$data['Mathematics_Total']; $Mathematics_Remark=$data['Mathematics_Remark']; $Quantitative_CA1=$data['Quantitative_CA1']; $Quantitative_CA2=$data['Quantitative_CA2']; $Quantitative_Exam=$data['Quantitative_Exam']; $Quantitative_Total=$data['Quantitative_Total']; $Quantitative_Remark=$data['Quantitative_Remark']; $Phonics_CA1=$data['Phonics_CA1']; $Phonics_CA2=$data['Phonics_CA2']; $Phonics_Exam=$data['Phonics_Exam']; $Phonics_Total=$data['Phonics_Total']; $Phonics_Remark=$data['Phonics_Remark']; $handwriting_CA1=$data['handwriting_CA1']; $handwriting_CA2=$data['handwriting_CA2']; $handwriting_Exam=$data['handwriting_Exam']; $handwriting_Total=$data['handwriting_Total']; $handwriting_Remark=$data['handwriting_Remark']; $Verbal_CA1=$data['Verbal_CA1']; $Verbal_CA2=$data['Verbal_CA2']; $Verbal_Exam=$data['Verbal_Exam']; $Verbal_Total=$data['Verbal_Total']; $Verbal_Remark=$data['Verbal_Remark']; $T_No_class=$data['T_No_In_Class']; $Grade=$data['Grade']; $Average=$data['Average']; $Total=$data['Total']; $Class_Teacher_Comment=$data['Class_Teacher_Comment']; $Headmaster_Comment=$data['Headmaster_Comment']; $Promotion=$data['Promotion'];
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
<title>View Nursery Result</title>
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
                  <td><b>Phonics:</b></td>
                   <td><div class="col-lg-6">
			<span><?php echo$Phonics_CA1; ?></span>
			</div></td>
                  <td><div class="col-lg-6">
			<span><?php echo$Phonics_CA2; ?></span>
			</div></td>
			       <td><div class="col-lg-6">
			<span><?php echo$Phonics_Exam; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$Phonics_Total; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$Phonics_Remark; ?></span>
			</div></td>
                  </tr>

                  <tr> 
                  <td><b>Handwriting:</b></td>
                  <td><div class="col-lg-6">
			<span><?php echo$handwriting_CA1; ?></span>
			</div></td>
                  <td><div class="col-lg-6">
			<span><?php echo$handwriting_CA2; ?></span>
			</div></td>
			       <td><div class="col-lg-6">
			<span><?php echo$handwriting_Exam; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$handwriting_Total; ?></span>
			</div></td>
				 <td><div class="col-lg-6">
			<span><?php echo$handwriting_Remark; ?></span>
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
			<th>&nbsp;&nbsp;&nbsp;Average:	</label></th>
			</div>   
            <div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;Total:</th>
			</div>
			<div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;Grade:</th>
			</div>                                    
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <td><div class="col-lg-6">
				  <span><?php echo$T_No_class; ?></span>
				  </div></td>
                  <td><div class="col-lg-6">
			<span><?php echo$Average; ?></span>
			</div></td>
			<td><div class="col-lg-6">
			<span><?php echo$Total; ?></span>
			</div></td>
			<td><div class="col-lg-6">
			<span><?php echo$Grade; ?></span>
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
	<?php echo'<center><a href="del-nur-result.php?id='.$id.'"><button class="btn btn-primary" name="Delete">Delete</button></a></center>';?>
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
