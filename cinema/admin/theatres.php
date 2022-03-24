<?php
include('header.php');
?>

<head>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="/cinema/css/theaterListAdmin.css" rel="stylesheet">
</head>
  

    <section>
      <h1>
        Theatres List
      </h1>
      <ol>
        <li><a href="index.php"><i ></i> Home</a></li>
        <li><a href="add_theatre.php">Add Theatre</a></li>
        <li>Theatres Lists</li>
      </ol>
    </section>

    <section >

      <div >
        <div >
            <div >
            <div >
              <?php include('../msgbox.php');?>
              <ul >
                 <?php 
                        $qry7=mysqli_query($con,"select * from cinemas");
                        if(mysqli_num_rows($qry7))
                        {
                        while($c=mysqli_fetch_array($qry7))
                        {$id = $c['id'];
                        ?>
                <li>
                  
                  <span><a href="theatre_detail.php?id=<?php echo $id?>"><?php echo $c['name'];?></a></span>
                </li>
                  <?php
                       }}
                     ?>
                      
            </div>
          </div>
        </div> 

      </div>


    </section>


  <?php
include('footer.php');
?>