<?php
include('header.php');
?>

<head>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="../css/adminIndex.css" rel="stylesheet">
</head>
  <div>
    <section >
      <h1>
        Staff List
      </h1>
      <h2><a href="add_staff.php">Add staff</a></h2>
    </section>

    <section >

      <div >
        <div >
            <div >
            <div >
              <?php include('../msgbox.php');?>
              <ul >
                   <table class="table table-condensed">
                <tr>
                  <th class="col-md-1">Employee Number</th>
                  <th class="col-md-3">Name</th>
                  <th class="col-md-4">Address</th>
                  <th class="col-md-4">Phone Number</th>
                </tr>
                <?php 
          $qry8=mysqli_query($con,"select * from staff");
          while($st=mysqli_fetch_array($qry8))
          {
          ?>
                <tr>
                  <td><?php echo $st['employee_no'];?></td>
                  <td><span><?php echo $st['name'];?></span></td>
                  <td><span><?php echo $st['address']?>;</span></td>
                  <td><?php echo $st['phone_no'];?></td>
                  <td><button onclick="del(<?php echo $st['employee_no'];?>)"></button> </td>
                </tr>
                  <?php
                  
          }
                  ?>
              </table>
                      
            </div> 
          </div>
        </div> 

      </div>

    </section>

  </div>
  <?php
include('footer.php');
?>
<script>
function del(m)
    {
        if (confirm("Are you want to delete this cinema") == true) 
        {
            window.location="process_delete_movie.php?mid="+m;
        } 
    }
</script>