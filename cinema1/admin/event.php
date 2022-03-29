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
      
    </section>

    <section>
      
      <div>
        <div>
          <?php include('../msgbox.php');
                include('../connection.php')
          ?>
          <form action="process_add_event.php" method="post" >
            <div>
              <label >Event Name</label>
              <input type="text" name="name"/>
            </div>
            <div>
              <label>Start Date</label>
              <input type="date" name="start"/>
            </div>
            <div>
              <label>End date</label>
              <input type="date" name="end" />
            </div>
            <div>
              <button type="submit">Add Event</button>
            </div>
          </form>
        </div> 
      </div>

    </section>
  </main>