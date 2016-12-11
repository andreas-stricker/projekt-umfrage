
<?php 

if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == "POST") {

	$user_email = $_POST['username'];
	$user_password = $_POST['password'];

	$result = $dblink -> query("SELECT * FROM users WHERE username = '$username'");
	$user = $result -> fetch_array(MYSQL_ASSOC);


	// $login_sql = "SELECT * FROM users WHERE email = '$user_email'";
	// $result = mysqli_query($dblink, $login_sql);

	if(mysqli_num_rows($result) == 1) {
	
		// $user = mysqli_fetch_assoc($result);

		$hashed_password = sha1($user_password.$user['salt']);

		if($hashed_password == $user['password']) {

			$_SESSION['login'] = 1;
			$_SESSION['user_id'] = $user['user_id'];
			$_SESSION['username'] = $user['name'];
			$success = 1;


			header('Location: login-success');

		} else {
			$error = 1;
		}
	} else {
		$error = 1;
	}
}

 ?>