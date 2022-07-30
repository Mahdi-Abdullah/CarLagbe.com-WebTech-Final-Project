<?php

	function getAllloans() {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "select * from loans";
		$result = mysqli_query($con, $sql);
		return $result;
	}
	function addloans($customer, $amount) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "insert into loans (customer,amount,paid,due) values('{$customer}','{$amount}',0,'{$amount}')";

		if (mysqli_query($con, $sql)) {
			return true;
		} else {
			return false;
		}
	}
?>