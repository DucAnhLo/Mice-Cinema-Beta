<?php
include('header.php');
?>

    


  <div>
    <section>
      <h1>
        Add Upcoming Movie News
      </h1>
       
      <ol>
        <li><a href="index.php"><i></i> Home</a></li>
        <li >Add Movies News</li>
      </ol>
    </section>

    <section >

      <div>
        <div>
            <form action="process_add_new_movies.php" method="post" id="form1">
              <div>
                <label >Movie name</label>
                <input type="text" name="name" />

              </div>
              <div>
                 <label>Cast</label>
                <input type="text" name="cast" >
              </div>
              
              <div>
                <label>Release Date</label>
                <input type="date" name="date" />
              </div>
              
              <div>
                <label>Description</label>
                 <input type="text" name="description">
              </div>
              <div>
                  <label>Images</label>
              <input type="file"  name="attachment" placeholder="Images">
              </div>
              <div >
                <button class="btn btn-success">Add News</button>
              </div>
        </form>
        </div> 
      </div>
     

    </section>
 
  </div>
  <?php
include('footer.php');
?>
