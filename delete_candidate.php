<?php
$connection= mysqli_connect("localhost","root","","nuyoss_database");
include('./db_connection/db_connect.php');
$Candidate_id=$_GET['id'];
mysqli_query($connection,"delete from candidate where Candidate_id='$Candidate_id'")or die(mysqli_error());
header('location:view_candidate.php');
?>
