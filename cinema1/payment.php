
<?php include('header.php');
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}?>
 
 <div  style=" display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;">
			<h3 style=" font-size: 2rem; margin-top:5rem;">Payment</h3>
			<form style="background-color: white;
                        border-radius: 9px;
                        margin: 0 20rem;
                        width: 20%;
                        box-shadow: 0 15px 80px rgba(0, 0, 0, 0.25);
                        padding: 2rem 3rem; display:flex; flex-direction:column" action="process_member_payment.php" method="post" id="form1">
			     
                    <label >Name on Card</label>
                    <input sytle="height: 20px;
                                width: 100%;
                                flex: 1;
                                align-items: left;
                                margin-top: 10px;" type="text" name="name">
                
                
                    <label >Card Number</label>
                    <input sytle="height: 20px;
                                width: 100%;
                                flex: 1;
                                align-items: left;
                                margin-top: 10px;" type="text" name="number" required title="Enter 16 digit card number">
  
                     
                
                    <label >Expiration date</label>
                    <input sytle="height: 20px;
                                width: 100%;
                                flex: 1;
                                align-items: left;
                                margin-top: 10px;" type="date" name="date">
               
                
                    <label >CVV</label>
                    <input sytle="height: 20px;
                                width: 100%;
                                flex: 1;
                                align-items: left;
                                margin-top: 10px;" type="text" name="cvv">
            
                    <button style=" padding: 0 1rem;
                            background-color: #fed350;
                            border-radius: 9px;
                            color: #000;
                            width: 100px;
                            height: 40px;
                            border: none;
                            margin-top: 2rem;" type="submit">Make Payment</button>
               
            </form>



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