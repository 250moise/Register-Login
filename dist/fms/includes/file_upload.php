<?php
	include("aunt.php");
	include("connection.php");

	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$fcat = mysqli_real_escape_string($conn, $_POST['fcat']);
	$fdesc = mysqli_real_escape_string($conn, $_POST['fdesc']);
	$username = $_SESSION['username'];

	

	if (isset($_FILES['image'])) {
		$errors=array();
		$file_name =  $_FILES['image']['name'];
		$file_tmp =  $_FILES['image']['tmp_name'];
		$file_type =  $_FILES['image']['type'];
		$file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));

		//creating new name for file from file name input
		$array2 = array($fname, $file_ext);
		$new_name = implode('.',$array2);

		//specifing allowed file types and checking submitted file 
		$extensions = array("jpeg", "jpg", "png", "pdf", "txt");
		if (in_array($file_ext, $extensions) === false) {
			$errors[] = "Exntension not allowed, please choose between jpeg, jpg, png, pdf, txt.";
		}

		//creating file path
		$path_pieces = array("files", $new_name);
		$path = implode('/', $path_pieces);

		//file and its details saving into database
		$query = "INSERT INTO files(name, category, descr, pathh, uploaded_by) VALUES ('$new_name','$fcat','$fdesc','$path','$username')";
		mysqli_query($conn, $query);
		move_uploaded_file($file_tmp, "../files/".$new_name);

		header("location: ../view_uploaded_file.php");
	}














?>