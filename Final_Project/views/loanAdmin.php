<?php 
	require_once('header.php');
	require('../models/loans_tbl.php');
	require('../models/loan_request_tbl.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>CarLagbe Admin loan</title>
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
				<div id="rset">
				<table id="tbl1" width="1500px" align="center" border="1">
					<tr align="center">
						<td colspan="10"><b style="font-size: 35px; font-family: calibri; color: white;">Loans <br> <hr></b></td>
					</tr>
					<tr>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Id</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Customer</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Total Amount</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Amount Paid</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Due</b><br></td>
					</tr>

					<?php 
						$result = getAllloans();
						 while ($row = mysqli_fetch_assoc($result)) {
					?>

					<tr style="font-size: 20px; font-family: calibri; color: white;">
						<td><?=$row['id']?></td>
						<td><?=$row['customer']?></td>
						<td><?=$row['amount']?></td>
						<td><?=$row['paid']?></td>
						<td><?=$row['due']?></td>
					</tr>

					<?php
						}
					?>

				</table>

				<br><hr><br>

				<table id="tbl2" width="1500px" align="center" border="1">
					<tr align="center">
						<td colspan="10"><b style="font-size: 35px; font-family: calibri; color: white;">Loan Requests <br> <hr></b></td>
					</tr>
					<tr>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Id</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Customer</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Amount</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Date</b><br></td>
						<td><b style="font-size: 25px; font-family: calibri; color: white;">Actions</b><br></td>
					</tr>

					<?php 
						$result = getAllloanRequest();
						 while ($row = mysqli_fetch_assoc($result)) {
					?>

					<tr style="font-size: 20px; font-family: calibri; color: white;">
						<td><?=$row['id']?></td>
						<td><?=$row['customer']?></td>
						<td><?=$row['amount']?></td>
						<td><?=$row['date']?></td>
						<td>
							<b style="font-size: 20px; font-family: calibri; color: white; text-decoration: none;" ><input class="btn" id="acpt" type="button" name="accept" value="Accept" onclick="acept(<?=$row['id']?>, <?=$row['amount']?>, '<?=$row['customer']?>')"></b> | 
					    	<b style="font-size: 20px; font-family: calibri; color: white; text-decoration: none;" ><input id="rejct" class="btn" type="button" name="reject" value="Reject" onclick="rejct(<?=$row['id']?>)"></b>
						</td>
					</tr>

					<?php
						}
					?>

				</table>
			</div>
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
	<script>

		

		function acept(id, amount, username){

			let accept = document.getElementById('acpt').value;
			let data = {
				'id' : id,
				'amount' : amount,
				'username' : username
			}

			let info = JSON.stringify(data);

			let http = new XMLHttpRequest();
			http.open('POST', '../controllers/loanReqCheck.php', true);
			http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			http.send('data='+info+'&accept='+accept);

			http.onreadystatechange = function(){
				
				if(this.readyState == 4 && this.status == 200){
					location.reload();
					
				}
			}

		}
		
		function rejct(id){

			let reject = document.getElementById('rejct').value;
			let http = new XMLHttpRequest();
			http.open('POST', '../controllers/loanReqCheck.php', true);
			http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			http.send('id='+id+'&reject='+reject);

			http.onreadystatechange = function(){
				
				if(this.readyState == 4 && this.status == 200){
					location.reload();
					
				}
			}

		}
	</script>
</body>
</html>