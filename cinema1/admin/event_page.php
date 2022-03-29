<?php
include('header.php');
?>


<head>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="../css/addMovie.css" rel="stylesheet">
</head>

<div>
    <section >
      <h1>
        Event List
      </h1>
      <h3><a href="event.php">Add event</a></h3>
    </section>

    <section >

      <div >
        <div >
            <div >
           <div>
      <?php include('../msgbox.php');?>
              <table>
                <tr>
                  <th class="col-md-1">Name</th>
                  <th class="col-md-3">Start Date</th>
                  <th class="col-md-4">End Date</th>
                </tr>
                <?php 
          $qry8=mysqli_query($con,"select * from events");
          while($e=mysqli_fetch_array($qry8))
          {
          ?>
                <tr>
                  <td><?php echo $e['name'];?></td> 
                  <td><span><?php echo $e['start_date'] ;?></span></td>
                  <td><span><?php echo $e['end_date']?>;</span></td>
                  <td>
                  <a href="event_process.php?event=<?php echo $e['event_id'];?>"><button>Add Movies</button></a>

                    </td>
                 
                  <td><button onclick="del(<?php echo $e['event_id'];?>)"></button></td>
                  </tr>
                  <?php
            
          }
                  ?>
              </table>

    </div>
          </div>
        </div> 

      </div>

    </section>

  </div>
