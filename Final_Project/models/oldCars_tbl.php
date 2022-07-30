<?php

	function userInfo($id) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "select * from oldcars where id = '{$id}'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	function register($name, $seller, $price, $picture, $status) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "insert into oldcars values('{$name}','{$seller}','{$price}','{$picture}',{$status}')";

		if (mysqli_query($con, $sql)) {
			return true;
		} else {
			return false;
		}
	}
	function editCar($id ,$name, $seller, $price, $picture, $status) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "update oldcars set name='{$name}', seller='{$seller}', price='{$price}', picture='{$picture}', status='{$status}' where id='{$id}'";

		if (mysqli_query($con, $sql)) {
			return true;
		}else {
			return false;
		}
	}
	function deleteCar($id) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "delete from oldcars where id = '{$id}'";

		if (mysqli_query($con, $sql)) {
			return true;
		}else {
			return false;
		}
	}
	function  addCar($name, $seller, $price, $picture, $status) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "update oldcars set name='{$name}', seller='{$seller}', price='{$price}', picture='{$picture}', status='{$status}' where id='{$id}'";

		if (mysqli_query($con, $sql)) {
			return true;
		}else {
			return false;
		}
	}

	function getAllcars() {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "select * from oldcars";
		$result = mysqli_query($con, $sql);
		return $result;
	}
?>