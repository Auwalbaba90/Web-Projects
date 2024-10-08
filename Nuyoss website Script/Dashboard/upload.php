 <?php 

// database Connection
require_once('./db_connection/db_connect.php');

if(isset($_POST['submit'])){

	$filename = $_FILES['image']['name'];
	
	// Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif");
 
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'./images/'.$filename)){
		// Image db insert sql
		$insert = "INSERT into image(file_name,status) values('$filename',1)";
		if(mysqli_query($dbc, $insert)){
		  echo 'Data inserted successfully';
		}
		else{
		  echo 'Error: '.mysqli_error($dbc);
		}
	}else{
		echo 'Error in uploading file - '.$_FILES['image']['name'].'<br/>';
	}
	}
} 
?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h1>Select Image to Upload</h1>
	<form method='post' action='#' enctype='multipart/form-data'>
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