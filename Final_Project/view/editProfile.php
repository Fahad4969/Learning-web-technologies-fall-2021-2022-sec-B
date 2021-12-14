<?php
	session_start();

    include 'header.php';

    $con = mysqli_connect("localhost", "root", "", "webtech");
    if ($con->connect_error) 
    {
        exit('Could not connect');
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Stuff</title>
</head>
<body>

	<table align="center">
		<tr>
			<td>
				<form method="POST" action="../controller/update.php" onsubmit="return Validation()" >
					<fieldset>
						<legend align="center">Update User</legend>
						<table>
							<tr>
								<td>Name:</td>
								<td><input type="text" name="name"  id="name"></td>
							</tr>
							<tr>
								<td>Email:</td>
								<td><input type="text" name="email"  id="email"></td>
							</tr>
					
							<tr>
								<td>Phone:</td>
								<td><input type="text" name="phone" id="phone"></td>
							</tr>
							<tr>
								<td>Gender:</td>
								<td><input type="text" name="gender" id="gender"></td>
							</tr>
							<tr> 
								<td>Date of Birth:</td>
								<td>
									<input type="date" name="dob"  id="dob">
								</td>
									
							</tr>
							<tr>
								<td>Position:</td>
								<td>
								<select name="position" id="position">
										<option>Select an option</option>
										<option value="Admin">Admin</option>
										<option value="Fund Manager">Fund Manager</option>
										<option value="Founder">Founder</option>
										<option value="Investor">Investor</option>
			
								</td>
							</tr>
							
					
							<tr>
								<td>Password:</td>
								<td><input type="password" name="password" id="password"></td>
							</tr>
							<tr>
								<td colspan="2" align="right">
									<input type="submit" name="submit" value="Submit">
									<input type="reset" name="reset" value="Reset">
								</td>
							</tr>
						</table>
						
					</fieldset>
			
				</form>

			</td>
		</tr>
	</table> 
	<script>
		function Validation()
		{
			const name = document.getElementById('name').value;
			const email = document.getElementById('email').value;
			const phone = document.getElementById('phone').value;
			const password = document.getElementById('password').value;
			const salary = document.getElementById('gender').value;
			const dob= document.getElementById('dob').value;
			const position = document.getElementById('position').value;

			let errorflag =false;
			let i=0;

			if(name == '' || email == '' || phone == '' || gender  == '' || password == '' || dob == '' || position == '')
			{
				alert('Null Submission');
				errorflag=true;
			}
			else
			{
				let mailflag=false;
		
				for(i=0;i<email.length;i++)
				{
					if((email[i] == '@' ))
					{
						mailflag=true;
					}
				}
				if(mailflag == false)
				{
					alert('Invalid email Format');
					errorflag=true;
				}

				let phoneflag=false;
		
				for(i=0;i<phone.length;i++)
				{
					if((phone[i] >= 0 ) && (phone[i] <= 9 ))
					{
							phoneflag=true;				         
					}
				}
				if(phoneflag == false)
				{
					alert('Invalid phone number Format');
					errorflag=true;
				}

				if((phone.length <7) || (phone.length >11))
					{
						alert ('Invalid Phone Number');
						errorflag=true;
					}


				let passflag=false;

				for(i=0;i<password.length;i++)
				{
					if((password[i] == '@' || 
					password[i] == '$' ||
					password[i] == '#' ||
					password[i] == '%')) 
					{
						passflag=true;
					}
				}
		
				if(passflag == false)
				{
					alert ('Password must contain atleast one of the special characters (@, $, % or #!)');
					errorflag=true;
				}
				if(password.length < 4)
				{
					alert ('Password must contain atleast 4 characters');
					errorflag=true;
				}
		
			}
			if(errorflag==false)
			{
				return true;
			}
			else
			{
				return false;
			}
			
		}
	</script>
</body>
</html>