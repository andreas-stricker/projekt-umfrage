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


		$target_dir = "uploads/";
		$target_file1 = $target_dir . basename($_FILES["bild1"]["name"]);
		move_uploaded_file($_FILES["bild1"]["tmp_name"], $target_file1);

		$target_file1 = $target_dir . basename($_FILES["bild2"]["name"]);
		move_uploaded_file($_FILES["bild2"]["tmp_name"], $target_file1);
	    
	    

		if(!empty($frage) && !empty($antwort1) && !empty($antwort2) ) {
			$umfrage_erstellen_sql = "INSERT INTO umfrage (frage, antwort1, img1, antwort2, img2) VALUES ('$frage', '$antwort1', '$bildName1', '$antwort2', '$bildName2')";	

			mysqli_query($dblink, $umfrage_erstellen_sql);

			// header('Location: ?page=admin');
		} else {
			echo "Hier scheint ein Fehler aufgetreten zu sein";
		}
		
	// }
}
