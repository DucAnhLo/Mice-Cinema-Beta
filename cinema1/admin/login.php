<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="../css/adminLogin.css" rel="stylesheet">
  <title>Theatre Assistant| Admin</title>
  
</head>
<body >
<section class="main-body">
  <div>
    <a href="#" class="header">Theatre Assistant<b> &nbsp; Admin Panel</b></a>
  </div>
  <div >
    <?php session_start(); include('../msgbox.php');?>
    <p >Please login to start your session</p>
  <form action="admin_login.php" method="post">
    <lable>Username:</lable>
    <input name="Email" type="text" size="25" placeholder="Username" class="form-control"/>
    <lable>Password:</lable>
    <input name="Password" type="password" size="25" placeholder="Password"  />
    <button type="submit" >Login</button> 
  </form>

    <a class="theater-page" href="../cinemas/login.php">Go To Theatre Panel</a>

  </div>
</section>



</body>
</html>
