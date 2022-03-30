<?php include('header.php');
	$qry2= mysqli_query($con, "SELECT * FROM movies WHERE movie_id = '".$_GET['id']."'");
	$movie = mysqli_fetch_array($qry2);
	?>
<head>
	<link href="css/about.css" rel="stylesheet"> 
</head>
		<div>
			<div class="about-body">
				<h3><?php echo $movie['movie_name'];?></h3>
				<img src="<?php echo $movie['image'];?>" alt=""/>
				<div>
					<a href="<?php echo $movie['video_url']; ?>">Watch Trailer</a>
					<table bgcolor="black">
						<tr bgcolor="#cecece"><th>Cast :<?php echo $movie['cast']; ?></th></tr>
						<tr bgcolor="#cecece"><th>Release Date : <?php echo date('d-M-Y',strtotime($movie['release_date'])); ?></th></tr>
						<tr bgcolor="#cecece"><th><?php echo $movie['desc']; ?></th></tr>
					</table>
					<?php $s = mysqli_query($con,"SELECT DISTINCT cinema_id FROM performances WHERE movie_id='".$movie['movie_id']."'");
					if (mysqli_num_rows($s))
					{?>
						<?php
						while ($shw = mysqli_fetch_array($s))
						{
							$t = mysqli_query($con,"SELECT * FROM cinemas WHERE id='".$shw['cinema_id']."'");
							$theatre = mysqli_fetch_array($t);
							?>
							<?php $tr=mysqli_query($con,"SELECT * FROM performances WHERE movie_id='".$movie['movie_id']."' and cinema_id='".$shw['cinema_id']."'");


							while($shh=mysqli_fetch_array($tr))
								{
									$ttm=mysqli_query($con,"SELECT  * FROM showing_time WHERE st_id='".$shh['pt_id']."'");
									$ttme=mysqli_fetch_array($ttm);
												
									?>
												
									<a href="check_login.php?show=<?php echo $shh['performance_id'];?>&movie=<?php echo $shh['movie_id'];?>&theatre=<?php echo $shw['cinema_id'];?>">BOOK NOW</a>
									<?php
								}
						?>
						<?php
						}
					?>
					<?php 
				}
				else
				{
					?>
					<h4>Currently there are no any shows available</h4>
					<p>Please check back later!</p>
					<?php
				}
				?>

				</div>

			</div>
		</div>
	</div>

	<?php include('movies.php');?>