<?php
	session_start();
	$errorflag=false;

	if(isset($_POST['submit']))
	{
        $name = $_POST['name'];
        $password = $_POST['password'];
        $newpass = $_POST['newpass'];
        $renewpass = $_POST['renewpass'];
        

        if($name == '' ||  $newpass == '' || $password == '' ||  $renewpass == ''  )
        {
            echo "Null Submission<br>";
			$errorflag=true;
        }
            else if(strlen($newpass) < 4)
        {
            {
                echo 'New Password must contain atleast 4 characters<br/>';
                $errorflag=true;
            }

            if($newpass != $renewpass)
            {
                echo "Confirmed password does't match with password<br>";
                $errorflag=true;
            }
            $renewpassflag=false;

            if($renewpassflag == false)
            {
                echo 'Password can not be confirmed <br>';
                $errorflag=true;
            }
            if(strlen($renewpass) < 4)
            {
                echo 'Password can not be confirmed <br/>';
                $errorflag=true;
            }

            if($newpass != $renewpass)
            {
                echo "Password can not be confirmed <br>";
                $errorflag=true;
            }
            
           
        }
        if(($errorflag == false))
		{
            
            $conn = mysqli_connect('localhost', 'root', '', 'webtech');
            if($conn == null)
            {
                die('DB connection error!');
            }

            $sql = "UPDATE users set password = '$newpass' WHERE Name = '{$_SESSION['name']}'" ;
            $result = mysqli_query($conn, $sql);
            if($result)
            {
                header('location: ../view/changePassword.php');
            }
            else{
                echo "Something wrong...";
            }
        }
			
        else
        {
            echo "invalid Request";
        }
		
    }
