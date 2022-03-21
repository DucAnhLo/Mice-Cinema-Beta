<?php include('header.php');?>

<div>
	<div>
		<div>
			<center><h1>Movies in cinema</h1></center>
			<?php
			$today = date("Y-m-d");
			$qry2 = mysqli_query($con,"SELECT * FROM movies ");
			while ($m=mysqli_fetch_array($qry2))
			{
				?>
				<div>
					<div>
						<?php 
						?>
						<a href="about.php?id=<?php echo $m['movie_id'];?>"><img src="<?php echo $m['image'];?>"></a>
					</div>
					<div>
						<div>
							<a href="about.php?id=<?php echo $m['movie_id'];?>">
								<?php echo $m['movie_name'];?>
							</a><br>
							<a target="blank" href="<?php echo $m['video_url'];?>">Watch trailer</a><br>
							<span>Release Date: <?php echo $m['release_date'];?></span><br>
							Cast: <span><?php echo $m['cast'];?></span><br>
							Description: <span><?php echo $m['desc'];?></span><br>
						</div>
					</div>
				</div>
				<?php 
			}



	?>
		</div>
	</div>
</div>