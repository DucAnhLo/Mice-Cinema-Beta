
<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
extract($_POST);
?><!doctype html><html><head>


<title>Payment</title>



</head>


<body>

<div>

  <div ><h2>BANK</h2></div>
  
  <hr >
  <dl >
  	<dt>Merchant</dt> 				<dd>Shop Street</dd>
    <dt>Transaction Amount</dt> 	<dd>INR <?php echo  $_SESSION['amount'];?></dd>
    <dt>Debit Card</dt> 		<dd><?php echo  $number;?></%></dd>
  </dl>
  <hr>
  
  
<form name="form1" id="form1" method="post" action="member_join.php">
<fieldset >
<div >
<h6 >Authenticate Payment</h6>
<p >OTP sent to your mobile number ending with <strong>1343</strong></p>


</div>

<div >
<div >
<label>
  Enter One Time Password (OTP)
  <input type="tel" name="otp"  value="" maxlength="6" autocomplete="off"/>
</label>
</div>
<div >
<label>&nbsp;</label><button onClick="ValidateForm()">Make Payment</button>
</div>
</div>
<div><a href="javascript:void(0)">Resend OTP</a></div>
<p>


<a href="complete_order.jsp">Go back</a> to merchant
</p>
</fieldset>


</form>
</div>
<script>
document.onmousedown = rightclickD; function rightclickD(e) { e = e||event; if (e.button == 2) { alert('Function Disabled...'); return false; } }
function ValidateForm() { 
	var regPin = RegExp("^[0-9]{4,6}$");
	if( document.form1.customerpin.value == "" || !document.form1.customerpin.value.match(regPin) ) {	 
		alert("Please enter a valid 6 digit One Time Password (OTP) receive on your registered Mobile Number."); document.form1.customerpin.focus(); return false;  
	}
    else
        {
            document.form1.submit();
        }

}
</script>

</body>
</html>