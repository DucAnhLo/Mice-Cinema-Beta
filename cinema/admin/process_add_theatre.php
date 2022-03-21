<?php
    include('../connection.php');
    extract($_POST);
    mysqli_query($con,"insert into  cinemas values(NULL,'$name','$address','$place','$state','$pin')");
    $id=mysqli_insert_id($con);
    mysqli_query($con,"insert into  login values(NULL,'$id','$username','$password','1')");
    header('location:theatre_detail.php?id='.$id);
?>