<?php
	
	include 'connection.php';

	$names = $_POST['names'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT * FROM users WHERE username='$username';";
	$sql = mysqli_query($conn, $query);
	$queryy = mysqli_num_rows($sql);

	if ($queryy >= 1) {
		header("location: ../test.php");
	}else{

	$query1 = "INSERT INTO users(names, username, email, password) VALUES ('$names','$username','$email','$password')";
	mysqli_query($conn, $query1);
	header("location: ../index.php");
		}






?>