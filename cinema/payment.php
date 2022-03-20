
<?php include('header.php');
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}?>
 
</div>
<div >
	<div >
		<div >
			<h3>Payment</h3>
			<form action="process_payment.php" method="post" id="form1">
			<div style="margin-bottom:50px">
			<div >
   <label >Name on Card</label>
    <input type="text" name="name">
</div>
<div >
   <label >Card Number</label>
    <input type="text" name="number" required title="Enter 16 digit card number">
  
</div>      
<div >
   <label >Expiration date</label>
    <input type="date" name="date">
</div>
<div >
   <label >CVV</label>
    <input type="text" name="cvv">
</div>
<div >
    <button >Make Payment</button>
    </form>
</div>
</div>
			</div>
				
		
	</div>
</div>
<?php
    session_start();
    extract($_POST);
    include('config.php');
    $_SESSION['screen']=$screen;
    $_SESSION['seats']=$seats;
    $_SESSION['amount']=$amount;
    $_SESSION['date']=$date;
    header('location:process_payment.php');
?>
<script>
        $(document).ready(function() {
            $('#form1').bootstrapValidator({
            fields: { 
            name: {
            verbose: false,
                validators: {notEmpty: {
                        message: 'The Name is required and can\'t be empty'
                    },regexp: {
                        regexp: /^[a-zA-Z ]+$/,
                        message: 'The Name can only consist of alphabets'
                    } } },
            number: {
            verbose: false,
                validators: {notEmpty: {
                        message: 'The Card Number is required and can\'t be empty'
                    },stringLength: {
                    min: 16,
                    max: 16,
                    message: 'The Card Number must 16 characters long'
                },regexp: {
                        regexp: /^[0-9 ]+$/,
                        message: 'Enter a valid Card Number'
                    } } },
            date: {
            verbose: false,
                validators: {notEmpty: {
                        message: 'The Expire Date is required and can\'t be empty'
                    } } },
            cvv: {
            verbose: false,
                validators: {notEmpty: {
                        message: 'The cvv is required and can\'t be empty'
                    },stringLength: {
                    min: 3,
                    max: 3,
                    message: 'The cvv must 3 characters long'
                },regexp: {
                        regexp: /^[0-9 ]+$/,
                        message: 'Enter a valid cvv'
                    } } }}
            });
            });

</script>