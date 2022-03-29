<head>
	<link href="css/movies.css" rel="stylesheet"> 
</head>
<h2>Films in Cinema</h2>
<div class="main-movie-section">
	<?php 
	$today = date("Y-m-d");
	$qry2 = mysqli_query($con,"SELECT * FROM movies WHERE event_id = '0' ORDER BY rand() limit 10");
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