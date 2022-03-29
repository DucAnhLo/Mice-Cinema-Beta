
<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header('location: login.php');
}
date_default_timezone_set('Europe/London');
include('../connection.php');
?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="../css/adminHeader.css" rel="stylesheet">

</head>

<div >

  <header >
      <a href=" index.php">HOME </a>
      <a href="staff.php">STAFF</a>
      <a href="theatres.php">CINEMAS</a>
      <a href="event_page.php">EVENTS</a>
      <a href="logout.php">Log Out</a>
  </header>
</body>