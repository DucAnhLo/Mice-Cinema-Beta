<?php include('header.php');
	$qry2= mysqli_query($con, "SELECT * FROM tbl_movie WHERE movie_id = '".$_GET['id']."'");
	$movie = mysqli_fetch_array($qry2);
	?>

<div>
	<div>
		<div>
			<div>
				<h3><?php echo $movie['movie_name'];?></h3>
				<div>
					<div>
						<img src="<?php echo $movie['image'];?>" alt=""/>
					</div>
					<div>
					<p  style="font-size:15px"><b>Cast : </b><?php echo $movie['cast']; ?></p>
					<p  style="font-size:15px"><b>Release Date : </b><?php echo date('d-M-Y',strtotime($movie['release_date'])); ?></p>
					<p style="font-size:15px"><?php echo $movie['desc']; ?></p>
					<a href="<?php echo $movie['video_url']; ?>">Watch Trailer</a>
						
					</div>
					<?php $s = mysqli_query($con,"SELECT DISTINCT theatre_id FROM tbl_shows WHERE movie_id='".$movie['movie_id']."'");
					if (mysqli_num_rows($s))
					{?>
						<?php
						while ($shw = mysqli_fetch_array($s))
						{
							$t = mysqli_query($con,"SELECT * FROM tbl_theatre WHERE id='".$shw['theatre_id']."'");
							$theatre = mysqli_fetch_array($t);
							?>
							<?php $tr=mysqli_query($con,"SELECT * FROM tbl_shows WHERE movie_id='".$movie['movie_id']."' and theatre_id='".$shw['theatre_id']."'");


							while($shh=mysqli_fetch_array($tr))
								{
									$ttm=mysqli_query($con,"SELECT  * FROM tbl_show_time WHERE st_id='".$shh['st_id']."'");
									$ttme=mysqli_fetch_array($ttm);
												
									?>
												
									<a href="check_login.php?show=<?php echo $shh['s_id'];?>&movie=<?php echo $shh['movie_id'];?>&theatre=<?php echo $shw['theatre_id'];?>"><button >BOOK NOW</button></a>
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
					<h3>Currently there are no any shows available</h3>
					<p>Please check back later!</p>
					<?php
				}
				?>

				</div>

				<?php include('movies.php');?>
			</div>
		</div>
	</div>
</div>