<?php 
include('../config/config.php');
if(!empty($_POST["Student_no"])) {
	$Student_no= $_POST["Student_no"];
	
		$result =mysqli_query($db,"SELECT Addmission_No FROM students WHERE Addmission_No='$Student_no'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> student ID already exists .</span>";
 echo "<script>$('#add_stud').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> student ID available for Registration .</span>";
 echo "<script>$('#add_stud').prop('disabled',false);</script>";
}
}

?>

<?php 
if(!empty($_POST["Addmission_No"])) {
	$Addmission_No= $_POST["Addmission_No"];
	
		$result =mysqli_query($db,"SELECT Addmission_No FROM students WHERE Addmission_No='$Addmission_No'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:green'> Student ID is Validated.</span>";
 echo "<script>$('#Continue').prop('disabled',false);</script>";
} else{
	
	echo "<span style='color:red'> Invalid Student ID.</span>";
 echo "<script>$('#Continue').prop('disabled',true);</script>";
}
}

if(!empty($_POST["Current_Password"])) {
	$Current_Password=md5($_POST["Current_Password"]);
	
		$result =mysqli_query($db,"SELECT Password FROM staff_account WHERE Password='$Current_Password'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:green'> Current Password is validated .</span>";
 echo "<script>$('#Change_P').prop('disabled',false);</script>";
} else{
	
	echo "<span style='color:red'> Old Password not match !! .</span>";
 echo "<script>$('#Change_P').prop('disabled',true);</script>";
}
}

?>
