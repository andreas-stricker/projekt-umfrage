<?php

error_reporting(E_ALL);
error_reporting(0);

session_start();

include("includes/dbconnect.php");

if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'home';
}

if($page == "home") {
	$content = 'home.php';
} elseif($page == "login") {
	$content = 'login.php';
} elseif($page == "registration") {
	$content = 'registration.php';
}

include("header.php");
include($content);
include("footer.php");



