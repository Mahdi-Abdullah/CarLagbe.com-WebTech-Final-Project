<?php 
	session_start();
	require('../models/users_tbl.php');

	if(isset($_REQUEST['data'])){

		$json = json_decode($_REQUEST['data']);
		
		$username = $json->username;
		$password = $json->password;
		$chek = $json->remember_me;


		if($username != null && $password != null) {
				
				if(login($username,$password) == true) {
					if (userInfo($username)['Status'] == "Active") {

						if (userInfo($username)['Account_Type'] == 'admin') {
							if (!empty($chek)) {
								$_SESSION['status'] = true;
								$_SESSION['current_user'] = userInfo($username);
								setcookie('status', 'true', time()+3600, '/');
							}

							echo 'http://localhost/WebTech/Final_Project/views/profile_Admin.php';
						}
						else if (userInfo($username)['Account_Type'] == 'customer') {
							$_SESSION['status'] = true;
							$_SESSION['current_user'] = userInfo($username);
							setcookie('status', 'true', time()+3600, '/');

							header('location: ../views/profile_Customer.php');
						}
						else if (userInfo($username)['Account_Type'] == 'seller') {
							$_SESSION['status'] = true;
							$_SESSION['current_user'] = userInfo($username);
							setcookie('status', 'true', time()+3600, '/');

							header('location: ../views/profile_Seller.php');
						}
						else if (userInfo($username)['Account_Type'] == 'customer service') {
							$_SESSION['status'] = true;
							$_SESSION['current_user'] = userInfo($username);
							setcookie('status', 'true', time()+3600, '/');

							header('location: ../views/profile_Customer_Service.php');
						}
					}else{
						echo "Acoount blocked";
					}
				}else{
					echo "Invalid username/password";
				}

		}else{
			echo "Null submition";
		}
	}
?>