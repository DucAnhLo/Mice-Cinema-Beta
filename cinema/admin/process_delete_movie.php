<?php
session_start();
include('../connection.php');

$mid=$_GET['mid'];
mysqli_query($con,"delete  from movies where movie_id='$mid'");
 $_SESSION['success']="Movie deleted  successfully";
header("location:index.php");
?>