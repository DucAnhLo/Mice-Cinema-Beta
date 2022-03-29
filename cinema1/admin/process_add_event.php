<?php
    session_start();
    include('../connection.php');
    extract($_POST);
    
    
    $query_1 = "INSERT INTO events(event_id,name,start_date,end_date) VALUES(NULL,'$name','$start','$end')"; 
    mysqli_query($con, $query_1);
    
    
    $_SESSION['success']="Event Added";
    header('location: event_page.php');
?>