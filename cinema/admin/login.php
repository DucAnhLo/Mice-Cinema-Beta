<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="/css/adminLogin.css" rel="stylesheet">
  <title>Theatre Assistant| Admin</title>
  
</head>
<body >
<div >
  <div >
    <a>Theatre Assistant<b> &nbsp; Admin Panel</b></a>
  </div>
  <div >
    <?php session_start(); include('../msgbox.php');?>
    <p >Please login to start your session</p>
<form action="admin_login.php" method="post">
      <div >
        <input name="Email" type="text" size="25" placeholder="Username" class="form-control"/>
        <span ></span>
      </div>
      <div >
        <input name="Password" type="password" size="25" placeholder="Password"  />
        <span ></span>
      </div>
      <div >
          <button type="submit" >Login</button>
      </div>
    </form>

    <a href="../theatre/index.php">Go To Theatre Panel</a>

  </div>

</div>


</body>
</html>
