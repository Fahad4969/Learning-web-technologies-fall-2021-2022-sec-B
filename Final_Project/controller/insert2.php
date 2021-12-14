<?php

$link = mysqli_connect("localhost", "root", "", "webtech");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$title = mysqli_real_escape_string($link, $_REQUEST['title']);
$category = mysqli_real_escape_string($link, $_REQUEST['category']);
$e_p = mysqli_real_escape_string($link, $_REQUEST['e_p']);

 
// Attempt insert query execution
$sql = "INSERT INTO project (Project_title, Category,Earned_Profit ) VALUES ('$title', '$category','$e_p')";
if(mysqli_query($link, $sql)){
    header("location:../view/founder.php"); 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>