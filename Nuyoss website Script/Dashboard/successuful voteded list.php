<?php
	session_start();
	if(!isset($_SESSION['Deligate_id']) || (trim($_SESSION['Deligate_id']) == '')){
	 	header('location:./index.php');
	 }
	$deligate_id=$_SESSION['Deligate_id'];
?>
<?php
$connection= mysqli_connect("localhost","root","","nuyoss_database");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Voting Page</title>
	<link rel="icon" type="image/ico" href="./image/logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/vote.page.css">
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
				<li><a href="./vote.page.php"><i class="fa fa-id-card" aria-hidden="true"></i> Vote Page</a></li>
				<li><a href="./Successuful voteded list.php"><i class="fa fa-check-square-o" aria-hidden="true"></i> All Voted</a></li>
				<li><a href="./vote_validation.php"><i class="fa fa-window-close" aria-hidden="true"></i> Exit</a></li>
				<li><a href="./logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
			</nav>
		</div>
			<div class="content">
				<center><h1>&nbsp;Total deligate is: <label style='color: red'><?php
									$query="select * from deligate ORDER BY ID_No";

										$result=mysqli_query($connection, $query);
											$result=mysqli_query($connection, $query);
											
												$Voters=mysqli_num_rows($result);

												echo $Voters;
								?></label></center></h1>
				<?php
					echo "<a><strong style='display: none';><i style='color: red';>" .$_SESSION['Deligate_id']. "</i></strong></a>";
				?>
				<strong style="font-size: 25px;">&nbsp;
				<?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                </strong>
				<hr>
				<script>
				      function greetdeligate() {
				         var time = new Date().getHours();
				         if (time < 11) {
				            return "Good Morning";
				         } else if (time < 18) {
				            return "Good Afternoon";
				         } else {
				            return "Good Evening";
				         }
				      }
				      document.getElementById("user").innerHTML = greetdeligate();
				</script>
			</div>
				<div class="row-1">
					<div class="col-half">
						<div class="vote-container">
							<label class="vt"><strong>President</strong></label>
							<hr>
							<i id="users"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span>
								<?php
									$query="select * from deligate ORDER BY ID_No";

										$result=mysqli_query($connection, $query);
											$result=mysqli_query($connection, $query);
											
												$Voters=mysqli_num_rows($result);

												echo $Voters;
								?>
							</span>
						</div>
					</div>
					<div class="col-half_2">
						<div class="vote-container">
							<label class="vt"><strong>Vice President (1)</strong></label>
							<hr>
							<i id="user"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span-2>
								<?php
									$query="select * from president_voted ORDER BY ID";

										$result2=mysqli_query($connection, $query);
											$result2=mysqli_query($connection, $query);
											
												$Voted=mysqli_num_rows($result2);

												echo $Voted;
								?>
							</span-2>
						</div>
					</div>
					<div class="col-half">
						<div class="vote-container">
							<label class="vt"><strong>President</strong></label>
							<hr>
							<i id="users"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span>
								<?php
									$query="select * from deligate ORDER BY ID_No";

										$result=mysqli_query($connection, $query);
											$result=mysqli_query($connection, $query);
											
												$Voters=mysqli_num_rows($result);

												echo $Voters;
								?>
							</span>
						</div>
					</div>
					<div class="col-half_2">
						<div class="vote-container">
							<label class="vt"><strong>Vice President (1)</strong></label>
							<hr>
							<i id="user"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span-2>
								<?php
									$query="select * from president_voted ORDER BY ID";

										$result2=mysqli_query($connection, $query);
											$result2=mysqli_query($connection, $query);
											
												$Voted=mysqli_num_rows($result2);

												echo $Voted;
								?>
							</span-2>
						</div>
					</div>
					<div class="col-half">
						<div class="vote-container">
							<label class="vt"><strong>President</strong></label>
							<hr>
							<i id="users"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span>
								<?php
									$query="select * from deligate ORDER BY ID_No";

										$result=mysqli_query($connection, $query);
											$result=mysqli_query($connection, $query);
											
												$Voters=mysqli_num_rows($result);

												echo $Voters;
								?>
							</span>
						</div>
					</div>
					<div class="col-half_2">
						<div class="vote-container">
							<label class="vt"><strong>Vice President (1)</strong></label>
							<hr>
							<i id="user"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span-2>
								<?php
									$query="select * from president_voted ORDER BY ID";

										$result2=mysqli_query($connection, $query);
											$result2=mysqli_query($connection, $query);
											
												$Voted=mysqli_num_rows($result2);

												echo $Voted;
								?>
							</span-2>
						</div>
					</div>
					<div class="col-half">
						<div class="vote-container">
							<label class="vt"><strong>President</strong></label>
							<hr>
							<i id="users"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span>
								<?php
									$query="select * from deligate ORDER BY ID_No";

										$result=mysqli_query($connection, $query);
											$result=mysqli_query($connection, $query);
											
												$Voters=mysqli_num_rows($result);

												echo $Voters;
								?>
							</span>
						</div>
					</div>
					<div class="col-half_2">
						<div class="vote-container">
							<label class="vt"><strong>Vice President (1)</strong></label>
							<hr>
							<i id="user"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span-2>
								<?php
									$query="select * from president_voted ORDER BY ID";

										$result2=mysqli_query($connection, $query);
											$result2=mysqli_query($connection, $query);
											
												$Voted=mysqli_num_rows($result2);

												echo $Voted;
								?>
							</span-2>
						</div>
					</div>
					<div class="col-half">
						<div class="vote-container">
							<label class="vt"><strong>President</strong></label>
							<hr>
							<i id="users"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span>
								<?php
									$query="select * from deligate ORDER BY ID_No";

										$result=mysqli_query($connection, $query);
											$result=mysqli_query($connection, $query);
											
												$Voters=mysqli_num_rows($result);

												echo $Voters;
								?>
							</span>
						</div>
					</div>
					<div class="col-half_2">
						<div class="vote-container">
							<label class="vt"><strong>Vice President (1)</strong></label>
							<hr>
							<i id="user"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span-2>
								<?php
									$query="select * from president_voted ORDER BY ID";

										$result2=mysqli_query($connection, $query);
											$result2=mysqli_query($connection, $query);
											
												$Voted=mysqli_num_rows($result2);

												echo $Voted;
								?>
							</span-2>
						</div>
					</div>
					<div class="col-half">
						<div class="vote-container">
							<label class="vt"><strong>President</strong></label>
							<hr>
							<i id="users"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span>
								<?php
									$query="select * from deligate ORDER BY ID_No";

										$result=mysqli_query($connection, $query);
											$result=mysqli_query($connection, $query);
											
												$Voters=mysqli_num_rows($result);

												echo $Voters;
								?>
							</span>
						</div>
					</div>
					<div class="col-half_2">
						<div class="vote-container">
							<label class="vt"><strong>Vice President (1)</strong></label>
							<hr>
							<i id="user"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span-2>
								<?php
									$query="select * from president_voted ORDER BY ID";

										$result2=mysqli_query($connection, $query);
											$result2=mysqli_query($connection, $query);
											
												$Voted=mysqli_num_rows($result2);

												echo $Voted;
								?>
							</span-2>
						</div>
					</div>
					<div class="col-half">
						<div class="vote-container">
							<label class="vt"><strong>President</strong></label>
							<hr>
							<i id="users"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span>
								<?php
									$query="select * from deligate ORDER BY ID_No";

										$result=mysqli_query($connection, $query);
											$result=mysqli_query($connection, $query);
											
												$Voters=mysqli_num_rows($result);

												echo $Voters;
								?>
							</span>
						</div>
					</div>
					<div class="col-half_2">
						<div class="vote-container">
							<label class="vt"><strong>Vice President (1)</strong></label>
							<hr>
							<i id="user"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span-2>
								<?php
									$query="select * from president_voted ORDER BY ID";

										$result2=mysqli_query($connection, $query);
											$result2=mysqli_query($connection, $query);
											
												$Voted=mysqli_num_rows($result2);

												echo $Voted;
								?>
							</span-2>
						</div>
					</div>
					<div class="col-half">
						<div class="vote-container">
							<label class="vt"><strong>President</strong></label>
							<hr>
							<i id="users"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span>
								<?php
									$query="select * from deligate ORDER BY ID_No";

										$result=mysqli_query($connection, $query);
											$result=mysqli_query($connection, $query);
											
												$Voters=mysqli_num_rows($result);

												echo $Voters;
								?>
							</span>
						</div>
					</div>
					<div class="col-half_2">
						<div class="vote-container">
							<label class="vt"><strong>Vice President (1)</strong></label>
							<hr>
							<i id="user"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span-2>
								<?php
									$query="select * from president_voted ORDER BY ID";

										$result2=mysqli_query($connection, $query);
											$result2=mysqli_query($connection, $query);
											
												$Voted=mysqli_num_rows($result2);

												echo $Voted;
								?>
							</span-2>
						</div>
					</div>
					<div class="col-half">
						<div class="vote-container">
							<label class="vt"><strong>President</strong></label>
							<hr>
							<i id="users"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span>
								<?php
									$query="select * from deligate ORDER BY ID_No";

										$result=mysqli_query($connection, $query);
											$result=mysqli_query($connection, $query);
											
												$Voters=mysqli_num_rows($result);

												echo $Voters;
								?>
							</span>
						</div>
					</div>
					<div class="col-half_2">
						<div class="vote-container">
							<label class="vt"><strong>Vice President (1)</strong></label>
							<hr>
							<i id="user"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span-2>
								<?php
									$query="select * from president_voted ORDER BY ID";

										$result2=mysqli_query($connection, $query);
											$result2=mysqli_query($connection, $query);
											
												$Voted=mysqli_num_rows($result2);

												echo $Voted;
								?>
							</span-2>
						</div>
					</div>
					<div class="col-half">
						<div class="vote-container">
							<label class="vt"><strong>President</strong></label>
							<hr>
							<i id="users"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span>
								<?php
									$query="select * from deligate ORDER BY ID_No";

										$result=mysqli_query($connection, $query);
											$result=mysqli_query($connection, $query);
											
												$Voters=mysqli_num_rows($result);

												echo $Voters;
								?>
							</span>
						</div>
					</div>
					<div class="col-half_2">
						<div class="vote-container">
							<label class="vt"><strong>Vice President (1)</strong></label>
							<hr>
							<i id="user"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span-2>
								<?php
									$query="select * from president_voted ORDER BY ID";

										$result2=mysqli_query($connection, $query);
											$result2=mysqli_query($connection, $query);
											
												$Voted=mysqli_num_rows($result2);

												echo $Voted;
								?>
							</span-2>
						</div>
					</div>
					<div class="col-half">
						<div class="vote-container">
							<label class="vt"><strong>President</strong></label>
							<hr>
							<i id="users"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span>
								<?php
									$query="select * from deligate ORDER BY ID_No";

										$result=mysqli_query($connection, $query);
											$result=mysqli_query($connection, $query);
											
												$Voters=mysqli_num_rows($result);

												echo $Voters;
								?>
							</span>
						</div>
					</div>
					<div class="col-half_2">
						<div class="vote-container">
							<label class="vt"><strong>Vice President (1)</strong></label>
							<hr>
							<i id="user"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span-2>
								<?php
									$query="select * from president_voted ORDER BY ID";

										$result2=mysqli_query($connection, $query);
											$result2=mysqli_query($connection, $query);
											
												$Voted=mysqli_num_rows($result2);

												echo $Voted;
								?>
							</span-2>
						</div>
					</div>
					<div class="col-half_2">
						<div class="vote-container">
							<label class="vt"><strong>Vice President (1)</strong></label>
							<hr>
							<i id="user"class="fa fa-check-square-o" aria-hidden="true"></i>
							<span-2>
								<?php
									$query="select * from president_voted ORDER BY ID";

										$result2=mysqli_query($connection, $query);
											$result2=mysqli_query($connection, $query);
											
												$Voted=mysqli_num_rows($result2);

												echo $Voted;
								?>
							</span-2>
						</div>
					</div>
				</div>
			</div>
	</div><!-- end of Container-->
</body>
</html>