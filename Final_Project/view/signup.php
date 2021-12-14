<html>
<head>
	<title> Signup Page</title>
</head>
<body style="background: url(../asset/back1.jpg); ">
    <title> Sign Up  </title>

	<form method="post" action="../controller/signupCheck.php" onsubmit="return validation()">
		<table width="100%">
			<tr>
				<td>
					<table style="background-color: #FFFFFF7F;" width="50%" align="center" >
						<tr>
							<td>
		
		<fieldset>
			<table width="70%" align="center" >
			       
				<tr>
					<td colspan="2" align="center">
						<img src="../asset/logo1.jpg" width="550px" height="300px">
					</td>
				</tr>
				<tr>
					<td>
						Full Name
					</td>
					<td>
						<input type="text" name="name" id="name" placeholder="Enter FullName"value="">
					</td>
				</tr>

				<tr>
					<td>Username: </td>
					<td><input type="text" name="username" id="username" placeholder="Enter username" value=""></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" id="password" placeholder="Enter password" value=""></td>
				</tr>
				<tr>
					<td>email:</td>
					<td><input type="email" name="email" id="email" placeholder="Enter Email" value=""></td>
				</tr>

				<tr>
					<td>
						Phone
					</td>
					<td>
						<input type="number" name="phone" id="phone" placeholder="Enter PhoneNumber" value="">
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<fieldset>
							<legend>Gender</legend>
							<input type="radio" id="gender" name="gender" value="Male">Male
							<input type="radio" id="gender" name="gender" value="Female">Female
							<input type="radio" id="gender" name="gender" value="Others">Others
						</fieldset>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<fieldset>
							<legend>Date of Birth</legend>
							<input type="date" id="dob" name="dob" value="">
						</fieldset>
					</td>
				</tr>
				<tr>
					<td>
						Department
					</td>
					<td>
						<select name="department" id="department">
							<option>Admin</option>
							<option>Fund Manager</option>
							<option>Founder</option>
							<option>Investor</option>

						</select>
					</td>
				</tr>
				
				</tr>
				<tr align="center">
					<td colspan="2">
						<br>
						<hr>
					</td>
				</tr>
				<tr align="center">
					<td colspan="2">
						<input type="submit" name="submit" value="Sign Up">
						<button type="button" onclick="window.location.href='login.php';">Login</button>
					</td>
				</tr>
		</fieldset>
	</td>
</tr>
	</form>
</table>

&nbsp; &nbsp; &nbsp; &nbsp;
    <br>
<div id="erresult" style="color:red"></div>
<script type="text/javascript">
function validation()
{
	var name = document.getElementById('name').value;
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	var email = document.getElementById('email').value;
	var phone = document.getElementById('phone').value;	
	var gender = document.getElementById('gender').value;
	var dob = document.getElementById('dob').value;
	var department = document.getElementById('department').value;




	if(name == '' || username == '' || password == '' || email == '' || phone == '' || gender == '' || dob == '' || department == '')
	{
		document.getElementById('erresult').innerHTML = "All fields are required";
		return false;
	}
	else
	{
		return true;
	}
}


<p align="center"> Copyright 2021 by Get Your Fund </p>

</body>
</html>
