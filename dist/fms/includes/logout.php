<?php 
ob_start();
session_start();

	session_destroy();

	if(isset($_COOKIE['username'])) {
		unset($_COOKIE['username']);

		setcookie('username', '', time()-86400);
	}

header("location: ../index.php");
?>