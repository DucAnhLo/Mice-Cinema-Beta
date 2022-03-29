<?php
include('header.php');
?>

  <div>
    <section>
      <h1>
        Theater Details
      </h1>
      <ol>
        <li><a href="index.php"><i></i> Home</a></li>
        <li><a href="add_theater.php">Theaters</a></li>
        <li>Theater Details</li>
      </ol>
    </section>


      <div>
         <div>
              <h3>General Details</h3>
            </div>
        <div >
          <?php
            $th=mysqli_query($con,"select * from cinemas where id='".$_GET['id']."'");
            $theatre=mysqli_fetch_array($th);
          ?>
            <table>
                <tr>
                    <td>Theater Name</td>
                    <td><?php echo $theatre['name'];?></td>
                </tr>
                <tr>
                    <td>Theater Address</td>
                    <td><?php echo $theatre['address'];?></td>
                </tr>
                <tr>
                    <td>Place</td>
                    <td><?php echo $theatre['place'];?></td>
                </tr>
                <tr>
                    <td>State</td>
                    <td><?php echo $theatre['state'];?></td>
                </tr>
                <tr>
                    <td>Pin</td>
                    <td><?php echo $theatre['pin'];?></td>
                </tr>
            </table>
        </div> 
      </div>

  </div>
  <?php
include('footer.php');
?>
