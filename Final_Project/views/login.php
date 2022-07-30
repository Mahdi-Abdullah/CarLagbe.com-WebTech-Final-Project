<html>
<head>
	<title>CarLagbe Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<table width="1570" cellspacing="0" bgcolor="E0DDAA">
		<tr height="50px">
			<td bgcolor="" align="center">
				<b><a href="../views/homepage.php" class="hyper" style="font-size: 30px; color: darkred;">CarLagbe.com</a></b>
			</td>
			<td bgcolor="141E27" align="center">
				<a href="../views/newCars.php" class="hyper"><b>New Cars | </b></a>
				<a href="../views/oldCars.php" class="hyper"><b>Old Cars | </b></a>
				<a href="../views/loan.php" class="hyper"><b>Loan | </b></a>
				<a href="../views/emi.php" class="hyper"><b>EMI | </b></a>
			</td>
			<td align="right">
				| <a href="../views/login.php" style="color: darkred;" class="hyper"><b>Login</b></a> |
				<a href="../views/registration.php" style="color: darkred;" class="hyper"><b>Registration</b></a> |
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<img src="../assets/3.jpg" alt="Car Image" width="1570" height="250">
			</td>
		</tr>
		<tr height="411px" bgcolor="203239">
			<td width="270px" valign="Top">
				
			</td>
			<td bgcolor="141E27" align="center">
				
					<table width="400" class="table">
						<tr align="center">
							<td colspan="2">
								<b style="font-size: 35px; font-family: calibri; color: white;">Login <br> <hr></b>
							</td>
						</tr>
						<tr align="center">
							<td colspan="2">
								<b style="font-size: 25px; font-family: calibri; color: white;">Username:</b> 
								<input id="name" type="text" name="username" value="" onblur="formVarification1()" /> <br>
							</td>
						</tr>
						<tr align="center">
							<td colspan="2">
								<b style="font-size: 25px; font-family: calibri; color: white;">Password :</b> 
								<input id="pass" type="password" name="password" value="" onblur="formVarification2()" /> <br>
							</td>
						</tr>
						<tr align="center">
							<td colspan="2">
								<br><input id="sub" type="button" name="submit" value="submit" style="font-size: 20px;" class="btn" onclick="loginCheck()"/> <hr>
							</td>
						</tr>
						<tr>
							<td >
								<b style="font-size: 20px; font-family: calibri; color: white;"><input id="chk" type="checkbox" name="remember_me" value="check"/> Remember Me </b>
							</td>
							<td align="right">
								
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<br>
								<b id="msg" style="font-size: 20px; font-family: calibri; color: red;"></b>
							</td>
						</tr>
					</table>
				
			</td>
			<td  width="270px">
			</td>
		</tr>
		<tr height="200px" bgcolor="203239">
			<td></td>
			<td bgcolor="141E27"></td>
			<td></td>
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

		function formVarification1(){
			let username = document.getElementById('name').value;

			if (username == "") {
				alert("Please enter your username");
			}
		}

		function formVarification2(){
			let password = document.getElementById('pass').value;

			if (password == "") {
				alert("Please enter your password");
			}
		}

		function loginCheck(){
			let username = document.getElementById('name').value;
			let password = document.getElementById('pass').value;
			let check = document.getElementById('chk').value;
			let submit = document.getElementById('sub').value;

			let data = {
				'username' : username,
				'password' : password,
				'remember_me' : check
			}

			let info = JSON.stringify(data);

			let http = new XMLHttpRequest();
			http.open('POST', '../controllers/loginCheck.php', true);
			http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			http.send('data='+info+'&submit'+submit);

			http.onreadystatechange = function(){
				
				if(this.readyState == 4 && this.status == 200){

					if (this.responseText == 'http://localhost/WebTech/Final_Project/views/profile_Admin.php' || this.responseText == 'http://localhost/WebTech/Final_Project/views/profile_Customer.php' || this.responseText =='http://localhost/WebTech/Final_Project/views/profile_Customer_Service.php') {

						window.location.href = this.responseText;
						

					}else {
						document.getElementById('msg').innerHTML = this.responseText;
					}
				}
			}
		}

	</script>
</body>
</html>