<?php 
include('header.php');

if ($_SERVER['REQUEST_METHOD']=="POST")
{
	//something posted
	session_start();
	$email = $_POST['username'];
	$password = $_POST['password'];
	if (!empty($email)&& !empty($password) &&!is_numeric($email))
	{
		//read from database
		$query = "SELECT * FROM tbl_login WHERE username = '$email' limit 1";
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
	<title>LOGIN</title>
</head>
<body>
	<h1>LOGIN</h1>
	<div>
		<form action="login.php" method="post">
			<div>
				<label for="username">Username :</label>
				<input type="username" name="username" required>
			</div>
			<div>
				<label for="password">Password :</label>
				<input type="password" name="password" required>
			</div>
			<div>
				<button type="submit">Submit :</button>
				<p>Create an account <a href="registration.php">Signup</a></p>
			</div>
		</form>
	</div>

</body>
</html>