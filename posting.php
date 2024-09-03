<?php
	session_start();
	if($_SESSION['admin']==null){
	 	header('location:./logout.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Posting News</title>
	<link rel="icon" type="image/ico" href="./image/logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/posting.css">
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
</head>
<body>
	<div id="container">
		<div class="row">
			<div class="logo">
				<span class="head"><b>National Union Of Yobe State Students.<br>(NUYOSS)</b></span>
			</div>
		</div>
		<div class="row">
			<nav>
			<ul>
				<li><a href="./index.php"><i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="./admin_profile.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> My Profile</a></li>
				<li><a href="./users.php"><i class="fa fa-users" aria-hidden="true"></i> Users</a></li>
				<li><a href="./Voted.php"><i class="fa fa-check-square-o" aria-hidden="true"></i> View Voted</a></li>
				<li><a href="./post View.php"><i class="fa fa-bell-o" aria-hidden="true"></i> Views Posting</a></li>
				<li><a href="./logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
			</nav>
		</div>
			<div class="content">
				<?php
					echo "<h1><center>Posting News</center></h1> <span style='display:none;'> ".$_SESSION['admin']."</span>";
				?>
				<hr>
			</div>
			<form action="posting.php" id="posting" method="Post" name="posting">
			<div class="full-col">
				<div class="full-col">
					<?php
						if (isset($_POST['post'])){
							if(isset($_POST['title'], $_POST['image'], $_POST['posts']));{
								$title = htmlspecialchars(htmlentities(stripslashes($_POST['title'])));
								$image = htmlspecialchars(htmlentities(stripslashes($_POST['image'])));
								$posts = htmlspecialchars(htmlentities(stripslashes($_POST['posts'])));
								if(!empty($title)){

									if(!empty($posts)){
											require_once('../db_connection/db_connect.php');{
										$query="INSERT INTO posting (Post_Title, image, Post_Descriptions) VALUES (?,?,?)";
										$stmt=mysqli_prepare($dbc,$query);
										mysqli_stmt_bind_param($stmt,"sss",$title,$image,$posts);
										mysqli_stmt_execute($stmt);
										$affected_rows=mysqli_stmt_affected_rows($stmt);
										mysqli_stmt_close($stmt);
										mysqli_close($dbc);
																									
											if($affected_rows==1)
												{
													echo('<center><b style="color: green;">Post Uploaded Successully.</b><a href="./post View.php"><b style="color: blue;"><br>Click hare to View.</a></b></center><br>');
												}
											}
											}else{
											echo '<center><b style="color: red;">Post Description field Empty!</b></center><br>';
										}
									}else{
										echo '<center><b style="color: red;">Title field Empty!</b></center><br>';
								}

							}
						}
					?>
				</div>
				<div class="two">
					<textarea class="ints" rows="2" cols="90" name="title" placeholder="Type Post Title hare....."></textarea><br><br>
					<input class="image" type="file" name="image" title="Image is (Optional)" ><br><br>
				<textarea class="ints" rows="18" cols="130" name="posts" placeholder="Type your Post hare....."></textarea><br>
				<input class="subs" type="submit" name="post" value="Publish"><br><br>
				</div>
				</div>
				</form>
			</div>
	</div><!-- end of Container-->
</body>
</html>