<?php
include('header.php');
?>




  <div>
    <section>
      <h1>
        Add Movie
      </h1>
      <ol>
        <li><a href="index.php"><i></i> Home</a></li>
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
              <input type="text" name="name" />
            </div>
            <div>
              <label>Cast</label>
              <input type="text" name="cast"/>
            </div>
            <div>
              <label>Description</label>
              <textarea name="desc"></textarea>
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
              <input type="text" name="video"/>
            </div>
            <div>
              <button type="submit">Add Movie</button>
            </div>
          </form>
        </div> 
      </div>

    </section>
  </div>
  <?php
include('footer.php');
?>