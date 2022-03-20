<div>
	<h2>Films in Cinema</h2>
	<?php 
	$today = date("Y-m-d");
	$qry2 = mysqli_query($con,"SELECT * FROM tbl_movie WHERE status = '0' ORDER BY rand() limit 5");
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