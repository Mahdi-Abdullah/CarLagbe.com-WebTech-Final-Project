<?php 
	require_once('header.php');
	require('../models/users_tbl.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>CarLagbe Homepage</title>
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
				<a href="../views/oldCarsAdmin.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;color: white;">Old Cars | </b></a>
				<a href="../views/transactions.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;color: white;">Transactions | </b></a>
				<a href="../views/loanAdmin.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;color: white;">Loan | </b></a>
				<a href="../views/emiAdmin.php" style="text-decoration: none; color: darkred;"><b style="font-size: 25px; font-family: calibri;color: white;">EMI | </b></a>
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
		<tr height="611px">
			<td bgcolor="141E27" valign="Top" colspan="3">
				<table width="1500px" align="center" border="1">
					<tr align="center">
						<td colspan="10"><b style="font-size: 35px; font-family: calibri; color: white;">Users<br> <hr></b></td>
					</tr>
					<tr>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Name</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Username</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Email</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Password</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Gender</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Date of Birth</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Account Type</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Picture</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Status</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Actions</b><br></td>
					</tr>

					<?php
						$result = getAlluser();
						 while ($row = mysqli_fetch_assoc($result)) {
						 	
					?>

					<tr style="font-size: 20px; font-family: calibri; color: white;">
						<td><?=$row['name']?></td>
						<td><?=$row['username']?></td>
						<td><?=$row['email']?></td>
						<td><?=$row['password']?></td>
						<td><?=$row['gender']?></td>
						<td><?=$row['DOB']?></td>
						<td><?=$row['Account_Type']?></td>
						<td><?=$row['Picture']?></td>
						<td><?=$row['Status']?></td>
						<td>
							<a href="../views/editUser.php?id=<?=$row['username']?>" class="btn" style="font-size: 20px; font-family: calibri; color: white; text-decoration: none;"> <input type="button" name="" value="EDIT" class="btn"> </a> | 
					    	<a href="../views/deleteUser.php?id=<?=$row['username']?>" class="btn" style="font-size: 20px; font-family: calibri; color: white; text-decoration: none;"> <input type="button" name="" value="DELETE" class="btn"> </a> 
						</td>
						
					</tr>

					<?php
						}
					?>

					<tr>
						<td colspan="10" align="center">
							<a href="../views/adduser.php" class="btn" style="font-size: 20px; font-family: calibri; color: white; text-decoration: none;"> <input type="button" name="" value="INSERT" class="btn"> </a>
						</td>
					</tr>

				</table>
				<br>
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
					| <a href="../views/login.php" style="text-decoration: none; color: darkred;"><b style="font-size: 20px; font-family: calibri;">Login</b></a> |
					<a href="../views/aboutUs.php" style="text-decoration: none; color: darkred;"><b style="font-size: 20px; font-family: calibri;">About Us</b></a> |
					<a href="../views/contactUs.php" style="text-decoration: none; color: darkred;"><b style="font-size: 20px; font-family: calibri;">Contact Us</b></a> |
			</td>
		</tr>
	</table>
</body>
</html>