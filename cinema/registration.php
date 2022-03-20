<?php
include('header.php');
if ($_SERVER['REQUEST_METHOD']=="POST")
{
	//something posted
	$email = $_POST['email'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$password = $_POST['password_1'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	if (!empty($email) && !empty($phone) && !empty($password)&&!is_numeric(email))
	{
		//save to database
		$id = random_num(11);
		$query_1 = "INSERT INTO tbl_registration(user_id,name,email,phone,age,gender) VALUES(NULL,'$name','$email','$phone','$age','$gender')";
		mysqli_query($con,$query_1);
		$query_2 = "INSERT INTO tbl_login(id,user_id,username,password,user_type) VALUES(NULL,'$id','$email','$password','2')";
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
	<title>Signup</title>
</head>
<body>
	<h1>Signup</h1>
		<form action="registration.php" method="post">
			<div>
				<label for="email">Email :</label>
				<input type="email" name="email" required>
			</div>
			<div>
				<label for="name">Name :</label>
				<input type="name" name="name" required>
			</div>
			<div>
				<label for="phone">Phone Number :</label>
				<input type="phone" name="phone" required>
			</div>
			<div>
				<select name='gender'>
					<option value>Select Gender</option>
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>
			<div>
				<label for="age">Age :</label>
				<input type="age" name="age" required>
			</div>
			<div>
				<label for="password_1">Password :</label>
				<input type="password" name="password_1" required>
			</div>
			<div>
				<label for="password_2">Confirm password :</label>
				<input type="password" name="password_2" required>
			</div>
			<div>
				<button type="submit">Submit :</button>
				<p>Already have an account <a href="login.php">Login</a></p>
			</div>
			

		</form>
</body>
</html>