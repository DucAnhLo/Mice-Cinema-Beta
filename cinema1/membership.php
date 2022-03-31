<?php 
include('header.php');
?>


<div style="display:flex; justify-content:center; align-item:center;">
		<?php
		
		if(isset($_SESSION['member'])){
		?>
        <h2 style="font-size: 2rem; margin-right: 5rem; margin-top: 5rem">You have joined as a MICE member</h2>
        <a style="margin-top: 5rem; text-decoration:none; padding: 0 1rem;
				background-color: lightcoral;
				border-radius: 9px;
				color: #000;
				width: 100px;
				height: 40px;
				border: none;" href="cancel_member.php">Cancel member</a>

        <?php }
        else
        	{?><a  style="text-decoration:none;" href="member_payment.php">
        	<h2 style="margin-top: 5rem; text-decoration:none; padding: 0 1rem;
				background-color: lightcoral;
				border-radius: 9px;
				color: #000;
				height: 40px;
				border: none;">Joined us now</h2> <br>
        	<h2 style="text-decoration:none; padding: 0 1rem;
				background-color: lightcoral;
				border-radius: 9px;
				color: #000;
				height: 40px;
				border: none;">Only £23.99 per month</h2>
        	</a> 
    	<?php }?>

</div>