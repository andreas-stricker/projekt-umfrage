<?php
include("dbconnect.php");

//SAVE AND DELETE
if(isset($_POST['action']) && !empty($_POST['action']) && ($_POST['action'] =='save')) {
    

	// GET CURRENT UMFRAGE
    $getumfrage_sql = "SELECT frage, antwort1, img1, clicks1, antwort2, img2, clicks2 FROM umfrage";
	$result = mysqli_query($dblink, $getumfrage_sql);
	$row   = mysqli_fetch_row($result);

	$frage = $row['0'];
	$antwort1 = $row['1'];
	$img1 = $row['2'];
	$clicks1 = $row['3'];
	$antwort2 = $row['4'];
	$img2 = $row['5'];
	$clicks2 = $row['6'];


	// ABFRAGE OB ES DIESE UMFRAGE BEREITS GIBT
	$umfrageExists = "SELECT * FROM alte_umfragen WHERE frage = '$frage' AND antwort1 = '$antwort1' AND antwort2 = '$antwort2'";
	$result = mysqli_query($dblink, $umfrageExists);

	if(mysqli_num_rows($result) == 0) { 
		// Umfrage speichern
    	$query = "INSERT INTO alte_umfragen (frage, antwort1, img1, clicks1, antwort2, img2, clicks2) VALUES ( '".$frage."','".$antwort1."','".$img1."','".$clicks1."','".$antwort2."','".$img2."','".$clicks2."' )";
		mysqli_query($dblink, $query);
		echo 'saved';
		
	}else{
		echo 'exists';
	}

	//delete Umfrage
	$deleteUmfrage = "DELETE FROM umfrage WHERE 1";
	mysqli_query($dblink, $deleteUmfrage);
	
}


	
// GET UPDATED alte_umfragen
if(isset($_POST['action']) && !empty($_POST['action']) && ($_POST['action'] =='update')) {

	$getAlteUmfragen = "SELECT * FROM alte_umfragen";
	$result = mysqli_query($dblink, $getAlteUmfragen);
	$row   = mysqli_fetch_row($result);


	echo json_encode($row);

}



if(isset($_POST['action']) && !empty($_POST['action']) && ($_POST['action'] =='delete')) {

	$deleteUmfrage = "DELETE FROM `umfrage` WHERE 1";
	$result = mysqli_query($dblink, $deleteUmfrage);

	echo 'geloescht';

}