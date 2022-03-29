<?php 
include('header.php');
?>


<div>
		<?php
		
		if(isset($_SESSION['member'])){
		?>
        <h2>You have joined as a MICE member</h2>
        <a href="cancel_member.php">Cancel member</a>

        <?php }
        else
        	{?><a href="member_payment.php">
        	<h2>Joined with us now</h2> <br>
        	<h2>Only 23.99 £ per month</h2>
        	</a> 
    	<?php }?>

</div>