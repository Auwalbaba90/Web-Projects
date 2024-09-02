 <?php 

// database Connection
require_once('./db_connection/db_connect.php');
 if(isset($_POST['submit'])){
 	$file = $_FILES['image'];

 	$fileName = $_FILES['image']['name'];
 	$fileTmpName = $_FILES['image']['tmp_name'];
 	$fileSize = $_FILES['image']['size'];
 	$fileError = $_FILES['image']['error'];
 	$fileType = $_FILES['image']['type'];

 	$fileExt = explode('.', $fileName);
 	$fileActualExt = strtolower(end($fileExt));

 	$allowed = array('jpg', 'jpeg', 'png');

	 	if(!empty($fileName)){
	 		
		 	if (in_array($fileActualExt, $allowed)) {
		 		if ($fileError === 0) {
		 			if ($fileSize < 7100000) {
		 				$fileNameNew = uniqid('', true).".".$fileActualExt;
		 				$fileDestination = 'uploads/'.$fileNameNew;
		 				move_uploaded_file($fileTmpName, $fileDestination);
		 				header("location: image.php?uploadsucess");
		 			} else{
		 				echo "Your Image is Too big Maximum Required is 5MB.";
		 			}
		 		} else{
		 			echo "There Was an Error In Your Uploaded File";
		 		}
		 	} else{
		 		echo "Only Image You can Allow to Upload";
		 	}
	 	} else{
				echo "Select Image Before!";
		}
	}
?>
<html>
<head>
</head>
<body>
<div class="container">
	<h1>Select Image to Upload</h1>
	<form method='post' action='image.php' enctype='multipart/form-data'>
	<div class="form-group">
	 <input type="file" name="image" id="file" multiple>
	</div> 
	<div class="form-group"> 
	 <input type='submit' name='submit' value='Upload' class="btn btn-primary">
	</div> 
	</form>
</div>	
</body>
</html>