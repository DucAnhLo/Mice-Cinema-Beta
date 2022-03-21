<?php
include('header.php');
?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Theatre Assistance
      </h1>
      <ol class="breadcrumb">
        <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Home</li>
      </ol>
    </section>

    <!-- Main content -->
    <div>
         <div>
              <h3>General Details</h3>
            </div>
        <div >
          <?php
            $th=mysqli_query($con,"select * from cinemas where id='".$_SESSION['theatre']."'");
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