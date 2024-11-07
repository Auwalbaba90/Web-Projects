<?php
$db = mysqli_connect('localhost','root','','naub-staff-children-school');
include('../config/config.php');
$student_id=$_GET['id'];
mysqli_query($db,"delete from students where id='$student_id'")or die(mysqli_error());
header('location:Students.php');
?>
