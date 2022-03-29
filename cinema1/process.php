<?php
session_start();
extract($_POST);
$_SESSION['screen'] = $screen;
$_SESSION['seats'] = $seats;
$_SESSION['date'] = $date;
$_SESSION['time'] = $time;
header('location: payment.php');

 ?>