<?php 
	require_once('header.php');
	require('../models/transactions_tbl.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>CarLagbe Homepage</title>
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
						<td colspan="10"><b style="font-size: 35px; font-family: calibri; color: white;">Transactions <br> <hr></b></td>
					</tr>
					<tr>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Id</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Seller</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Customer</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Total Amount</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Amount Paid</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Date</b><br></td>
					</tr>

					<?php 
						$result = getAlltrans();
						 while ($row = mysqli_fetch_assoc($result)) {
					?>

					<tr style="font-size: 20px; font-family: calibri; color: white;">
						<td><?=$row['id']?></td>
						<td><?=$row['seller']?></td>
						<td><?=$row['customer']?></td>
						<td><?=$row['total_amount']?></td>
						<td><?=$row['amount_paid']?></td>
						<td><?=$row['date']?></td>
					</tr>

					<?php
						}
					?>

				</table>
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