<?php 
include('./config/config.php');
if(!empty($_POST["Admin_id"])) {
	$Admin_id= $_POST["Admin_id"];
	
		$result =mysqli_query($db,"SELECT Admin_id FROM admin WHERE Admin_id='$Admin_id'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Admin ID already exists .</span>";
 echo "<script>$('#Add_Admin').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Admin ID available for Registration .</span>";
 echo "<script>$('#Add_Admin').prop('disabled',false);</script>";
}
}

?>
<!-- ======================================================================================= -->
<?php 
if(!empty($_POST["Staff"])) {
	$Staff= $_POST["Staff"];
	
		$result =mysqli_query($db,"SELECT Staff_ID FROM staff_account WHERE Staff_ID='$Staff'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Staff ID already exists .</span>";
 echo "<script>$('#add_staff').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Staff ID available for Registration .</span>";
 echo "<script>$('#add_staff').prop('disabled',false);</script>";
}
}

?>

<!-- ======================================================================================= -->
<?php 
if(!empty($_POST["Session"])) {
	$Session= $_POST["Session"];
	
		$result =mysqli_query($db,"SELECT Session FROM session WHERE Session='$Session'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Session already exists .</span>";
 echo "<script>$('#add_Session').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Session available for Registration .</span>";
 echo "<script>$('#add_Session').prop('disabled',false);</script>";
}
}

?>

<!-- ===================================================================================-->

<?php 
if(!empty($_POST["Current_Password"])) {
	$Current_Password=md5($_POST["Current_Password"]);
	
		$result =mysqli_query($db,"SELECT Password FROM admin WHERE Password='$Current_Password'");
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
/*==========================================================================================*/
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