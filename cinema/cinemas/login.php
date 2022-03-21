<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>AdminLTE 2 | Log in</title>
   
</head>
<body>
<div>
  <div >
    <a href="#">Theatre Assistant   <b>Theatre Panel</b></a>
  </div>
  <!-- /.login-logo -->
  <div >
    <?php session_start(); 
    include('../msgbox.php');
    ?>
    <p class="login-box-msg">Please login to start your session</p>
<form action="process_login.php" method="post">
      <div>
        <input name="Email" type="text" size="25" placeholder="Username"/>
        <span></span>
      </div>
      <div>
        <input name="Password" type="password" size="25" placeholder="Password" class="form-control" />
        <span></span>
      </div>
      <div class="form-group">
          <button type="submit">Login</button>
      </div>
</form>

    <a href="../admin/login.php">Go To Admin Panel</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->


