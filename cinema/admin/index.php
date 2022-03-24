<?php
include('header.php');
?>

<head>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="/cinema/css/adminIndex.css" rel="stylesheet">
</head>
  <div>
    <section >
      <h1>
        Movies List
      </h1>
      <ol>
        <li><a href="index.php"><i ></i> Home</a></li>
        <li>Movies List</li>
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
                        $qry7=mysqli_query($con,"select * from movies");
                        if(mysqli_num_rows($qry7))
                        {
                        while($c=mysqli_fetch_array($qry7))
                        {
                        ?>
                <li>
                      <span >
                        <i ></i>
                        
                      </span>
                  
                  <span><?php echo $c['movie_name'];?></span>
                  <div>
                    
                    <button onclick="del(<?php echo $c['movie_id'];?>)"></button>
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
<script>
function del(m)
    {
        if (confirm("Are you want to delete this movie") == true) 
        {
            window.location="process_delete_movie.php?mid="+m;
        } 
    }
</script>