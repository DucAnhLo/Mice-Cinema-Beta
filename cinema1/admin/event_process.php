<?php
session_start();
$_SESSION['event'] = $_GET['event'];
header('location: movie_event.php');


 ?>