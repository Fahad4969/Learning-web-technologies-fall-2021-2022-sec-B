<?php
	session_start();

	if(isset($_POST['submit'])){
		$username= $_POST['username'];
		$email= $_POST['email'];
        if($username!=''){
            $_SESSION['user']['username']=$username;
            header('location: viewProfile.php');
        }
        if($email!='')
        {
            $_SESSION['user']['email']=$email;
            header('location: viewProfile.php');
        }
	}else{
		echo "invalid request...";
	}

?>