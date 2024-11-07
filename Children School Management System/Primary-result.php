<?php 
    session_start();
    if($_SESSION['Addmission_No']==null){
        header('location:check_result.php');
    }
$db = mysqli_connect('localhost','root','','naub-staff-children-school');

?> 
<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Result</title>
	<link rel="shortcut icon" href="assets/images/gallery/naub-children-school.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/result.css" />
</head>
<body>
  <?php 
    $query=mysqli_query($db, "SELECT First_Name,Middle_Name,Last_Name,Gender,Class,Addmission_No,Age,House,Term,Session,English_CA1,English_CA2,English_Exam,English_Total,English_Remark,Mathematics_CA1,Mathematics_CA2,Mathematics_Exam,Mathematics_Total,Mathematics_Remark,Civic_Education_CA1,Civic_Education_CA2,Civic_Education_Exam,Civic_Education_Total,Civic_Education_Remark,Basic_Science_CA1,Basic_Science_CA2,Basic_Science_Exam,Basic_Science_Total,Basic_Science_Remark,Quantitative_CA1,Quantitative_CA2,Quantitative_Exam,Quantitative_Total,Quantitative_Remark,P_H_E_CA1,P_H_E_CA2,P_H_E_Exam,P_H_E_Total,P_H_E_Remark,Hausa_Lang_CA1,Hausa_Lang_CA2,Hausa_Lang_Exam,Hausa_Lang_Total,Hausa_Lang_Remark,Verbal_CA1,Verbal_CA2,Verbal_Exam,Verbal_Total,Verbal_Remark,Computer_CA1,Computer_CA2,Computer_Exam,Computer_Total,Computer_Remark,Religion_CA1,Religion_CA2,Religion_Exam,Religion_Total,Religion_Remark,Agric_CA1,Agric_CA2,Agric_Exam,Agric_Total,Agric_Remark,CCACA1,CCACA2,CCAExam,CCATotal,CCARemark,Sos_CA1,Sos_CA2,Sos_Exam,Sos_Total,Sos_Remark,T_No_In_Class,Position,Average,Total,Class_Teacher_Comment,Headmaster_Comment,Promotion from primary_result where Addmission_No='".$_SESSION['Addmission_No']."'");
