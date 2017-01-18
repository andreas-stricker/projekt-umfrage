<?php

if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == "POST") {
	$registration_name = $_POST['name'];
	$registration_password = $_POST['password'];
	$salt = time();

	if(!empty($registration_name) && !empty($registration_password)) {
		$hashed_password = sha1($registration_password.$salt);

		$registration_sql = "INSERT INTO users (user_name, password, salt) VALUES ('$registration_name', '$hashed_password', '$salt')";

		mysqli_query($dblink, $registration_sql);

        header('Location: index.php?page=login');

	} else {
        echo "Bitte fülle alle Felder korrekt aus";
    }
}