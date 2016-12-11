<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "";


// CREATE CONNECTION
// $dblink = new mysqli($db_host, $db_user, $db_pass, $db_name);

// CHECK CONNECTION
// if ($dblink -> connect_error) {
//     die("Connection failed: " . $dblink -> connect_error);
// }
$dblink = mysqli_connect($db_host, $db_user, $db_pass);

$selected = mysqli_select_db($dblink, $db_name);

if( ! $selected ){
	die('Cannot use database: ' . mysqli_error($dblink) );
}

mysqli_query($dblink, "SET names UTF8");

?>