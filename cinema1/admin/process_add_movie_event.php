<?php
    session_start();
    include('../connection.php');
    extract($_POST);
    $sql = "UPDATE movies SET event_id='".$_SESSION['event']."' WHERE movie_id='$movie'";
    mysqli_query($con, $sql);
    
    
    $_SESSION['success']="Movies Added";
    header('location: event_page.php');
?>