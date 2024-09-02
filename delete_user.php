<?php
$connection= mysqli_connect("localhost","root","","nuyoss_database");
include('./db_connection/db_connect.php');
$Users_id=$_GET['id'];
mysqli_query($connection,"delete from users where Users_id='$Users_id'")or die(mysqli_error());
header('location:users.php');
?>
