
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
	<link href="/cinema/css/adminHeader.css" rel="stylesheet">

</head>

<div >

  <header >
      <a href=" index.php">Home </a>
      <a href="add_movies.php">Movies</a>
      <a href="theatres.php">
        <i></i> <span>Theatres</span>
      </a>
      <a href="add_new_movies.php">
        <i></i> <span>Comming Soon</span>
      </a>
      <a href="logout.php">Log Out</a>
  </header>
</body>