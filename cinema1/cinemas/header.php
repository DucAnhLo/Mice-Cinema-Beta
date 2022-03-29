
<?php
session_start();
if(!isset($_SESSION['theatre']))
{
  header('location:../index.php');
}
date_default_timezone_set('Asia/Kolkata');
include('../connection.php');
$th=mysqli_query($con,"select * from cinemas where id='".$_SESSION['theatre']."'");
$theatre=mysqli_fetch_array($th);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Theatre Assistance</title>
</head>
<body>

<div>

  <header>
    <ul>
      <li><a href="index.php">
      <span><b>Theatre</b> Assistant</span>
    </a></li>
    <li><a href="logout.php">Logout</a></li>
    </ul>
    

  </header>
  <aside >
    <section>
     
      <div>
        <div>
          <p><?php echo $theatre['name'];?></p>
        </div>
      </div>
      <ul>
        <li>
          <a href="index.php">
            Home
          </a>
        </li>
        
        <li>
          <a href="movies.php">
            View Movies
          </a>
        </li>

        <li>
          <a href="add_shows.php">
            Add Show 
          </a>
        </li>
        <li>             
          <a href="shows.php">
            View Show
          </a>
        </li>
      </ul>
    </section>
  </aside>