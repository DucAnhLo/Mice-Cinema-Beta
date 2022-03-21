<?php
include('header.php');
?>
  <div>
    <section>
      <h1>
        Add Show
      </h1>
      <ol>
        <li><a href="index.php"><i></i> Home</a></li>
        <li >Add Show</li>
      </ol>
    </section>


    <section>

      <div>
        <div>
          <?php include('../msgbox.php');?>
          <form action="process_add_1show.php" method="post">
            <div>
              <label >Select Movie</label>
              <select name="movie">
                <option value>Select Movie</option>
                <?php
                  $mv=mysqli_query($con,"select * from movies where status='0'");
                  while($movie=mysqli_fetch_array($mv))
                  {
                    ?>
                    <option value="<?php echo $movie['movie_id'];?>"><?php echo $movie['movie_name']; ?></option>
                    <?php
                  }
                ?>
              </select>
            </div>
            <div>
              <label>Select Screen</label>
              <select name="screen" id="screen">
                <option value>Select Screen</option>
                <?php
                  $sc=mysqli_query($con,"select * from screens where t_id='".$_SESSION['theatre']."'");
                  while($screen=mysqli_fetch_array($sc))
                  {
                    ?>
                    <option value="<?php echo $screen['screen_id']; ?>"><?php echo $screen['screen_name']; ?></option>
                    <?php
                  }
                ?>
              </select>
            </div>
            <div>
              <label>Select Show Times</label>
              <select name="stime[]" multiple>
                <option value="0">Select Show Times</option>
              </select>
              
            </div>
            <div>
              <label>Start Date</label>
              <input type="date" name="sdate" />
            </div>
            <div>
              <button>Add Show</button>
            </div>
          </form>
        </div> 
      </div>

    </section>
  </div>
  <?php
include('footer.php');
?>