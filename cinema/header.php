<?php 
include('connection.php');
session_start();
date_default_timezone_get("Europe/London");
?>

<!DOCTYPE html>
<html>
<style>
	body {
		background-color: #cecece;
		font-family: 'DM Sans', sans-serif;
	}
	.navigation {
		display: flex;
		justify-content: space-evenly;
		align-items: center;
		min-height: 5vh;
		background-color: #000;
	}
	.nav-links {
		list-style: none;
		border-bottom:none;
	}

	.nav-links a {
		text-decoration: none;
		color: #fff;
		font-size: 20px;

	}

	.nav-links .nav-links-sub {
		padding: 0 1rem;
		background-color: #fed350;
		border-radius: 4px;
		color: #000;
	}

	.nav-links .nav-links-sub:hover {
		background-color: #fff;
	}
	



</style>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
	<title>MICE CINEMA</title>
	<!-- link css and js here -->
</head>
<body>
	<div>
		<ul class="navigation">
			<li class = "nav-links"><a href="index.php">Home</a></li>
			<li class = "nav-links"><a href="movies_page.php">Movies</a></li>
			 <li class = "nav-links"><?php if(isset($_SESSION['user'])){
			  		   $us=mysqli_query($con,"select * from tbl_registration where user_id='".$_SESSION['user']."'");
        $user=mysqli_fetch_array($us);?><a class="nav-links-sub" href="profile.php"><?php echo $user['name'];?></a><a class="nav-links-sub" href="logout.php">Logout</a><?php }else{?><a class="nav-links-sub" href="login.php">Login</a> <a class="nav-links-sub" href="registration.php">Register</a><?php }?></li>
		</ul>
	</div>

	
</body>
</html>