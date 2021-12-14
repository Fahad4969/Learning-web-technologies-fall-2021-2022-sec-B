<?php

$link = mysqli_connect("localhost", "root", "", "webtech");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$title = mysqli_real_escape_string($link, $_REQUEST['title']);
$category = mysqli_real_escape_string($link, $_REQUEST['category']);
$s_d = mysqli_real_escape_string($link, $_REQUEST['s_d']);
$e_d = mysqli_real_escape_string($link, $_REQUEST['e_d']);

 
// Attempt insert query execution
$sql = "INSERT INTO project (Project_title, Category, Start_Date,End_Date) VALUES ('$title', '$category', '$s_d','$e_d')";
if(mysqli_query($link, $sql)){
    header("location:../view/founder.php"); 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>