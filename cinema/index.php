<?php
include('header.php')
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MICE CINEMA</title>
</head>
<body>
	<div>
		<h2>Upcoming Movies</h2>


		<?php
		$qry3 = mysqli_query($con,"SELECT * FROM news LIMIT 5");
		while ($n = mysqli_fetch_array($qry3))
		{
			?>
			<div>
				<div>
					<img src="admin/<?php echo $n['attachment'] ;?>">
				</div>
				<div>
					<div>
						<span><strong><?php echo $n['name'];?></strong><br>
						</span><strong>Cast :<?php echo $n['cast'];?></strong><br>
						<div>
							Release date: <?php echo $n['news_date'];?>
						</div>
						<span><?php echo $n['description'];?></span>
					</div>
				</div>
			</div>
			<?php
		}
		 ?>
		 <div>
		 	<?php include('movies.php');?>
		 </div>
	</div>



</body>
</html>