while($data=mysqli_fetch_array($query))
    {
    $fname=$data['First_Name']; $sname=$data['Middle_Name']; $lname=$data['Last_Name']; $Gender=$data['Gender']; $class=$data['Class']; $Ad_no=$data['Addmission_No']; $Age=$data['Age']; $House=$data['House']; $Term=$data['Term']; $Session=$data['Session']; $English_CA1=$data['English_CA1']; $English_CA2=$data['English_CA2']; $English_Exam=$data['English_Exam']; $English_Total=$data['English_Total']; $English_Remark=$data['English_Remark']; $Mathematics_CA1=$data['Mathematics_CA1']; $Mathematics_CA2=$data['Mathematics_CA2']; $Mathematics_Exam=$data['Mathematics_Exam']; $Mathematics_Total=$data['Mathematics_Total']; $Mathematics_Remark=$data['Mathematics_Remark']; $C_Education_CA1=$data['Civic_Education_CA1']; $C_Education_CA2=$data['Civic_Education_CA2']; $C_Education_Exam=$data['Civic_Education_Exam']; $C_Education_Total=$data['Civic_Education_Total']; $C_Education_Remark=$data['Civic_Education_Remark']; $B_Science_CA1=$data['Basic_Science_CA1']; $B_Science_CA2=$data['Basic_Science_CA2']; $B_Science_Exam=$data['Basic_Science_Exam']; $B_Science_Total=$data['Basic_Science_Total']; $B_Science_Remark=$data['Basic_Science_Remark']; $Quantitative_CA1=$data['Quantitative_CA1']; $Quantitative_CA2=$data['Quantitative_CA2']; $Quantitative_Exam=$data['Quantitative_Exam']; $Quantitative_Total=$data['Quantitative_Total']; $Quantitative_Remark=$data['Quantitative_Remark']; $PHE_CA1=$data['P_H_E_CA1']; $PHE_CA2=$data['P_H_E_CA2']; $PHE_Exam=$data['P_H_E_Exam']; $PHE_Total=$data['P_H_E_Total']; $PHE_Remark=$data['P_H_E_Remark']; $HLang_CA1=$data['Hausa_Lang_CA1']; $HLang_CA2=$data['Hausa_Lang_CA2']; $HLang_Exam=$data['Hausa_Lang_Exam']; $HLang_Total=$data['Hausa_Lang_Total']; $HLang_Remark=$data['Hausa_Lang_Remark']; $Verbal_CA1=$data['Verbal_CA1']; $Verbal_CA2=$data['Verbal_CA2']; $Verbal_Exam=$data['Verbal_Exam']; $Verbal_Total=$data['Verbal_Total']; $Verbal_Remark=$data['Verbal_Remark']; $Computer_CA1=$data['Computer_CA1']; $Computer_CA2=$data['Computer_CA2']; $Computer_Exam=$data['Computer_Exam']; $Computer_Total=$data['Computer_Total']; $Computer_Remark=$data['Computer_Remark']; $Religion_CA1=$data['Religion_CA1']; $Religion_CA2=$data['Religion_CA2']; $Religion_Exam=$data['Religion_Exam']; $Religion_Total=$data['Religion_Total']; $Religion_Remark=$data['Religion_Remark']; $Agric_CA1=$data['Agric_CA1']; $Agric_CA2=$data['Agric_CA2']; $Agric_Exam=$data['Agric_Exam']; $Agric_Total=$data['Agric_Total']; $Agric_Remark=$data['Agric_Remark']; $CCA_CA1=$data['CCACA1']; $CCA_CA2=$data['CCACA2']; $CCA_Exam=$data['CCAExam']; $CCA_Total=$data['CCATotal']; $CCA_Remark=$data['CCARemark']; $Sos_CA1=$data['Sos_CA1']; $Sos_CA2=$data['Sos_CA2']; $Sos_Exam=$data['Sos_Exam']; $Sos_Total=$data['Sos_Total']; $Sos_Remark=$data['Sos_Remark']; $T_No_class=$data['T_No_In_Class']; $Position=$data['Position']; $Average=$data['Average']; $Total=$data['Total']; $Class_Teacher_Comment=$data['Class_Teacher_Comment']; $Headmaster_Comment=$data['Headmaster_Comment']; $Promotion=$data['Promotion'];
}

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
	<center>
	<div class="content">
		<heade class="naub-children-body">
			<img class="logo" src="assets/images/gallery/naub-children-school.jpg">
				<h1 class="sname"><b>NAUB STAFF CHILDREN SCHOOL</b></h1>
				<h2 class="s-name"><b>NIGERIAN ARMY UNIVERSITY, BIU</b></h2>
				<h3>P.M.B, 1500 Biu-Gombe Road Biu, Borno State.</h3>
				<h4><b class="s-name">MOTTO:</b> Discipline and Knowledge</h4>
				<div class="program">
					Primary Result Slip
				</div>

				<u class="term"><h5><?php echo $Term ?> <span class="Assessement">Term Assessement</span> <?php echo $Session ?></h5></u>
				<div class="infor">
				<div class="p-infor">
					<table class="infor-table">
  						<tr>
    						<th>Full Name:</th>
    						<td class="dts" colspan="3"><?php echo $fname.' &nbsp;'.$sname.' &nbsp;'.$lname;?></td>
  						</tr>
  						<tr>
    						<th>Addmission No:</th>
    						<td class="dts" colspan="3"><?php echo $Ad_no ?></td>
  						</tr>
  						<tr>
    						<th>Gender:</th>
    						<td class="dts"><?php echo $Gender ?></td>
    						<th>Date of Birth:</th>
    						<td class="dts"><?php echo $Age ?></td>
  						</tr>
  						<tr>
    						<th>Class:</th>
    						<td class="dts"><?php echo $class ?></td>
    						<th>House:</th>
    						<td class="dts"><?php echo $House ?></td>
  						</tr>
					</table>
					</div>
						<div class="other-infor">
							<table class="infor-table">
              <tr>
                <th>Next Term Begins:</th>
                <td class="dts" colspan="3"><?php echo $Next_Term_Begins; ?></td>
              </tr>
              <tr>
                <th>Next Term Ends:</th>
                <td class="dts" colspan="3"><?php echo $Next_Term_Ends; ?></td>
              </tr>
              <tr>
                <th>Time School Open:</th>
                <td class="dts"><?php echo $Time_School_open; ?></td>
              </tr>
              <tr>
                <th>Time Present:</th>
                <td class="dts"><?php echo $Times_Present; ?></td>
              </tr>
          </table>
						</div>
					</div>
				</heade><br><br><br><br><br>
				<div class="sheet">
					<table class="r-sheet">
  						<tr>
    						<th class="thedc" colspan="7">ACADEMIC</th>
  						</tr>
  						<tr>
    						<th class="thed">Subjects</th>
    						<th class="thed">C.A. 1</th> 
    						<th class="thed">C.A. 2</th>
    						<th class="thed">Exams</th> 
    						<th class="thed">Total</th>
    						<th class="thed">Remarks</th>
  						</tr>
  						<tr>
    						<td class="cours">English</td>
    						<td class="tdat"><?php echo $English_CA1 ?></td>
    						<td class="tdat"><?php echo $English_CA2 ?></td>
    						<td class="tdat"><?php echo $English_Exam ?></td>
    						<td class="tdat"><?php echo $English_Total ?></td>
    						<td class="tdat"><?php echo $English_Remark ?></td>
  						</tr>
  						<tr>
    						<td class="cours">Mathematics</td>
    						<td class="tdat"><?php echo $Mathematics_CA1 ?></td>
    						<td class="tdat"><?php echo $Mathematics_CA2 ?></td>
    						<td class="tdat"><?php echo $Mathematics_Exam ?></td>
    						<td class="tdat"><?php echo $Mathematics_Total ?></td>
    						<td class="tdat"><?php echo $Mathematics_Remark ?></td>
  						</tr>
  						<tr>
    						<td class="cours">Civic Education</td>
    						<td class="tdat"><?php echo $C_Education_CA1 ?></td>
    						<td class="tdat"><?php echo $C_Education_CA2 ?></td>
    						<td class="tdat"><?php echo $C_Education_Exam ?></td>
    						<td class="tdat"><?php echo $C_Education_Total ?></td>
    						<td class="tdat"><?php echo $C_Education_Remark ?></td>
  						</tr>
  						<tr>
    						<td class="cours">Basic Science</td>
    						<td class="tdat"><?php echo $B_Science_CA1 ?></td>
    						<td class="tdat"><?php echo $B_Science_CA2 ?></td>
    						<td class="tdat"><?php echo $B_Science_Exam ?></td>
    						<td class="tdat"><?php echo $B_Science_Total ?></td>
    						<td class="tdat"><?php echo $B_Science_Remark ?></td>
  						</tr>
  						<tr>
    						<td class="cours">Quantitative</td>
    						<td class="tdat"><?php echo $Quantitative_CA1 ?></td>
    						<td class="tdat"><?php echo $Quantitative_CA2 ?></td>
    						<td class="tdat"><?php echo $Quantitative_Exam ?></td>
    						<td class="tdat"><?php echo $Quantitative_Total ?></td>
    						<td class="tdat"><?php echo $Quantitative_Remark ?></td>
  						</tr>
  						<tr>
    						<td class="cours">P.H.E</td>
    						<td class="tdat"><?php echo $PHE_CA1 ?></td>
    						<td class="tdat"><?php echo $PHE_CA2 ?></td>
    						<td class="tdat"><?php echo $PHE_Exam ?></td>
    						<td class="tdat"><?php echo $PHE_Total ?></td>
    						<td class="tdat"><?php echo $PHE_Remark ?></td>
  						</tr>
  						<tr>
    						<td class="cours">Hausa Lang.</td>
    						<td class="tdat"><?php echo $HLang_CA1 ?></td>
    						<td class="tdat"><?php echo $HLang_CA2 ?></td>
    						<td class="tdat"><?php echo $HLang_Exam ?></td>
    						<td class="tdat"><?php echo $HLang_Total ?></td>
    						<td class="tdat"><?php echo $HLang_Remark ?></td>
  						</tr>
  						<tr>
    						<td class="cours">Verbal</td>
    						<td class="tdat"><?php echo $Verbal_CA1 ?></td>
    						<td class="tdat"><?php echo $Verbal_CA2 ?></td>
    						<td class="tdat"><?php echo $Verbal_Exam ?></td>
    						<td class="tdat"><?php echo $Verbal_Total ?></td>
    						<td class="tdat"><?php echo $Verbal_Remark ?></td>
  						</tr>
  						<tr>
    						<td class="cours">Computer</td>
    						<td class="tdat"><?php echo $Computer_CA1 ?></td>
    						<td class="tdat"><?php echo $Computer_CA2 ?></td>
    						<td class="tdat"><?php echo $Computer_Exam ?></td>
    						<td class="tdat"><?php echo $Computer_Total ?></td>
    						<td class="tdat"><?php echo $Computer_Remark ?></td>
  						</tr>
  						<tr>
    						<td class="cours">Religion</td>
    						<td class="tdat"><?php echo $Religion_CA1 ?></td>
    						<td class="tdat"><?php echo $Religion_CA2 ?></td>
    						<td class="tdat"><?php echo $Religion_Exam ?></td>
    						<td class="tdat"><?php echo $Religion_Total ?></td>
    						<td class="tdat"><?php echo $Religion_Remark ?></td>
  						</tr>
  						<tr>
    						<td class="cours">Agric</td>
    						<td class="tdat"><?php echo $Agric_CA1 ?></td>
    						<td class="tdat"><?php echo $Agric_CA2 ?></td>
    						<td class="tdat"><?php echo $Agric_Exam ?></td>
    						<td class="tdat"><?php echo $Agric_Total ?></td>
    						<td class="tdat"><?php echo $Agric_Remark ?></td>
  						</tr>
  						<tr>
    						<td class="cours">C.C.A</td>
    						<td class="tdat"><?php echo $CCA_CA1 ?></td>
    						<td class="tdat"><?php echo $CCA_CA2 ?></td>
    						<td class="tdat"><?php echo $CCA_Exam ?></td>
    						<td class="tdat"><?php echo $CCA_Total ?></td>
    						<td class="tdat"><?php echo $CCA_Remark ?></td>
  						</tr>
              <tr>
                <td class="cours">Social Studies</td>
                <td class="tdat"><?php echo $Sos_CA1 ?></td>
                <td class="tdat"><?php echo $Sos_CA2 ?></td>
                <td class="tdat"><?php echo $Sos_Exam ?></td>
                <td class="tdat"><?php echo $Sos_Total ?></td>
                <td class="tdat"><?php echo $Sos_Remark ?></td>
              </tr>
					</table><br>
					<div class="Total">
						<table class="down">
  							<tr>
    							<th><i>Total No. In Class:</i>|&nbsp;&nbsp;&nbsp;&nbsp;<span class="tbd"><?php echo $T_No_class ?></span></th>
    							<th><i>Position:</i>|&nbsp;&nbsp;&nbsp;&nbsp;<span class="tbd"><?php echo $Position ?></span></th> 
  							</tr>
  							<tr>
    							<th><i>Average:</i>|&nbsp;&nbsp;&nbsp;&nbsp;<span class="tbd"><?php echo $Average ?></span></th>
    							<th><i>Total:</i>|&nbsp;&nbsp;&nbsp;&nbsp;<span class="tbd"><?php echo $Total ?></span></th> 
  							</tr>
  							<tr>
    							<th colspan="2"><i>Class Teacher Comment:</i>|&nbsp;&nbsp;&nbsp;&nbsp;<span class="tbd"><?php echo $Class_Teacher_Comment ?></span></th>
  							</tr>
  							<tr>
    							<th><i>Headmaster Comment:</i>|&nbsp;&nbsp;&nbsp;&nbsp;<span class="tbd"><?php echo $Headmaster_Comment ?></span></th>
    							<th><i>Promotion:</i>|&nbsp;&nbsp;&nbsp;&nbsp;<span class="tbd"><?php echo $Promotion ?></span></th>
  							</tr>
						</table>

						<table class="down-right">
  							<tr>
    							<th class="cols-2" colspan="3">KEYS TO RATINGS</th>
  							</tr>
  							<tr>
    							<th class="cols">GRADE</th>
    							<th class="cols">INTERPRETATION</th>
                  <th class="cols">SCORE</th>
  							</tr>
  							<tr>
    							<td class="cols">A</td>
                  <td class="cols">Excellent</td>
    							<td class="cols">70 - 100</td>
  							</tr>
  							<tr>
    							<td class="cols">B</td>
                  <td class="cols">Very Good</td>
    							<td class="cols">60 - 69</td>
  							</tr>
  							<tr>
    							<td class="cols">C</td>
                  <td class="cols">Good</td>
    							<td class="cols">50 - 59</td>
  							</tr>
  							<tr>
    							<td class="cols">D</td>
                  <td class="cols">Pass</td>
    							<td class="cols">45 - 49</td>
  							</tr>
                <tr>
                  <td class="cols">E</td>
                  <td class="cols">Poor</td>
                  <td class="cols">40 - 44</td>
                </tr>
                <tr>
                  <td class="cols">F</td>
                  <td class="cols">Fail</td>
                  <td class="cols">0 - 39</td>
                </tr>
						</table>
					</div>
           <center> <input type="submit" id="print" class="btn btn-success btn-sm" value="Print" onclick="printpage();"></center><br>
				</div>
			</div>
		</center>
	</body>
  <script type="text/javascript">
    function printpage()
      {
        var printButton = document.getElementById("print");
        printButton.style.visibility = 'hidden';
        window.print()
        printButton.style.visibility = 'visible';
      }
  </script>
</html>