<?php
include('header.php');
?>


<head>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="/cinema/css/addMovie.css" rel="stylesheet">
</head>

  <main class="add-movie">
    <section>
      <h1>
        Add Movie
      </h1>
      <ol>
        <li><a href="index.php"><i></i> Movie list</a></li>
        <li>Add Movie</li>
      </ol>
    </section>

    <section>
      
      <div>
        <div>
          <?php include('../msgbox.php');?>
          <form action="process_add_movies.php" method="post" >
            <div>
              <label>Movie Name</label>
              <input placeholder="Enter movie name" type="text" name="name" />
            </div>
            <div>
              <label>Cast</label>
              <input placeholder="Enter casts name" type="text" name="cast"/>
            </div>
            <div>
              <label>Description</label>
              <input placeholder="Enter movie description "name="desc"></input>
            </div>
            <div>
              <label>Release Date</label>
              <input type="date" name="rdate"/>
            </div>
            <div>
              <label>Image</label>
              <input type="file" name="image" />
            </div>
            <div>
              <label>Trailer Youtube Link</label>
              <input placeholder="Enter movie trailer" type="text" name="video"/>
            </div>
            <div>
              <button type="submit">Add Movie</button>
            </div>
          </form>
        </div> 
      </div>

    </section>
  </main>
  <?php
include('footer.php');
?>