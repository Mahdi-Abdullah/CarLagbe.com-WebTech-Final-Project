<?php

	function login($username, $password) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "select * from users where username = '{$username}' and password = '{$password}'";
		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result)) {
			return true;
		}else {
			return false;
		}
	}
	function userInfo($username) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "select * from users where username = '{$username}'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	function isUserTaken($username) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "select username from users where username = '{$username}'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);

		if ($row == null) {
			return true;
		}else {
			return false;
		}
	}
	function register($name, $username, $email, $password, $gender, $dob, $type, $pic, $status) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "insert into users values('{$name}','{$username}','{$email}','{$password}','{$gender}','{$dob}','{$type}','{$pic}','{$status}')";

		if (mysqli_query($con, $sql)) {
			return true;
		} else {
			return false;
		}
	}
	function editUser($name, $username, $email, $password, $gender, $dob, $type, $pic, $status) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "update users set name='{$name}', username='{$username}', email='{$email}', password='{$password}', gender='{$gender}', dob='{$dob}', Account_Type='{$type}', Picture='{$pic}', Status='{$status}' where username='{$username}'";

		if (mysqli_query($con, $sql)) {
			return true;
		}else {
			return false;
		}
	}
	function deleteUser($username) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "delete from users where username = '{$username}'";

		if (mysqli_query($con, $sql)) {
			return true;
		}else {
			return false;
		}
	}
	function  addUser($name, $username, $email, $password, $gender, $dob, $type, $pic, $status) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "insert into users values('{$name}','{$username}','{$email}','{$password}','{$gender}','{$dob}','{$type}','{$pic}','{$status}')";

		if (mysqli_query($con, $sql)) {
			return true;
		}else {
			return false;
		}
	}

	function getAlluser() {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "select * from users";
		$result = mysqli_query($con, $sql);
		return $result;
	}
?>