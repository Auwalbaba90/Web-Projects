<?php
$db = mysqli_connect('localhost','root','','naub-staff-children-school');
include('../config/config.php');
$staff_id=$_GET['id'];
mysqli_query($db,"delete from staff_account where id='$staff_id'")or die(mysqli_error());
header('location:staff.php');
?>