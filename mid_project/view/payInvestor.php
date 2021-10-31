<?php
	if(isset($_COOKIE['flag'])){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Investors Payment</title>
</head>
<body style="background-color:Silver;">

<html>
<body style="background-color:Silver;">

<?php
	
	include('header.php');
?>
<a href="home.php">BACK TO HOME</a>

		<table align= "center" width="60%">
	
									<tr>
								
										<td align="center">
											<fieldset>
											<legend>Payment Gateway</legend>
											User ID
											<input type="text" name="subject" value=""><br> <br>
                                            User Name
											<input type="text" name="subject" value=""><br> <br>
                                          
						                    Amount
					
						                <input type="number" name="phone" value=""><br> <br>
		
                                            Payment Method
						<select name="payment">
							<option>Bkash</option>
							<option>Ukash</option>
							<option>Paypal</option>
							<option>Bank</option>

						</select> <br/>  <br/>
											<input type="submit" name="pay" value="Send">
										</fieldset>
										</td>
									</tr>
								
		</table>
		<p align="center"> Copyright © 2021 by Get Your Fund </p>

</body>
</html>
<?php
 
 }else{
 	header('location: login.html');
 }

?>