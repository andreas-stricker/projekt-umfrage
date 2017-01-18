
<?php 

if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == "POST") {

	$user_name = $_POST['user_name'];
	$user_password = $_POST['user_password'];

	// $result = $dblink -> query("SELECT * FROM users WHERE user_name = '$user_name'");
	// $user = $result -> fetch_array(MYSQL_ASSOC);

	$user_sql = "SELECT * FROM users WHERE user_name = '$user_name'";
	$result = mysqli_query($dblink, $user_sql);
	


	// $login_sql = "SELECT * FROM users WHERE email = '$user_email'";
	// $result = mysqli_query($dblink, $login_sql);

	if(mysqli_num_rows($result) == 1) {
	
		$user = mysqli_fetch_assoc($result);
		// $user = mysqli_fetch_assoc($result);

		//print_r($user);

		$hashed_password = sha1($user_password.$user['salt']);

		if($hashed_password == $user['password']) {

			$_SESSION['login'] = 1;
			$_SESSION['user_id'] = $user['user_id'];
			$_SESSION['username'] = $user['name'];
			$success = 1;

			header('Location: index.php?page=admin');
			exit;

		} else {
			echo "<p class='loginError'>Bitte gib das korrekte Passwort ein!</p>";
		}
	} else {
		echo "<p class='loginError'>Wir konnten dich mit diesem Namen leider nicht finden.</p>";
	}
}

 ?>