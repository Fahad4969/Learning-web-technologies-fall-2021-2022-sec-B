<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
	<style>
  :root{
   --color-1: #2f3240;
}
body{
  font-family: sans-serif;
  background-color: #e8eef3;
}
*{
  box-sizing: border-box;
  margin:0;
  padding:0;
}
ul{
  list-style: none;
}
a{
  text-decoration: none;
}
.container{
  max-width: 1170px;
  margin:auto;
}
.row{
  display: flex;
  flex-wrap: wrap;
}
.align-items-center{
  align-items: center;
}
.justify-content-between{
  justify-content: space-between;
}
/*header*/
.header{
  background-color: var(--color-1);
  padding: 12px 0;
  line-height: 1.5;
}

.header .logo,
.header .nav{
  padding:0 15px;
}
.header .logo a{
  font-size: 30px;
  color: #ffffff;
  text-transform: capitalize;
}
.header .nav ul li{
  display: inline-block;
  margin-left: 40px;
}
.header .nav ul li a{
  display: block;
  font-size: 16px;
  text-transform: capitalize;
  color: #ffffff;
  padding: 10px 0;
  transition: all 0.5s ease;
}
.header .nav ul li a.active,
.header .nav ul li a:hover{
  color: #f3a93d;
}
.nav-toggler{
  height: 34px;
  width: 44px;
  background-color: #ffffff;
  border-radius: 4px;
  cursor: pointer;
  border:none;
  display: none;
  margin-right: 15px;
}
.nav-toggler:focus{
  outline: none;
  box-shadow: 0 0 15px rgba(255,255,255,0.5);
}
.nav-toggler span{
   height: 2px;
   width: 20px;
   background-color: var(--color-1);
   display: block;
   margin:auto;
   position: relative;
   transition: all 0.3s ease;
}
.nav-toggler.active span{
  background-color: transparent;
}
.nav-toggler span::before,
.nav-toggler span::after{
  content: '';
  position: absolute;
  left:0;
  top:0;
  width: 100%;
  height: 100%;
  background-color: var(--color-1);
  transition: all 0.3s ease;
}
.nav-toggler span::before{
  transform: translateY(-6px);
}
.nav-toggler.active span::before{
  transform: rotate(45deg);
}
.nav-toggler span::after{
  transform: translateY(6px);
}
.nav-toggler.active span::after{
  transform: rotate(135deg);
}
@media(max-width:991px){
  .nav-toggler{
     display: block;
  }
  .header .nav{
     width: 100%;
     padding:0;
     max-height: 0px;
     overflow: hidden;
     visibility: hidden;
     transition: all 0.5s ease;
  }
  .header .nav.open{
     visibility: visible;
  }
  .header .nav ul{
     padding:12px 15px 0;
     margin-top: 12px;
     border-top:1px solid rgba(255,255,255,0.2);
  }
  .header .nav ul li{
     display: block;
     margin:0;
  }
}
</style>
</head>
<body style="background-color:white;">

<header class="header">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="logo">
               <a href="#">Get Your Fund</a>
            </div>
            <button type="button" class="nav-toggler">
               <span></span>
            </button>
            <nav class="nav">
               <ul>
                  <li><a href="home.php" class="active">Home</a></li>
                  <li><a href="investors.php"> Our Investors</li>

                  <li><a href="#">About</a></li>
                  <li><a href="#"> Contract</li>
<li> 
				  
   <!-- Including our scripting file. -->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

   <script type="text/javascript" src="search.js"></script>
   <!-- Including CSS file. -->
   <link rel="stylesheet" type="text/css" href="style1.css">
<!-- Search box. -->
   <input type="text" id="search" placeholder="Search by user..." />
   <!-- Suggestions will be displayed in below div. -->
   <div id="display"></div>

                 </li>
		<li>
    <?php
	
	if(isset($_SESSION['name']))
    				{
    					echo $_SESSION['name'];
    					
    				}
 		
?>
</li>			
    	<li>
		<a href="../controller/logout.php">Logout</a> 
        </li>
               </ul>
            </nav>
        </div>
    </div>
 </header>
	
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
			<summary>Payment</summary>
			<a href="payInvestor.php">Pay Investors</a><br>
			<a href="transaction.php">Transaction History</a><br>
			<a href="withdraw.php">Withdraw Money</a><br>
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