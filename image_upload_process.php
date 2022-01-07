<?php 
require 'config.php';
session_start();

if ($_FILES['image']['name'] == '') {
	
	echo "<span style='color:red;'>Image Required...!</span>";
}
else{

	$image = $_FILES['image']['name'];
	$imageTmp = $_FILES['image']['tmp_name'];

	$sqlIns = "INSERT INTO images (image) VALUES ('".$image."')";
	$result = mysqli_query($conn, $sqlIns);

	if ($result) {
		
		move_uploaded_file($imageTmp, "upload/".$image);
		
		echo "<span style='color:green;'>Image Upload Successfuly...!</span>";
	}else{

		echo "<span style='color:red;'>Upload Failed...!</span>";
	}
}	


