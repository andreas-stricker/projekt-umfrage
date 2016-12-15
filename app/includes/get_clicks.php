<?php
include("dbconnect.php");

/*GET current clicks */

$getumfrage_sql = "SELECT clicks1, clicks2 FROM umfrage";
$result = mysqli_query($dblink, $getumfrage_sql);
$row   = mysqli_fetch_row($result);


echo json_encode($row);