<?php 
	session_start();
	require('../models/loans_tbl.php');
	require('../models/loan_request_tbl.php');

	if(isset($_REQUEST['accept'])){

		$json = json_decode($_REQUEST['data']);
		
		$id = $json->id;
		$customer = $json->username;
		$amount = $json->amount;

		addloans($customer, $amount);
		reqDelete($id);
	}
	else if(isset($_REQUEST['reject'])){
		
		$id = $_REQUEST['id'];

		reqDelete($id);
	}

?>