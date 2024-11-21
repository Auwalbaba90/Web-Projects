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
	<title>Posted View</title>
	<link rel="icon" type="image/ico" href="./image/logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/post_view.css">
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
				<li><a href="./logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
			</nav>
		</div>
			<div class="content">
				<?php
					echo "<h1><center>Posted View</center></h1> <span style='display:none;'> ".$_SESSION['admin']."</span>";
				?>
				<hr>
			</div>
			 <?php 
                    if(isset($_GET['id'])){
                        $posting_query = mysqli_query($connection, "SELECT * FROM posting where ID_No = {$_GET['id']}");
                        foreach(mysqli_fetch_array($posting_query) as $k => $v){
                            $$k = $v;
                        }
                    }
                     $query = mysqli_query($connection,"select * from posting") or die(mysqli_error());
                                while ($row = mysqli_fetch_array($query)) {
                                	$id_no=$row['ID_No'];
                                };
                ?>
			<div class="full-col">
				<div class="two">
					<div class="title">
					<?php echo $Post_Title;?>
					<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
					</div>
					<div class="image">
						<img src="image/logo.png" />
					</div>
					<div class="post_body">
						<?php echo $Post_Descriptions;?>
					</div>
					<div class="form">
						<a href="./post View.php"><button title="Close Post" class="Back"><i class="fa fa-close" aria-hidden="true"> Close</button></a></i><?php echo '<a class="hrefs" href="./delete_post.php?id='.$id_no.'">'?><button title="Delete Post" class="close"><i class="fa fa-trash-o" aria-hidden="true"> Delete</button></a></i>
					</div><br><br>
				</div>
				</div>
			</div>
			</div>
	</div><!-- end of Container-->
</body>
</html>