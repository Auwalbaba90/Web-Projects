<?php
$connection= mysqli_connect("localhost","root","","nuyoss_database");

?>
<!DOCTYPE html>
<html>
<head>
	<title>News and Events</title>
	<link rel="icon" type="image/ico" href="./images/logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/news.css">
</head>
<body>
	<div id="container">
		<?php include('header.php'); ?>
			<div class="content">
				<h1>News and Events</h1>
			</div>
			<hr>
				<div class="row-1">
					<center>
						<div class="two2">
					<table class="tabs" border="1">
						<thead>
							<?php
                                $query = mysqli_query($connection,"select * from posting ORDER BY `posting`.`ID_No` DESC") or die(mysqli_error());
                                while ($row = mysqli_fetch_array($query)) {
                                    $ID_No=$row['ID_No'];
                                    $Post_Title=$row['Post_Title'];
									$Post_Descriptions=$row['Post_Descriptions'];
									$image=$row['image'];
									$Post_Date=$row['Post_Date'];
                            ?>
							<tr>
								<div titl><th class="list" colspan="6"><?php echo $Post_Title;?></th></div>


							</tr>
						</thead>
						<tbody>
							<tr class="data">
								<td class="nam"><div class="disc"><?php echo $Post_Descriptions;?></div></td>
							</tr>
							<tr class="data">
								<td class="nad" style="color: green">&nbsp;<?php echo $Post_Date;?>
								<?php echo'<a class="read" href="./news2.php?id='.$ID_No.'">Read More...&nbsp;</a>'?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
					</center>
				</div>
			</div>
	<?php include('footer.php'); ?>
	</div><!-- end of Container-->
</body>
</html>