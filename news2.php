<?php
$connection= mysqli_connect("localhost","root","","nuyoss_database");

?>
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
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $Post_Title;?></title>
	<link rel="icon" type="image/ico" href="./images/logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/news.css">
</head>
<body>
	<div id="container">
		<?php include('header.php'); ?>
			<div class="content">
				<h1>News and Events</h1>
			</div>
				<div class="row-1">
					<center> 
			<div class="full-col">
				<div class="two">
					<div class="titles">
					<?php echo $Post_Title;?>
					<input type="hidden" name="Post_Title" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
					</div>
					<div class="image">
						<img class="img2" src="admin/image/dsss (3).jpg" />
					</div>
					<div class="post_body">
						<?php echo $Post_Descriptions;?>
					</div>
				</div>
				</div>
			</center>
				</div>
			</div>
	<?php include('footer.php'); ?>
	</div><!-- end of Container-->
</body>
</html>