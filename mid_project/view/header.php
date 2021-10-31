<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>
<body style="background-color:white;">


<table width="100%" height="100px">
			<tr height="100px">
			
				<td>
					<table width="100%">
						<tr>
						
						<td align="center">
							<img src="../asset/equity.png" width="1200px" height= "200px">
						
						</td>
						</tr>
					</table>
				</td>
			</tr>
<td width="40%">
	
	<h2>
	<details>
		<summary>MENU</summary>
		<details>
			<summary>Profile</summary>
			<a href="viewProfile.php">Profile</a><br>
			<a href="editProfile.php">Edit Profile</a><br>
			<a href="changePassword.php">Change Password</a>
		</details>
		
		<details>
			<summary>Investors</summary>
			<a href="investors.php">List Of Investors</a>
		</details>
		<details>
			<summary>Payment</summary>
			<a href="payInvestor.php">Pay Investors</a><br>
			<a href="transaction.php">Transaction History</a><br>
			<a href="withdraw.php">Withdraw Money</a><br>
			<a href="fundTransfer.php">Fund Transfer Status</a><br>

		</details>
		<details>
			<summary>Projects</summary>
			<a href="rProject.php">Running Projects</a> <br/>
			<a href="fProject.php">Finished Projects</a>

		</details>
		<details>
			<summary>Founder</summary>
			<a href="founder.php">List Of Founders</a> <br/>
			<a href="varifyFounder.php">Pending For Varification</a>

		</details>
		<details>
			<summary>Fund</summary>
			<a href="fund.php">Amount of Crowd Funded</a> <br/>
			<a href="rFund.php">Remaining Fund</a>
		</details>

		<a href="../controller/logout.php">Logout</a> 
	</details>
</h2>
</table>
    
</body>
</html>