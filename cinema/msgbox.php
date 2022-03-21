<?php

if(isset($_SESSION['success']))
{?>
    <div >
        <button type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i ></i> Success!</h4>
        <?php echo $_SESSION['success'];?>
    </div>
<?php 

    unset($_SESSION['success']);
}
if(isset($_SESSION['error']))
{?>
    <div >
        <button type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i></i> Alert!</h4>
        <?php echo $_SESSION['error'];?>
    </div>
<?php
unset($_SESSION['error']);
}
?>




