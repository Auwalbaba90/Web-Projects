<?php
$connection= mysqli_connect("localhost","root","","nuyoss_database");
include('./db_connection/db_connect.php');
$positions_id=$_GET['id'];
mysqli_query($connection,"delete from positions where position_id='$positions_id'")or die(mysqli_error());
header('location:view_position.php?Successfully');
?>
