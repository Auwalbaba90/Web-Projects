<?php
$connection= mysqli_connect("localhost","root","","nuyoss_database");
include('./db_connection/db_connect.php');
$id_no=$_GET['id'];
mysqli_query($connection,"delete from posting where ID_No='$id_no'")or die(mysqli_error());
header('location:post View.php');
?>
