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
	<title>Edit News</title>
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
					echo "<h1><center>Edit Posting</center></h1> <span style='display:none;'> ".$_SESSION['admin']."</span>";
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
            ?>
            <?php
	                if (isset($_POST['post_save'])) {
	                	$id_no = $_POST['id'];
	                    $title_edit = $_POST['title_edit'];
	                    $posts_edit = $_POST['posts_edit'];
	                	$image_edit = $_POST['image_edit'];

	                    			
                                    if(!empty($title_edit)){

                                    	if(!empty($posts_edit)){
                                    	 mysqli_query($connection,"UPDATE posting set
                                        Post_Title='$title_edit', Post_Descriptions='$posts_edit', image='$image_edit'
                                         where ID_No = {$_POST['id']}                                    
                                        ") or die(mysqli_error());
                                    	echo('<b style="color: green;"><center>Updated Successully.</center></b>');
                                		echo('<script>location.href = "./view_post.php?id='.$id_no.'"</script>');
                                    }else{
                                		echo('<script>location.href = "Post View.php"</script>');
                            		}
                               
                                }else{
                                	echo('<script>location.href = "Post View.php"</script>');
                                }
                            }
                ?>
			<form action="edit_posting.php" id="edit_posting" method="Post" name="edit_posting">
			<div class="full-col">
				<div class="full-col">
				</div>
				<div class="two">
					<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
					<textarea class="ints" rows="2" cols="90" name="title_edit" placeholder="Type Post Title hare....."><?php echo isset($Post_Title) ? $Post_Title : "" ?></textarea><br><br>
					<input class="image" type="file" name="image_edit" title="Image is (Optional)" ><br><br>
				<textarea class="ints" rows="18" cols="130" name="posts_edit" placeholder="Type your Post hare....."><?php echo isset($Post_Descriptions) ? $Post_Descriptions : "" ?></textarea><br>
				<input class="subs" type="submit" name="post_save" value="Publish"><br><br>
				</div>
				</div>
				</form>
			</div>
	</div><!-- end of Container-->
</body>
</html>