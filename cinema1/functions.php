<?php 
include('connection.php');
function random_num($length)
{	
	$text = "";
	if ($length<5)
	{
		$length=5;
	}
	$len = rand(4,$length);
	for ($i=0; $i < $len ; $i++) 
	{ 
		
		$text .= rand(0,9);
	}

	$check_id = mysqli_query($con,"SELECT user_id FROM registration WHERE user_id='$text'");
	if(!$check_id)
	{
	return $text;
	}
	else{
		random_num($length);
	}
}




?>