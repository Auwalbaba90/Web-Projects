<?php
$db = mysqli_connect('localhost','root','','naub-staff-children-school');
include('../config/config.php');
$result_id=$_GET['id'];
mysqli_query($db,"delete from primary_result where ID_No='$result_id'")or die(mysqli_error());
header('location:view-result.php');
?>
