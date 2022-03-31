<?php
include('header.php')
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="css/index1.css" rel="stylesheet">
	<title>MICE CINEMA</title>
</head>
<body>
<main>
	<h2>Event for only members</h2>
	<div class="events">
		<?php 
	$today = date("Y-m-d");
	$qry2 = mysqli_query($con,"SELECT * FROM movies WHERE event_id != '0' ORDER BY rand() limit 10");
	
	while ($m=mysqli_fetch_array($qry2))
	{
		?>
		
				<?php 
				?>
				<div class="movie-info">
						<a  href="about.php?id=<?php echo $m['movie_id'];?>"><img src="<?php echo $m['image'];?>"></a>
						<div class="movie-detail">
							<a class="movie-name" href="about.php?id=<?php echo $m['movie_id'];?>"><h1><?php echo $m['movie_name'];?></h1></a>
							<table bgcolor="black">
								<tr bgcolor ="lightgrey"><th>Release Date: <?php echo $m['release_date'];?></th></tr>
								<tr bgcolor ="lightgrey"><th>Cast: <?php echo $m['cast'];?></th></tr>
								<tr bgcolor ="lightgrey"><th>Description: <?php echo $m['desc'];?></th></tr>
							</table>
							<button class ="book-now"><a href="about.php?id=<?php echo $m['movie_id'];?>">Book Now</a></button>
						</div>
				</div>
				
		<?php 
	}

	

	?>

		
	</div>
	<h2>Upcoming Movies</h2>
	<div class="upcoming">


		<?php
		$qry3 = mysqli_query($con,"SELECT * FROM news LIMIT 10");
		while ($n = mysqli_fetch_array($qry3))
		{
			?>
			<section class="movie-info">
					<img src="<?php echo $n['attachment'] ;?>">
					<div class="movie-detail">
					<a class="movie-name"><h1><?php echo $n['name'];?></h1></a>
					<table bgcolor="black">
						<tr bgcolor ="lightgrey"><th>Release Date: <?php echo $n['news_date'];?></th></tr>
						<tr bgcolor ="lightgrey"><th>Cast: <?php echo $n['cast'];?></th></tr>
						<tr bgcolor ="lightgrey"><th>Description: <?php echo $n['description'];?></th></tr>
					</table>
					</div>
			</section>
			<?php
		}
		 ?>
	</div>
	<div>
		<?php include('movies.php');?>
	</div> 
</main>	


</body>
</html>



