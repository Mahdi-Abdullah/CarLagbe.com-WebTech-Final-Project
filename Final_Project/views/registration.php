<!DOCTYPE html>
<html>
<head>
	<title>CarLagbe Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<table width="1570" cellspacing="0" bgcolor="E0DDAA">
		<tr height="50px">
			<td bgcolor="" align="center">
				<b><a href="../views/homepage.php" style="text-decoration: none; font-size: 30px; font-family: calibri; color: darkred;">CarLagbe.com</a></b>
			</td>
			<td bgcolor="141E27" align="center">
				<a href="../views/newCars.php" class="hyper"><b>New Cars | </b></a>
				<a href="../views/oldCars.php" class="hyper"><b>Old Cars | </b></a>
				<a href="../views/loan.php" class="hyper"><b>Loan | </b></a>
				<a href="../views/emi.php" class="hyper"><b>EMI | </b></a>
			</td>
			<td align="right">
					| <a href="../views/login.php" style="text-decoration: none; color: darkred;"><b style="font-size: 20px; font-family: calibri;">Login</b></a> |
					<a href="../views/registration.php" style="text-decoration: none; color: darkred;"><b style="font-size: 20px; font-family: calibri;">Registration</b></a> |
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<img src="../assets/5.jpg" alt="Car Image" width="1570" height="250">
			</td>
		</tr>
		<tr height="411px" bgcolor="203239">
			<td width="270px" valign="Top">
				
			</td>
			<td bgcolor="141E27" align="center">
				<form method="POST" action='../controllers/regCheck.php' enctype="multipart/form-data" onsubmit="return formVarification()">
					<table width="500" class="table">
						<tr align="center">
							<td colspan="2">
								<b style="font-size: 35px; font-family: calibri; color: white;">Registration<br> <hr></b>
							</td>
						</tr>
						<tr align="center">
							<td>
								<b style="font-size: 25px; font-family: calibri; color: white;">Name :</b>
							</td>
							<td>
								<input id="name" type="text" name="name" value=""/>
							</td>
						</tr>
						<tr align="center">
							<td>
								<b style="font-size: 25px; font-family: calibri; color: white;">Email :</b>
							</td>
							<td>
								<input id="mail" type="email" name="email" value=""/>
							</td>
						</tr>
						<tr align="center">
							<td>
								<b style="font-size: 25px; font-family: calibri; color: white;">Username :</b>
							</td>
							<td>
								<input id="user" type="text" name="username" value=""/>
							</td>
						</tr>
						<tr align="center">
							<td>
								<b style="font-size: 25px; font-family: calibri; color: white;">Password :</b>
							</td>
							<td>
								<input id="pass" type="password" name="password" value=""/>
							</td>
						</tr>
						<tr align="center">
							<td>
								<b style="font-size: 25px; font-family: calibri; color: white;">Confirm Password :</b>
							</td>
							<td>
								<input id="con" type="password" name="confirmPass" value=""/>
							</td>
						</tr>
						<tr align="center">
							<td>
								<b style="font-size: 25px; font-family: calibri; color: white;">Gender :</b>
							</td>
							<td>
								<input id="male" type="radio" name="gender" value="Male"/> <b style="font-size: 25px; font-family: calibri; color: white;">Male</b>
								<input id="female" type="radio" name="gender" value="Female"/> <b style="font-size: 25px; font-family: calibri; color: white;">Female</b>
								<input id="other" type="radio" name="gender" value="Other"/> <b style="font-size: 25px; font-family: calibri; color: white;">Other</b>
							</td>
						</tr>
						<tr align="center">
							<td>
								<b style="font-size: 25px; font-family: calibri; color: white;">Date of Birth :</b>
							</td>
							<td>
								<input id="dates" type="date" name="date" value=""/>
							</td>
						</tr>
						<tr>
							<td>
								<b style="font-size: 25px; font-family: calibri; color: white;">Profile Picture :</b>
							</td>
							<td align="right">
								<input id="pics" type="file" name="pic" style="color: white;">
							</td>
						</tr>
						<tr>
							<td>
								<b style="font-size: 25px; font-family: calibri; color: white;">Account Type :</b>
							</td>
							<td>
								<input id="cstmer" type="radio" name="accType" value="customer"/> <b style="font-size: 25px; font-family: calibri; color: white;">Customer</b>
								<input id="sell" type="radio" name="accType" value="seller"/> <b style="font-size: 25px; font-family: calibri; color: white;">Seller</b>
							</td>
						</tr>
						<tr align="center">
							<td colspan="2">
								<br><input id="sub" type="submit" name="submit" value="submit" class="btn" style="font-size: 20px;" onclick="ajax()" /> <input type="reset" name="reset" value="Reset" class="btn" style="font-size: 20px;" /> <br><hr>
							</td>
						</tr>
					</table>
				</form>
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
		
		function formVarification(){

			let name = document.getElementById('name').value;
			let email = document.getElementById('mail').value;
			let user = document.getElementById('user').value;
			let password = document.getElementById('pass').value;
			let conPassword = document.getElementById('con').value;
			let dob = document.getElementById('dates').value;
			

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
			else if (conPassword == "" || password != conPassword) {
				alert("Please confirm your password"); return false;
			}
			else if (document.getElementById('male').checked == false && document.getElementById('female').checked == false && document.getElementById('other').checked == false) {
				alert("Please select your gender"); return false;
			}
			else if (dob == "") {
				alert("Please enter your date of birth"); return false;
			}
			else if (document.getElementById('pics').value == "") {
				alert("Please uplode a picture"); return false;
			}
			else if (document.getElementById('cstmer').checked == false && document.getElementById('sell').checked == false) {
				alert("Please select an account type"); return false;
			}
			else {
				return true;
			}
		}

		function ajax() {
			let name = document.getElementById('name').value;
			let email = document.getElementById('mail').value;
			let user = document.getElementById('user').value;
			let password = document.getElementById('pass').value;
			let conPassword = document.getElementById('con').value;


			if (document.getElementById('male').checked == true) {
				let gen = document.getElementById('male').value;
			}
			else if (document.getElementById('female').checked == true) {
				let gen = document.getElementById('female').value;
			}
			else if (document.getElementById('other').checked == true) {
				let gen = document.getElementById('other').value;
			}

			let dob = document.getElementById('dates').value;
			let pictures = document.getElementById('pics').value;

			if (document.getElementById('cstmer').checked == true) {
				let typ = document.getElementById('cstmer').value;
			}
			else if (document.getElementById('sell').checked == true) {
				let typ = document.getElementById('sell').value;
			}

			let submits = document.getElementById('sub').value;

			let http = new XMLHttpRequest();
			http.open('POST', '../controllers/regCheck.php', true);
			http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			http.send('name='+name+'&email='+email+'&username='+user+'&password='+password+'&confirmPass='+conPassword+'&gender='+gen+'&date='+dob+'&pic='+pictures+'&accType='+typ+'&submit='+submits);

			http.onreadystatechange = function(){
				
				if(this.readyState == 4 && this.status == 200){
					alert(this.responseText);
				}
			}
		}

	</script>
</body>
</html>