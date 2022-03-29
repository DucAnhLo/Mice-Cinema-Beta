<?php
include('header.php');
?>
  <div>
    <section>
      <h1>
        Movies List
      </h1>
      <ol>
        <li><a href="index"><i></i> Home</a></li>
        <li>Movies List</li>
      </ol>
    </section>

    <section>

      <!-- Default box --> 
      <div>
        <div>
            <div>
            <!-- /.box-header -->
            <div>
              <?php include('../msgbox.php');?>
              <ul>
                 <?php 
                        $qry7=mysqli_query($con,"select * from movies");
                        if(mysqli_num_rows($qry7))
                        {
                        while($c=mysqli_fetch_array($qry7))
                        {
                        ?>
                <li>
                      <span>
                        <i></i>
                        
                      </span>
                  <span><?php echo $c['movie_name'];?></span>
                  <div>


                  </div>
                </li>
                  <?php
                       }}
                     ?>  
            </div>
          </div>
        </div> 
      </div>
    </section>
  </div>
  <?php
include('footer.php');
?>