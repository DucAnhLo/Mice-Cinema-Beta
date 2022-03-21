
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
  
</head>

<div >

  <header >
    <ul>
      <li><a href=" index.php">HOME PAGE</a></li>
      <li><a href="logout.php">LOGOUT</a></li>
    </ul>
  </header>
      <ul>
        <li>
          <a href="index.php">
            <i></i> <span>Home</span>
          </a>
        </li>
        
          <li>
          <a href="theatres.php">
            <i></i> <span>Theatres</span>
          </a>
        </li>
        <li>
          <a href="add_new_movies.php">
            <i></i> <span>Comming Soon</span>
          </a>
        </li>
        <li>
          <a href="add_movies.php">Movies</a>
        </li>
        
        
      </ul>
</body>