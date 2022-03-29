<?php
include('header.php');
?>

    
<head>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="/cinema/css/addNewMovieAdmin.css" rel="stylesheet">
</head>
<body>
  <section class="main-section">
        <h1>
          Add Upcoming Movie News
        </h1>
        <ol>
          <li><a href="index.php"><i></i> Home</a></li>
          <li >Add Movies News</li>
        </ol> 
          <div>
              <form action="process_add_new_movies.php" method="post" id="form1">
                
                  <label >Movie name:</label>
                  <input type="text" name="name" placeholder="Enter movie name"/>


                  <label>Cast:</label>
                  <input type="text" name="cast" placeholder="Enter movie's cast"/> 
                

                  <label>Release Date:</label>
                  <input type="date" name="date" /> 
               

                  <label>Description:</label>
                  <input type="text" name="description" placeholder="Enter movie description"/>
                
                
                  <label>Images:</label>
                  <input type="file"  name="attachment" placeholder="Images">
                
                  <button class="btn btn-success">Add News</button>
              </form>
          </div> 
  </section>
      
     
     


</body>
    

  <?php
include('footer.php');
?>
