<?php

$getumfrage_data_sql = "SELECT * FROM umfrage";
$result = mysqli_query($dblink, $getumfrage_data_sql);
$row = mysqli_fetch_assoc($result);

print_r($row);

// echo $row;	

// echo "test";