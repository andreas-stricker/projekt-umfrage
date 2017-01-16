<?php

include("includes/login.php");
?>

<section id="login">
	<form action="" method="post">
		<label for="name">Name</label><br>
		<input type="text" name="user_name"><br>
		<label for="password">Passwort</label><br>
		<input type="password" name="user_password"><br>

		<input type="submit" name="login" value="Einloggen">
	</form>
</section>