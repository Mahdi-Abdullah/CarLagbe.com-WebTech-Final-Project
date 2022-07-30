<?php

	function getAllloanRequest() {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "select * from loan_request";
		$result = mysqli_query($con, $sql);
		return $result;
	}
	function reqDelete($id) {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "delete from loan_request where id = '{$id}'";
		
		if (mysqli_query($con, $sql)) {
			return true;
		}else {
			return false;
		}
	}
?>