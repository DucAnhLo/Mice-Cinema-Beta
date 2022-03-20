<?php include('header.php');
if (!isset($_SESSION['user']))
{
	header('location:login.php');
}
$qry2 = mysqli_query($con,"SELECT * FROM tbl_movie WHERE movie_id='".$_SESSION['movie']."'");
$movie = mysqli_fetch_array($qry2);
?>

<div>
	<div>
		<div>
			<h3><?php echo $movie['movie_name'];?></h3>
			<div>
				<img src="<?php echo $movie['image']; ?>" alt=""/>
			</div>
			<div>
				<p style="font-size: 15px"><b>Cast :</b><?php echo $movie['cast'];?></p>
				<p style="font-size: 15px"><b>Release Date: </b><?php echo date ('d-M-Y', strtotime($movie['release_date']));?></p>
				<p style="font-size: 15px"><?php echo $movie['desc'];?></p>
				<a href="<?php echo $movie['video_url'];?>" target="_blank">Watch trailer</a>
			</div>

		</div>
		<table>
			<?php
				$s = mysqli_query($con,"SELECT * FROM tbl_shows WHERE s_id='".$_SESSION['show']."'");
				$shw = mysqli_fetch_array($s);

					$t = mysqli_query($con,"SELECT * FROM tbl_theatre WHERE id='".$shw['theatre_id']."'");
					$theatre = mysqli_fetch_array($t);
					?>
					<tr>
						<td>
							Theatre
						</td>
						<td>
							<?php echo $theatre['name'].",".$theatre['place'];?>
						</td>

					</tr>
					<tr>
					<td>
						Screen
					</td>
					<td>
						<?php 
							$ttm = mysqli_query($con,"SELECT * FROM tbl_show_time WHERE st_id='".$shw['st_id']."'");
							$ttme = mysqli_fetch_array($ttm);
							$sn = mysqli_query($con, "SELECT * FROM tbl_screens WHERE screen_id='".$ttme['screen_id']."'");
							$screen = mysqli_fetch_array($sn);
							echo $screen ['screen_name'];
							?>
					</td>
					</tr>
					<tr>
						<td>
							Date
						</td>
						<td>
							<?php 
							if(isset($_GET['date']))
							{
								$date = $_GET['date'];
							}
							else {
								if ($shw['start_date']>date('Y-m-d'))
								{
									$date = date('Y-m-d', strtotime($shw['start_date']."-1 days"));
								}
								else
								{
									$date = date('Y-m-d');

								}
								$_SESSION['dd'] = $date;
							}
							?>
							<div style="padding-bottom:20px">
								<?php if($date>$_SESSION['dd']){?><a href="booking.php?date=<?php echo date('Y-m-d',strtotime($date . "-1 days"));?>"><button ><</button></a> <?php } ?><span ><?php echo date('d-M-Y',strtotime($date));?></span>
								<?php if($date!=date('Y-m-d',strtotime($_SESSION['dd'] . "+4 days"))){?>
								<a href="booking.php?date=<?php echo date('Y-m-d',strtotime($date . "+1 days"));?>"><button >></i></button></a>
								<?php }
								$av=mysqli_query($con,"select sum(no_seats) from tbl_bookings where show_id='".$_SESSION['show']."' and ticket_date='$date'");
								$avl=mysqli_fetch_array($av);
								?>
							</div>
						</td>
					</tr>
									<tr>
										<td>
											Show Time
										</td>
										<td>
											<?php echo date('h:i A',strtotime($ttme['start_time']))." ".$ttme['name'];?> Show
										</td>
									</tr>
									<tr>
										<td>
											Number of Seats
										</td>
										<td>
											<form  action="payment.php" method="post">
												<input type="hidden" name="screen" value="<?php echo $screen['screen_id'];?>"/>
											<input type="number" required tile="Number of Seats" max="<?php echo $screen['seats']-$avl[0];?>" min="0" name="seats" class="form-control" value="1" style="text-align:center" id="seats"/>
											<input type="hidden" name="amount" id="hm" value="<?php echo $screen['charge'];?>"/>
											<input type="hidden" name="date" value="<?php echo $date;?>"/>
										</td>
									</tr>
									<tr>
										<td>
											Amount
										</td>
										<td id="amount" style="font-weight:bold;font-size:18px">
											Rs <?php echo $screen['charge'];?>
										</td>
									</tr>
									<tr>
										<td ><?php if($avl[0]==$screen['seats']){?><button type="button" style="width:100%">House Full</button><?php } else { ?>
										<button  style="width:100%">Book Now</button>
										<?php } ?>
										</form></td>
									</tr>

		</table>
	</div>
</div>