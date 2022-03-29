<?php
include('header.php')
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="css/index.css" rel="stylesheet"> 
	<title>MICE CINEMA</title>
</head>
<body>

<main>
	<h2>Event for only members</h2>
	<div class="main-section">
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
				<a href="about.php?id=<?php echo $m['movie_id'];?>"><h1><?php echo $m['movie_name'];?></h1></a>
				<h3>Release Date: <?php echo $m['release_date'];?></h3>
				<h3>Cast: <?php echo $m['cast'];?></h3>
				<h3>Description: <?php echo $m['desc'];?></h3>
			</div>
				
		<?php 
	}

	

	?>

		
	</div>
	<h2>Upcoming Movies</h2>
	<div class="main-section">


		<?php
		$qry3 = mysqli_query($con,"SELECT * FROM news LIMIT 10");
		while ($n = mysqli_fetch_array($qry3))
		{
			?>
			<section>
				<div class="movie-info">
					<img src="<?php echo $n['attachment'] ;?>">
					<h3><strong><?php echo $n['name'];?></strong></h3>
					<h3><strong>Cast :<?php echo $n['cast'];?></strong></h3>
					<h3>Release date: <?php echo $n['news_date'];?></h3>
					<h3><?php echo $n['description'];?></h3>
				</div>
			</section>
			<?php
		}
		 ?>
	</div>
	<div class="movie-in-cinema">
		 	<?php include('movies.php');?>
	</div>
</main>	


</body>
</html>