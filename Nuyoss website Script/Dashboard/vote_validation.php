<?php
	session_start();
	if($_SESSION['Email_Address']==null){
	 	header('location:./logout.php');
	 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Varify Deligate</title>
	<link rel="icon" type="image/ico" href="./image/logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/validation.css">
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
</head>
<body>
	<div id="container">
		<div class="row">
			<div class="logo">
				<img src="./image/logo.png">
				<h2>National Union Of Yobe State Students.<br> &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; (NUYOSS)</h2>
			</div>
		</div>
		<div class="row">
			<nav>
			<ul>
				<li><a href="./index.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="./candidates.php"><i class="fa fa-users" aria-hidden="true"></i>Back to Candidates</a></li>
				<li><a href="./vote_validation.php"><i class="fa fa-check-square-o" aria-hidden="true"></i> Varify Deligate</a></li>
			</ul>
			</nav>
		</div>
			<div class="content">
				<?php
					echo "<strong style='display: none';>" .$_SESSION['Email_Address']. "</strong>";
				?>
				<hr>
			</div>
				<div class="col-half-q">
					<img class="can" src="./image/verify.gif">
				</div>
				<form action="vote_validation.php" method="POST" id="verify">
					<div class="col-half-tt">
					<?php 
						if (isset($_POST['verify'])){
							if(isset($_POST['Deligate_id'])){
								$Deligate_id = htmlspecialchars(htmlentities(stripslashes($_POST['Deligate_id'])));
									if (!empty($Deligate_id)){
										include './db_connection/db_connect.php';
											$query="SELECT count(*) FROM deligate where Deligate_id=?";
												$stmt=mysqli_prepare($dbc,$query);
												mysqli_stmt_bind_param($stmt,"s",$Deligate_id);
												mysqli_stmt_execute($stmt);
												mysqli_stmt_bind_result($stmt,$cnt);
												mysqli_stmt_fetch($stmt);
												mysqli_stmt_close($stmt);
												mysqli_close($dbc);
												if($cnt==1){
													echo "<b style='color: green';>Varify Successully.</b>";
													$_SESSION['Deligate_id']=$Deligate_id;
													echo $_SESSION['Deligate_id']." is logged in";
													header("location:../Dashboard/vote.page.php");
												}else{
													echo '<b style="color: red";>Invalid <i style="color: green";>'.$Deligate_id.'</i> Deligate ID Check and try Again.</b>';
												}
											}else{
												echo '<b style="color: red">Deligate ID field Empty!</b>';
											}
										}
									}
					 ?>
					<br><label class="label">Deligate ID:</label><br>
					<input class="inputs" type="text" name="Deligate_id" placeholder="Deligate Vote Id Number"><br><br>
					<input class="subm" type="submit" name="verify" value="verify"><br><br>
				</div>
				</form>
	</div><!-- end of Container-->
</body>
</html>