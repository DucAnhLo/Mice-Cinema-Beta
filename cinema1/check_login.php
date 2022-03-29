<?php
session_start();
include('connection.php');
$_SESSION['show'] = $_GET['show'];
$_SESSION['movie'] = $_GET['movie'];
$_SESSION['theatre'] = $_GET['theatre'];
$qry2=mysqli_query($con,"select * from movies where movie_id='".$_SESSION['movie']."'");
$movie=mysqli_fetch_array($qry2);

if(isset($_SESSION['user']))
{
	if ($movie['event_id']!=0) {
		if (isset($_SESSION['member'])) {
			header('location: booking.php');
		}
		else{
			header('location: membership.php');
		}
	}
	else{
		header('location: booking.php');
	}
		
}
else
{
	header('location: login.php');
}

 ?>