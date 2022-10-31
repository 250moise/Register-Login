<?php

	include 'connection.php';

	$id = $_GET['id'];
	
	$sql = "DELETE FROM files WHERE id='$id';";
	mysqli_query($conn, $sql);
	header("location: ../view_uploaded_file.php");