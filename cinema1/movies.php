<head>
	<link href="css/movies1.css" rel="stylesheet">
</head>
<main class="main-body">
	<h2>Films in Cinema</h2>
	<section class="movie-slide">
		
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
			
	</section>
	<!-- <button class="backward-btn"><img src="images/f-icon.png" alt=""></button>
	<button class="forward-btn"><img src="images/f-icon.png" alt=""></button> -->
</main>

<script>
    <?php require_once("js/movies.js");?>
</script>