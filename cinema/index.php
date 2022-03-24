<?php
include('header.php')
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="/cinema/css/index.css" rel="stylesheet"> 
	<title>MICE CINEMA</title>
</head>
<body>
<h2>Upcoming Movies</h2>
<main>
	<div class="main-section">


		<?php
		$qry3 = mysqli_query($con,"SELECT * FROM news LIMIT 5");
		while ($n = mysqli_fetch_array($qry3))
		{
			?>
			<section>
				<div class="movie-info">
					<img src="admin/<?php echo $n['attachment'] ;?>">
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