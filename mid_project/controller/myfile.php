<?php 

	//print_r($_FILES['myfile']);
session_start();

	$des = 'asset/'.$_FILES['myfile']['name'];
	$src = $_FILES['myfile']['tmp_name'];

	//echo $des;

	if(move_uploaded_file($src, $des)){
		$_SESSION['myimage'] = $_FILES['myfile']['name'];
		header('location: showP.php');
	}else{
		echo "error";
	}
?>