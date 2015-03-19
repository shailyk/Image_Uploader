<?php
	
    ini_set('file_uploads', 'On');
	
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			
			$uploadOk = 1;
			} else {
		
			$uploadOk = 0;
		}
		
		if ($uploadOk == 0) {
		
			} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			
				} else {
			
			}
		}
	}

	header('Content-type: $check["mime"];charset=utf-8');
	readfile('uploads/'.$_FILES["fileToUpload"]["name"]);

	

	
	
	
	
?>
