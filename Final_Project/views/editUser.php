<?php 
	require_once('header.php');
	require('../models/users_tbl.php');

	$id = $_GET['id'];

	$row = userInfo($id);
?>

<!DOCTYPE html>
<html>
<head>
	<title>CarLagbe Edit User</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<table width="1570" cellspacing="0" bgcolor="E0DDAA">
		<tr height="50px">
			<td bgcolor="" align="center">
				<b><a href="../views/homepage.php" style="text-decoration: none; font-size: 30px; font-family: calibri; color: darkred;">CarLagbe.com</a></b>
			</td>
			<td bgcolor="141E27" align="center">
				<a href="../views/users.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;color: white;">All Users | </b></a>
				<a href="../views/newCarsAdmin.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;color: white;">New Cars | </b></a>
				<a href="../controllers/oldCarsAdmin.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;color: white;">Old Cars | </b></a>
				<a href="../controllers/transactions.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;color: white;">Transactions | </b></a>
				<a href="../controllers/loanAdmin.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;color: white;">Loan | </b></a>
				<a href="../controllers/emiAdmin.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;color: white;">EMI | </b></a>
			</td>
			<td align="right">
				| <a href="../views/login.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;">Back</b></a> |
				<a href="../views/profile_Admin.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;">Profile</b></a> |
				<a href="../controllers/logout.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;">Logout</b></a> |
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<img src="../assets/6.jpg" alt="Car Image" width="1570" height="250">
			</td>
		</tr>
		<tr height="750px" bgcolor="203239">
			<td bgcolor="141E27" valign="Top" colspan="3">
				<form method="POST" action="../controllers/updateUser.php" enctype="multipart/form-data" onsubmit="return formVarification()">
					<input type="hidden" name="id" value="<?=$id?>"/>
					<table width="1050px" align="center" >
						<tr>
							<td colspan="3" align="center">
								<b style="font-size: 35px; font-family: calibri; color: white;">Edit User<br> <hr></b>
							</td>
						</tr>
						<tr>
							<td align="center">
								<b style="font-size: 26px; font-family: calibri; color: white;">Name</b><br><hr>
								<b style="font-size: 26px; font-family: calibri; color: white;">Username</b><br><hr>
								<b style="font-size: 26px; font-family: calibri; color: white;">Email</b><br><hr>
								<b style="font-size: 26px; font-family: calibri; color: white;">Password</b><br><hr>
								<b style="font-size: 26px; font-family: calibri; color: white;">Gender</b><br><hr>
								<b style="font-size: 26px; font-family: calibri; color: white;">Date of Birth</b><br><hr>
								<b style="font-size: 26px; font-family: calibri; color: white;">Account Type</b><br><hr>
								<b style="font-size: 26px; font-family: calibri; color: white;">Status</b><br><hr>
							</td>
							<td align="center">
								<input id="a" type="text" name="name" value="<?=$row['name']?>" style="font-size: 22px; font-family: calibri;"/></b><br><hr>
								<input id="b" type="text" name="username" value="<?=$row['username']?>" style="font-size: 22px; font-family: calibri;"/></b><br><hr>
								<input id="c"type="email" name="email" value="<?=$row['email']?>" style="font-size: 22px; font-family: calibri;"/></b><br><hr>
								<input id="d"type="password" name="password" value="<?=$row['password']?>" style="font-size: 22px; font-family: calibri;"/></b><br><hr>

								<input id="male" type="radio" name="gender" value="Male"<?php if($row['gender'] == "Male") { echo "checked";}?>/> <b style="font-size: 25px; font-family: calibri; color: white;">Male</b>
								<input id="female" type="radio" name="gender" value="Female"<?php if($row['gender'] == "Female") { echo "checked";}?>/> <b style="font-size: 25px; font-family: calibri; color: white;">Female</b>
								<input id="other" type="radio" name="gender" value="Other" <?php if($row['gender'] == "Other") { echo "checked";}?>/> <b style="font-size: 25px; font-family: calibri; color: white;">Other</b><br><hr>

								<input id="e" type="date" name="date" value="<?=$row['DOB']?>" style="font-size: 22px; font-family: calibri;"/></b><br><hr>

								<input id="admn" type="radio" name="accType" value="admin"<?php if($row['Account_Type'] == "admin") { echo "checked";}?>/> <b style="font-size: 25px; font-family: calibri; color: white;">Admin</b>
								<input id="cstmer" type="radio" name="accType" value="customer"<?php if($row['Account_Type'] == "customer") { echo "checked";}?>/> <b style="font-size: 25px; font-family: calibri; color: white;">Customer</b>
								<input id="sell" type="radio" name="accType" value="seller"<?php if($row['Account_Type'] == "seller") { echo "checked";}?>/> <b style="font-size: 25px; font-family: calibri; color: white;">Seller</b>
								<input id="cusServ" type="radio" name="accType" value="customer service"<?php if($row['Account_Type'] == "customer service") { echo "checked";}?>/> <b style="font-size: 25px; font-family: calibri; color: white;">Customer service</b><hr>

								<input id="active" type="radio" name="status" value="Active"<?php if($row['Status'] == "Active") { echo "checked";}?>/> <b style="font-size: 25px; font-family: calibri; color: white;">Active</b>
								<input id="block" type="radio" name="status" value="Block"<?php if($row['Status'] == "Block") { echo "checked";}?>/> <b style="font-size: 25px; font-family: calibri; color: white;">Block</b><hr>
							</td>
							<td valign="Top" align="right">
								<img src="../assets/<?=$row['Picture']?>" width="200px" height="240px"><br>
								<b style="font-size: 20px; font-family: calibri; color: white;"><?=$row['Picture']?></b>
								<p align="right"><input type="file" name="pic" style="color: white; font-size: 12px;"></p>
								<input type="hidden" name="p" value="<?=$row['Picture']?>">
							</td>
						</tr>
						<tr>
							<td colspan="3" align="center">
								<br><a href="../views/EditProfile.php"><input type="submit" name="update" value="Update" style="font-size: 25px;" class="btn" /></a> <input type="reset" name="reset" value="Reset" style="font-size: 25px;" class="btn" /> <br>
							</td>
						</tr>
					</table>
				</form>
				
			</td>
		</tr>
		<tr height="40px">
			<td bgcolor="" align="left">
				<a href="../views/homepage.php" style="text-decoration: none;"><b style="font-size: 20px; font-family: calibri; color: darkred;">CarLagbe.com</b></a>
			</td>
			<td bgcolor="" align="center">
				<b style="font-size: 15px; font-family: calibri;">Copyright</b>
			</td>
			<td align="right">
					|<a href="../views/login.php" style="text-decoration: none; color: darkred;"><b style="font-size: 20px; font-family: calibri;">Login</b></a> |
					<a href="../views/aboutUs.php" style="text-decoration: none; color: darkred;"><b style="font-size: 20px; font-family: calibri;">About Us</b></a> |
					<a href="../views/contactUs.php" style="text-decoration: none; color: darkred;"><b style="font-size: 20px; font-family: calibri;">Contact Us</b></a> |
			</td>
		</tr>
	</table>
	<script>
		function formVarification(){

			let name = document.getElementById('a').value;
			let email = document.getElementById('c').value;
			let user = document.getElementById('b').value;
			let password = document.getElementById('d').value;
			let dob = document.getElementById('e').value;
			

			if (name == "") {
				alert("Please enter your name"); return false;
			}
			else if (email == "") {
				alert("Please enter your email"); return false;
			}
			else if (user == "") {
				alert("Please enter your username"); return false;
			}
			else if (password == "") {
				alert("Please enter a password"); return false;
			}
			else if (document.getElementById('male').checked == false && document.getElementById('female').checked == false && document.getElementById('other').checked == false) {
				alert("Please select your gender"); return false;
			}
			else if (dob == "") {
				alert("Please enter your date of birth"); return false;
			}
			else if (document.getElementById('admn').checked == false && document.getElementById('cstmer').checked == false && document.getElementById('sell').checked == false && document.getElementById('cusServ').checked == false) {
				alert("Please select an account type"); return false;
			}
			else if (document.getElementById('active').checked == false && document.getElementById('block').checked == false) {
				alert("Please select your gender"); return false;
			}
			else {
				return true;
			}
		}
	</script>
</body>
</html>