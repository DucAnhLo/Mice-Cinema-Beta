<?php
include('header.php');
include('functions.php');
if ($_SERVER['REQUEST_METHOD']=="POST")
{
	//something posted
	$email = $_POST['email'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$password = $_POST['password_1'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	if (!empty($email) && !empty($phone) && !empty($password)&&!is_numeric($email))
	{
		//save to database
		$id = random_num(11);
		$query_1 = "INSERT INTO registration (user_id,name,email,phone,age,gender) VALUES('$id','$name','$email','$phone','$age','$gender')";
		mysqli_query($con,$query_1);
		$query_2 = "INSERT INTO login (id,user_id,username,password,user_type) VALUES(NULL,'$id','$email','$password','2')";
		mysqli_query($con,$query_2);
		header("Location: login.php" );
		die;
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
	<link href="css/register.css" rel="stylesheet">
	<title>Signup</title>
</head>
<body>
	<h2>SIGN UP</h2>
		<form action="registration.php" method="post">
			<div class="input">
				<label for="email">Email :</label>
				<input type="email" name="email" placeholder="Enter email" required>
			</div>
			<div class="input">
				<label for="name">Name :</label>
				<input type="name" name="name" placeholder="Enter name"  required>
			</div>
			<div class="input">
				<label for="phone">Phone Number :</label>
				<input type="phone" name="phone" placeholder="Enter phone number" required>
			</div>
			<div class="input">
				<select name='gender'>
					<option value>Select Gender</option>
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>
			<div class="input">
				<label for="age">Age :</label>
				<input type="age" name="age" placeholder="Enter age"  required>
			</div>
			<div class="input">
				<label for="password_1">Password :</label>
				<input type="password" name="password_1" placeholder="Enter password"  required>
			</div>
			<div class="input">
				<label for="password_2">Confirm password :</label>
				<input type="password" name="password_2" placeholder="Confirm password"  required>
			</div>
			<div class="input">
				<button type="submit">Submit </button>
				<p>Already have an account ? <a href="login.php">Login</a></p>
			</div>
			

		</form>
</body>
</html>