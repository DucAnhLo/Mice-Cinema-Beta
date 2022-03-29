<?php
include('header.php');
?>


<head>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="../css/addMovie.css" rel="stylesheet">
</head>

  <main class="add-movie">
    <section>
      <h1>
        Add Event
      </h1>
      <ul>
        <li>Add a movie for event</li>
      </ul>
    </section>

    <section>
      
      <div>
        <div>
          <?php include('../msgbox.php');
                include('../connection.php')
          ?>
          <form action="process_add_movie_event.php" method="post" >
            <div>
              <label >Select Movie</label>
              <select name="movie">
                <option value>Select Movie</option>
                <?php
                  $mv=mysqli_query($con,"select * from movies");
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
              <button type="submit">Add movie</button>
            </div>
          </form>
        </div> 
      </div>

    </section>
  </main>