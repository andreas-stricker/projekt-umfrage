<?php
include("dbconnect.php");

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == "xmlhttprequest") {

echo 'Request';
	if(isset($_POST['action']) && $_POST['action'] == 'umfrage_erstellen') {
		$fragestellung = $_POST['frage'];
		$antwort1 = $_POST['antwort1'];
		$bild1 = $_POST['bild1'];
		$antwort2 = $_POST['antwort2'];
		$bild2 = $_POST['bild2'];

		if(!empty($fragestellung) && !empty($antwort1) && !empty($bild1) && !empty($antwort2) && !empty($bild2)) {
			$umfrage_erstellen_sql = "INSERT INTO umfrage (frage, antwort1, img1, antwort2, img2) VALUES ('$fragestellung', '$antwort1', '$bild1', '$antwort2', '$bild2')";	

			mysqli_query($dblink, $umfrage_erstellen_sql);

			// header('Location: ?page=admin');
		} else {
			echo "Hier scheint ein Fehler aufgetreten zu sein";
		}
		
	}
}
