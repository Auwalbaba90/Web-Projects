<?php
	session_start();
	if($_SESSION['admin']==null){
	 	header('location:./logout.php');
	}
?>
<?php
$connection= mysqli_connect("localhost","root","","nuyoss_database");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Voted List</title>
	<link rel="icon" type="image/ico" href="../image/logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/voted.css">
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
</head>
<body>
	<div id="container">
		<div class="row">
			<div class="logo">
				<span class="head"><h2>National Union Of Yobe State Students. (NUYOSS)</h2></span>
			</div>
		</div>
		<hr>
			<div class="content">
				<?php
					echo "<span style='display:none;'> ".$_SESSION['admin']."</span>";
				?>
				<center><h1>Succesufully Voted Candidate</h1></center>
			</div>
			<div class="full-col">
				<center>
				<div class="two2">
					<table class="tabs" border="1">
						<thead>
							<tr>
								<th class="list" colspan="6">Presidential List</th>
							</tr>
							<tr class="nam">
								<th>Deligate ID</th>
								<th>Candidate Full Name</th>
								<th>Matric No</th>
								<th>Candidate School</th>
								<th>Candidate Course</th>
								<th>Date/Time</th>
							</tr>
							<?php
									$query="select * from president_voted ORDER BY `president_voted`.`Candidate_Full_Name` ASC";

									$result=mysqli_query($connection, $query);
									if ($result) {
										if(mysqli_num_rows($result) >0){
											while($row=mysqli_fetch_assoc($result)){
												$Deligate_ID=$row['Deligate_ID'];
												$Candidate_Full_Name=$row['Candidate_Full_Name'];
												$Matric_No=$row['Matric_No'];
												$Candidate_School=$row['Candidate_School'];
												$Candidate_Course=$row['Candidate_Course'];
												$Date=$row['Date'];
							?>
						</thead>
						<tbody>
							<tr class="data">
								<td style="color: green;" class="name"><?php echo $Deligate_ID;?></td>
								<td><?php echo $Candidate_Full_Name;?></td>
								<td style="color: #cc6600; text-transform: uppercase;" class="name"><?php echo $Matric_No;?></td>
								<td><?php echo $Candidate_School;?></td>
								<td ><?php echo $Candidate_Course;?></td>
								<td style="color: red;"><?php echo $Date;?></td>
							</tr>
							<?php
									}
										}
									}else{
										echo mysqli_error($connection);
									}
							?>
						</tbody>
					</table><br>
					<button class="button" name="print" id="print" onclick="printpage();">Print</button>
				</center>
				</div>
				<script type="text/javascript">
            function printpage()
            {
            var printButton = document.getElementById("print");
            printButton.style.visibility = 'hidden';
            window.print()
             printButton.style.visibility = 'visible';
             }
        </script>
			</div>
			</div>
	</div><!-- end of Container-->
</body>
</html>