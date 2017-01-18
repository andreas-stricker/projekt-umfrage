<?php
include("dbconnect.php");

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == "xmlhttprequest") {

echo 'Request';
	// if(isset($_POST['action']) && $_POST['action'] == 'umfrage_erstellen') {
		$frage = $_POST['frage'];
		$antwort1 = $_POST['antwort1'];
		$bild1 = $_FILES['bild1'];
		$antwort2 = $_POST['antwort2'];
		$bild2 = $_FILES['bild2'];


		$bildName1 = $_FILES["bild1"]["name"];
		$bildName2 = $_FILES["bild2"]["name"];


		$target_dir = "../uploads/";
		$target_file1 = $target_dir . basename($_FILES["bild1"]["name"]);
		//move_uploaded_file($_FILES["bild1"]["tmp_name"], $target_file1);

		$target_file2 = $target_dir . basename($_FILES["bild2"]["name"]);
		// move_uploaded_file($_FILES["bild2"]["tmp_name"], $target_file1);

		// $target_file = array("target_file1" => $target_file1, "target_file2" => $target_file2)

		$uploadOk = 1;

		// VALIDATION Bild 1##############
		$imageFileType = pathinfo($target_file1,PATHINFO_EXTENSION);

		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["bild1"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }

	    // Check if file already exists
		if (file_exists($target_file1)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["bild1"]["size"] > 500000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
	    
	    // Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["bild1"]["tmp_name"], $target_file1)) {
		        echo "The file ". basename( $_FILES["bild1"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}

		// VALIDATION Bild2############
		$imageFileType = pathinfo($target_file2,PATHINFO_EXTENSION);

		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["bild2"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }

	    // Check if file already exists
		if (file_exists($target_file2)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["bild2"]["size"] > 500000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
	    
	    // Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["bild2"]["tmp_name"], $target_file2)) {
		        echo "The file ". basename( $_FILES["bild2"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}


		if(!empty($frage) && !empty($antwort1) && !empty($antwort2) ) {
			$umfrage_erstellen_sql = "INSERT INTO umfrage (frage, antwort1, img1, antwort2, img2) VALUES ('$frage', '$antwort1', '$bildName1', '$antwort2', '$bildName2')";	

			mysqli_query($dblink, $umfrage_erstellen_sql);

			// header('Location: ?page=admin');
		} else {
			echo "Hier scheint ein Fehler aufgetreten zu sein";
		}
		
	// }
}
