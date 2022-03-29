<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
include('connection.php');
extract($_POST);
if ($otp=='123456'){
$rg = mysqli_query($con, "SELECT * FROM registration WHERE user_id = '".$_SESSION['user']."' ");
$register = mysqli_fetch_array($rg);
$mem_no=rand(1000,9999);
$date=$_GET['date'];
$query_1 = "INSERT INTO members (membership_no,user_id,title,name,joined,status) VALUES ('$mem_no','".$_SESSION['user']."','".$register['gender']."','".$register['name']."','$date(Y-m-d)','Active')";
mysqli_query($con,$query_1);
 echo "Welcome a new MICE member!";}
else{
$_SESSION['success']="Fail";
}
?>
<body><table align='center'><tr><td><STRONG>Transaction is being processed,</STRONG></td></tr><tr><td><font color='blue'>Please Wait <i class="fa fa-spinner fa-pulse fa-fw"></i>
<span class="sr-only"></font></td></tr><tr><td>(Do not 'RELOAD' this page or 'CLOSE' this page)</td></tr></table><h2>
<script>
    setTimeout(function(){ window.location="membership.php"; }, 3000);
</script>