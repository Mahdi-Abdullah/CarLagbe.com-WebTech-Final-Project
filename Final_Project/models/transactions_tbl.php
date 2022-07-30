<?php

	function getAlltrans() {
		$con = mysqli_connect('localhost', 'root', '', 'final_project');
		$sql = "select * from transactions";
		$result = mysqli_query($con, $sql);
		return $result;
	}
?>