<?php include('header.php');
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
	$qry2=mysqli_query($con,"select * from movies where movie_id='".$_SESSION['movie']."'");
	$movie=mysqli_fetch_array($qry2);
	?>
<div >
	<div>
		<div>
				<div>
					<div>	
						<h3><?php echo $movie['movie_name']; ?></h3>	
							<div>	
								<div>
									<img src="<?php echo $movie['image']; ?>" alt=""/>
								</div>
								<div>
									<p style="font-size:15px"><b>Cast : </b><?php echo $movie['cast']; ?></p>
									<p style="font-size:15px"><b>Release Date : </b><?php echo date('d-M-Y',strtotime($movie['release_date'])); ?></p>
									<p style="font-size:15px"><?php echo $movie['desc']; ?></p>
									<a href="<?php echo $movie['video_url']; ?>">Watch Trailer</a>
								</div>
								<div></div>
							</div>
							<table>
							<?php
								$s=mysqli_query($con,"select * from performances where performance_id='".$_SESSION['show']."'");
								$shw=mysqli_fetch_array($s);
								
									$t=mysqli_query($con,"select * from cinemas where id='".$shw['cinema_id']."'");
									$theatre=mysqli_fetch_array($t);
									?>
									<tr>
										<td>
											Theatre
										</td>
										<td>
											<?php echo $theatre['name'].", ".$theatre['location'];?>
										</td>
										</tr>
										<tr>
											<td>
												Screen
											</td>
										<td>
											<?php 
												$ttm=mysqli_query($con,"select  * from showing_time where st_id='".$shw['pt_id']."'");
												
												$ttme=mysqli_fetch_array($ttm);
												
												$sn=mysqli_query($con,"select  * from screens where screen_id='".$ttme['screen_id']."'");
												
												$screen=mysqli_fetch_array($sn);
												echo $screen['screen_name'];
							
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
								$date=$_GET['date'];
							}
							else
							{
								if($shw['start_date']>date('Y-m-d'))
								{
									$date=date('Y-m-d',strtotime($shw['start_date'] . "-1 days"));
								}
								else
								{
									$date=date('Y-m-d');
								}
								$_SESSION['dd']=$date;
							}
							?>
							<div style="padding-bottom:20px">
								<?php if($date>$_SESSION['dd']){?><a href="booking.php?date=<?php echo date('Y-m-d',strtotime($date . "-1 days"));?>"><button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i></button></a> <?php } ?><span style="cursor:default" class="btn btn-default"><?php echo date('d-M-Y',strtotime($date));?></span>
								<?php if($date!=date('Y-m-d',strtotime($_SESSION['dd'] . "+4 days"))){?>
								<a href="booking.php?date=<?php echo date('Y-m-d',strtotime($date . "+1 days"));?>"><button class="btn btn-default"><i class="glyphicon glyphicon-chevron-right"></i></button></a>
								<?php }
								$av=mysqli_query($con,"select sum(seat_no) from bookings where performance_id='".$_SESSION['show']."' and ticket_date='$date'");
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
											<form  action="process.php" method="post">
												<input type="hidden" name="screen" value="<?php echo $screen['screen_id'];?>"/>
												<input type="number" required tile="Number of Seats" max="<?php echo $screen['seats']-$avl[0];?>" min="0" name="seats" class="form-control" value="1" style="text-align:center" id="seats"/>
												<input type="hidden" name="time" value="<?php echo date('h:i A',strtotime($ttme['start_time']));?>"/>
												<input type="hidden" name="date" value="<?php echo $date;?>"/>
										</td>
									</tr>
									<tr>
										<td colspan="2"><?php if($avl[0]==$screen['seats']){?><button type="button" class="btn btn-danger" style="width:100%">No available seat</button><?php } else { ?>
										<button type="submit" style="width:100%">Book Now</button>
										<?php } ?>
										</form></td>
									</tr>
						<table>
							<tr>
								<td></td>
							</tr>
						</table>
					</div>			
				<?php include('movies.php');?>
			</div>
				<div class="clear"></div>		
			</div>
	</div>
</div>
