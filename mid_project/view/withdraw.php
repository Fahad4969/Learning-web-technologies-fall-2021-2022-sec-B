<?php
	if(isset($_COOKIE['flag'])){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Withdraw</title>
</head>
<body style="background-color:Silver;">

<html>
<head>
	<title>Change Password</title>
</head>
<body style="background-color:Silver;">

<?php
	
	include('header.php');
?>
<a href="home.php">BACK TO HOME</a>

		</table>
				</td>
			</tr>
            <td>
					<table align="center" width="100%">
						<tr>
							<td>
								<table align= "center" >
									<tr>
								
										<td>
											<fieldset>
											<legend>Money Withdraw</legend>
											User ID           :
											<input type="text" name="subject" value=""><br> <br>
                                            User Name         :
											<input type="text" name="subject" value=""><br> <br>
                                            Amount            : 
					
						                <input type="number" name="phone" value=""><br> <br>
                                            Enter Your Number :
					
						                <input type="number" name="phone" value=""><br> <br>
		
                                            Payment Method    :
						<select name="department">
							<option>Bkash</option>
							<option>Ukash</option>
							<option>Paypal</option>
							<option>Bank</option>

						</select> <br> <br>
                                            Password          :
											<input type="password" name="password" value=""><br> <br>
											<hr>
											<input type="submit" name="withdraw" value="Withdraw Request">
										</fieldset>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		</table>
		<p align="center"> Copyright © 2021 by Get Your Fund </p>

</body>
	</head>
	
<?php
 
}else{
	header('location: login.html');
}

?>