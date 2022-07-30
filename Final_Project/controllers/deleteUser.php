<?php 
	session_start();
	require('../models/users_tbl.php');
	
	if(isset($_REQUEST['yes'])){
		
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$id = $_REQUEST['id'];

		if (empty($_REQUEST['gender'])) {
			echo "Gender is not selected.". "<br>";
		}else{
			$gender = $_REQUEST['gender'];
		}

		$date = $_REQUEST['date'];
		
		if ($_FILES['pic']['size'] == 0 && $_REQUEST['p'] == "") {
			echo "Profile picture is not selected.". "<br>";
		}
		elseif ($_FILES['pic']['size'] == 0 && $_REQUEST['p'] != "") {
			$picture = $_REQUEST['p'];
		}
		else{
			$src = $_FILES['pic']['tmp_name'];
			$des = "../assets/".$_FILES['pic']['name'];
			move_uploaded_file($src, $des);
			$picture = $_FILES['pic']['name'];
		}

		if (empty($_REQUEST['accType'])) {
			echo "Account type is not selected.". "<br>";
		}else{
			$accountType = $_REQUEST['accType'];
		}

		if (empty($_REQUEST['status'])) {
			echo "status is not selected.". "<br>";
		}else{
			$status = $_REQUEST['status'];
		}

		if($name != null && $email != null && $username != null && $password != null && $date != null){
			
			deleteUser($username);
			header('location: ../views/users.php');

		}else{
			echo "null submission";
		}
	}
?>