<?php
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Transaction History</title>
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
		<table border="2" style="width: 100%;">
<colgroup>
  <col span="6" style="background-color: #D6EEEE">
</colgroup>
<tr>
<th>Date</th>
<th>Account ID</th>
<th>Account Name</th>
<th>Type</th>
<th>Amount</th>
<th>Status</th>
</tr>
<tr>
    <td>10-25-2021</td>
    <td>122345</td>
    <td>ABC</td>
    <td>Withdrawal</td>
    <td>$4000</td>
    <td>Confirmed</td>
</tr>
<tr>
    <td>10-25-2021</td>
    <td>233545</td>
    <td>FBC</td>
    <td>Withdrawal</td>
    <td>$3000</td>
    <td>Pending</td>
</tr>
<tr>
    <td>10-24-2021</td>
    <td>233545</td>
    <td>GDC</td>
    <td>Payment</td>
    <td>$3000</td>
    <td>Confirmed</td>
</tr>
<tr>
    <td>10-25-2021</td>
    <td>122345</td>
    <td>ABC</td>
    <td>Withdrawal</td>
    <td>$4000</td>
    <td>Confirmed</td>
</tr>
<tr>
    <td>10-25-2021</td>
    <td>233545</td>
    <td>FBC</td>
    <td>Withdrawal</td>
    <td>$3000</td>
    <td>Pending</td>
</tr>
<tr>
    <td>10-25-2021</td>
    <td>122345</td>
    <td>ABC</td>
    <td>Withdrawal</td>
    <td>$4000</td>
    <td>Confirmed</td>
</tr>
<tr>
    <td>10-25-2021</td>
    <td>233545</td>
    <td>FBC</td>
    <td>Withdrawal</td>
    <td>$3000</td>
    <td>Pending</td>
</tr>
<tr>
    <td>10-24-2021</td>
    <td>233545</td>
    <td>GDC</td>
    <td>Payment</td>
    <td>$3000</td>
    <td>Confirmed</td>
</tr>
<tr>
    <td>10-25-2021</td>
    <td>122345</td>
    <td>ABC</td>
    <td>Withdrawal</td>
    <td>$4000</td>
    <td>Confirmed</td>
</tr>
<tr>
    <td>10-25-2021</td>
    <td>233545</td>
    <td>FBC</td>
    <td>Withdrawal</td>
    <td>$3000</td>
    <td>Cancelled</td>
</tr>
<tr>
    <td>10-24-2021</td>
    <td>233545</td>
    <td>GDC</td>
    <td>Payment</td>
    <td>$3000</td>
    <td>Confirmed</td>
</tr>
<tr>
    <td>10-25-2021</td>
    <td>122345</td>
    <td>ABC</td>
    <td>Withdrawal</td>
    <td>$4000</td>
    <td>Confirmed</td>
</tr>
<tr>
    <td>10-25-2021</td>
    <td>233545</td>
    <td>FBC</td>
    <td>Withdrawal</td>
    <td>$3000</td>
    <td>Pending</td>
</tr>
<tr>
    <td>10-25-2021</td>
    <td>122345</td>
    <td>ABC</td>
    <td>Withdrawal</td>
    <td>$4000</td>
    <td>Confirmed</td>
</tr>
<tr>
    <td>10-25-2021</td>
    <td>233545</td>
    <td>FBC</td>
    <td>Withdrawal</td>
    <td>$3000</td>
    <td>Pending</td>
</tr>
<tr>
    <td>10-24-2021</td>
    <td>233545</td>
    <td>GDC</td>
    <td>Payment</td>
    <td>$3000</td>
    <td>Confirmed</td>
</tr>
<tr>
    <td>10-25-2021</td>
    <td>122345</td>
    <td>ABC</td>
    <td>Withdrawal</td>
    <td>$4000</td>
    <td>Confirmed</td>
</tr>
<tr>
    <td>10-25-2021</td>
    <td>122345</td>
    <td>ABC</td>
    <td>Withdrawal</td>
    <td>$4000</td>
    <td>Confirmed</td>
</tr>
<tr>
    <td>10-25-2021</td>
    <td>233545</td>
    <td>FBC</td>
    <td>Withdrawal</td>
    <td>$3000</td>
    <td>Cancelled</td>
</tr>
<tr>
    <td>10-24-2021</td>
    <td>233545</td>
    <td>GDC</td>
    <td>Payment</td>
    <td>$3000</td>
    <td>Confirmed</td>
</tr>
<tr>
    <td>10-25-2021</td>
    <td>122345</td>
    <td>ABC</td>
    <td>Withdrawal</td>
    <td>$4000</td>
    <td>Confirmed</td>
</tr>

</table>
	</form>
    <p align="center"> Copyright © 2021 by Get Your Fund </p>

</body>
</html>
<?php
 
 }else{
 	header('location: login.html');
 }

?>