<?php
$connection= mysqli_connect("localhost","root","","nuyoss_database");
include('./db_connection/db_connect.php');
$ID_No=$_GET['id'];
mysqli_query($connection,"delete from deligate where ID_No='$ID_No'")or die(mysqli_error());
header('location:view_deligate.php');
?>
