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
        Cinemas List
      </h1>
    </section>

    <section >

      <div >
        <div >
            <div >
            <div >
              <?php include('../msgbox.php');?>
              <table>
                <tr>
                  <th class="col-md-1">Cinema Name</th>
                  <th class="col-md-3">Address</th>
                  <th class="col-md-4">Total Income</th>
                  <th class="col-md-4">Manager</th>
                </tr>
                <?php 
          $qry8=mysqli_query($con,"select * from cinemas");
          while($c=mysqli_fetch_array($qry8))
          {
           $qry9=mysqli_query($con,"select sum(amount) from bookings where cinema_id='".$c['id']."'");
           $qry10=  mysqli_fetch_array($qry9)
          ?>
                <tr>
                  <td><?php echo $c['name'];?></td>
                  <td><span><?php echo $c['address'] ?>; <?php echo $c['location'] ?>;</span></td>
                  <td><span><?php echo $qry10[0]?>;</span></td>
                  <td><?php echo $c['manager'];?></td>
                  <td><button onclick="del(<?php echo $c['id'];?>)"></button></td>
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