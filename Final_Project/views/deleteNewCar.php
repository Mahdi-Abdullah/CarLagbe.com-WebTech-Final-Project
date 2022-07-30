<?php 
	require_once('header.php');
	require('../models/newCars_tbl.php');

	$id = $_GET['id'];

	$row = userInfo($id);
?>

<!DOCTYPE html>
<html>
<head>
	<title>CarLagbe Edit Car</title>
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
				<form method="POST" action="../controllers/deleteNewCar.php" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?=$id?>"/>
					<table width="1050px" align="center" >
						<tr>
							<td colspan="3" align="center">
								<b style="font-size: 35px; font-family: calibri; color: white;">Are you sure you want to delete this account?</b><br>
								<input type="submit" name="yes" value="Yes" style="font-size: 25px;" class="btn" /> <a href="../views/newCarsAdmin.php"><input type="button" name="yes" value="No" style="font-size: 25px;" class="btn" /></a><br><hr>
							</td>
						</tr>
						<tr>
							<td align="center">
								<b style="font-size: 26px; font-family: calibri; color: white;">Id</b><br><hr>
								<b style="font-size: 26px; font-family: calibri; color: white;">Name</b><br><hr>
								<b style="font-size: 26px; font-family: calibri; color: white;">Seller</b><br><hr>
								<b style="font-size: 26px; font-family: calibri; color: white;">Price</b><br><hr>
								<b style="font-size: 26px; font-family: calibri; color: white;">Status</b><br><hr>
							</td>
							<td align="center">
								<b style="font-size: 26px; font-family: calibri; color: white;"><?=$row['id']?></b><br><hr>
								<input type="text" name="name" value="<?=$row['name']?>" style="font-size: 22px; font-family: calibri;"/></b><br><hr>
								<input type="text" name="seller" value="<?=$row['seller']?>" style="font-size: 22px; font-family: calibri;"/></b><br><hr>
								<input type="text" name="price" value="<?=$row['price']?>" style="font-size: 22px; font-family: calibri;"/></b><br><hr>

								<input type="radio" name="status" value="Active"<?php if($row['status'] == "Active") { echo "checked";}?>/> <b style="font-size: 25px; font-family: calibri; color: white;">Active</b>
								<input type="radio" name="status" value="Block"<?php if($row['status'] == "Block") { echo "checked";}?>/> <b style="font-size: 25px; font-family: calibri; color: white;">Block</b><hr>
							</td>
							<td valign="Top" align="right">
								<img src="../assets/<?=$row['picture']?>" width="200px" height="240px"><br>
								<b style="font-size: 20px; font-family: calibri; color: white;"><?=$row['picture']?></b>
								<p align="right"><input type="file" name="pic" style="color: white; font-size: 12px;"></p>
								<input type="hidden" name="p" value="<?=$row['picture']?>">
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
</body>
</html>