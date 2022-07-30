<?php

	function userInfo($id) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "select * from newcars where id = '{$id}'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	function register($name, $seller, $price, $picture, $status) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "insert into newcars values('{$name}','{$seller}','{$price}','{$picture}',{$status}')";

		if (mysqli_query($con, $sql)) {
			return true;
		} else {
			return false;
		}
	}
	function editCar($id ,$name, $seller, $price, $picture, $status) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "update newcars set name='{$name}', seller='{$seller}', price='{$price}', picture='{$picture}', status='{$status}' where id='{$id}'";

		if (mysqli_query($con, $sql)) {
			return true;
		}else {
			return false;
		}
	}
	function deleteCar($id) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "delete from newcars where id = '{$id}'";

		if (mysqli_query($con, $sql)) {
			return true;
		}else {
			return false;
		}
	}
	function  addCar($name, $seller, $price, $picture, $status) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "update newcars set name='{$name}', seller='{$seller}', price='{$price}', picture='{$picture}', status='{$status}' where id='{$id}'";

		if (mysqli_query($con, $sql)) {
			return true;
		}else {
			return false;
		}
	}

	function getAllcars() {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "select * from newcars";
		$result = mysqli_query($con, $sql);
		return $result;
	}
?>