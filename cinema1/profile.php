<?php include('header.php');
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}

?>
<head>
	<link href="css/profile.css" rel="stylesheet"> 
</head>
		<div>
				<div>
					<div class="profile-body">	
						<h3 style="color:black;" class="text-center">Booking History</h3>
						<?php include('msgbox.php');?>
						<?php
				$bk=mysqli_query($con,"select * from bookings where user_id='".$_SESSION['user']."'");
				if(mysqli_num_rows($bk))
				{
					?>
					<table bgcolor="black">
						<thead bgcolor="#cecece">
						<th>Booking Id</th>
						<th>Movie</th>
						<th>Theatre</th>
						<th>Screen</th>
						<th>Show</th>
						<th>Seats</th>
						<th>Amount</th>
						<th></th>
						</thead>
						<tbody bgcolor="#cecece">
						<?php
						while($bkg=mysqli_fetch_array($bk))
						{
							$m=mysqli_query($con,"select * from movies where movie_id=(select movie_id from performances where performance_id='".$bkg['performance_id']."')");
							$mov=mysqli_fetch_array($m);
							$s=mysqli_query($con,"select * from screens where screen_id='".$bkg['screen_id']."'");
							$srn=mysqli_fetch_array($s);
							$tt=mysqli_query($con,"select * from cinemas where id='".$bkg['cinema_id']."'");
							$thr=mysqli_fetch_array($tt);
							$st=mysqli_query($con,"select * from showing_time where st_id=(select st_id from performances where performance_id='".$bkg['performance_id']."')");
							$stm=mysqli_fetch_array($st);
							?>
							<tr>
								<td>
									<?php echo $bkg['ticket_id'];?>
								</td>
								<td>
									<?php echo $mov['movie_name'];?>
								</td>
								<td>
									<?php echo $thr['name'];?>
								</td>
								<td>
									<?php echo $srn['screen_name'];?>
								</td>
								<td>
									<?php echo date('h:i A',strtotime($stm['start_time']));?>
								</td>
								<td>
									<?php echo $bkg['seat_no'];?>
								</td>
								<td>
									Rs. <?php echo $bkg['amount'];?>
								</td>
								<td>
									<?php  if($bkg['ticket_date']<date('Y-m-d'))
									{
										?>
										<?php
									}
									else
									{?>
									<a href="cancel.php?id=<?php echo $bkg['book_id'];?>" style="text-decoration:none; color:red;">Cancel</a>
									<?php
									}
									?>
								</td>
							</tr>
							<?php
						}
						?></tbody>
					</table>
					<?php
				}
				else
				{
					?>
					<h3 style="color:red;" class="text-center">No Previous Bookings Found!</h3>
					<p>Once you start booking movie tickets with this account, you'll be able to see all the booking history.</p>
					<?php
				}
				?>
					</div>			
				<?php include('movies.php');?>
				
			</div>
				<div class="clear"></div>		
			</div>

