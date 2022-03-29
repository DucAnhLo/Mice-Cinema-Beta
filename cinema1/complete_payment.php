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

$book_id="BKID".rand(1000000,9999999);
$query_1 = "INSERT INTO bookings (book_id,membership_no,ticket_id,cinema_id,user_id,performance_id,screen_id,seat_no,amount,ticket_date) VALUES(NUll,'4','$book_id','".$_SESSION['theatre']."','".$_SESSION['user']."','".$_SESSION['show']."','".$_SESSION['screen']."','".$_SESSION['seats']."','380','".$_SESSION['date']."')";
mysqli_query($con,$query_1);
$_SESSION['success']="Bookings Done!";}
else{
    echo "fail!!!!!";
}
?>
<body><table align='center'><tr><td><STRONG>Transaction is being processed,</STRONG></td></tr><tr><td><font color='blue'>Please Wait <i class="fa fa-spinner fa-pulse fa-fw"></i>
<span class="sr-only"></font></td></tr><tr><td>(Do not 'RELOAD' this page or 'CLOSE' this page)</td></tr></table><h2>
<script>
    setTimeout(function(){ window.location="profile.php"; }, 3000);
</script>