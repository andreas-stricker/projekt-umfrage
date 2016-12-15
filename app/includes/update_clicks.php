<?php
include("dbconnect.php");

/*GET current clicks */

			$getumfrage_sql = "SELECT clicks1, clicks2 FROM umfrage";
            $result = mysqli_query($dblink, $getumfrage_sql);
            $row   = mysqli_fetch_row($result);
            $clicks1 = $row['0'];
            $clicks2 = $row['1'];


if ($_GET["antwort"] == '1'){
	$query = "UPDATE `umfrage` SET `clicks1`= 1";
	mysqli_query($dblink, $query);
}elseif ($_GET["antwort"] == '2'){
	$query = "UPDATE `umfrage` SET `clicks2`= ".$clicks2."+ 1";
	mysqli_query($dblink, $query);
}