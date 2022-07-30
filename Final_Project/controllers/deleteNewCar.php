<?php 
	session_start();
	require('../models/newCars_tbl.php');
	
	if(isset($_REQUEST['yes'])){
		
		$name = $_REQUEST['name'];
		$seller = $_REQUEST['seller'];
		$price = $_REQUEST['price'];
		$id = $_REQUEST['id'];
		
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

		if (empty($_REQUEST['status'])) {
			echo "status is not selected.". "<br>";
		}else{
			$status = $_REQUEST['status'];
		}

		if($name != null && $seller != null && $price != null){
			
			deleteCar($id);
			header('location: ../views/newCarsAdmin.php');

		}else{
			echo "null submission";
		}
	}
?>