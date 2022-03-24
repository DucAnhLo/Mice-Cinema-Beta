<?php 
include('header.php');

if ($_SERVER['REQUEST_METHOD']=="POST")
{

	session_start();
	$email = $_POST['username'];
	$password = $_POST['password'];
	if (!empty($email)&& !empty($password) &&!is_numeric($email))
	{
		
		$query = "SELECT * FROM login WHERE username = '$email' limit 1";
		$result = mysqli_query($con,$query);
		if($result)
		{	
			if($result && mysqli_num_rows($result)>0)
			{
				$user_data = mysqli_fetch_assoc($result);
				if($user_data['password']===$password)
				{

					$_SESSION['user'] = $user_data['user_id'];
					header("Location: index.php");
					die;
				}
			}

		}
		echo "Wrong username or password";
	}else
	{
		echo "Please enter some valid information";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="/cinema/css/login.css" rel="stylesheet"> 
	<title>LOGIN</title>
</head>
<body>
	<h1>LOGIN</h1>
	<div>
		<form action="login.php" method="post">
			<div class="input">
				<label for="username">Username :</label>
				<input type="username" name="username" placeholder="Enter username" required>
			</div>
			<div class="input">
				<label for="password">Password :</label>
				<input type="password" name="password"  placeholder="Enter password" required>
			</div>
			<div class="input">
				<button type="submit">Submit </button>
				<p>Create an account <a href="registration.php">Sign up</a></p>
			</div>
		</form>
	</div>

</body>
</html>