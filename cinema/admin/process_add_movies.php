<?php
    session_start();
    include('../connection.php');
    extract($_POST);
    
    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    
    $flname="images/".basename($image);
    
    mysqli_query($con,"insert into  movies values(NULL,'".$_SESSION['theatre']."','$name','$cast','$desc','$rdate','$flname','$video','0')");
    
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    
    $_SESSION['success']="Movie Added";
    header('location:add_movies.php');
?>